@extends('frontend.layouts.app')
@section('content')


@foreach($transport as $t)
@foreach($location as $l)

@if($t->id == $l->service_id)


@endif
@endforeach
@endforeach








@foreach($single_order as $order)
@endforeach
	<b><h3 class="checkout-sep">	&nbsp;&nbsp;&nbsp;&nbsp; Your Order</h3></b>
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
            </div>
             <!------------------------ TRANSPORTERS --------------->

            <div class="col-lg-12">
              <div class="card">
                  <div class="card-body">
                    <!-- Task List table -->
                    @foreach($transport as $transport)
                    <div class="table-responsive">
                      <table id="{{$transport->id}}" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
                        <thead>
                          <tr>
                            <th class="text-center">
                                
                                <!-- layered -->
                                    <div class="layered layered-category">
                                        <div class="layered-content">
                                            <ul class="tree-menu">
                                                
                                                <li class="active">
                                                    <span></span><a href="#"><b>{{$transport->user->name}}</b></a>
                                                        <ul>
                                                            <table id="{{$transport->id}}" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
                                                            <thead>
                                                              <tr>
                                                                <th class="text-center">
                                                                    <b>Transporter</b>
                                                                </th>
                                                                <th class="text-center">
                                                                    <b>Price Per Unit</b>
                                                                </th>
                                                                <th class="text-center">
                                                                    <b>Delivery Location</b>
                                                                </th>
                                                                <th class="text-center">
                                                                    <b>Delivery In</b>
                                                                </th>
                                                                <th class="text-center">
                                                                    <b>Action</b>
                                                                </th>
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                            
                                                            @foreach($location as $lo)

                                                                @if($transport->id == $lo->service_id)
                                                                    <form method="post" action="{{url('transporter/send_request')}}">
                                                              <tr>
                                                                <td class="text-center">
                                                                    {{$lo->location->user->name}}
                                                                </td>
                                                                <td class="text-center">
                                                                    {{$lo->location->per_unit_price}}
                                                                </td>
                                                                <td class="text-center">
                                                                    {{$lo->locations}}
                                                                </td>
                                                                <td class="text-center">
                                                                    {{$lo->delivery_in}}
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="hidden" name="id" value="{{$lo->id}}" />
                                                                    <input type="hidden" name="order_id" value="{{$order->order_id}}" />
                                                                    @csrf
                                                                     <button type="submit" class="btn btn-primary">Send Request</button>
                                                                 </td>
                                                                </tr>
                                                                </form>
                                                                
                                                                @endif
                                                            @endforeach
                                                                
                                                            </tbody>
                                                        </table>
                                                    </ul>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                     <!-- ./layered -->
                             
                         </th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            
       
            <!------------------------ TRANSPORTERS END ----------->
@endsection