<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class millscontroller extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function update_picture(Request $request)
    {
        if($request->hasFile('image')){
                // Get filename with extension
                $filenameWithExt = $request->file('image')->getCLientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('image')->getCLientOriginalExtension();
                // Filename tp store
                $fileNameToStore=$filename.'_'.time().'.'.$extension;
                // Upload image
                $path = $request->file('image')->move(public_path('storage/users-avatar'),$fileNameToStore);

            }

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->avatar =$fileNameToStore;
        $data->save();

        return back()->with('message', 'Successfull!');
    }


    public function update_profile(Request $request){
    	$this->validate($request, array(

            'stn_ntn' => 'required|max:255',
            'company_email' => 'required',
            'registered_address' => 'required',
            'shipping_method' => 'required',
            'payment_method' => 'required',
            
            ));



        $userId = Auth::user()->id;

    	$updateprofile = User::find($userId);

    	$updateprofile->name = $request->name;
    	$updateprofile->email = $request->email;
    	$updateprofile->company_name = $request->company_name;
    	$updateprofile->website = $request->website;
    	$updateprofile->phone_number = $request->phone_number;
    	$updateprofile->address = $request->address;
    	$updateprofile->stn_ntn	 = $request->stn_ntn;
    	$updateprofile->company_email = $request->company_email;	
    	$updateprofile->registered_address = $request->registered_address;
    	$updateprofile->shipping_method = $request->shipping_method;
    	$updateprofile->payment_method = $request->payment_method;
    	$updateprofile->save();
    	return back()->with('message', 'Profile Completed!');
    	//return "done!";

    }


}
