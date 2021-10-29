@extends('layouts.master')

@section('content')
    @if (session('status'))

        {{ session('status') }}
@endif
<!-- Basic example section start -->
        <section id="basic-examples">
          <div class="row">
            <div class="col-12 mt-3 mb-1">
              <h4 class="text-uppercase"><b>Your RFQs</h4></b>
            </div>
          </div>
         
          <div class="row match-height">
             @foreach ($all_rfqs as $data)
            <div class="col-xl-3 col-md-6 col-sm-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <img class="card-img img-fluid mb-1" src="{{asset('/rfq_files/'.$data->image)}}"
                    alt="Card image cap">
                    <h4 class="card-title">
                      <center>
                        <b>{{$data->keywords}}</b>
                      </center>
                    </h4>
                   <div style="margin-top: -15px;" class="card-body">
                    <center>
                    @if($data->status=="Accepted")
                      <a style="color: green; margin-top: -25px;" class="card-link"><b>{{$data->status}}</b></a><br>
                      <br>
                      <a href="{{url('mills/submitted_quotations', $data->id)}}" class="btn btn-info btn-sm">View</a>
                    @elseif($data->status=="Pending")
                      <a style="color: orange;" class="card-link"><b>{{$data->status}}</b></a><br>
                      <br>
                      <button class="btn btn-info btn-sm" disabled>View</button>
                    @endif
                    </center>
                  </div>
                  </div>
                </div>
              </div>
            </div>
           @endforeach
          </div>
          <nav aria-label="page navigation example" class="d-flex justify-content-center">
            <span>
              {{$all_rfqs->links('layouts.pagination')}}
            </span>
          </nav>
        </section>
    <!-- // Basic example section end -->
    <!-- Basic example section start -->
        <section id="basic-examples">
          <div class="row">
            <div class="col-12 mt-3 mb-1">
              <h4 class="text-uppercase"><b>RFQs Accepted by Me</h4></b>
            </div>
          </div>
          <div class="row match-height">
             @foreach ($rfqs as $data)
            <div class="col-xl-3 col-md-6 col-sm-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <img class="card-img img-fluid mb-1" src="{{asset('/rfq_files/'.$data->image)}}"
                    alt="Card image cap">
                    <h4 class="card-title">
                      <center>
                        <b>{{$data->keywords}}</b>
                      </center>
                    </h4>
                   <div style="margin-top: -15px;" class="card-body">
                    <center>
                    <a href="{{asset('/rfq_files/'.$data->upload)}}" download="{{$data->upload}}" class="btn btn-info btn-sm" >Download file! </a>
                    </center>
                  </div>
                  </div>
                </div>
              </div>
            </div>
           @endforeach
          </div>
          <nav aria-label="page navigation example" class="d-flex justify-content-center">
            <span>
              {{$all_rfqs->links('layouts.pagination')}}
            </span>
          </nav>
        </section>
    <!-- // Basic example section end -->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript">

      	$(function(){

      	$('#rfq_table').DataTable(
      	{	

      		//responsive:true
      		"scrollX":false
      	});



      	})
      </script>
@endsection