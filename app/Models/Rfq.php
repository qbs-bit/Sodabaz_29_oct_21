<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rfq extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'keywords',
        'quantity',
        'unit',
        'start_price',
        'end_price',
        'description',
        'ship_to',
        'upload',
    ];


    public function get_user(){
        return $this->belongsTo('App\Models\User','user_id');    
    }

    function comments(){
    return $this->hasMany('App\Models\Comment')->orderBy('id','desc');
    }


}
