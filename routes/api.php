<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\Api\NewsController;
use App\Http\Controller\Api\PersonnelController;
use App\Http\Controller\Api\ClassroomController;
use App\Http\Controller\Api\ComplainController;
use App\Models\news;
use App\Models\personnel;
use App\Models\classroom;
use App\Models\Complain;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route from Personnel

Route::get("personnel",[\App\Http\Controllers\Api\PersonnelController::class,'index']);
Route::get("personnel/{type}",[\App\Http\Controllers\Api\PersonnelController::class,'search']);
Route::get("personnelid/{id}",[\App\Http\Controllers\Api\PersonnelController::class,'show']);
Route::put("personneledit/{id}",[\App\Http\Controllers\Api\PersonnelController::class,'update']); 
Route::post("personneladd",[\App\Http\Controllers\Api\PersonnelController::class,'store']); 
Route::delete("personneldelete/{id}",[\App\Http\Controllers\Api\PersonnelController::class,'destroy']); 

//Route from Classroom
Route::get("classroom",[\App\Http\Controllers\Api\ClassroomController::class,'index']);
Route::get("classroom/{Classroom_Type}",[\App\Http\Controllers\Api\ClassroomController::class,'search']);
Route::get("classroomid/{id}",[\App\Http\Controllers\Api\ClassroomController::class,'show']); 
Route::put("classroomedit/{id}",[\App\Http\Controllers\Api\ClassroomController::class,'update']); 
Route::post("classroomadd",[\App\Http\Controllers\Api\ClassroomController::class,'store']); 
Route::delete("classroomdelete/{id}",[\App\Http\Controllers\Api\ClassroomController::class,'destroy']); 

// Route from News
Route::get("news",[\App\Http\Controllers\Api\NewsController::class,'index']);
Route::get("news/{News_Type}",[\App\Http\Controllers\Api\NewsController::class,'search']);
Route::get("newsid/{id}",[\App\Http\Controllers\Api\NewsController::class,'show']); 
Route::put("newsedit/{id}",[\App\Http\Controllers\Api\NewsController::class,'update']); 
Route::post("newsadd",[\App\Http\Controllers\Api\NewsController::class,'store']); 
Route::delete("newsdelete/{id}",[\App\Http\Controllers\Api\NewsController::class,'destroy']); 

// Route from Complain
Route::get("complain",[\App\Http\Controllers\Api\ComplainController::class,'index']);
Route::get("complainid/{id}",[\App\Http\Controllers\Api\ComplainController::class,'show']); 
Route::post("complainadd",[\App\Http\Controllers\Api\ComplainController::class,'store']); 
Route::delete("complaindelete/{id}",[\App\Http\Controllers\Api\ComplainController::class,'destroy']); 














