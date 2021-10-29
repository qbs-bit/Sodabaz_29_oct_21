@extends('layouts.master')

@section('content')
@if (session('status'))

{{ session('status') }}
@endif
@foreach($details as $d)
@endforeach

	@foreach($s_request as $req)
	   <div class="content-body">
        <section class="card">
          <div id="invoice-template" class="card-body">
            <!-- Invoice Company Details -->
            <div id="invoice-company-details" class="row">
              <div class="col-md-6 col-sm-12 text-center text-md-left">
                <div class="media">
                  <img src="{{asset('/images/logo-80x80.png')}}" alt="company logo" class=""
                  />
                  <br>
                  <div class="media-body">
                    <ul class="ml-2 px-0 list-unstyled">
                      <li class="text-bold-800">{{$req->requestor->company_name}}</li>
                      <li>{{$req->requestor->company_email}}</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 text-center text-md-right">
                <h2>INVOICE</h2>
                <p class="pb-3"># INV-001001</p>
                <ul class="px-0 list-unstyled">
                  <li>Balance Due</li>
                  <li class="lead text-bold-800">$ 12,000.00</li>
                </ul>
              </div>
            </div>
            <!--/ Invoice Company Details -->
            <!-- Invoice Customer Details -->
            <div id="invoice-customer-details" class="row pt-2">
              <div class="col-sm-12 text-center text-md-left">
                <p class="text-muted">Request From</p>
              </div>
              <div class="col-md-6 col-sm-12 text-center text-md-left">
                <ul class="px-0 list-unstyled">
                  <li class="text-bold-800">{{$req->requestor->name}}</li>
                  <li>City: {{$req->requestor->address}}</li>
                  <li>Address: {{$req->requestor->registered_address}}</li>
                  <li>Phone: {{$req->requestor->phone_number}}</li>
                  <li>Email: {{$req->requestor->email}}</li>
                </ul>
              </div>
              <div class="col-md-6 col-sm-12 text-center text-md-right">
                <p>
                  <span class="text-muted">Sent Request Date :</span> {{ \Carbon\Carbon::parse($req->created_at)->format('d/m/Y')}}</p>
                <p>
                  <span class="text-muted">Terms :</span> Due on Receipt</p>
                <p>
                  <span class="text-muted">Due Date :</span> 10/05/2017</p>
              </div>
            </div>
            <!--/ Invoice Customer Details -->
            <!-- Invoice Items Details -->
            <h2>Request Details</h2>
            <div id="invoice-items-details" class="pt-2">
              <div class="row">
                <div class="table-responsive col-sm-12">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Item & Description</th>
                        <th class="text-right">Pick-up</th>
                        <th class="text-right">Delivery</th>
                        <th class="text-right">Per Product Amount</th>
                      </tr>
                    </thead>
                    <tbody>

                       <?php
                          $i=1;
                      ?>
                        
                          @foreach($details as $details)
                          @if($req->order_id == $details->order_id)
                         
                             <tr>
                          <td scope="row">{{$i}}</ts>
                            <td>
                              <p>{{$details->product->product_name}}</p>
                            </td>
                            <td class="text-right">{{$details->vender->address}}</td>
                            <td class="text-right">{{$req->request->locations}}</td>
                        <td class="text-right">{{$details->unit_price}}</td>
                        </tr>
                          <?php
                          $i++;
                          ?>
                            @endif

                            @endforeach
                         
                          
                        
                      
  
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                
                <div class="col-md-5 col-lg-12">
                  <p class="lead">Total due</p>
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>Sub Total</td>
                          <td class="text-right">{{$req->order->total_amount}} </td>
                        </tr>
                        <tr>
                          <td>TAX (12%)</td>
                          <td class="text-right">$ dummy</td>
                        </tr>
                        <tr>
                          <td class="text-bold-800">Total</td>
                          <td class="text-bold-800 text-right"> $ dummy</td>
                        </tr>
                        <tr>
                          <td>Payment Made</td>
                          <td class="pink text-right">(-) $ dummy</td>
                        </tr>
                        <tr class="bg-grey bg-lighten-4">
                          <td class="text-bold-800">Balance Due</td>
                          <td class="text-bold-800 text-right">$ dummy</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- Invoice Footer -->
            <div id="invoice-footer">
              <div class="row">
                <div class="col-md-7 col-sm-12">
                  
                </div>
                <div class="col-md-5 col-sm-12 text-right">
                  <button type="button" class="btn btn-info btn-lg my-1"><i class="la la-paper-plane-o"></i> Send Invoice</button>
                </div>
              </div>
            </div>
            <!--/ Invoice Footer -->
          </div>
        </section>
      </div>
      @endforeach

@endsection