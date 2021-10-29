<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rfq;
use App\Models\Comment;
use App\Models\SubmitQuotation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class SubmitQuotationController extends Controller
{
    public function submit_quotation(Request $request)
    {
    	
    	$userId = Auth::user()->id;
    	
        $this->validate($request, array(
            'title' => 'required',
            'quantity' => 'required',
            'unit' => 'required',
            'start_price' => 'required',
            'end_price' => 'required',
            'description' => 'required',
            'ship_to' => 'required',
          	'upload'  => 'required|mimes:pdf,xlsx,zip|max:4999',
            'image' => 'required|mimes:jpeg,png,jpg,svg|max:4999'
        ));

        if($request->hasFile('upload')){
                // Get filename with extension
                $filenameWithExt = $request->file('upload')->getCLientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('upload')->getCLientOriginalExtension();
                // Filename tp store
                $fileNameToStore=$filename.'_'.time().'.'.$extension;
                // Upload image
               // $path = $request->file('upload')->storeAs('rfq_files', $fileNameToStore);

               $path =  $request->file('upload')->move(public_path('rfq_files'),$fileNameToStore);

            }

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

        $rfq = new SubmitQuotation();
        $rfq->submitter_id = Auth::user()->id;
        $rfq->rfq_id = $request->rfq_id;
        $rfq->title = $request->title;
        $rfq->quantity = $request->quantity;
        $rfq->unit = $request->unit;
        $rfq->start_price = $request->start_price;
        $rfq->end_price = $request->end_price;
        $rfq->description = $request->description;
        $rfq->ship_to = $request->ship_to;
        $rfq->upload = $fileNameToStore;
        $rfq->image = $fileNameToStore2;
        $rfq->status = "Pending";
        $rfq->save();

        

        //RFQ's Status changed to Accepted
        $id = $request->rfq_id;
        $data = Rfq::find($id);
        $data->acceptor_id   = Auth::user()->id;
        $data->status = "Accepted";
        $data->accepted_at = Carbon::now();
        $data->save();
        return redirect('mills/view_rfq')->with('message', 'Successfull!');
       	//return  back();
    	//return $request->all();


    }

    public function update(Request $request)
    {   
        $id = $request->id;
        $data = SubmitQuotation::find($id);
        $data->acceptor_id = Auth::user()->id;
        $data->status = "Accepted";
        $data->accepted_at = Carbon::now();
        $data->save();
        return redirect('mills/view_rfq')->with('message', 'Successfull!');

    }

    public function submitted_quotations ($id)
     {
       $detail = SubmitQuotation::where('rfq_id',$id)->get();
       $details = SubmitQuotation::where('rfq_id',$id)->get();
       //return view('rfqs/submited_quotations')->with('detail', $detail);
       return view('rfqs/submitted_quotations')->with(compact('detail','details'));
     }

     public function details($id)
     {
       $detail = SubmitQuotation::where('id',$id)->get();
       return view('rfqs/quotation_details')->with('detail', $detail);
     }


    public function accepted_quotations()
    {
        $id = Auth::user()->id;
        $detail = SubmitQuotation::where('submitter_id',$id)->where('status','Accepted')->get();
        return view('rfqs/accepted_quotations')->with('detail', $detail);
    }
}
