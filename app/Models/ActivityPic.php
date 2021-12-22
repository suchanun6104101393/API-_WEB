<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ActivityPicController;

class ActivityPic extends Model
{
    use HasFactory;
    protected $primaryKey = 'activity_pictureId'; //ตัวชี้ column
    protected $table = 'activity_picture';     //ตัวชี้table
    protected $guarded = ['activity_pictureId'];  //post
    public $timestamps = false; // no timestamps
}
