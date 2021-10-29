<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransportRequest extends Model
{
    use HasFactory;



    public function request()
	{
    	return $this->belongsTo('App\Models\location','location_id');    
	}

	public function requestor()
	{
    	return $this->belongsTo('App\Models\User','requestor_id');    
	}

	public function order()
	{
    	return $this->belongsTo('App\Models\orders','order_id');    
	}

	
}
