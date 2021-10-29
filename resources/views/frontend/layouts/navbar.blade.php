<!-- HEADER -->
<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
                <a class="first-item" href="#"><img alt="phone" src="{{asset('/web-assets/images/phone.png')}}" />Contact Number</a>
                <a href="#"><img alt="email" src="{{asset('/web-assets/images/email.png')}}" />Example@gmail.com</a>
            </div>
  
            <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>My Account</span></a>
                    <ul class="dropdown-menu mega_dropdown" role="menu">
                    
                       <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('frontend/login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('frontend/login') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Hi {{ Auth::user()->name }}
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                <br>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                            </li>
                                
                            
                        @endguest
                    






                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--/.top-header -->


   
    <!-- MAIN HEADER -->
    <div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">
                <a href="#"><img alt="Kute shop - themelock.com" src="{{asset('/web-assets/images/logo.png')}}" /></a>
            </div>
            <div class="col-xs-7 col-sm-7 header-search-box">
                <form class="form-inline">
                      <div class="form-group form-category">
                        <select class="select-category">
                            <option value="2">All Categories</option>
                            <option value="1">Men</option>
                            <option value="2">Women</option>
                        </select>
                      </div>
                      <div class="form-group input-serach">
                        <input type="text"  placeholder="Keyword here...">
                      </div>
                      <button type="submit" class="pull-right btn-search"></button>
                </form>
            </div>
            <div id="cart-block" class="col-xs-5 col-sm-2 shopping-cart-box">
                <a class="cart-link" href="#">
                    <span class="title">Shopping cart</span>
                    <span class="total">{{ \Cart::getTotalQuantity()}} items - {{ \Cart::getTotal() }}</span>
                    <span class="notify notify-left">{{ \Cart::getTotalQuantity()}}</span>
                </a>
                <div class="cart-block">
                    <div class="cart-block-content">
                        <h5 class="cart-title">Your Cart Items</h5>
                        <div class="cart-block-list">
                            <ul>
                                
           
                                
                        @if(count(\Cart::getContent()) > 0)
    @foreach(\Cart::getContent() as $item)
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-3">
                    <img src="/images/{{ $item->attributes->image }}"
                         style="width: 50px; height: 50px;"
                    >
                </div>
                <div class="col-lg-6">
                    <b>{{$item->name}}</b>
                    <br><small>Qty: {{$item->quantity}}</small>
                </div>
                <div class="col-lg-3">
                    <p>${{ \Cart::get($item->id)->getPriceSum() }}</p>
                </div>
                <hr>
            </div>
        </li>
    @endforeach
    <br>
    <li class="list-group-item">
        <div class="row">
            <div class="col-lg-10">
                <b>Total: </b>{{ \Cart::getTotal() }}
            </div>
            <div class="col-lg-2">
                <form action="{{ route('cart.clear') }}" method="POST">
                    {{ csrf_field() }}
                    <button class="btn btn-secondary btn-sm"><i class="fa fa-trash"></i></button>
                </form>
            </div>
        </div>
    </li>
    <br>
    
@else
    <li class="list-group-item">Your Cart is Empty</li>
@endif





                            </ul>
                        </div>
                       
                        <div class="cart-buttons">
                            <a href="#" class="btn-check-out">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>






 