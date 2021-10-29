<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Subcategories;
use App\Models\Product;
use App\Models\Bidding;
use App\Models\Units;
use App\Models\Product_image;
use App\Models\Stock;



use Illuminate\Support\Facades\Auth;


class Manage_product extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $category = Categories::where('user_id',$user_id)->where('status','Active')->get();
        $unit = Units::where('user_id',$user_id)->where('status','Active')->get();
        

        return view('inventory.manage_product')->with(compact('category','user_id','unit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $userId = Auth::user()->id;
        $this->validate($request, array(
            'product_name' => 'required',
            'cat_id' => 'required',
            'unit_id' => 'required',
            'product_code' => 'required',
            'product_type' => 'required',
            'per_unit_price' => 'required',
        ));

        $product = new Product();
        $product->user_id   = Auth::user()->id;
        $product->cat_id = $request->cat_id;
        $product->unit_id = $request->unit_id;
        $product->product_code = $request->product_code;
        $product->product_type = $request->product_type;
        $product->product_name = $request->product_name;
        $product->dimensions = $request->dimensions;
        $product->per_unit_price = $request->per_unit_price;
        //$product->quantity = $request->quantity;
        $product->status = $request->status;
        $product->created_by = Auth::user()->id;
        $product->updated_by = Auth::user()->id;
        $product->is_bid = $request->is_bid;
        $product->status = 'active';
       
        $product->save();
        $product_id = $product->id;

        
        if($files=$request->file('files')){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move(public_path('images'),$name);  
                $data[] = $name; 
                 }

           
         $product_image = new Product_image();
         $product_image->product_id = $product_id;
         $product_image->image = json_encode($data);
         
        
        $product_image->save();
        }
    
        if($request->is_bid == 1){
            $bidding = new Bidding();
            $bidding->product_id = $product_id;
            $bidding->bidding_start = $request->bidding_start;
            $bidding->bidding_end = $request->bidding_end;
            $bidding->minimum_amount = $request->minimum_amount;
            $bidding->maximum_amount = $request->maximum_amount;
            $bidding->is_bid = $request->is_bid;
            $bidding->created_by = Auth::user()->id;
            $bidding->updated_by = Auth::user()->id;
            $bidding->deleted_at = date('y-m-d');
            $bidding->deleted_by = 'null';
             $bidding->save();
        }
        


        return back()->with('message', 'product Added Successfully');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = Auth::user()->id;
        $category = Categories::where('user_id',$user_id)->where('status','Active')->get();
        $unit = Units::where('user_id',$user_id)->where('status','Active')->get();
        
        $products = Product::where('id',$id)->get();
        

        return view('inventory.edit_product')->with(compact('category','user_id','unit','products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, array(
            'product_name' => 'required',
            'cat_id' => 'required',
            'dimensions' => 'required',
            'per_unit_price' => 'required',
            'quantity' => 'required',
        ));

        $id = $request->id;
        $update = Product::find($id);
        $update->cat_id = $request->cat_id;
        $update->unit_id = $request->unit_id;
        $update->product_type = $request->product_type;
        $update->product_name = $request->product_name;
        $update->dimensions = $request->dimensions;
        $update->per_unit_price = $request->per_unit_price;
        //$update->quantity = $request->quantity;
        $update->save();

        return back()->with('message', 'Successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Product::find($id);
        $del->delete();
        return back()->with('success','Removed!');
    }

    /*
    public function getsubcat(Request $request){
    $cat_id = $request->cat_id;

    $subcategory = Subcategories::where('category_id',$cat_id)->get();
    
foreach ($subcategory as $user) {
    return $user->category;
}
   
    }


    public function showsubcat($cat_id){

        $subcategory = Subcategories::where('category_id',$cat_id)->get();
        return json_encode($subcategory);
    }
    */


    public function upload(Request $request)
    {
     
      $image = $request->file('file');
       
      $imageName = time().'.'.$image->extension();
    
    //return $img_array[$imageName];
    
    
      $image->move(public_path('images'),$imageName);
    
      return response()->json(['success'=>$imageName]);
    }


    public function view_products(){

    $userId = Auth::user()->id;

    /*$products = Product::join('units','products.unit_id','=','units.id')
    ->join('categories','products.cat_id','=','categories.id')
    ->select('products.*', 'units.unit','categories.category')
    ->get(); */
    $products = Product::where('user_id',$userId)
    ->orderBy('created_at','desc')
    ->get();
    $stocks = Stock::get();
    return view('inventory.view_products')->with(compact('products','stocks'));
    }
}
