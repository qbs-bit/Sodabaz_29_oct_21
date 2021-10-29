<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interest;

use Illuminate\Support\Facades\Auth;

class InterestController extends Controller
{
    public function create(Request $request)
    {
    	return $request->all();
        //$user_id = Auth::user()->id;
        //$data = new Interest();
        //$data->user_id = $user_id;
        //$data->interest = $interest;
        //$data->save();
        //return back()->with("Added Successfully");
    }
}
