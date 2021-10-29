<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductAnnouncement;
use App\Models\CompanyAnnouncement;

class MediaReleaseController extends Controller
{
    public function companyannouncement(){

    	$company = CompanyAnnouncement::orderBy('created_at','asc')->take(4)->get();
    	return view('website/index')->with(compact('company'));;

    }
}
