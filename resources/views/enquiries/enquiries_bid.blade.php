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
	          <h4 class="card-title">My Bids</h4>
	          <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
	         
	         <div class="heading-elements">
	            <ul class="list-inline mb-0">
	              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
	            </ul>
	          </div>
	        </div>
	       <div class="card-content collapse show">
	          <div class="card-body card-dashboard">
	            <table id="rfq_table" class="table table-striped table-bordered zero-configuration">
	              <thead>
	                <tr>
	                  <th>No</th>
	                  <th>Enquiry Name</th>
	                  <th>Amount</th>
	                  <th>Status</th>
	                  <th>Bid Datetime</th>
	              </tr>
	              </thead>
	              <tbody>
	              <?php
	                $i=1;
	              ?>
	              @foreach ($mybiddings as $data)
	                <tr>
	                  <td>{{$i}}</td>
	                  <td style="color:black;"><b>{{$data->getenquiry->product_name}}<b/></td>
	                  <td>{{$data->amount}}</td>
	                  @if($data->status == 'Rejected')
	                    <td class="text-danger"><b>{{$data->status}}</b></td>
	                  @else
	                   	<td>{{$data->status}}</td>
	                  @endif
	                  <td>{{$data->created_at->diffForHumans()}}</td>
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
<section id="configuration">
	<div class="row">
	    <div class="col-12">
	      <div class="card">
	        <div class="card-header">
	          <h4 class="card-title">Bids on My Enquiries</h4>
	          <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
	         
	         <div class="heading-elements">
	            <ul class="list-inline mb-0">
	              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
	            </ul>
	          </div>
	        </div>
	        
	       <div class="card-content collapse show">
	          <div class="card-body card-dashboard">
	            <table id="rfq_table" class="table table-striped table-bordered zero-configuration">
	              <thead>
	                <tr>
	                  <th>No</th>
	                  <th>Enquiry Name</th>
	                  <th>Exp Price</th>
	                  <th>Status</th>
	                  <th>Action</th>
	              </tr>
	              </thead>
	              <tbody>
	              <?php
	                $i=1;
	              ?>
	              @foreach($biddings as $bid)
	               <tr>
	                <td>{{$i}}</td>
	                <td>{{$bid->product_name}}</td>
	                <td>{{$bid->expected_price}}</td>
	                <td>{{$bid->status}}</td>
	                <td><a href="{{url('mills/enquiry_bid_details', $bid->id)}}" class="btn btn-info">Bid Details!</a></td>
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

@endsection