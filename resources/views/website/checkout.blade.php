@extends('website/layouts/app')
@section('content')
@include('website.layouts.nav')
<!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Checkout</h1>
            @if(\Cart::getTotalQuantity()>0)
            <p class="lead">You currently have {{ \Cart::getTotalQuantity()}} item(s) in your basket</p>
            @else
            <p class="lead">
              No Item(s) in your Cart
            </p>
            @endif
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="{{url('website/index')}}">Home</a></li>
              <li class="breadcrumb-item active">Checkout</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <form method="post" action="{{url('save_order')}}" >
                @csrf
    <!------ Address ------>
    <section class="checkout">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="nav nav-pills">
              <li class="nav-item"><a href="" class="nav-link active" style="font-size: 28px;">Address</a></li>
              <li class="nav-item"><a href="" class="nav-link"></a></li>
              
            </ul>
            
            <div class="tab-content">
              <div id="address" class="active tab-block">
                
                  <!-- Invoice Address
                  <div class="block-header mb-5">
                    <h6>Invoice address                    </h6>
                  </div> -->
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="firstname" class="form-label"> Name</label>
                      <input id="firstname" type="text" name="name" placeholder="Enter you name" value="{{Auth::user()->name}}" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="company_name" class="form-label">Company Name</label>
                      <input id="lastname" type="text" name="company_name" placeholder="Enter your company name" value="{{Auth::user()->company_name}}" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="email" class="form-label">Email Address</label>
                      <input id="email" type="email" name="email" placeholder="enter your email address" value="{{Auth::user()->email}}" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="address" class="form-label">Address</label>
                      <input id="address" type="text" name="address" placeholder="Your address" value="{{Auth::user()->address}}" class="form-control">
                    </div>
                    <!---
                    <div class="form-group col-md-3">
                      <label for="city" class="form-label">City</label>
                      <input id="city" type="text" name="city" placeholder="Your city" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="zip" class="form-label">ZIP</label>
                      <input id="zip" type="text" name="zip" placeholder="ZIP code" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="state" class="form-label">State</label>
                      <input id="state" type="text" name="state" placeholder="Your state" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="country" class="form-label">Country</label>
                      <input id="country" type="text" name="country" placeholder="Your country" class="form-control">
                    </div>
                    --->
                    <div class="form-group col-md-6">
                      <label for="phone-number" class="form-label">Phone Number</label>
                      <input id="phone_number" type="tel" name="phone_number" placeholder="Your phone number" value="{{Auth::user()->phone_number}}" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="website" class="form-label">Website</label>
                      <input id="website" type="text" name="website" placeholder="Your Website" value="{{Auth::user()->website}}" class="form-control">
                    </div>
                    <!--
                    <div class="form-group col-12 mt-3 ml-3">
                      <input id="another-address" type="checkbox" class="checkbox-template">
                      <label for="another-address" data-toggle="collapse" data-target="#shippingAddress" aria-expanded="false" aria-controls="shippingAddress">Use different shipping address</label>
                    </div>
                    --->
                  </div>
                  <!-- /Invoice Address-->
                  <!-- Shippping Address
                  <div id="shippingAddress" aria-expanded="false" class="collapse">
                    <div class="block-header mb-5 mt-3">
                      <h6>Shipping address</h6>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="shipping_firstname" class="form-label">First Name</label>
                        <input id="shipping_firstname" type="text" name="shipping_first-name" placeholder="Enter you first name" class="form-control">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="shipping_lastname" class="form-label">Last Name</label>
                        <input id="lshipping_astname" type="text" name="shipping_last-name" placeholder="Enter your last name" class="form-control">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="shipping_email" class="form-label">Email Address</label>
                        <input id="shipping_email" type="email" name="shipping_email" placeholder="enter your email address" class="form-control">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="shipping_street" class="form-label">Street</label>
                        <input id="shipping_street" type="text" name="shipping_address" placeholder="Your street name" class="form-control">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="shipping_city" class="form-label">City</label>
                        <input id="shipping_city" type="text" name="shipping_city" placeholder="Your city" class="form-control">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="shipping_zip" class="form-label">ZIP</label>
                        <input id="shipping_zip" type="text" name="shipping_zip" placeholder="ZIP code" class="form-control">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="shipping_state" class="form-label">State</label>
                        <input id="shipping_state" type="text" name="shipping_state" placeholder="Your state" class="form-control">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="shipping_country" class="form-label">Country</label>
                        <input id="shipping_country" type="text" name="shipping_country" placeholder="Your country" class="form-control">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="shipping_phone-number" class="form-label">Phone Number</label>
                        <input id="shipping_phone-number" type="tel" name="shipping_phone-number" placeholder="Your phone number" class="form-control">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="shipping_company" class="form-label">Company</label>
                        <input id="shipping_company" type="text" name="shipping_company" placeholder="Your company name" class="form-control">
                      </div>
                    </div> -->
                  </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

    <!------ Delivery Method 
    <section class="checkout">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="nav nav-pills">
              <li class="nav-item"><a href="" class="nav-link"></a></li>
              <li class="nav-item"><a href="" class="nav-link active" style="font-size: 28px;">Delivery Method</a></li>
              <li class="nav-item"><a href="" class="nav-link"></a></li>
              <li class="nav-item"><a href="" class="nav-link "></a></li>
            </ul>
            <div class="tab-content">
              <div id="delivery-method" class="tab-block">
                <form action="#" class="shipping-form">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <input type="radio" name="shippping" id="option1" class="radio-template">
                      <label for="option1"><strong>Usps next day</strong><br><span class="label-description">Get it right on next day - fastest option possible.</span></label>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="radio" name="shippping" id="option2" class="radio-template">
                      <label for="option2"><strong>Usps next day</strong><br><span class="label-description">Get it right on next day - fastest option possible.</span></label>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="radio" name="shippping" id="option3" class="radio-template">
                      <label for="option3"><strong>Usps next day</strong><br><span class="label-description">Get it right on next day - fastest option possible.</span></label>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="radio" name="shippping" id="option4" class="radio-template">
                      <label for="option4"><strong>Usps next day</strong><br><span class="label-description">Get it right on next day - fastest option possible.</span></label>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> ------>
    <!------ Payment Method
    <section class="checkout">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="nav nav-pills">
              <li class="nav-item"><a href="" class="nav-link"></a></li>
              <li class="nav-item"><a href="" class="nav-link"></a></li>
              <li class="nav-item"><a href="" class="nav-link active" style="font-size: 28px;">Payment Method </a></li>
              <li class="nav-item"><a href="" class="nav-link"></a></li>
            </ul>
            <div class="tab-content">
              <div id="payment-method" class="tab-block">
                <div id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="card">
                    <div id="headingOne" role="tab" class="card-header">
                      <h6><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Credit Card</a></h6>
                    </div>
                    <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="collapse show">
                      <div class="card-body">
                        <form action="#">
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label for="card-name" class="form-label">Name on Card</label>
                              <input type="text" name="card-name" placeholder="Name on card" id="card-name" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="card-number" class="form-label">Card Number</label>
                              <input type="text" name="card-number" placeholder="Card number" id="card-number" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="expiry-date" class="form-label">Expiry Date</label>
                              <input type="text" name="expiry-date" placeholder="MM/YY" id="expiry-date" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="cvv" class="form-label">CVC/CVV</label>
                              <input type="text" name="cvv" placeholder="123" id="cvv" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="zip" class="form-label">ZIP</label>
                              <input type="text" name="zip" placeholder="123" id="zip" class="form-control">
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div id="headingTwo" role="tab" class="card-header">
                      <h6><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">Paypal</a></h6>
                    </div>
                    <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" class="collapse">
                      <div class="card-body">
                        <input type="radio" name="shippping" id="payment-method-1" class="radio-template">
                        <label for="payment-method-1"><strong>Continue with Paypal</strong><br><span class="label-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></label>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div id="headingThree" role="tab" class="card-header">
                      <h6><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">Pay on delivery</a></h6>
                    </div>
                    <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" class="collapse">
                      <div class="card-body">
                        <input type="radio" name="shippping" id="payment-method-2" class="radio-template">
                        <label for="payment-method-2"><strong>Pay on Delivery</strong><br><span class="label-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> ------>
    <!------ Order Review ------>
    <section class="checkout">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="nav nav-pills">
              <li class="nav-item"><a href="" class="nav-link"></a></li>
              <li class="nav-item"><a href="" class="nav-link active" style="font-size: 28px;">Order Review</a></li>
            </ul>
            <div class="tab-content">
              <div id="order-review" class="tab-block">
                <div class="cart">
                  <div class="cart-holder">
                    <div class="basket-header">
                      <div class="row">
                        <div class="col-6">Product</div>
                        <div class="col-2">Price</div>
                        <div class="col-2">Quantity</div>
                        <div class="col-2">Total</div>
                      </div>
                    </div>
                    <div class="basket-body">
                      <!-- Product-->
                       @foreach($cartCollection as $item)
                      <div class="item row d-flex align-items-center">
                        <div class="col-6">
                          <div class="d-flex align-items-center">
                            <img src="{{asset('/images/'.$item->attributes->image)}}" alt="..." class="img-fluid">
                            <div class="title"><a href="detail.html">
                                <h6>{{ $item->name }}</h6><span class="text-muted">Type: {{ $item->product_type }}</span></a></div>
                          </div>
                        </div>
                        <div class="col-2"><span>{{ $item->price }}</span></div>
                        <div class="col-2"><span>{{ $item->quantity }}</span></div>
                        <div class="col-2"><span>{{ \Cart::get($item->id)->getPriceSum() }}</span></div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="total row">
                    <span class="col-md-10 col-2">Total
                    </span>
                    <span class="col-md-2 col-10 text-black">
                      {{ \Cart::getTotal() }}
                    </span>
                  </div>
                </div>
                <div class="CTAs d-flex justify-content-between flex-column flex-lg-row">
                  <a href=""></a>
                  <input type="hidden" value="{{Auth::user()->id}}" name="customer_id" id="customer_id" />
                  <button type="submit" class="btn btn-info wide next text-white">Place Order
                    <i class="fa fa-angle-right"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </form>
@include('website.layouts.footer')
@endsection