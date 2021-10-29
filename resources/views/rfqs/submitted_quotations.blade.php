@extends('layouts.master')

@section('content')
    @if (session('status'))

        {{ session('status') }}
@endif
@foreach ($details as $value)
@endforeach
<style type="text/css">
  #btnAccept, #btnDetails{
    display: inline-block;
    vertical-align: top;
}
</style>
<section id="configuration">
	<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Submitted Quotations For <b>{{$value->get_rfq->keywords}}</b></h4>
         
        </div>
    	  <div class="card-content">
          <div class="card-body">
            <table id="rfq_table" class="table table-striped table-bordered text-center">
              <thead>
                <tr>
                  <th>No</th>
   				        <th>Name</th>
                  <th>Company Name</th>
                  <th>Title</th>
                  <th>Quantity</th>
                  <th>Price Range</th>
                  <th>Datetime</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $i=1;
              ?>
              @foreach ($details as $data)
                <tr>
                  <td>{{$i}}</td>
                    @if($data->status == "Pending")
                      <td class="text-warning"><b>{{$data->get_user->name}}<b/></td>
                    @elseif($data->status == "Accepted")
                      <td class="text-info"><b>{{$data->get_user->name}}<b/></td>
                    @endif
                  <td>{{$data->get_user->company_name}}</td>
                  <td>{{$data->title}}</td>
                  <td>{{$data->quantity}} - {{$data->unit}}</td>
                  <td>{{$data->start_price}} - {{$data->end_price}}</td>
                  <td>{{$data->created_at->diffForHumans()}}</td>
                  <td>
                    <a class="btn btn-info" href="{{url('mills/quotations_detail', $data->id)}}">Details</a>
                  </td>
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