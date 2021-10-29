<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnquiryBidding extends Model
{
    use HasFactory;

    public function getenquiry(){
        return $this->belongsTo('App\Models\Enquiry','enquiry_id');
    }

    public function getuser(){
        return $this->belongsTo('App\Models\User','bidder_id');
    }
}
