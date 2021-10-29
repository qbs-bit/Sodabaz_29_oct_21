<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \GuzzleHttp\Client;
use App\Models\Categories;
use App\Models\Subcategories;
use App\Models\Product;
use App\Models\Bidding;
use App\Models\Units;
use App\Models\Product_image;
use App\Models\BiddingDetail;
use App\Models\User;
use App\Models\Role;
use App\Models\Transport_service;
use App\Models\location;
use App\Models\order_details;
use App\Models\orders;
use App\Models\Stock;
use App\Models\Enquiry;
use App\Models\Support;
use App\Models\CompanyAnnouncement;
use App\Models\ProductAnnouncement;
use App\Models\EnquiryBidding;
use DB;

class WebsiteController extends Controller
{
   public function index(Request $request)
    { 
        $yarn = Enquiry::where('category_id','8')->orderBy('quantity','desc')->take(6)->get();
        $fabric = Enquiry::where('category_id','4')->orderBy('quantity','desc')->take(6)->get();
        $finished = Enquiry::where('category_id','9')->orderBy('quantity','desc')->take(6)->get();
        $company = CompanyAnnouncement::orderBy('created_at','desc')->take(4)->get();
        $product = ProductAnnouncement::orderBy('created_at','desc')->take(4)->get();
        return view('website/index',compact('yarn','fabric','finished','company','product'));
    }

    public function getApi()
    {
    	$client = new client();
    	$data = $client->get('http://jsonplaceholder.typicode.com/users?limit=5');
    	//$data = $client->get('https://jsonplaceholder.typicode.com/users?id=3'); --------- for one specefic ID
    	return view('website/index')->with('data', json_decode($data->getBody()));
    }

    

    public function products(Request $request, $id)
    {
        
        
        if($id=='all')
        {
            $products= Product::paginate(9);
            
        }
        else if($id!='all')
        {
            $products= Product::where('cat_id',$id)->paginate(9);
        }/*
        else if($id==$request->search)
        {

            $products= Product::where('product_name','LIKE', '%'. $id .'%')->paginate(9);
        }*/
        $products_img = Product_image::get();
        $categories = Categories::where('status','=','Active')->get();

        return view('website/products',compact('products','products_img','categories'));
    }


    public function searchproduct(Request $request)
    {
        $products= Product::where('product_name','LIKE', '%'. $request->search .'%')->paginate(9);
        $products_img = Product_image::get();
        $categories = Categories::where('status','=','Active')->get();

        return view('website/products',compact('products','products_img','categories'));
    }

    public function single_product($id)
    {
        $products = Product::where('id',$id)->get();
        $products_img = Product_image::where('product_id',$id)->get();
        $biddetails = BiddingDetail::orderBy('id', 'desc')->get();
        $countdown = Bidding::get();
        $allproducts= Product::paginate(9);
        $all_img = Product_image::get();
        
        $bid = BiddingDetail::where('product_id',$id)->get()->last();

        $category = Categories::get();
        $users = User::get();
        $stocks = Stock::get();


       return view('website/single_product',compact('products','products_img','biddetails', 'countdown', 'bid','allproducts','category','all_img','users','stocks'));
    }

    public function support(Request $request)
    {
        $data = new Support;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->message=$request->message;
        $data->save();
        return back();

    }
     public function company_announcements($id)
    {
        $company = CompanyAnnouncement::orderBy('created_at','desc')->take(6)->get();
        $single_company = CompanyAnnouncement::where('id',$id)->get();
        return view('website/company_announcements', compact('company','single_company'));
    }

    public function product_announcements($id)
    {
        $product = ProductAnnouncement::orderBy('created_at','desc')->take(6)->get();
        $single_product = ProductAnnouncement::where('id',$id)->get();
        return view('website/product_announcements', compact('product','single_product'));
    }

    public function single_enquiry($id)
    {
        $enquiry = Enquiry::where('id',$id)->get();
        $bid_details = EnquiryBidding::where('enquiry_id',$id)->orderBy('created_at','desc')->take(4)->get();

       return view('website/single_enquiry',compact('enquiry','bid_details'));
    }

    

    public function about()
    {
        return view('website/about');
    }

    public function gallery()
    {
        return view('website/gallery');
    }

    public function blogs()
    {
        return view('website/blogs');
    }
    public function mills()
    {
        return view('website/mills');
    }
    public function transporters()
    {
        return view('website/transporters');
    }
    public function agents()
    {
        return view('website/agents');
    }
    public function authorities()
    {
        return view('website/authorities');
    }
    
    public function checkout()
    {
        return view('website/checkout');
    }
    public function cart()
    {
        return view('website/cart');
    }

    
    
    

    

    
}
