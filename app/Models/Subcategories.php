<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategories extends Model
{
    protected $fillable=['user_id,category_id,category'];
    use HasFactory;



    public function getcategory(){
        return $this->belongsTo('App\Models\Categories','category_id');
    }

    public function getunit(){
        return $this->belongsTo('App\Models\Categories','unit_id');
    }

}

