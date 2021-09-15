<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Personnel;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnel = Personnel::all();
        return response()->json($personnel);
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
            'citizenId' => 'required',
            'titleName' => 'required',
            'titlePosition' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'titleNameEn' => 'required',
            'fistNameEn' => 'required',
            'lastNameEn' => 'required',
            'gender' => 'required',
            'personnelType' => 'required',
            'positionType' => 'required',
            'position' => 'required',
            'faculty' => 'required',
            'educationLevel' => 'required',
            'titleEducation' => 'required',
            'education' => 'required',
            'major' => 'required',
            'university' => 'required',
            'e_mail' => 'required',
            'personnelPhoto' => 'required',
            'portfolioResearch' => 'required',
            'adminPosition' => 'required',
            'phoneNumber' => 'required',
            'Type' => 'required',
        ]);
        return Personnel::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Personnel::find($id);
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
        $personnel = Personnel::find($id);
        $personnel->update($request->all());
        return $personnel;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Personnel::destroy($id);
    }
    public function search($Type)
    {
        return Personnel::where("Type","like","%".$Type."%")->get();
    }
}
