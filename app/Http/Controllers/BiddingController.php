<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Categories;
use App\Models\User;
use App\Models\BiddingDetail;
use App\Models\Bidding;
use App\Models\Product;
use App\Models\Product_image;
use Illuminate\Support\Facades\Auth;


class BiddingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function addbid(Request $request) {
    	$this->validate($request, array(
            'amount' => 'required',
        ));

    	$data = new BiddingDetail;
    	$data->user_id = Auth::user()->id;
    	$data->product_id = $request->input('product');
    	$data->amount = $request->input('amount');
		$data->qty = $request->input('qty');
		$data->status = 'Pending';

    	//$article->datetime = Carbon::now();
    	$data->save();
    	return redirect()->back();
    }

    public function biddings()
    {   
        $id = Auth::user()->id;
        $biddings = Bidding::where('created_by',$id)
        ->orderBy('id', 'desc')
        ->get();
        $mybiddings = BiddingDetail::where('user_id',$id)
        ->where('status','=','Pending')
        ->orderBy('created_at', 'desc')
        ->get();
        $products_img = Product_image::get();
        return view('bidding/biddings')->with(compact('biddings','products_img','mybiddings'));
    }

    public function accepted_bids()
    {   
        $id = Auth::user()->id;
        $mybiddings = BiddingDetail::where('user_id',$id)
        ->where('status','=','Accepted')
        ->orderBy('created_at', 'desc')
        ->get();
        return view('bidding/accepted_bids')->with(compact('mybiddings'));
    }


    public function single_bidding($id)
    {   
        $biddings_detail = BiddingDetail::where('product_id',$id)->get();
        $biddings = Bidding::get();
        $users = User::get();
        return view('bidding/single_bidding')->with(compact('biddings_detail','biddings','users'));
    }

    public function reject($id)
    {   
        $data = BiddingDetail::find($id);
        $data->status = "Rejected";
        $data->save();
        return back()->with('success','Successfull!');
    }
    

    public function update($id)
    {   
        $data = BiddingDetail::find($id);
        $data->status = "Accepted";
        $data->save();
        return back()->with('message', 'Successfull!');
    }

    public function your_bids()
    {
         $id = Auth::user()->id;
        $biddings = Bidding::where('created_by',$id)
        ->orderBy('id', 'desc')
        ->get();
        $mybiddings = BiddingDetail::where('user_id',$id)
        ->where('status','=','Pending')
        ->orderBy('created_at', 'desc')
        ->get();
        $products_img = Product_image::get();
        return view('bidding/your_bids')->with(compact('biddings','products_img','mybiddings'));
    }

}
