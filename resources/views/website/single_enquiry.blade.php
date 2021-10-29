@extends('website/layouts/app')
@section('content')
@include('website.layouts.nav')
@foreach ($enquiry as $enquiry )
@endforeach

<!-- Checout Forms-->
    <section class="checkout">
      <div class="container">
        <div class="row">
        	<div class="col-lg-6 col-md-12">
            <div class="block-body order-summary">
              <h6 class="text-uppercase">{{$enquiry->product_name}}</h6>
              <p>{{$enquiry->description}}</p>
              <ul class="order-menu list-unstyled">
                <li class="d-flex justify-content-between">
                	<span>Category </span><strong>{{$enquiry->category->category}}</strong>
                </li>
                <li class="d-flex justify-content-between">
                	<span>Quantity</span><strong>{{$enquiry->quantity}}</strong>
                </li>
                <li class="d-flex justify-content-between">
                	<span>Ship To</span><strong>{{$enquiry->ship_to}}</strong>
                </li>
                <li class="d-flex justify-content-between">
                	<span>First Delivery</span><strong> {{ \Carbon\Carbon::parse($enquiry->first_delivery)->format('d/m/Y')}}</strong>
                </li>
                <li class="d-flex justify-content-between">
                	<span>Payment Term</span><strong>{{$enquiry->payment_term}}</strong>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-6 col-md-12">
            <ul role="tablist" class="nav nav-tabs flex-column flex-sm-row">
          <li class="nav-item">
			  <a data-toggle="tab" href="#addbid" role="tab" class="nav-link active">
				Add Bid
			  </a>
		  </li>
          <li class="nav-item">
          	<a data-toggle="tab" href="#previousbids" role="tab" class="nav-link">
          	   Previous Bids
          	</a>
          </li>
        </ul>
           <div class="tab-content">
  
              <div id="addbid" role="tabpanel" class="tab-pane active">
                <div class="cart">
                  <div class="cart-holder">
                    <h5>Expected Price: {{$enquiry->expected_price}}</h5><br>
                    <div class="basket-body">
                      <!-- Product-->
	                   <div id="address" class="active tab-block">
		                 <form method="post" action="{{url('mills/add_bid')}}">
                            @csrf
		                  <div class="row">
		                    <div class="form-group col-lg-9 col-md-6">
		                     	<input type="text" class="form-control" name="amount" placeholder="Place your bidding amount here">
                             	<input type="hidden" name="enquiry" value="{{$enquiry->id}}">
		                    </div>
		                    <div class="form-group col-lg-3 col-md-6">
		                    	@if(Auth::check())
		                    	  @if($enquiry->user_id != Auth::user()->id)
		                    	   @if($enquiry->status == 'active')
		                      	    <button type="submit" class="btn btn-info">
		                      	  	 Add
		                      	    </button>
		                      	   @endif
		                    	  @endif
		                    	@else
		                    		<button type="submit" class="btn btn-info">
		                      	  	 Add
		                      	    </button>
		                    	@endif
		                    </div>
		                   </div>
		                </form>
		               </div>
		            </div>
		         </div>
		    	</div>
          	  </div>

            <div id="previousbids" role="tabpanel" class="tab-pane">
	          <div class="table-responsive">
	            <table class="table table-striped">
	              <thead>
	                <tr>
	                  <th>User</th>
	                  <th>Amount</th>
	                  <th>Bid at</th>
	                </tr>
	              </thead>
	              <tbody>
	              	@foreach ($bid_details as $data)
	              	 @if($data->getuser->id == $data->bidder_id ) 
	                 <tr>
	                   <td>{{$data->getuser->name}}</td>
	                   <td>{{$data->amount}}</td>
	                   <td>{{$data->created_at->diffForHumans()}}</td>
	              	 </tr>
	              	 @endif
	              	@endforeach
	              </tbody>
	              </table>
	         </div>
           </div>
          </div>
         </div>
        </div>
      </div>
    </section>
    @include('website.layouts.footer')
    @endsection