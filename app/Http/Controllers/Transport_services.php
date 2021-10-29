<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transport_service;
use App\Models\TransportRequest;
use App\Models\location;
use App\Models\AcceptedRequest;
use App\Models\order_details;

use Illuminate\Support\Facades\Auth;



class Transport_services extends Controller
{
    public function index(){

        $service = Transport_service::all();
        $location = location::all();
        return view('services')->with(compact('service', 'location'));
    }

    public function add_services(){

        return view('add_services');

    }

    public function single_request($id)
    {
        
        $s_request = TransportRequest::where('id',$id)->get();
        $details = order_details::get();
        return view('single_request')->with(compact('s_request','details'));

    }

    public function view_accepted_requests()
    {
        
        $accepted_request = AcceptedRequest::all();
        return view('accepted_requests')->with(compact('accepted_request'));

    }

    public function save_accepted_requests(Request $request){

        $accepted_request = new AcceptedRequest();

        $accepted_request->acceptor_id = Auth::user()->id;
        $accepted_request->requestor_id = $request->requestor_id;
        $accepted_request->amount = $request->amount;
        $accepted_request->location = $request->location;
        $accepted_request->delivery_in = $request->delivery_in;
        
        $accepted_request->save();
        return back();

    }

    public function view_requests()
    {
       
        $requests = TransportRequest::all();
        return view('requests')->with(compact('requests'));

    }


    public function send_request(Request $request){

        $transport_request = new TransportRequest();

        $transport_request->requestor_id = Auth::user()->id;
        $transport_request->location_id = $request->id;
        $transport_request->order_id = $request->order_id;
        $transport_request->save();
        return back();

    }

    public function save_services(Request $request){

    $services = new Transport_service;  
    
    $services->per_unit_price = $request->per_unit_price;
    $services->status = 'null';
    $services->user_id = Auth::user()->id;
    
    $services->save();
    $service_id = $services->id;


    $total_count = $request->total_count;

    $loc = $request->loc;
    $time = $request->time;
    
    foreach($loc as $key=>$value){
        $location = new location;

        $location->service_id = $service_id;
        $location->locations = $loc[$key];
        $location->delivery_in = $time[$key];
        $location->status = 'active';
        $location->save();
    }
    return redirect('transporter/services');

    }
}
