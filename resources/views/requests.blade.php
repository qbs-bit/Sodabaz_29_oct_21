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
                  <h4 class="card-title">Received Requests</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
                        <th>Requestor</th>
                          <th>Delivery Location</th>
                          <th>Delivery In</th>
                         <th>Amount</th>
                         <th>Sent</th>
                         <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($requests as $req)
                      		@if(Auth::user()->id== $req->request->location->user->id)
                      		<tr>
                      			<td>{{$req->requestor->name}}</td>
                      			<td>{{$req->request->locations}}</td>
                      			<td>{{$req->request->delivery_in}}</td>
                      			<td>{{$req->request->location->per_unit_price}}</td>
                      			<td>{{$req->created_at->diffForHumans()}}</td>
                      			<td>
                      				<form method="" action="{{url('mills/accepted_requests')}}">
                      					@csrf
                      					 <input type="hidden" name="requestor_id" value="{{$req->requestor->id}}" />

                      					 <input type="hidden" name="location" value="{{$req->request->locations}}" />

                      					 <input type="hidden" name="amount" value="{{$req->request->location->per_unit_price}}" />

                      					 <input type="hidden" name="delivery_in" value="{{$req->request->delivery_in}}" />

                                 <input type="hidden" name="order_id" value="{{$req->order_id}}" />

                      					<a class="btn btn-danger" href="{{url('transporter/single_request', $req->id)}}">Details</a>
                      				</form>
                      			</td>
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
        </section>


@endsection