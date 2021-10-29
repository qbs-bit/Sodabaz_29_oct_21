<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\Auth;
class Manage_category extends Controller
{
    /**Response
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $category = Categories::where('user_id',$user_id)->paginate(4);
        return view('inventory.manage_category')->with(compact('category','user_id'));
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
            'category' => 'required',
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
                $path = $request->file('image')->move(public_path('rfq_files/category_images'),$fileNameToStore);

            }

        $category = new Categories();
        $category->user_id   = Auth::user()->id;
        $category->category = $request->category;
        $category->image = $fileNameToStore;
        $category->status = "Active";
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
        $data = Categories::find($id);
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
