@extends('frontend.layouts.app')
@section('content')
<!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Checkout</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">Checkout</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content checkout-page">
            <h3 class="checkout-sep">1. Checkout Method</h3>
            <div class="box-border">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Checkout as a Guest or Register</h4>
                        <p>Register with us for future convenience:</p>
                        <ul>
                            <li><label><input type="radio" name="radio1">Checkout as Guest</label></li>
                            <li><label><input type="radio" name="radio1">Register</label></li>
                        </ul>
                        <br>
                        <h4>Register and save time!</h4>
                        <p>Register with us for future convenience:</p>
                        <p><i class="fa fa-check-circle text-primary"></i> Fast and easy check out</p>
                        <p><i class="fa fa-check-circle text-primary"></i> Easy access to your order history and status</p>
                        <button class="button">Continue</button>
                    </div>
                    <div class="col-sm-6">
                        <h4>Login</h4>
                        <p>Already registered? Please log in below:</p>
                        <label>Email address</label>
                        <input type="text" class="form-control input">
                        <label>Password</label>
                        <input type="password" class="form-control input">
                        <p><a href="#">Forgot your password?</a></p>
                        <button class="button">Login</button>
                    </div>

                </div>
            </div>
            <form method="post" action="{{url('save_order')}}" >
                @csrf
            <h3 class="checkout-sep">2. Billing Infomations</h3>
            <div class="box-border">
                <ul>
                    <li class="row">
                        <div class="col-sm-6">
                            <label for="first_name" class="required">First Name</label>
                            <input type="text" class="input form-control" name="first_name" id="first_name">
                        </div><!--/ [col] -->
                        <div class="col-sm-6">
                            <label for="last_name" class="required">Last Name</label>
                            <input type="text" name="last_name" class="input form-control" id="last_name">
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    <li class="row">
                        <div class="col-sm-6">
                            <label for="company_name">Company Name</label>
                            <input type="text" name="company_name" class="input form-control" id="company_name">
                        </div><!--/ [col] -->
                        <div class="col-sm-6">
                            <label for="email_address" class="required">Email Address</label>
                            <input type="text" class="input form-control" name="email" id="email">
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    <li class="row"> 
                        <div class="col-xs-12">

                            <label for="address" class="required">Address</label>
                            <input type="text" class="input form-control" name="address" id="address">

                        </div><!--/ [col] -->

                    </li><!-- / .row -->

                    <li class="row">

                        <div class="col-sm-6">
                            
                            <label for="city" class="required">City</label>
                            <input class="input form-control" type="text" name="city" id="city">

                        </div><!--/ [col] -->

                        <div class="col-sm-6">
                            <label class="required">State/Province</label>
                                <select class="input form-control" name="country">
                                    <option value="Alabama">Alabama</option>
                                    <option value="Illinois">Illinois</option>
                                    <option value="Kansas">Kansas</option>
                            </select>
                        </div><!--/ [col] -->
                    </li><!--/ .row -->

                 

                    <li class="row">
                        <div class="col-sm-6">
                            <label for="password" class="required">Password</label>
                            <input class="input form-control" type="password" name="password" id="password">
                        </div><!--/ [col] -->

                        <div class="col-sm-6">
                            <label for="confirm" class="required">Contact</label>
                            <input class="input form-control" type="password" name="contact" id="confirm">
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    
                </ul>
            </div>
            <h3 class="checkout-sep">3. Shipping Information</h3>
            <div class="box-border">
                <ul>
                                    
                    <li class="row">
                        
                        <div class="col-sm-6">
                            
                            <label for="first_name_1" class="required">First Name</label>
                            <input class="input form-control" type="text" name="" id="first_name_1">

                        </div><!--/ [col] -->

                        <div class="col-sm-6">
                            
                            <label for="last_name_1" class="required">Last Name</label>
                            <input class="input form-control" type="text" name="" id="last_name_1">

                        </div><!--/ [col] -->

                    </li><!--/ .row -->

                    <li class="row">
                        
                        <div class="col-sm-6">
                            
                            <label for="company_name_1">Company Name</label>
                            <input class="input form-control" type="text" name="" id="company_name_1">

                        </div><!--/ [col] -->

                        <div class="col-sm-6">
                            
                            <label for="email_address_1" class="required">Email Address</label>
                            <input class="input form-control" type="text" name="" id="email_address_1">

                        </div><!--/ [col] -->

                    </li><!--/ .row -->

                    <li class="row">

                        <div class="col-xs-12">

                            <label for="address_1" class="required">Address</label>
                            <input class="input form-control" type="text" name="" id="address_1">

                        </div><!--/ [col] -->

                    </li><!--/ .row -->

                    <li class="row">

                        <div class="col-sm-6">
                            
                            <label for="city_1" class="required">City</label>
                            <input class="input form-control" type="text" name="" id="city_1">

                        </div><!--/ [col] -->

                        <div class="col-sm-6">

                            <label class="required">State/Province</label>

                            <div class="custom_select">

                                <select class="input form-control" name="">

                                    <option value="Alabama">Alabama</option>
                                    <option value="Illinois">Illinois</option>
                                    <option value="Kansas">Kansas</option>

                                </select>

                            </div>

                        </div><!--/ [col] -->

                    </li><!--/ .row -->

                    <li class="row">

                        <div class="col-sm-6">

                            <label for="postal_code_1" class="required">Zip/Postal Code</label>
                            <input class="input form-control" type="text" name="" id="postal_code_1">

                        </div><!--/ [col] -->

                        <div class="col-sm-6">

                            <label class="required">Country</label>

                            <div class="custom_select">

                                <select class="input form-control" name="">
                                    
                                    <option value="USA">USA</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Canada">Canada</option>

                                </select>

                            </div>

                        </div><!--/ [col] -->

                    </li><!--/ .row -->

                    <li class="row">

                        <div class="col-sm-6">

                            <label for="telephone_1" class="required">Telephone</label>
                            <input class="input form-control" type="text" name="" id="telephone_1">

                        </div><!--/ [col] -->

                        <div class="col-sm-6">

                            <label for="fax_1">Fax</label>
                            <input class="input form-control" type="text" name="" id="fax_1">

                        </div><!--/ [col] -->

                    </li><!--/ .row -->

                </ul>
    
            </div>
            <h3 class="checkout-sep">4. Shipping Method</h3>
            <div class="box-border">
                <ul class="shipping_method">
                    <li>
                        <p class="subcaption bold">Free Shipping</p>
                        <label for="radio_button_3"><input type="radio" checked name="radio_3" id="radio_button_3">Free $0</label>
                    </li>

                    <li>
                        <p class="subcaption bold">Free Shipping</p>
                        <label for="radio_button_4"><input type="radio" name="radio_3" id="radio_button_4"> Standard Shipping $5.00</label>
                    </li>
                </ul>
                
            </div>


            <h3 class="checkout-sep">5. Payment Information</h3>
            <div class="box-border">
                <ul>
                    <li>
                        <label for="radio_button_5"><input type="radio" checked name="radio_4" id="radio_button_5"> Check / Money order</label>
                    </li>

                    <li>
            
                        <label for="radio_button_6"><input type="radio" name="radio_4" id="radio_button_6"> Credit card (saved)</label>
                    </li>

                </ul>
                
            </div>

            


            <h3 class="checkout-sep">6. Order Review</h3>
            <div class="box-border">
                <table class="table table-bordered table-responsive cart_summary">
                    <thead>
                        <tr>
                            <th class="cart_product">Image</th>
                            <th class="cart_product">Product</th>
                            <th>Unit price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($cartCollection as $item)
                        <tr>
                            <td>
                            <img src="{{asset('/images/'.$item->attributes->image) }}" class="img-thumbnail" width="200" height="200">
                             </td>
                            <td class="cart_product">
                                {{$item->name}}
                            </td>
                            <td class="price"><span class="text-center">{{ $item->price }}</span></td>
                            <td class="qty">
                                <input class="form-control input-sm" readonly type="text" value="{{ $item->quantity }}">
                            </td>
                            <td class="price">
                                <span>${{ \Cart::get($item->id)->getPriceSum() }}</span>
                            </td>
                        </tr>
                    @endforeach

            
                    </tbody>
                    <tfoot>
                        
                        <tr>
                            <td colspan="3"><strong>Total</strong></td>
                            <td colspan=""><strong>{{ \Cart::getTotal() }}</strong></td>
                            <td colspan=""></td>
                        </tr>
                    </tfoot>    
                </table>
                <button class="button pull-left">Update Cart</button>
                <button type="submit" class="button pull-right">Place Order</button>
            </form>
            </div>
        </div>
       
    </div>
</div>

<!-- ./page wapper-->

@endsection