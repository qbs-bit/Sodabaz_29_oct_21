<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;
    protected $fillable = ['
    product_name,
    user_id,
    category_id,
    subcategory_id,
    unit_id,
    description,
    quantity,
    expected_price,
    ship_to,
    first_delivery,
    payment_term,
    file,
    is_bid,
    status,
    bidding_start,
    bidding_end,
    
    '];

public function unit()
{
    return $this->belongsTo('App\Models\Units','unit_id');    
}

public function user()
{
    return $this->belongsTo('App\Models\User','user_id');    
}


public function category()
{
    return $this->belongsTo('App\Models\Categories','category_id');    
}

public function subcategory(){
        return $this->belongsTo('App\Models\Subcategories','subcategory_id');
    }
}
