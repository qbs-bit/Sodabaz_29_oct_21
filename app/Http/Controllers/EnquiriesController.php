<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\Categories;
use App\Models\Subcategories;
use App\Models\Units;
use App\Models\EnquiryBidding;
use App\Models\Product;
use DB;

use Illuminate\Support\Facades\Auth;

class EnquiriesController extends Controller
{
    public function view(){
        
        $userId = Auth::user()->id;

    	$category = Categories::where('status','Active')->get();
    	$subcategory = Subcategories::where('status','Active')->get();
        $unit = Units::where('status','Active')->get();
        $category2 = Categories::where('status','Active')->get();
        $products = Product::where('user_id',$userId)->get();
    	return view('enquiries/add')->with(compact('category','unit','subcategory','category2','products'));
    }

    public function save_enquiry(Request $request)
    {
    	
    	$userId = Auth::user()->id;
    	
        $this->validate($request, array(
            'product_name' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'unit_id' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'expected_price' => 'required',
            'ship_to' => 'required',
            'first_delivery' => 'required',
            'payment_term' => 'required',
            'bidding_start' => 'required',
            'bidding_end' => 'required',
          	'file'  => 'required|mimes:pdf,xlsx,zip|max:4999',
        ));

        if($request->hasFile('file')){
                // Get filename with extension
                $filenameWithExt = $request->file('file')->getCLientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('file')->getCLientOriginalExtension();
                // Filename tp store
                $fileNameToStore=$filename.'_'.time().'.'.$extension;
 
               	$path =  $request->file('file')->move(public_path('rfq_files/enquiry_files'),$fileNameToStore);

            }

        $data = new Enquiry();
        $data->user_id   = Auth::user()->id;
        $data->product_name = $request->product_name;
        $data->quantity = $request->quantity;
        $data->unit_id = $request->unit_id;
        $data->category_id = $request->category_id;
        $data->subcategory_id = $request->subcategory_id;
        $data->description = $request->description;
        $data->ship_to = $request->ship_to;
        $data->expected_price = $request->expected_price;
        $data->first_delivery = $request->first_delivery;
        $data->payment_term = $request->payment_term;
        $data->file = $fileNameToStore;
        $data->is_bid = "0";
        $data->status = 'active';
        $data->bidding_start = $request->bidding_start;
        $data->bidding_end = $request->bidding_end;
        $data->save();
        return  back();
    	//return $request->all();


    }

    public function view_enquiries(){

        $id = Auth::user()->id;

        $category = Categories::where('status','Active')->get();
        $subcategory = Subcategories::where('status','Active')->get();
        $enquiry = Enquiry::where('user_id',$id)
        ->where('status','active')->get();
        return view('enquiries/view')->with(compact('category','enquiry','subcategory'));
    }


    public function rejected($id)
    {
        $reject = Enquiry::find($id);
        $reject->status = "rejected";
        $reject->save();
        return back()->with('success','Removed!');
    }


    public function edit($id)
    {
        $user_id = Auth::user()->id;
        $enquiry = Enquiry::where('id',$id)->get();
        return view('enquiries/edit')->with(compact('enquiry'));
    }

    public function update(Request $request)
    {
        $this->validate($request, array(
            'product_name' => 'required',
            'quantity' => 'required',
            'expected_price' => 'required',
            'ship_to' => 'required',
           
            
        ));

        $id = $request->enquiry_id;
        $update = Enquiry::find($id);
        $update->product_name = $request->product_name;
        $update->quantity = $request->quantity;
        $update->ship_to = $request->ship_to;
        $update->expected_price = $request->expected_price;
        $update->save();
        return back()->with('message', 'Successfull!');
    }


    public function addbid(Request $request) {
        $this->validate($request, array(
            'amount' => 'required',
        ));

        $data = new EnquiryBidding;
        $data->bidder_id = Auth::user()->id;
        $data->enquiry_id = $request->input('enquiry');
        $data->amount = $request->input('amount');
        $data->status = 'Pending';
        $data->save();

        //changing add 0 to 1 when bidding starts in equiry table
        $id = $request->input('enquiry');
        $update = Enquiry::find($id);
        $update->is_bid = "1";
        $update->save();


        return redirect()->back();
    }

    public function mybids()
    {
        $id = Auth::user()->id;
        $biddings = Enquiry::where('user_id',$id)
        ->where('is_bid','1')
        ->paginate(4);
        $mybiddings = EnquiryBidding::where('bidder_id',$id)
        ->orderBy('created_at', 'desc')
        ->get();
        return view('enquiries/enquiries_bid')->with(compact('mybiddings','biddings'));
    }


    public function details(Request $request)
    {
        $id = $request->id;
        $enquiries = Enquiry::get();
        $details = EnquiryBidding::where('enquiry_id',$id)
        ->orderBy('created_at','desc')
        ->get();
        $title = EnquiryBidding::where('enquiry_id',$id)->get();
        return view('enquiries/enquiry_bid_details')->with(compact('enquiries','details','title'));
    }


    public function reject($id)
    {   
        $data = EnquiryBidding::find($id);
        $data->status = "Rejected";
        $data->save();
        return back()->with('success','Successfull!');
    }
    

    public function accept($id)
    {   
        $data = EnquiryBidding::find($id);
        $data->status = "Accepted";
        $data->save();
        return back()->with('message', 'Successfull!');
    }


    public function showproductdetails($product_name){

         $products = Product::join('categories','products.cat_id','=','categories.id')
        ->select('products.*', 'categories.category','categories.id')
        ->where('products.id',$product_name)->get(); 

        //dd($products);
        /*$products = DB::select('select products.id, products.product_name, categories.id, categories.category from products inner join categories on products.cat_id = categories.id where products.id ='.$product_name);*/
        return json_encode($products);
    }

    public function getProduct($product_id) {

        $product  = Product::where('id', $product_id)->get(['cat_id', 'sub_cat_id', 'unit_id']);
        return json_encode($product);
    }

}
