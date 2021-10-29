@extends('frontend/layouts/app')
@section('content')
       <div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">
            <div class="col-sm-3" id="box-vertical-megamenus">
                    <div class="box-vertical-megamenus">
                        <h4 class="title">
                            <span class="title-menu">Categories</span>
                            <span class="btn-open-mobile pull-right home-page"><i class="fa fa-bars"></i></span>
                        </h4>
                    <div class="vertical-menu-content is-home">
                        @foreach($categories as $cat)
                        <ul class="vertical-menu-list">
                            <li>
                                <a class="parent" href="{{url('frontend/category', $cat->id)}}"><img class="icon-menu" alt="Funky roots" src="{{asset('web-assets/data/2.png')}}">
                                    {{$cat->category}}
                                <div class="vertical-dropdown-menu">
                                    <div class="vertical-groups col-sm-12">
                                        @foreach($subcategories as $subcat)
                                            @if($cat->id==$subcat->category_id)
                                        <div class="mega-group col-sm-4">
                                            <h4 class="mega-group-header">
                                                <span>
                                                    {{$subcat->category}}
                                                </span>
                                            </h4>
                                            <ul class="group-link-default">
                                                @foreach($products as $product)
                                                    @if($subcat->id==$product->sub_cat_id)
                                                        <li>
                                                            <a href="{{url('frontend/single_product', $product->id)}}">
                                                                {{$product->product_name}}
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                           
                                        </div>
                                         @endif
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                        </ul>
                        @endforeach
                        </div>
                    </div>
                </div>
                </div>
               
            </div>
			
            <!-- userinfo on top-->
            <div id="form-search-opntop">
            </div>
            <!-- userinfo on top-->
            <div id="user-info-opntop">
            </div>
            <!-- CART ICON ON MMENU -->
            <div id="shopping-cart-box-ontop">
                <i class="fa fa-shopping-cart"></i>
                <div class="shopping-cart-box-ontop-content"></div>
            </div>
        </div>
  
    <div id="home-slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 slider-left"></div>
            <div class="col-sm-9 header-top-right">
                <div class="homeslider">
                    <div class="content-slide">
                        <ul id="contenhomeslider">
                          <li><img alt="Funky roots" src="{{asset('/web-assets/data/slide.jpg')}}" title="Funky roots" /></li>
                          <li><img alt="Funky roots" src="{{asset('/web-assets/data/slide.jpg')}}" title="Funky roots" /></li>
                          <li><img  alt="Funky roots" src="{{asset('/web-assets/data/slide.jpg')}}" title="Funky roots" /></li>
                        </ul>
                    </div>
                </div>
                <div class="header-banner banner-opacity">
                    <a href="#"><img alt="Funky roots" src="{{asset('/web-assets/data/ads22.jpg')}}" /></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


