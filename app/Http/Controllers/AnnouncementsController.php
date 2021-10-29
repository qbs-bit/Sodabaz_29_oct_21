<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductAnnouncement;
use App\Models\CompanyAnnouncement;

class AnnouncementsController extends Controller
{
    public function comapany(){

    	return view('company_announcements');
    }

    public function product(){
    	return view('product_announcements');
    }

    public function save_productannouncements(Request $request)
    {
    	
        $this->validate($request, array(
            'title' => 'required|max:50',
            'company_name' => 'required',
            'detail' => 'required|max:255',
            'posted_by' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg|max:4999'
        ));


            if($request->hasFile('image')){
                // Get filename with extension
                $filenameWithExt2 = $request->file('image')->getCLientOriginalName();
                // Get just filename
                $filename2 = pathinfo($filenameWithExt2, PATHINFO_FILENAME);
                // Get just ext
                $extension2 = $request->file('image')->getCLientOriginalExtension();
                // Filename tp store
                $fileNameToStore2=$filename2.'_'.time().'.'.$extension2;
                // Upload image
                $path = $request->file('image')->move(public_path('rfq_files'),$fileNameToStore2);

            }

        $data = new ProductAnnouncement();
        $data->title = $request->title;
        $data->company_name = $request->company_name;
        $data->detail = $request->detail;
        $data->posted_by = $request->posted_by;
        $data->image = $fileNameToStore2;
        $data->save();
        return  back();
    	//return $request->all();


    }

    public function save_companyannouncements(Request $request)
    {
        
        $this->validate($request, array(
            'title' => 'required|max:50',
            'company_name' => 'required',
            'detail' => 'required|max:255',
            'posted_by' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg|max:4999'
        ));


            if($request->hasFile('image')){
                // Get filename with extension
                $filenameWithExt2 = $request->file('image')->getCLientOriginalName();
                // Get just filename
                $filename2 = pathinfo($filenameWithExt2, PATHINFO_FILENAME);
                // Get just ext
                $extension2 = $request->file('image')->getCLientOriginalExtension();
                // Filename tp store
                $fileNameToStore2=$filename2.'_'.time().'.'.$extension2;
                // Upload image
                $path = $request->file('image')->move(public_path('rfq_files'),$fileNameToStore2);

            }

        $data = new CompanyAnnouncement();
        $data->title = $request->title;
        $data->company_name = $request->company_name;
        $data->detail = $request->detail;
        $data->posted_by = $request->posted_by;
        $data->image = $fileNameToStore2;
        $data->save();
        return  back();
        //return $request->all();


    }
    
}
