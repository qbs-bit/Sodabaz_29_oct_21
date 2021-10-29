<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    protected $fillable = ['user_id,unit'];


    public function unit(){
        return $this->hasOne('App\Models\Product');
    }
    
}
