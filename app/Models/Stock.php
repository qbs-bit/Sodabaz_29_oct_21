<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $fillable=['user_id,product_id,per_unit_price,stock,total_amount,created_by,updated_by'];


    public function product()
	{
    	return $this->belongsTo('App\Models\Product','product_id');    
	}

	public static function gettotalQuantity($product_id)
	{
		return Stock::selectRaw('Sum(quantity) as totalquantity')->where('product_id',$product_id)->get();
	}
}
