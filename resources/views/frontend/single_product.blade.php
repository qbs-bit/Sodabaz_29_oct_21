@extends('frontend.layouts.app')

@section('content')
    @if (session('status'))

        {{ session('status') }}
    @endif


    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/select2/css/select2.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/jquery.bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/owl.carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/fancyBox/jquery.fancybox.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/reset.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="{{url('frontend/index')}}" title="Return to Home">Home</a>

            @foreach ($products as $product)
            @foreach ($category as $category)
                
            
            
            @if($product->cat_id == $category->id )
            <span class="navigation-pipe">&nbsp;</span>
            <a href="{{url('frontend/category',$category->id)}}" title="Return to Home">{{$category->category}}</a>
            <span class="navigation-pipe">&nbsp;</span>
            @endif
            @endforeach

            @foreach ($subcategory as $subcategory)
            
            @if($product->sub_cat_id == $subcategory->id)

            <a href="{{url('frontend/category',$category->id)}}" title="Return to Home">{{$subcategory->category}}</a>
            <span class="navigation-pipe">&nbsp;</span>
            
            @endif
            @endforeach
            <a href="#" title="Return to Home">{{$product->product_name}}</a>
            <span class="navigation-pipe">&nbsp;</span>
            
            @endforeach
            
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-12" id="center_column">
                <!-- Product -->
                    <div id="product">
                        <div class="primary-box row">
                            <div class="pb-left-column col-xs-12 col-sm-5">
                                <!-- product-imge-->
                                @foreach ($products_img as $pro)

                                <?php

                                $image = $pro->image;
                                $res1=trim($image,"[");
                                $res2=trim($res1,"]");
                                $arr=explode(",", $res2);

                                $img1=substr($arr[0], 0,-1);
                                $img1=substr($img1, 1);

                                $img2=substr($arr[1], 0,-1);
                                $img2=substr($img2, 1);

                                $img3=substr($arr[2], 0,-1);
                                $img3=substr($img3, 1);



                                ?>

                                <div class="product-image">
                                    <div class="product-full">
                                        <img id="product-zoom" src="{{asset('/images/'.$img1)}}" data-zoom-image="{{asset('/images/'.$img1)}}"/>
                                    </div>
                                    <div class="product-img-thumb" id="gallery_01">
                                        <ul class="owl-carousel" data-items="3" data-nav="true" data-dots="false" data-margin="21" data-loop="true">
                                            <li>
                                                <a href="#" data-zoom-image="{{asset('/images/'.$img2)}}">
                                                    <img id="product-zoom"  src="{{asset('/images/'.$img2)}}" /> 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-zoom-image="{{asset('/images/'.$img3)}}">
                                                    <img id="product-zoom"  src="{{asset('/images/'.$img3)}}" /> 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-zoom-image="{{asset('/images/'.$img1)}}">
                                                    <img id="product-zoom"  src="{{asset('/images/'.$img1)}}" /> 
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                                <!-- product-imge-->
                            </div>
                            <div class="pb-right-column col-xs-12 col-sm-7">
                                <h1 class="product-name">@foreach ($products as $product )

                                {{$product->product_name}}
                                
                                
                                </h1>
                                <div class="product-comments">
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    
                                </div>
                                <div class="product-price-group">
                                    Price Per Unit: <span class="price">{{$product->per_unit_price}}</span>
                                    
                                </div>
                                <div class="info-orther">
                                    <p>Item Code: {{$product->product_code}}</p>
                                    <p>Availability: <span class="in-stock">In stock</span></p>
                                      
                                    
                                    @if($bid)
                                            @if($product->is_bid == '1')

                                                <h4><strong>Current Bid : {{$bid->amount}}</strong> </h4> 
                                            @endif
                                    @else
                                        <h4><strong>Current Bid: No bid yet</strong> </h4>
                                    @endif


                                    
                                </div>
                                @foreach($countdown as $timer)
                                     @if($product->id==$timer->product_id)
                                        @if($product->is_bid == '1')
                                     <p>Time Left To Bid:</p>
                                     <div class="card">
                                         <div class="card-header">
                                    <h1 id="demo"></h1>
                                    </div>
                                    </div>
                                        @endif
                                    @endif
                                @endforeach
                                <div class="form-action">
                                    <div class="button-group">
                                    <div class="row">
                                    <div class="col-md-2">
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $product->product_name}}" id="name" name="name">
                                        <input type="hidden" value="{{$product->user_id}}" id="vender_id" name="vender_id">
                                        <input type="hidden" value="{{ $product->per_unit_price}}" id="price" name="price">
                                        <input type="hidden" value="{{ $img1}}" id="img" name="img">
                                        <input type="hidden" value="abc" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <input type="submit" class="btn-add-cart" title="Add to Cart" value="Add to Cart">
                                    </form>
                                    </div>
                                    <div class="col-md-6">
                                    
                                        
                                        @if($product->is_bid == '1')
                                        <a  href="#" class="btn-add-cart" data-toggle="modal" data-target="#myModal">Bid Now</a>
                                        @endif
                                    </div>
