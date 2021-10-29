@extends('website/layouts/app')
@section('content')
@include('website.layouts.nav')
@foreach ($categories as $cat)
@endforeach
<style type="text/css">
.form-control-borderless {
    border: none;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: none;
    outline: none;
    box-shadow: none;
}

</style>
<!-- Hero Section-->
    <section class="hero hero-home no-padding">
      <div class="container-fluid p-0">       
        <div style="background: url({{asset('website-assets/img/Banner.png)')}};" class="item d-flex col-lg-12">
           <div class="container">
            <center>
              <h1 style="color: black;">PRODUCTS</h1>
            </center>
          </div>
        </div>
    </div>
    </section>
    <br>
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <form action="{{url('website/products/all')}}" method="POST" class="card card-sm">
              @csrf
                <div class="card-body row no-gutters align-items-center">
                    
                    <!--end of col-->
                    <div class="col">
                        <input class="form-control form-control-lg form-control-borderless" name="search" type="search" placeholder="Search products">
                    </div>
                    <!--end of col-->
                    <div class="col-auto">
                        <button class="btn btn-lg btn-info" type="submit">Search</button>
                    </div>
                    <!--end of col-->
                </div>
            </form>
        </div>
        <!--end of col-->
      </div>


    <main>
      <div class="container">
        <div class="row">
          <!-- Sidebar-->
          <div class="sidebar col-xl-3 col-lg-4 sidebar">
            <div class="block">
              <h6 class="text-uppercase">Product Categories</h6>
              <ul class="list-unstyled">
                <li>
                  <ul class="list-unstyled">
                    <li> <a href="{{url('website/products','all')}}">All</a></li>
                    @foreach ($categories as $cat)
                    <li> 
                      <a href="{{url('website/products',$cat->id)}}">
                        {{$cat->category}}
                      </a>
                    </li>
                    @endforeach
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- /Sidebar end-->




          <!-- Grid -->
          <div class="products-grid col-xl-9 col-lg-8 sidebar-left">
            <header class="d-flex justify-content-between align-items-start"><span class="visible-items"><strong><!--Category Name--> </strong>
            </header>
            <div class="row">
              <!-- item-->
              @foreach ($products as $product)
              
              <div class="item col-xl-4 col-md-6">
                <div class="product">
                  <div class="image d-flex align-items-center justify-content-center">
                    <!------- PORDUCT IMAGE-------------->
                    @foreach ($products_img as $pro)
                      @if($product->id == $pro->product_id )

                                <?php

                                $image = $pro->image;
                                $res1=trim($image,"[");
                                $res2=trim($res1,"]");
                                $arr=explode(",", $res2);

                                $img1=substr($arr[0], 0,-1);
                                $img1=substr($img1, 1);

                                ?>
                    <img src="{{asset('/images/'.$img1)}}"  alt="product" class="img-fluid">
                      @endif
                    @endforeach

                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center">

                        <!---
                        <form action="{{ route('cart.insert') }}" method="POST" id="{{ $product->id}}">
                          {{ csrf_field() }}
                          <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                          <input type="hidden" value="{{ $product->product_name}}" id="name" name="name">
                          <input type="hidden" value="{{$product->user_id}}" id="vender_id" name="vender_id">
                          <input type="hidden" value="{{ $product->per_unit_price}}" id="price" name="price">
                          <input type="hidden" value="{{ $img1}}" id="img" name="img">
                          <input type="hidden" value="abc" id="slug" name="slug">
                          <input type="hidden" value="1" id="quantity" name="quantity">

                            <a class="add-to-cart" title="Add to Cart" value="Add to Cart" onclick="document.getElementById('{{ $product->id}}').submit()">
                            <i class="fa fa-shopping-cart"></i>
                            </a>
                            
                        </form>
                        --->
                        <a href="{{url('website/single_product', $product->id)}}" class="visit-product active"><i class="icon-search"></i>
                          View
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="title"><small class="text-muted">{{$product->product_type}}</small><a href="">
                      <h3 class="h6 text-uppercase no-margin-bottom">{{$product->product_name}}</h3></a><span class="price text-muted">Rs {{$product->per_unit_price}}</span></div>
                </div>
              </div>
              @endforeach

            </div>
            <nav aria-label="page navigation example" class="d-flex justify-content-center">
             
              <span>
                {{$products->links('website.layouts.pagination')}}
              </span>
              
            </nav>
          </div>
          <!-- / Grid End-->
        </div>
      </div>
    </main>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@include('website.layouts.footer')
@endsection
