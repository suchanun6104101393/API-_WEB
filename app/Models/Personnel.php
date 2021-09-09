<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $primaryKey = 'personnelID'; //ตัวชี้ column
    protected $table = 'personnel';     //ตัวชี้table
 
 
    
   // protected  = ['firstName'] ;
    use HasFactory;
}