</div>
</div>
                                    <!----BIDDING MODAL---->
                                      <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog">
                                        
                                          <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">Live Biddings</h4>
                                            </div>
                                            <div class="modal-body">
                                              <div class="card-content">
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>User</th>
                                                            <th>Amount</th>
                                                            <th>Quantity</th>
                                                            <th>Bid at</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($biddetails as $bid)
                                                        <tr>
                                                            <td>

                                                    @foreach ($users as $user )
                                                    @if($bid->user_id == $user->id) 
                                                    
                                                    {{$user->name}}
                                                   
                                                    @endif
                                                    @endforeach
                                                    </td>

                                                            <td>{{$bid->amount}}</td>
                                                            <td>{{$bid->qty}}</td>
                                                            

                                                             <td>{{$bid->created_at->diffForHumans()}}</td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <form class="form" method="post" action="{{url('/save_bid')}}">
                                                @csrf
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="amount" placeholder="Place your bidding amount here">
                                                        <input type="hidden" name="product" value="{{$product->id}}">
                                                     </div>
                                                     <div class="col-md-4">
                                                         <input type="text" name="qty" class="form-control" Placeholder="Quantity" />
                                                    </div>
                                                    <button  type="submit" class="btn btn-primary">
                                                    Add Bid
                                                    </button>
                                                </form>
                                            </div>
                                          </div>
                                          <!-- Modal content end-->
                                          
                                        </div>
                                      </div>
                                </div>
                                <!---BIDDING MODAL END--->
                    
                            </div>
                        </div>
                        <!-- tab product -->
                        <div class="product-tab">
                            <ul class="nav-tab">
                                <li class="active">
                                    <a aria-expanded="false" data-toggle="tab" href="#product-detail">Product Details</a>
                                </li>
                                @if($product->is_bid == '1')
                                <li>
                                    <a aria-expanded="true" data-toggle="tab" href="#information">Auction History</a>
                                </li>
                                @endif
                               
                                <li>
                                    <a data-toggle="tab" href="#reviews">Venders Info</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#extra-tabs">More From Vender</a>
                                </li>
                                
                            </ul>
                            <div class="tab-container">
                                <div id="product-detail" class="tab-panel active">
                                    <p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

                                    <p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

                                    <p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>
                                </div>
                                @if($product->is_bid == '1')
                                <div id="information" class="tab-panel">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                        <th><b>User Name</b></th>
                                        <th><b>Bid Amount</b></th>
                                        <th><b>Quantity</b></th>
                                        <th><b>Date Time</b></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($biddetails as $bid)
                                                        <tr>
                                                    <td>
                                                    @foreach ($users as $user )
                                                    @if($bid->user_id == $user->id) 
                                                    
                                                    {{$user->name}}
                                                   
                                                    @endif
                                                    @endforeach
                                                    </td>
                                                            <td>{{$bid->amount}}</td>
                                                            <td>{{$bid->qty}}</td>
                                                            <td>{{$bid->created_at->diffForHumans()}}</td>
                                                        </tr>
                                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @endif
                                <div id="reviews" class="tab-panel">
                                    <div class="product-comments-block-tab">
                                        <div class="comment row">
                                            <div class="col-sm-6 author">
                                            @foreach ($users as $user )

                                                    @if($product->user_id == $user->id) 
                                                    
                                            <div class="info-author">
                                                    <h5>Company Name : <span style="color:red;"><b>{{$user->company_name}}</b></span></h5>
                                                    <h5>Vender Name : <span style="color:red;"><b>{{$user->name}}</b></span></h5>
                                                    <h5>Location : <span style="color:red;"><b>{{$user->address}}</b></span></h5>
                                                    <h5>Company Email : <span style="color:red;"><b>{{$user->company_email}}</b></span></h5>
                                                    <h5>Company Contact : <span style="color:red;"><b>{{$user->phone_number}}</b></span></h5>
                                                </div>
                                                <div class="grade">
                                                    <span>Grade</span>
                                                    <span class="reviewRating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                                
                                            </div>
                                            <div class="col-sm-6 commnet-dettail">
                                                Phasellus accumsan cursus velit. Pellentesque  egestas, neque sit amet convallis pulvinar
                                            </div>
                                        </div>
                                        @endif
                                                    @endforeach
   
                                    </div>
                                    
                                </div>
                                <div id="extra-tabs" class="tab-panel">
                                <div class="page-product-box">
                            <h3 class="heading">Related Products</h3>
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="{{asset('/web-assets/data/p40.jpg')}}" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#add">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="{{asset('/web-assets/data/p35.jpg')}}" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#add">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="{{asset('/web-assets/data/p37.jpg')}}" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#add">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="{{asset('/web-assets/data/p39.jpg')}}" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#add">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>


                                </div>
               
                            </div>
                        </div>
                        @endforeach
                        <!-- ./tab product -->
                        <!-- box product -->
                    
                        <!-- ./box product -->
                        <!-- box product -->
                        <div class="page-product-box">
                            <h3 class="heading">You might also like</h3>
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="{{asset('/web-assets/data/p97.jpg')}}" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#add">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="{{asset('/web-assets/data/p34.jpg')}}" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#add">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="{{asset('/web-assets/data/p36.jpg')}}" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#add">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="{{asset('/web-assets/data/p36.jpg')}}" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#add">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- ./box product -->
                    </div>
                <!-- Product -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
  </div>
</div>

<div id="defaultCountdown" ></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Display the countdown timer in an element -->

<?php 
$date=date_create($timer->bidding_end);
$finaldate = date_format($date,"M d, Y h:m:s"); 
//echo $finaldate;
?>

<script>
    var php_var = "<?php echo $finaldate; ?>";
// Set the date we're counting down to
var countDownDate = new Date(php_var).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>





@endsection