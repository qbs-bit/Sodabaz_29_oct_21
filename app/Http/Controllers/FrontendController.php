<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;







class FrontendController extends Controller
{
    public function index()
    {
        $categories = Categories::get();
        $subcategories = Subcategories::get();
        $products = Product::get();

        return view('frontend/index')->with(compact('categories','subcategories','products'));

    }


    public function transporters()
    {
        

        return view('frontend/checkout')->with(compact('transport','location'));

    }


    public function category($id)
    {
        $category = Categories::where('id',$id)->get();
        $products = Product::where('cat_id',$id)->get();
        $subcategories = Subcategories::where('category_id',$id)->get();
        $product_img = Product_image::all();

        //$bid_products = Product::where('is_bid','1')->get();

        return view('frontend/category',compact('products', 'subcategories', 'product_img','category'));
    }

    public function orders()
    {
        return view('frontend/orders');
    }

    public function view_order()
    {   
        $id = Auth::user()->id;
        $single_order = order_details::where('id',$id)->orderBy('id', 'DESC')->take(1)->get();
        $cartCollection = \Cart::getContent();
        $transport = Transport_service::all();
        //$transport = DB::table('transport_services')->groupBy('user_id')->get();
        $location = location::all();
       
        return view('frontend/view_order')->with(['cartCollection' => $cartCollection, 'transport' => $transport, 'location'=> $location, 'single_order'=> $single_order ]);


    }


    public function login()
    {
        return view('frontend/login');
    }


    public function single_product($id)
    {
        $products = Product::where('id',$id)->get();
        $products_img = Product_image::where('product_id',$id)->get();
        $biddetails = BiddingDetail::all();
        $countdown = Bidding::all();
        
        $bid = BiddingDetail::where('product_id',$id)->get()->last();

        $category = Categories::get();
        $subcategory = Subcategories::get();
        $users = User::where('status','pending')->get();


       return view('frontend/single_product',compact('products','products_img','biddetails', 'countdown', 'bid','category','subcategory','users'));
        //return $bid;
    }

    
    public function user_register(Request $request){
        $this->validate($request, array(
            'name' => 'required',
            'email'=> 'required',
            'password' => 'required',
            'phone_number' => 'required',
        ));



       
        /*
        $roles = role::where('role','normal_user')->get();

        $role = $roles->role;

        $role_id="";
        if($role === null){
        $nrole = new role;
        $nrole->role = $request->role;
        $nrole->status = 'pending';
        $nrole->save();
        $role_id = $nrole->id;
        }else{
        $role_id = $roles->id; 
        }
*/
$fourRandomDigit = rand(1000,9999);
       $user = User::create([
            'name' => $request['name'],
            'company_name' => 'normal_user',
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role_id' => $request['role'],
            'phone_number'=>$request['phone_number'],  
            'verification_code' => $fourRandomDigit, 
        ]);

        Auth::login($user);
        return redirect()->route('frontend/index');

     }

}
