@extends('website/layouts/app')
@section('content')
@include('website.layouts.nav')
@foreach ($users as $user )
@endforeach
@foreach($countdown as $timer)
@endforeach

@foreach ($products as $product)
  <section class="product-details">
      <div class="container">
        <div class="row">
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
          <div class="product-images col-lg-6">
            <div data-slider-id="1" class="owl-carousel items-slider owl-drag">
              <div class="item"><img src="{{asset('/images/'.$img1)}}" alt="shirt"></div>
              <div class="item"><img src="{{asset('/images/'.$img2)}}" alt="shirt"></div>
              <div class="item"><img src="{{asset('/images/'.$img3)}}" alt="shirt"></div>
            </div>
            <div data-slider-id="1" class="owl-thumbs">
              <button class="owl-thumb-item"><img src="{{asset('/images/'.$img1)}}" alt="shirt"></button>
              <button class="owl-thumb-item active"><img src="{{asset('/images/'.$img2)}}" alt="shirt"></button>
              <button class="owl-thumb-item"><img src="{{asset('/images/'.$img3)}}" alt="shirt"></button>
            </div>
          </div>
          @endforeach
          <div class="details col-lg-6">
            <h3>{{$product->product_name}}</h3>
            <br>
            <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row">
              <ul class="price list-inline no-margin">
                <li style="color:#17a2b8;" class="list-inline-item current">Rs {{$product->per_unit_price}}</li>
                <!--- <li class="list-inline-item original">$90.00</li> ---->
              </ul>
            </div>
            <br>
            <h6>Code: {{$product->product_code}}</h6>
            <h6>Type: {{$product->product_type}}</h6>
            
            <?php 
              $gettotalQuantity = \App\Models\Stock::gettotalQuantity($product->id);

              $getsoldQuantity = \App\Models\order_details::getsoldQuantity($product->id);


              foreach ($gettotalQuantity as $value) {
               $totalquantity = $value->totalquantity;
              }

              foreach ($getsoldQuantity as $value) {
               $soldquantity = $value->soldquantity;
              }

              $stock = ( $totalquantity-$soldquantity);
            ?>

            @if($stock>0)
              <h6>Available in Stock</h6>
            @else
              <h6>Not Available in Stock</h6>
            @endif

            <br>
            @if($bid)
              @if($product->is_bid == '1')
                <h6>Current Bid : {{$bid->amount}}</6> 
              @endif
            @elseif($bid== '0')
                <h6>Current Bid: No bid yet</h6>
            @endif
            <br>

             @if($product->is_bid == '1')
              @foreach($countdown as $timer)
                @if($product->id==$timer->product_id)
                  <h6>Time Left To Bid:</h6>
                  <div class="card">
                    <div class="card-header">
                      <h1 id="demo"></h1>
                   </div>
                  </div>
                  @endif
              @endforeach
            @endif

            <br>
            
            <ul class="CTAs list-inline">
              <li class="list-inline-item">
                <!----
                <a href="#" class="btn btn-info wide">
                  <i class="icon-cart"></i>Add to Cart</a>
                  ----->
                  <!----
                  <form action="{{ route('cart.insert') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                    <input type="hidden" value="{{ $product->product_name}}" id="name" name="name">
                    <input type="hidden" value="{{$product->user_id}}" id="vender_id" name="vender_id">
                    <input type="hidden" value="{{ $product->per_unit_price}}" id="price" name="price">
                    <input type="hidden" value="{{ $img1}}" id="img" name="img">
                    <input type="hidden" value="abc" id="slug" name="slug">
                    <input type="hidden" value="1" id="quantity" name="quantity">

                  @if(Auth::check())
                       @if($product->user_id != Auth::user()->id)
                         <input type="submit" class="btn btn-info wide" title="Add to Cart" value="Add to Cart">
                          <li class="list-inline-item">
                          @if($product->is_bid == '1')
                          <a href="#" class="btn btn-info wide" data-toggle="modal" data-target="#exampleModal"><i class="icon-cart"></i>Bid Now</a>
                          @endif 
                          </li>
                       @endif
                  @else
                      <input type="submit" class="btn btn-info wide" title="Add to Cart" value="Add to Cart">
                      <li class="list-inline-item">
                      <a href="#" class="btn btn-info wide" data-toggle="modal" data-target="#exampleModal"><i class="icon-cart"></i>Bid Now</a> 
                      </li>                   
                  @endif
                  </form>
                  --->
                  @if(Auth::check())
                   @if($product->user_id != Auth::user()->id)
                      @if($product->is_bid == '1')
                        <a href="#" class="btn btn-info wide" data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-cart"></i>
                          Bid Now
                        </a>
                      @endif 
                        </li>
                   @endif
                  @else
                    <li class="list-inline-item">
                      <a href="#" class="btn btn-info wide" data-toggle="modal" data-target="#exampleModal2">
                        <i class="icon-cart"></i>
                        Bid Now
                      </a> 
                    </li>                   
                  @endif
              </li>
            </ul>
            <!----BIDDING MODAL---->
              <div id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade overview">
                <div role="document" class="modal-dialog">
                  <div class="modal-content">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="icon-close"></i></span></button>
                    <h3 style="margin-left: 30px; margin-top: 15px;" class="modal-title">Live Biddings</h3>
                    <h6 style="margin-left: 30px; margin-top: 15px;">Starting Amount: {{$timer->minimum_amount}}</h6>
                    <div class="modal-body"> 
                      <div class="card-content">
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <b><b>
                              <br>
                            <tr>
                              <th>User</th>
                              <th>Amount</th>
                              <th>Quantity</th>
                              <th>Bid at</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($biddetails as $bid)
                              @foreach ($users as $user )
                                @if($bid->user_id == $user->id && $bid->product_id == $product->id ) 
                                <tr>
                                  <td>{{$user->name}}</td>
                                  <td>{{$bid->amount}}</td>
                                  <td>{{$bid->qty}}</td>
                                  <td>{{$bid->created_at->diffForHumans()}}</td>
                                </tr>
                               @endif
                              @endforeach
                            @endforeach
                            </tbody>
                          </table>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="table-responsive">
                          <table class="table table-borderless">
                            <thead>
                            <tr>
                              <form class="form" method="post" action="{{url('/save_bid')}}">
                                @csrf
                              <th>
                                <input type="text" class="form-control" name="amount" placeholder="Place your bidding amount here">
                                <input type="hidden" name="product" value="{{$product->id}}">
                              </th>
                              <th>
                                <input type="text" name="qty" class="form-control" Placeholder="Quantity" />
                              </th>
                              <th>
                                <center><button style="display: inline-block;"type="submit" class="btn btn-info">Add Bid</button></center>
                              </th>
                            </form>
                            </tr>
                            </thead>
                          </table>
                        </div>
                     </div>
                    </div>
                  </div>
                </div>
              </div>
            <!----BIDDING MODAL END---->

            <!----LOGIN MODAL---->
              <div id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade overview">
                <div role="document" class="modal-dialog w-50">
                  <div class="modal-content">
                    <section id="basic-examples">
                      <div class="row match-height text-center">
                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card border-0">
                            <div class="card-content">
                              <a href="{{route('login')}}">
                                <img class="card-img img" src="{{asset('/images/login.png')}}" alt="login" style="height: 100px; width: 100px;">
                              </a>  
                              <div class="card-body">
                                <a href="{{route('login')}}">
                                  <h5 class="card-title">Login</h5>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card border-0">
                            <div class="card-content">
                              <a href="{{route('register')}}">
                                <img class="card-img img" src="{{asset('/images/register.png')}}" alt="register" style="height: 100px; width: 100px;">
                              </a>
                              <div class="card-body">
                                <a href="{{route('register')}}">
                                  <h5 class="card-title">Registration</h5>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                       
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            <!----LOGIN MODAL END---->
          </div>
        </div>
      </div>
    </section>
    
    
    <section class="product-description no-padding">
      <div class="container">
        <ul role="tablist" class="nav nav-tabs flex-column flex-sm-row">
          <li class="nav-item"><a data-toggle="tab" href="#description" role="tab" class="nav-link active">Description</a></li>
          <li class="nav-item"><a data-toggle="tab" href="#additional-information" role="tab" class="nav-link">Venders' Information</a></li>
          <li class="nav-item"><a data-toggle="tab" href="#reviews" role="tab" class="nav-link">More From Vendor</a></li>
        </ul>
        <div class="tab-content">
          <div id="description" role="tabpanel" class="tab-pane active">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. LOLUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. LOLDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. LOLUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. LOLDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          
          <div id="additional-information" role="tabpanel" class="tab-pane">
            @foreach ($users as $user)
            @if($product->user_id == $user->id)
            <table class="table">
              <tbody>
                <tr>
                  <th class="border-0">Company Name:</th>
                  <td class="border-0">{{$user->company_name}}</td>
                </tr>
                <tr>
                  <th>Vender Name:</th>
                  <td>{{$user->name}}</td>
                </tr>
                <tr>
                  <th>Location:</th>
                  <td>{{$user->address}}</td>
                </tr>
                <tr>
                  <th>Company Email:</th>
                  <td>{{$user->company_email}}</td>
                </tr>
                <tr>
                  <th>Company Contact:</th>
                  <td>{{$user->phone_number}}</td>
                </tr>
              </tbody>
            </table>
            @endif
            @endforeach
          </div>

          <!-----VENDOR PRODUCTS START----->
          <div id="reviews" role="tabpanel" class="tab-pane">
            <div class="row">
              
              @foreach ($allproducts as $products)
                @if($products->user_id == $product->user_id)
              <div class="item col-xl-4 col-md-6">
                <div class="product">
                  <div class="image d-flex align-items-center justify-content-center">
                    
                    @foreach ($all_img as $pro)
                      @if($products->id == $pro->product_id )

                                <?php

                                $image = $pro->image;
                                $res1=trim($image,"[");
                                $res2=trim($res1,"]");
                                $arr=explode(",", $res2);

                                $img1=substr($arr[0], 0,-1);
                                $img1=substr($img1, 1);

                                ?>
                    <img src="{{asset('/images/'.$img1)}}" alt="product" class="img-fluid">
                      @endif
                    @endforeach

                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center">
                          <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                          <a href="{{url('website/single_product', $product->id)}}" class="visit-product active"><i class="icon-search"></i>View</a>
                      </div>
                    </div>
                  </div>
                  <div class="title"><small class="text-muted">{{$products->product_type}}</small><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">{{$products->product_name}}</h3></a><span class="price text-muted">Rs {{$products->per_unit_price}}</span></div>
                </div>
              </div>
                @endif
              @endforeach
              

              
            </div>
            <nav aria-label="page navigation example" class="d-flex justify-content-center">

              <span style="font-weight:normal;">
                {{$allproducts->links('website.layouts.pagination')}}
              </span>
              
            </nav>
          </div>
          <!-----VENDOR PRODUCTS END----->
        </div>
      </div>
    </section>
    @endforeach
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<!-- Display the countdown timer in an element -->
@if($product->is_bid == '1')
<?php 

foreach($countdown as $timer){
  if($product->id==$timer->product_id){

  $date=date_create($timer->bidding_end);
  $finaldate = date_format($date,"M d, Y h:m:s"); 
  //echo $finaldate;
  }
}
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
@endif
@include('website.layouts.footer')
@endsection