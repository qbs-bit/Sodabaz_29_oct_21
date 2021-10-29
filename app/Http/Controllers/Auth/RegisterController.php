<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\UserController;


use Illuminate\Http\Request;
use Twilio\Rest\Client;





class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone_number' => ['required', 'max:11','unique:users'],
            'role_id' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
         /* Get credentials from .env */
         $token = getenv("TWILIO_AUTH_TOKEN");
         $twilio_sid = getenv("TWILIO_SID");
         $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
 
         $twilio = new Client($twilio_sid, $token);
 
         $fourRandomDigit = rand(1000,9999);
         $twilio->messages->create(
             // the number you'd like to send the message to
                 '+923123731971',
            array(
                  // A Twilio phone number you purchased at twilio.com/console
                  'from' => '+15096318095',
                  // the body of the text message you'd like to send
                  'body' => $fourRandomDigit,
              )
          );
         
          User::create([
            'name' => $data['name'],
            'company_name' => $data['company_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
            'phone_number'=>$data['phone_number'],  
            'verification_code' => $fourRandomDigit, 
        ]);

        
        return redirect()->route('verify')->with(['phone_number' => $data['phone_number']]);
    }


    protected function verify(Request $request)
    {
        $data = $request->validate([
            'verification_code' => ['required', 'numeric'],
            'phone_number' => ['required', 'string'],
        ]);
        
       $users = User::where('phone_number','=', $data['phone_number'])->where('verification_code','=',$data['verification_code'])->get();

       
    if(!count($users)){

    return back()->with(['phone_number' => $data['phone_number'], 'error' => 'Invalid verification code entered!']);
    }else{
   
        $user = tap(User::where('phone_number', $data['phone_number']))->update(['isVerified' => true]);
        /* Authenticate user */
        Auth::login($user->first());
        return redirect()->route('home')->with(['message' => 'Phone number verified']);
   

    }
    
    }

}
