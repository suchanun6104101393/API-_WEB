<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipment;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipment = Equipment::paginate(25);
        return response()->json($equipment);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Equipment_Code' => 'required',
            'Equipment_Quantity' => 'required',
            'Equipment_Name' => 'required',
            'Equipment_Brand' => 'required',
            'Equipment_Serialnumber' => 'required',
            'Equipment_Date' => 'required',
            'Equipment_Room' => 'required',
            'Equipment_Users' => 'required',
            'Equipment_Caretaker' => 'required',
            'Equipment_Status' => 'required',
            'Equipment_Note' => 'required',
            'Equipment_Type' => 'required',
            'Equipment_Detail' => 'required',
           
        ]);
        return Equipment::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Equipment::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $equipment = Equipment::find($id);
        $equipment->update($request->all());
        return $equipment;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Equipment::destroy($id);
    }
    public function search($Equipment_Name)
    {
        return Equipment::where("Equipment_Name","like","%".$Equipment_Name."%")->get();
    }
}
