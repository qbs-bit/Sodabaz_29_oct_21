<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BiddingDetail;
use App\Models\Rfq;
use App\Models\order_details;
use App\Models\orders;
use Illuminate\Support\Facades\DB;
use \GuzzleHttp\Client;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::user()->id;

        $rfq = DB::select("select count(*) as totalrfq from rfqs where status='Accepted' AND user_id='$id'");

        $bid = DB::select("select count(*) as totalbid from bidding_details where status='Accepted' AND user_id='$id'");

        $order = DB::select("select count(*) as totalorder from order_details where vender_id='$id'");

        $msgs = DB::select("select count(*) as totalmsgs from ch_messages");

         $mills = DB::select("select count(*) as totalmills from users where role_id='2'");
      $transporters = DB::select("select count(*) as totaltransporters from users where role_id='3'");

      $agents = DB::select("select count(*) as totalagents from users where role_id='4'");

        $recent_orders = orders::orderBy('id', 'DESC')->LIMIT(6)->get();

        /*
        $client = new client();
        $data2 = $client->get('http://jsonplaceholder.typicode.com/users');
       $data = json_decode($data2->getBody());
    */
        return view('home')->with(compact('rfq','bid','order','recent_orders','msgs','mills','transporters','agents'));
    }
    
}
