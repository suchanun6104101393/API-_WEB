<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\NewsController;

class News extends Model
{
    // protected $primaryKey = 'newsId'; //ตัวชี้ column
    // protected $table = 'news_csmju';     //ตัวชี้table
    // protected $guarded = ['newsId'];  //post
    public $timestamps = false; // no timestamps
    use HasFactory;
    protected $table = "news_csmju";
    protected $fillable = [
        'News_Detail',
        'News_Date',
        'News_Time',
        'News_Picture',
        'News_Title',
        'News_File',
        'News_links',
        'News_Type',
    ];
}
