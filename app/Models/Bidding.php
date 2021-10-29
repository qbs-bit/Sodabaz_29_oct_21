<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidding extends Model
{
    use HasFactory;

    protected $fillable = ['product_id,
    bidding_start,
    bidding_end,
    minimum_amount,
    maximum_amount,
    status,
    is_bid,
    created_by,
    updated_by,
    deleted_at,
    deleted_by,
    '];



public function product(){
        return $this->belongsTo('App\Models\Product','product_id');
    }
}
