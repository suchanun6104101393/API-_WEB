<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Image;




class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::paginate(25);
        return response()->json($news);
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
            'News_Detail' => 'required',
            'News_Date' => 'required',
            'News_Time' => 'required',
           
            'News_Title' => 'required',
            'News_File' => 'required',
            'News_links' => 'required',
            'News_Type' => 'required'
        ]);

        $data_news = array(
            'News_Detail' => $request->input('News_Detail'),
            'News_Date' => $request->input('News_Date'),
            'News_Time' => $request->input('News_Time'),
            'News_File' => $request->input('News_File'),
            'News_Title' => $request->input('News_Title'),
            'News_links' => $request->input('News_links'),
            'News_Type' => $request->input('News_Type'),
            
        );
        $News_Picture = $request->file('file');
        if(!empty($News_Picture)){
          
            $file_name = "news_".time().".".$News_Picture->getClientOriginalExtension();
            $imgWidth = 400;
            $imgHeight = 400;
            $folderupload = public_path('/images/news/thumbnail');
            $path = $folderupload."/".$file_name;
            // อัพโหลดเข้าสู่ folder thumbnail
            $img = Image::make($News_Picture->getRealPath());
            $img->orientate()->fit($imgWidth,$imgHeight, function($constraint){
                $constraint->upsize();

            });
            $img->save($path);
            // อัพโหลดภาพต้นฉบับเข้า folder original
            $destinationPath = public_path('/images/news/original');
            $News_Picture->move($destinationPath, $file_name);
            // กำหนด path รูปเพื่อใส่ตารางในฐานข้อมูล
            $data_news['News_Picture'] = url('/').'/images/news/thumbnail/'.$file_name;
            
        }else{
      
        $data_news['News_Picture'] = url('/').'/images/news/thumbnail/no_img.jpg';
        }
        return News::create($data_news);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return News::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $news = News::find($id);
        $news->update($request->all());
        return $news;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return News::destroy($id);
    }
    public function search($News_Type)
    {
        return News::where("News_Type","like","%".$News_Type."%")->paginate(25);
    }
}
