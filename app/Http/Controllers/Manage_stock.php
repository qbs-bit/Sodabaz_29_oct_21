<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Stock;

use Illuminate\Support\Facades\Auth;





class Manage_stock extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $products = Product::where('user_id',$user_id)->get();
        return view('inventory.manage_stock')->with(compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user_id = Auth::user()->id;
        $stock = new Stock();
        $stock->user_id = $user_id;
        $stock->product_id = $request->product_id;
        $stock->per_unit_price = $request->per_unit_price;
        $stock->unit = $request->unit;
        $stock->quantity = $request->quantity;
        $stock->total_amount = $request->total_amount;
        $stock->created_by = $user_id;
        $stock->updated_by = $user_id;
        $stock->save();
        return back()->with("Stock Added Successfully");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function showproductunit($product_id){

     //   $products = Product::where('id',$product_id)->get();


       $products = Product::join('units','products.unit_id','=','units.id')
        ->select('products.*', 'units.unit')
        ->where('products.id',$product_id)->get(); 

        return json_encode($products);
    }


}
