<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Role;

//require_once 'vendor/autoload.php';
//require __DIR__.'vendor/autoload.php';

    
use Twilio\Rest\Client;



class admincontroller extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    //Profile Functions Start

    public function view_password()
    {
      return view('change_password');
    }

    public function change_password(Request $request)
    {

      $request->validate([
        'current_password' => ['required', new MatchOldPassword],
        'new_password' => ['required'],
        'confirm_new_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

      return back();

    }

    public function users($id)
    {
      $users = User::where('role_id',$id)->get();
      return view('users',compact('users'));
    }


    public function profile()
    {
      return view('admin_profile');
    }


    public function update_profile(Request $request){
      

      $userId = Auth::user()->id;
      $updateprofile = User::find($userId);

      $updateprofile->name = $request->name;
      $updateprofile->email = $request->email;
      $updateprofile->save();
      return back()->with('message', 'Updated!');
      //return "done!";

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

        return back()->with('message', 'Successfull!')
        ->with('image',$fileNameToStore);
    }




    //Profile Functions end


public function view_requests(Request $request){

    $role_id = $request->role_val;

//$users = User::where('status','=','pending')->get();
   // $roles = role::where('id','>',1)->get();

   // return view('view_request')->with(compact('users','roles'));

     $role_id = $request->role_val;
     $users = User::where('status','=','pending')->get();
     $roles = role::where('id','>',1)->get();
       return view('view_request')->with(compact('users','roles','role_id'));
 


   if($role_id > 0){
    $users = User::where('status','=','pending')->where('role_id','=',$role_id)->get();
    $roles = role::where('id','>',1)->get();

    return view('view_request')->with(compact('users','roles','role_id'));
   }else{
    $users = User::where('status','=','pending')->get();
    $roles = role::where('id','>',1)->get();
      return view('view_request')->with(compact('users','roles','role_id')); 
   }

}
public function view_users(){

    $users = User::where('status','=','approved')->get();

    return view('view_users')->with(compact('users'));
}


public function show_requests(Request $request){

    $role_id = $request->role_val;

    $users = User::where('status','=','pending')->where('role_id','=',$role_id)->get();
    $roles = role::where('id','>',1)->get();

    return view('view_request')->with(compact('users','roles'));
//return $users;

}



public function view_profile($request){

$data = User::where('id','=',$request)->get();
//return $data; 
return view('viewprofile')->with(compact('data'));
}


public function approve_profile($request){

  $affectedRows = User::where('id','=',$request)->update(array('status' => 'approved'));
  return redirect('/view_users');
}


public function cancel_profile($request){

    $affectedRows = User::where('id','=',$request)->update(array('status' => 'cancel'));
  return redirect('/view_users');
  }
  

public function sendsms(){


    // Update the path below to your autoload.php,
    // see https://getcomposer.org/doc/01-basic-usage.md
   
    
    // Find your Account Sid and Auth Token at twilio.com/console
    // and set the environment variables. See http://twil.io/secure
    $sid = getenv("TWILIO_ACCOUNT_SID");
    $token = getenv("TWILIO_AUTH_TOKEN");
    $twilio = new Client($sid, $token);
    
    $message = $twilio->messages("MM800f449d0399ed014aae2bcc0cc2f2ec")
                      ->fetch();
    
    print($message->body);

}

public function enquiry_fields(){

      return view('/enquiry_fields');
  }


}
