<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \GuzzleHttp\Client;
use DB;

class MarketplaceController extends Controller
{
    
    public function getApi()
    {
    	$client = new client();
    	$data = $client->get('http://jsonplaceholder.typicode.com/users');
    	//$data = $client->get('https://jsonplaceholder.typicode.com/users?id=3'); --------- for one specefic ID
    	return view('marketplace')->with('data', json_decode($data->getBody()));
    }

    
}
