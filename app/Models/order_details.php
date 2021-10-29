<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_details extends Model
{
    use HasFactory;
    protected $fillable = ['
    
    product_id,
    order_id,
    vender_id,
    unit_price,
    quantity,
    total_amount,
    status,
'];

	public function vender()
	{
    	return $this->belongsTo('App\Models\User','vender_id');    
	}

    public function product()
    {
        return $this->belongsTo('App\Models\Product','product_id');    
    }

    public function get_order()
    {
        return $this->belongsTo('App\Models\orders','order_id');    
    }

    public static function getsoldQuantity($product_id)
    {
        return order_details::selectRaw('Sum(quantity) as soldquantity')->where('product_id',$product_id)->get();
    }

}
