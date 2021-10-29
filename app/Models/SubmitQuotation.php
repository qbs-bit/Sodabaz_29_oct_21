<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmitQuotation extends Model
{
    use HasFactory;

    protected $fillable = [
        'rfq_id',
        'submitter_id',
        'title',
        'quantity',
        'unit',
        'start_price',
        'end_price',
        'description',
        'ship_to',
        'upload',
        'image',
        'status',
        'acceptor_id',
        'accepted_at',
    ];


    public function get_user(){
        return $this->belongsTo('App\Models\User','submitter_id');    
    }

    public function get_rfq(){
        return $this->belongsTo('App\Models\Rfq','rfq_id');    
    }

    public function get_acceptor(){
        return $this->belongsTo('App\Models\User','acceptor_id');    
    }
}
