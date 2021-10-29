<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Subcategories;
use App\Models\Units;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Unit extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $unit = Units::where('user_id',$user_id)->get();
        return view('inventory.manage_unit')->with(compact('unit','user_id'));
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
            'unit' => 'required',
            'unit_dimension' => 'required',
            'unit_description' => 'required',
        ));
        $unit = new Units();
        $unit->user_id   = Auth::user()->id;
        $unit->unit = $request->unit;
        $unit->unit_dimension = $request->unit_dimension;
        $unit->unit_description = $request->unit_description;
        $unit->status = "Active";
        $unit->save();
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
        $id = $request->units_id;
        $data = Units::find($id);
        $data->unit = $request->unit;
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
