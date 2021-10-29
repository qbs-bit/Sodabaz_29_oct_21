<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAnnouncement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'company_name',
        'posted_by',
        'detail',
        'image'
    ];
}
