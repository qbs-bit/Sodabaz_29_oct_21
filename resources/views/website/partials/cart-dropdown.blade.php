<!---
<style type="text/css">
  #cartbtn:hover{
    background-color:#0a879a;
  }
</style>
  
  <div aria-labelledby="cartdetails" class="dropdown-menu">
       cart item
   @if(count(\Cart::getContent()) > 0)
    @foreach(\Cart::getContent() as $item)
      <div class="dropdown-item cart-product">
        <div class="d-flex align-items-center">
          <div class="img">
            <img src="{{asset('/images/'.$item->attributes->image)}}" alt="..." class="img-fluid">
        </div>
        <div class="details d-flex justify-content-between">
          <div class="text"> <a href="#"><strong>{{$item->name}}</strong></a><small>Quantity: {{$item->quantity}} </small><span class="price">{{ \Cart::get($item->id)->getPriceSum() }} </span></div>
          </div>
        </div>
      </div>
      @endforeach
       total price
      <div class="dropdown-item total-price d-flex justify-content-between"><span>Total</span><strong class="text-black">{{ \Cart::getTotal() }}</strong></div>
      call to actions
      <div class="dropdown-item CTA d-flex">
        <a id="cartbtn" href="{{url('website/cart')}}" class="btn btn-info wide">
          View Cart
        </a>
        <a id="cartbtn" href="{{url('website/checkout')}}" class="btn btn-info wide">
          Checkout
        </a>
      </div>
    </div>
    @else
    	<li class="list-group-item">Your Cart is Empty</li>
	@endif
  --->