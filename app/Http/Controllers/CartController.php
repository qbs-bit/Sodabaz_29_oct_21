<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\orders;
use App\Models\order_details;
use App\Models\Transport_service;
use App\Models\location;


use Cart;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function shop()
    {
        $products = Product::all();
        //dd($products);
        return view('shop/shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['products' => $products]);
    }

    public function cart()  {
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);
        return view('frontend/cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);;
    }


    public function add(Request $request){

        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'vender_id' => $request->vender_id,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
                'slug' => $request->slug,
            )
        ));

        return redirect()->route('cart.index')->with('success_msg', 'Item is Added to Cart!');
    

    }

    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');
    }


    public function viewcart(){
    $cartCollection = \Cart::getContent();  

    return \Cart::getTotal();
    }


    public function checkout(){

    $cartCollection = \Cart::getContent();
    $transport = Transport_service::get();
    $location = location::get();
    
        return view('frontend/checkout')->with(['cartCollection' => $cartCollection, 'transport' => $transport, 'location'=> $location ]);
    }

    public function save_order(Request $request){


    $cartCollection = \Cart::getContent();
    
    $order = new orders;

    $order->total_amount = \Cart::getTotal();
    $order->customer_id = $request->customer_id;
    $order->status = 'pending';
    
    $order->save();
    $order_id  =  $order->id;

    foreach($cartCollection as $items){
        $order_detail = new order_details;

        $order_detail->product_id = $items->id;
        $order_detail->vender_id = $items->vender_id;
        $order_detail->order_id = $order_id;
        
        $order_detail->unit_price = $items->price;
        $order_detail->quantity = $items->quantity;
        $order_detail->total_amount = $items->quantity * $items->price;
        $order_detail->status = 'pending';
        
        $order_detail->save();

        $o_id = $order_detail->id;
        //$this->view_order($o_id);


        //$single_order = order_details::where('id',$o_id)->get();


    }
        //return redirect('frontend/view_order');
        //return redirect('website/thankyou');
        return redirect('website/thankyou');
    
}


/*--------------website cart functions start from here--------------*/



    public function cartadd(Request $request){

        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'vender_id' => $request->vender_id,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
                'slug' => $request->slug,
            )
        ));

        return redirect('website/cart')->with('success_msg', 'Item is Added to Cart!');
    
    }



    public function cartupdate(Request $request){
        
        \Cart::update($request->id,
            array(
                'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
                ),
        ));
      return redirect('website/cart')->with('success_msg', 'Item updated!');
        
    }

    public function cartcart()  {
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);
        return view('website/cart')->with(['cartCollection' => $cartCollection]);
    }


    public function cartviewcart(){
    $cartCollection = \Cart::getContent();  

    return \Cart::getTotal();
    }


    public function cartclear(){
        \Cart::clear();
        return redirect('website/cart')->with('success_msg', 'Cart is cleared!');
    }

    public function itemremove(Request $request){
        \Cart::remove($request->id);
        return redirect('website/cart')->with('success_msg', 'Item is removed!');
    }

    public function cartcheckout(){

    $cartCollection = \Cart::getContent();
    $transport = Transport_service::get();
    $location = location::get();
    
        return view('website/checkout')->with(['cartCollection' => $cartCollection, 'transport' => $transport, 'location'=> $location ]);
    }

    public function thankyou()
    {
        Cart::clear();
        return view('website/thankyou');
        //return session();
    }


}
