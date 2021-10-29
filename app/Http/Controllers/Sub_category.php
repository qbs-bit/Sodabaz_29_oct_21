<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Subcategories;
use App\Models\Units;
use Illuminate\Support\Facades\Auth;
class Sub_category extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;

    $category= Categories::where('user_id',$user_id)->get();
    $units = Units::where('user_id',$user_id)
    ->where('status','Active')
    ->get();
       $subcategory = Subcategories::where('user_id', $user_id)->get();
       return view('inventory.manage_sub_category')->with(compact('subcategory','category','units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $userId = Auth::user()->id;
        $this->validate($request, array(
            'sub_category' => 'required',
            'unit' => 'required',
        ));


        if($request->hasFile('image')){
                // Get filename with extension
                $filenameWithExt = $request->file('image')->getCLientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('image')->getCLientOriginalExtension();
                // Filename tp store
                $fileNameToStore=$filename.'_'.time().'.'.$extension;
                // Upload image
                $path = $request->file('image')->move(public_path('rfq_files/subcategory_images'),$fileNameToStore);

            }


        $category = new Subcategories();
        $category->user_id   = Auth::user()->id;
        $category->category_id = $request->category_id;
        $category->status = "Active";
        $category->category = $request->sub_category;
        $category->image = $fileNameToStore;
        $category->unit_id = $request->unit;
        $category->save();
        return back()->with('message', 'Category Added Successfully');
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->cat_id;
        $data = Subcategories::find($id);
        $data->category = $request->category;
        $data->status = $request->status;
        $data->save();

        return back()->with('message', 'Successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
