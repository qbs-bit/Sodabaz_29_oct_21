<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;

    protected $fillable = ['
    customer_id,
    total_amount,
    status,
'];


public function customer()
	{
    	return $this->belongsTo('App\Models\User','customer_id');    
	}
}
