<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport_service extends Model
{
    use HasFactory;

    protected $fillable=['user_id,per_unit_price,status'];
    use HasFactory;


   

    public function user()
	{
    	return $this->belongsTo('App\Models\User','user_id');    
	}

	public function service_location()
	{
    	return $this->belongsTo('App\Models\location','id');    
	}
    
}
