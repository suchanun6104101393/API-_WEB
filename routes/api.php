<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\Api\NewsController;
use App\Http\Controller\Api\PersonnelController;
use App\Http\Controller\Api\ClassroomController;
use App\Http\Controller\Api\ComplainController;
use App\Http\Controller\Api\ActivityController;
use App\Http\Controller\Api\AuthController;
use App\Http\Controllers\EquipmentController;
use App\Models\news;
use App\Models\personnel;
use App\Models\classroom;
use App\Models\Complain;
use App\Models\Activity;
use App\Models\Equipment;
/*
|--------------------------------------------------------------------------
| API Routesne
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['middleware' => 'auth:sanctum'], function(){
        Route::post("logout",[\App\Http\Controllers\AuthController::class,'logout']);
       // Route::get("personnel",[\App\Http\Controllers\Api\PersonnelController::class,'index']);
});

Route::post("register",[\App\Http\Controllers\AuthController::class,'register']);
Route::post("login",[\App\Http\Controllers\AuthController::class,'login']);
Route::get("loginapp",[\App\Http\Controllers\AuthController::class,'index']);




/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

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
//Route::post("upimage",[\App\Http\Controllers\Api\NewsController::class,'upimage']); 
Route::delete("newsdelete/{id}",[\App\Http\Controllers\Api\NewsController::class,'destroy']); 

// Route from Newsapp
Route::get("newsapp",[\App\Http\Controllers\Api\NewsAppController::class,'index']);
Route::get("newsapp/{News_Type}",[\App\Http\Controllers\Api\NewsAppController::class,'search']);
Route::get("newsappid/{id}",[\App\Http\Controllers\Api\NewsAppController::class,'show']); 
Route::put("newsappedit/{id}",[\App\Http\Controllers\Api\NewsAppController::class,'update']); 
Route::post("newsappadd",[\App\Http\Controllers\Api\NewsAppController::class,'store']); 
Route::delete("newsappdelete/{id}",[\App\Http\Controllers\Api\NewsAppController::class,'destroy']); 

// Route from Complain
Route::get("complain",[\App\Http\Controllers\Api\ComplainController::class,'index']);
Route::get("complainid/{id}",[\App\Http\Controllers\Api\ComplainController::class,'show']); 
Route::post("complainadd",[\App\Http\Controllers\Api\ComplainController::class,'store']); 
Route::delete("complaindelete/{id}",[\App\Http\Controllers\Api\ComplainController::class,'destroy']); 

// Route from Activity
Route::get("activity",[\App\Http\Controllers\Api\ActivityController::class,'index']);
Route::get("activity/{id}",[\App\Http\Controllers\Api\ActivityController::class,'show']);  
Route::post("activityadd",[\App\Http\Controllers\Api\ActivityController::class,'store']);
Route::put("activityedit/{id}",[\App\Http\Controllers\Api\ActivityController::class,'update']); 
Route::delete("activitydelete/{id}",[\App\Http\Controllers\Api\ActivityController::class,'destroy']); 

// Route from Equipment
Route::get("equipment",[\App\Http\Controllers\Api\EquipmentController::class,'index']);
Route::get("equipment/{id}",[\App\Http\Controllers\Api\EquipmentController::class,'show']);  
Route::get("equipments/{Equipment_Name}",[\App\Http\Controllers\Api\EquipmentController::class,'search']);
Route::put("equipmentedit/{id}",[\App\Http\Controllers\Api\EquipmentController::class,'update']); 
Route::post("equipmentadd",[\App\Http\Controllers\Api\EquipmentController::class,'store']); 
Route::delete("equipmentdelete/{id}",[\App\Http\Controllers\Api\EquipmentController::class,'destroy']); 

// Route from Subject
Route::get("subject",[\App\Http\Controllers\Api\SubjectController::class,'index']);
Route::get("subjectid/{id}",[\App\Http\Controllers\Api\SubjectController::class,'show']);
Route::put("subjectedit/{id}",[\App\Http\Controllers\Api\SubjectController::class,'update']); 
Route::post("subjectadd",[\App\Http\Controllers\Api\SubjectController::class,'store']); 
Route::delete("subjectdelete/{id}",[\App\Http\Controllers\Api\SubjectController::class,'destroy']); 
Route::get("subject/{Subject_Detail}",[\App\Http\Controllers\Api\SubjectController::class,'search']);


// Route from Material
Route::get("material",[\App\Http\Controllers\Api\MaterialController::class,'index']);
Route::get("material/{id}",[\App\Http\Controllers\Api\MaterialController::class,'show']);  
Route::get("materials/{Material_Name}",[\App\Http\Controllers\Api\MaterialController::class,'search']);
Route::put("materialedit/{id}",[\App\Http\Controllers\Api\MaterialController::class,'update']); 
Route::post("materialadd",[\App\Http\Controllers\Api\MaterialController::class,'store']); 
Route::delete("materialdelete/{id}",[\App\Http\Controllers\Api\MaterialController::class,'destroy']); 

//Route from Alumni
Route::get("alumni",[\App\Http\Controllers\Api\AlumniController::class,'index']);
Route::get("alumni/{id}",[\App\Http\Controllers\Api\AlumniController::class,'show']);  
Route::get("alumni/name/{Firstname_Alumni}",[\App\Http\Controllers\Api\AlumniController::class,'search']);
Route::get("alumni/workplace/{Workplace}",[\App\Http\Controllers\Api\AlumniController::class,'search2']);
Route::put("alumniedit/{id}",[\App\Http\Controllers\Api\AlumniController::class,'update']); 
Route::post("alumniadd",[\App\Http\Controllers\Api\AlumniController::class,'store']); 
Route::delete("alumnidelete/{id}",[\App\Http\Controllers\Api\AlumniController::class,'destroy']); 

//Route from banner
Route::get("banner",[\App\Http\Controllers\Api\BannerController::class,'index']);
Route::get("banner/{id}",[\App\Http\Controllers\Api\BannerController::class,'show']);  
Route::delete("bannerdelete/{id}",[\App\Http\Controllers\Api\BannerController::class,'destroy']); 
Route::post("banneradd",[\App\Http\Controllers\Api\BannerController::class,'store']); 

//13/12/2564
//Route from ActivityPic
Route::get("activitypic",[\App\Http\Controllers\Api\ActivityPicController::class,'index']);
Route::get("activitypic/{id}",[\App\Http\Controllers\Api\ActivityPicController::class,'show']);  
Route::post("activitypicadd",[\App\Http\Controllers\Api\ActivityPicController::class,'store']); 
Route::delete("activitypicdelete/{id}",[\App\Http\Controllers\Api\ActivityPicController::class,'destroy']); 