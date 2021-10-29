<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AgentsController extends Controller
{



    public function update_profile(Request $request){
    	
        $userId = Auth::user()->id;

    	$updateprofile = User::find($userId);

    	$updateprofile->name = $request->name;
    	$updateprofile->email = $request->email;
    	$updateprofile->company_name = $request->company_name;
    	$updateprofile->phone_number = $request->phone_number;
    	$updateprofile->company_email = $request->company_email;
    	$updateprofile->save();
    	return back()->with('message', 'Profile Completed!');
    	//return "done!";

    }
}
