@extends('frontend.layouts.app')
@section('content')
    @if (session('status'))

        {{ session('status') }}
    @endif
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="{{ url('frontend/index')}}" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            @foreach ($category as $cat )
                
           
            <span class="navigation_page">{{$cat->category}}</span>
            
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block category -->
                <div class="block left-module">
                    <p class="title_block">{{$cat->category}}  Categories</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
                                <ul class="tree-menu">
                                    @foreach($subcategories as $subcat)
                                    <li><a href="#">{{$subcat->category}}</a></li>
                                    @endforeach
                                   
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <!-- ./block category  -->
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- view-product-list-->
                <div id="view-product-list" class="view-product-list">
                    <h2 class="page-heading">
                        <span class="page-heading-title">{{$cat->category}} </span>
                    </h2>
                    <ul class="display-product-option">
                        <li class="view-as-grid selected">
                            <span>grid</span>
                        </li>
                        <li class="view-as-list">
                            <span>list</span>
                        </li>
                    </ul>
                    <!-- PRODUCT LIST -->
                    <ul class="row product-list grid">
                        @foreach($products as $pro)
                        <li class="col-sx-12 col-sm-4">
                            <div class="product-container">
                                <div class="left-block">
                                     
                                    
                                    @foreach($product_img as $img)
                                      <?php

                                            $image = $img->image;
                                            $res1=trim($image,"[");
                                            $res2=trim($res1,"]");
                                            $arr=explode(",", $res2);

                                            $img1=substr($arr[0], 0,-1);
                                            $img1=substr($img1, 1);

                                      ?>
                                        @if($pro->id==$img->product_id)
                                        <a href="{{url('frontend/single_product', $pro->id)}}"> 
                                      
                                        <img class="img-responsive" alt="product" src="{{asset('/images/'.$img1)}}"/> 
                                        </a> 
                                       
                                    
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>

                                    @if($pro->is_bid != 1)

                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->product_name}}" id="name" name="name">
                                        <input type="hidden" value="{{$pro->user_id}}" id="vender_id" name="vender_id">
                                        <input type="hidden" value="{{ $pro->per_unit_price}}" id="price" name="price">
                                        <input type="hidden" value="{{ $img1}}" id="img" name="img">
                                        <input type="hidden" value="abc" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                              <div class="row">
                                                <div class="add-to-cart">
                                                 <input type="submit" title="Add to Cart" value="Add to Cart">
                                                 </div>
                                            </div>
                                        </div>
                                    </form>
                                    
                                    @else
                                    
                                    <div class="add-to-cart">
                                    <button>Bid Now</button>
                                     </div>
                                    @endif
                                    @endif
                                        
                                        @endforeach



                                </div>

                               
                                <div class="right-block">
                                    <h5 class="product-name"><a href="{{url('frontend/single_product', $pro->id)}}">{{$pro->product_name}}</a></h5>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="content_price">
                                      Price   <span class="price product-price">{{$pro->per_unit_price}}</span><br>
                                      Supplier Name  <span>{{$pro->user_id}}</span>
                                        <!--<span class="price old-price">$52,00</span>---->
                                    </div>
                                    <div class="info-orther">
                                        <p>Item Code: {{$pro->product_code}}</p>
                                        <p class="availability">Availability: <span>In stock</span></p>
                                        <div class="product-desc"> <b>Description</b><br>
                                            Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien.
                                             Praesent egestas tristique nibh. Nullam dictum felis eu
                                              pede mollis pretium. Fusce egestas elit eget lorem. 
                                             
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <!-- ./PRODUCT LIST -->
                </div>
                
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
@endforeach
@endsection