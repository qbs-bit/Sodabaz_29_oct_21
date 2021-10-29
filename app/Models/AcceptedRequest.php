<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcceptedRequest extends Model
{
    use HasFactory;



    public function requestor()
	{
    	return $this->belongsTo('App\Models\User','requestor_id');    
	}

	
}
