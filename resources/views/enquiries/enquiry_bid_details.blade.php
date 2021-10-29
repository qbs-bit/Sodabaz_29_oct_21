@extends('layouts.master')

@section('content')
    @if (session('status'))

        {{ session('status') }}
@endif
 @foreach ($title as $title)
 @endforeach
<section id="configuration">
	<div class="row">
	    <div class="col-12">
	      <div class="card">
	        <div class="card-header">
	          <h4 class="card-title">Enquiry: {{$title->getenquiry->product_name}}</h4>
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
	                  <th>Bidder Name</th>
	                  <th>Amount</th>
	                  <th>Status</th>
	                  <th>Bid At</th>
	                  <th>Actions</th>
	              </tr>
	              </thead>
	              <tbody>
	              <?php
	                $i=1;
	              ?>
	              @foreach ($details as $data)
	              
	                  <td>{{$i}}</td>
	                  <td>{{$data->getuser->name}}</td>
	                  <td>{{$data->amount}}</td>

	                   @if($data->status == 'Rejected')
	                    <td class="text-danger">{{$data->status}}</td>
	                   @elseif($data->status == 'Accepted')
	                     <td class="text-success">{{$data->status}}</td>
	                   @else
	                   	<td>{{$data->status}}</td>
	                   @endif  
	                  
	                  <td>{{$data->created_at->diffForHumans()}}</td>
	                  <td>
	                  @if($data->status == 'Pending')
	                  	<a class="btn btn-info" href="{{url('mills/accept',$data->id)}}" onclick="return confirm('Are you sure?')">
                         <i class="fa fa-check-circle"></i>
                          Accept
	                    </a>
	                    <a class="btn btn-danger" href="{{url('mills/reject',$data->id)}}" onclick="return confirm('Are you sure?')">
	                     <i class="fa fa-close"></i>
	                      Reject
	                     </a>

	                    @else

	                     <button class="btn btn-info" href="{{url('accept',$data->id)}}" onclick="return confirm('Are you sure?')" disabled>
                         <i class="fa fa-check-circle"></i>
                          Accept
	                    </button>
	                    <button class="btn btn-danger" href="{{url('reject',$data->id)}}" onclick="return confirm('Are you sure?')" disabled>
	                     <i class="fa fa-close"></i>
	                      Reject
	                     </button>

	                    @endif
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

@endsection