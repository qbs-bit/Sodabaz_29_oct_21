@extends('website/layouts/app')
@section('content')
@include('website.layouts.nav')


<!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Shopping Cart</h1>
             @if(\Cart::getTotalQuantity()>0)
            <p class="lead">
              You currently have {{ \Cart::getTotalQuantity()}} Item(s) in your Cart
            </p>
            @else
            <p class="lead">
              No Item(s) in your Cart
            </p>
            @endif
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="{{url('website/index')}}">Home</a></li>
              <li class="breadcrumb-item active">Shopping Cart</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
     <!-- Shopping Cart Section-->
    <section class="shopping-cart">
      <div class="container">
        <div class="basket">
          <div class="basket-holder">
            <div class="basket-header">
              <div class="row">
                <div class="col-5">Product</div>
                <div class="col-2">Price</div>
                <div class="col-2">Quantity</div>
                <div class="col-2">Total</div>
                <div class="col-1 text-center">Remove</div>
              </div>
            </div>
            <div class="basket-body">
              <!-- Product-->
              @foreach($cartCollection as $item)
              <div class="item">
                <div class="row d-flex align-items-center">
                  <div class="col-5">
                    <div class="d-flex align-items-center"><img src="{{asset('/images/'.$item->attributes->image)}}" alt="..." class="img-fluid">
                      <div class="title"><a>
                          <h5>{{ $item->name }}</h5><span class="text-muted">Type: {{ $item->product_type }}</span></a></div>
                    </div>
                  </div>
                  <div class="col-2"><span>{{ $item->price }}</span></div>
                  <div class="col-2">
                    <div class="d-flex align-items-center">
                      <div class="quantity d-flex align-items-center">

                        <form action="{{route('cart.updates')}}" method="POST">
                          {{ csrf_field() }}
                          <div class="form-group row">
                              <input type="hidden" value="{{ $item->id}}" id="id" name="id">

                              <input type="number" class="form-control form-control-sm" value="{{ $item->quantity }}"
                                id="quantity" name="quantity" style="width: 70px; margin-right: 10px;">

                              <button class="btn btn-sm" style="margin-right: 25px;"><i class="fa fa-edit"></i></button>
                              
                            </div>
                        </form>

                      </div>
                    </div>
                  </div>
                  <div class="col-2"><span>{{ \Cart::get($item->id)->getPriceSum() }}</span></div>
                  <form action="{{ route('itemremove') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                    <div class="col-1 text-center">
                      <button class="btn btn-sm" style="margin-right: 10px;">
                      <i class="delete fa fa-trash"></i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="CTAs d-flex align-items-center justify-content-center justify-content-md-end flex-column flex-md-row"><a href="{{url('website/products/all')}}" class="btn btn-outlined wide">Continue Shopping</a><!--<a href="#" class="btn btn-info wide text-white">Update Cart</a></div>---->
      </div>
    </section>
<!-- Order Details Section-->
    <section class="order-details no-padding-top"> 
      <div class="container">
        <div class="row">                         
          <div class="col-lg-12">
            <div class="block">
              <div class="block-header">
                <h6 class="text-uppercase">Order Summary</h6>
              </div>
              <div class="block-body">
                <p></p>
                <ul class="order-menu list-unstyled">
                  <li class="d-flex justify-content-between">
                  @if(\Cart::getTotalQuantity()>0)
                    <span>
                      No of item(s) 
                    </span>
                    <strong>
                     {{ \Cart::getTotalQuantity()}}
                    </strong>
                    @else
                    <span>
                      No of item(s) 
                    </span>
                    <strong>
                     0
                    </strong>
                    @endif
                  </li>
                  @if(count($cartCollection)>0)
                    <li class="d-flex justify-content-between">
                      <span>
                        Total
                      </span>
                      <strong class="text-black price-total">
                        {{ \Cart::getTotal() }}
                      </strong>
                    </li>
                  @endif
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-12 text-center CTAs"><a href="{{url('website/checkout')}}" class="btn btn-info btn-lg wide">Proceed to checkout<i class="fa fa-long-arrow-right"></i></a></div>
        </div>
      </div>
    </section>

@include('website.layouts.footer')
@endsection