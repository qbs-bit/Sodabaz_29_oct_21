<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Support;
use DB;
use Mail;

class SupportController extends Controller
{
    public function showsupport()
    {

        $msg = Support::orderBy('id', 'desc')->get();
        return view('support',compact('msg'));
    }


  
     public function basic_email() 
     {
      
      $data=['name'=>"Hassan Saeed",'data'=>"Testing Email 1 2 3"];
      $user['to']='qbs.hassansaeed@gmail.com';
      Mail::send('mail',$data,function($messages) use ($user){
      	$messages->to($user['to']);
      	$messages->subject('Hello mic testing');

      });
      echo "Basic Email Sent. Check your inbox.";
   }

}
