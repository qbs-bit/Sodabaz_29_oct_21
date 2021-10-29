<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rfq;
use App\Models\Comment;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;



class Rfqcontroller extends Controller
{
    public function add_rfq(){

       return view('rfqs/add_rfqs');
    }

    public function view_rfq(){

        $userId = Auth::user()->id;
        $all_rfqs = rfq::where('user_id',$userId)->paginate(4);
        $rfqs = rfq::where('acceptor_id',$userId)->paginate(4);
        return view('rfqs/rfqs')->with(compact('all_rfqs','rfqs'));
     }
 
     public function new_rfq(){
        $userId = Auth::user()->id;
        $all_new_rfqs = rfq::where('user_id','!=',$userId)->where('status','Pending')->get();
        return view('rfqs/new_rfqs')->with(compact('all_new_rfqs'));
     }


     public function rfq_details($id)
     {

       $detail = rfq::where('id',$id)->get();
       return view('rfqs/rfq_detail')->with('detail', $detail);
     }

    public function save_rfq(Request $request)
    {
    	
    	$userId = Auth::user()->id;
    	
        $this->validate($request, array(
            'keywords' => 'required',
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

        $rfq = new Rfq();
        $rfq->user_id   = Auth::user()->id;
        $rfq->keywords = $request->keywords;
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
        return  back();
    	//return $request->all();


    }


    public function save_comment(Request $request){
        $data = new Comment;
        $data->rfq_id=$request->post;
        $data->user_id=Auth::user()->id;
        $data->comment_text=$request->comment;
        $data->save();
        return response()->json([
            'bool'=>true
        ]);

        
        //return $request;
    }



    public function update_rfq(Request $request)
    {   
        $id = $request->rfq_id;
        $data = Rfq::find($id);
        $data->acceptor_id   = Auth::user()->id;
        $data->status = "Accepted";
        $data->accepted_at = Carbon::now();
        $data->save();

        return redirect('mills/view_rfq')->with('message', 'Successfull!');

    }




    public function search_rfq(Request $request)
    {   
        $user_id = Auth::user()->id;
        $rfq_select = $request->rfq_select;

        if($rfq_select=="pending")
        {
            $all_rfqs = RFQ::where('user_id',$user_id)->where('status','=','Pending')->get();
            return view('rfqs/rfqs')->with('all_rfqs', $all_rfqs);
        }
        elseif($rfq_select=="accepted")
        {
         
            $all_rfqs = RFQ::where('user_id',$user_id)->where('status','=','Accepted')->get();
            return view('rfqs/rfqs')->with('all_rfqs', $all_rfqs);

        } 
        else{
          return redirect()->route('view_rfq');

        }

    }


}
