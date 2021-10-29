@extends('layouts.master')

@section('content')
    @if (session('status'))

        {{ session('status') }}
@endif
<section id="configuration">
	<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Accepted Quotations</h4>
          <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
         
         <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
            </ul>
          </div>
        </div>
    	 <div class="card-content collapse show">
          <div class="card-body card-dashboard">
            <table id="rfq_table" class="table table-striped table-bordered text-center">
              <thead>
                <tr>
                  <th>No</th>
                  <th>My Quotation's Title</th>
   				        <th>Their RFQ</th>
                  <th>Accepted By</th>
                  <th>Accepted At</th>
                  <th>Their File</th>
                  
              </tr>
              </thead>
              <tbody>
              <?php
                $i=1;
              ?>
              @foreach ($detail as $data)
                  <tr>
                  <td>{{$i}}</td>
                  <td>{{$data->title}}</td>
                  <td>{{$data->get_rfq->keywords}}</td>
                  <td class="text-info"><b>{{$data->get_acceptor->name}}</b></td>
                  <td>{{$data->accepted_at}}</td>
                  <td><a href="{{asset('/rfq_files/'.$data->upload)}}" download="{{$data->upload}}" class="btn btn-info">Download file!</a></td>
                  </tr>
                  <?php
                  $i++;
                  ?>
              @endforeach
          
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

      	$(function(){

      	$('#rfq_table').DataTable(
      	{	

      		//responsive:true
      		"scrollX":true
      	});



      	})
</script>
@endsection