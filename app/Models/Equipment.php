<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\EquipmentController;

class Equipment extends Model
{
    protected $primaryKey = 'equipmentId'; //ตัวชี้ column
    protected $table = 'equipment';     //ตัวชี้table
    protected $guarded = ['equipmentId'];  //post
    public $timestamps = false; // no timestamps
    use HasFactory;
}
