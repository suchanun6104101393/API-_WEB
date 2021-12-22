<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ActivityPic;
use Image;

class ActivityPicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activitypic = ActivityPic::all();;
        return response()->json($activitypic);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request->validate([
            'Activitypic_Title' => 'required',
            'Activity_Date' => 'required',
            'Activitypic_Detail' => 'required',
           
        ]);
        $data_activitypic = array(
            'Activitypic_Title' => $request->input('Activitypic_Title'),
            'Activity_Date' => $request->input('Activity_Date'),
            'Activitypic_Detail' => $request->input('Activitypic_Detail'),
           
        );
        $Activity_Picture = $request->file('Activity_Picture');
        if(!empty($Activity_Picture)){
            // อัพโหลดรูปภาพ
            // เปลี่ยนชื่อรูปที่ได้
            $file_name = "activitypic_".time().".".$Activity_Picture->getClientOriginalExtension();
            // กำหนดขนาดความกว้าง และสูง ของภาพที่ต้องการย่อขนาด
            /* $imgWidth = 400;
            $imgHeight = 400; */
            $folderupload = public_path('/images/activitypic/thumbnail');
            $path = $folderupload."/".$file_name;
            // อัพโหลดเข้าสู่ folder thumbnail
            $img = Image::make($Activity_Picture->getRealPath());
           /*  $img->orientate()->fit($imgWidth,$imgHeight, function($constraint){
                $constraint->upsize();
            }); */
            $img->save($path);
            // อัพโหลดภาพต้นฉบับเข้า folder original
            $destinationPath = public_path('/images/activitypic/original');
            $Activity_Picture->move($destinationPath, $file_name);
            // กำหนด path รูปเพื่อใส่ตารางในฐานข้อมูล
            $data_activitypic['Activity_Picture'] = url('/').'/images/activitypic/thumbnail/'.$file_name;
            }else{
            $data_activitypic['Activity_Picture'] = url('/').'/images/activitypic/thumbnail/no_img.jpg';
            }
            return activitypic::create($data_activitypic);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ActivityPic::find($id);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return ActivityPic::destroy($id);
    }
}
