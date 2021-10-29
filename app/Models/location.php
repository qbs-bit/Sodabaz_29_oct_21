<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;

    protected $fillable = ['
    service_id,
    locations,
    delivery_in,
    status,
'];

	public function location()
	{
    	return $this->belongsTo('App\Models\Transport_service','service_id');    
	}

	
}
