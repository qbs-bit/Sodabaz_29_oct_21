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
          <h4 class="card-title">New RFQs Requests</h4>
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
   				        <th>Company Name</th>
                  <th>Title</th>
                  <th>Quantity</th>
                  <th>Price Range</th>
                  <th>Datetime</th>
                  <th>Status</th>
                  <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php
                $i=1;
              ?>
              @foreach ($all_new_rfqs as $data)
                  <tr>
                  <td>{{$i}}</td>
                  <td class="text-info"><b>{{$data->get_user->company_name}}<b/></td>
                  <td>{{$data->keywords}}</td>

                  <td>{{$data->quantity}} - {{$data->unit}}</td>
                  <td>{{$data->start_price}} - {{$data->end_price}}</td>
                  <td>{{$data->created_at->diffForHumans()}}</td>
                  @if($data->status == "Pending")
                  
                  <td class="text-warning"><b>{{$data->status}}</b></td>
                  
                  
                  @elseif($data->status == Accepted)
                <td class="text-success"><b>{{$data->status}}</b></td>
                  
                  @endif
                  <td><a class="btn btn-info" href="{{url('mills/rfq_detail', $data->id)}}" >Details</a></td>
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