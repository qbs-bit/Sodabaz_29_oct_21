<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['
    
    cat_id,
    user_id,
    sub_cat_id,
    unit_id,
    product_name,
    product_type,
    product_code,
    dimensions,
    per_unit_price,
    status,
    created_by,
    updated_by,
    deleted_by,
    is_delete,
    is_bid,
    
'];

public function unit()
{
    return $this->belongsTo('App\Models\Units','unit_id');    
}


public function category()
{
    return $this->belongsTo('App\Models\Categories','cat_id');    
}

public function subcategory(){
        return $this->belongsTo('App\Models\Subcategories','sub_cat_id');
    }


    


}
