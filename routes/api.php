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

Route::group(['middleware' => 'auth:sanctum'], function(){
        Route::post("logout",[\App\Http\Controllers\AuthController::class,'logout']);

        // Route Personnel //
        Route::get("personnel",[\App\Http\Controllers\Api\PersonnelController::class,'index']);
        Route::get("personnel/{type}",[\App\Http\Controllers\Api\PersonnelController::class,'search']);
        Route::get("personnel/id/{id}",[\App\Http\Controllers\Api\PersonnelController::class,'show']);
        Route::get("personnel/cardid/{citizenId}",[\App\Http\Controllers\Api\PersonnelController::class,'search1']);
        Route::post("personnel/create",[\App\Http\Controllers\Api\PersonnelController::class,'store']); 
        Route::put("personnel/update/{id}",[\App\Http\Controllers\Api\PersonnelController::class,'update']); 
        Route::delete("personnel/delete/{id}",[\App\Http\Controllers\Api\PersonnelController::class,'destroy']);

        // Route  News
        Route::get("news",[\App\Http\Controllers\Api\NewsController::class,'index']);
        Route::get("news/{News_Type}",[\App\Http\Controllers\Api\NewsController::class,'search']);
        Route::get("news/id/{id}",[\App\Http\Controllers\Api\NewsController::class,'show']); 
        Route::post("news/create",[\App\Http\Controllers\Api\NewsController::class,'store']); 
        Route::put("news/update/{id}",[\App\Http\Controllers\Api\NewsController::class,'update']); 
        Route::delete("news/delete/{id}",[\App\Http\Controllers\Api\NewsController::class,'destroy']); 

        // Route  Newsapp
        Route::get("newsapp",[\App\Http\Controllers\Api\NewsAppController::class,'index']);
        Route::get("newsapp/{News_Type}",[\App\Http\Controllers\Api\NewsAppController::class,'search']);
        Route::get("newsapp/id/{id}",[\App\Http\Controllers\Api\NewsAppController::class,'show']); 
        Route::put("newsapp/update/{id}",[\App\Http\Controllers\Api\NewsAppController::class,'update']); 
        Route::post("newsapp/create",[\App\Http\Controllers\Api\NewsAppController::class,'store']); 
        Route::delete("newsapp/delete/{id}",[\App\Http\Controllers\Api\NewsAppController::class,'destroy']); 

        // Route  Complain
        Route::get("complain",[\App\Http\Controllers\Api\ComplainController::class,'index']);
        Route::get("complain/id/{id}",[\App\Http\Controllers\Api\ComplainController::class,'show']); 
        Route::post("complain/create",[\App\Http\Controllers\Api\ComplainController::class,'store']); 
        Route::delete("complain/delete/{id}",[\App\Http\Controllers\Api\ComplainController::class,'destroy']); 

        //Route  Classroom
        Route::get("classroom",[\App\Http\Controllers\Api\ClassroomController::class,'index']);
        Route::get("classroom/{Classroom_Type}",[\App\Http\Controllers\Api\ClassroomController::class,'search']);
        Route::get("classroom/id/{id}",[\App\Http\Controllers\Api\ClassroomController::class,'show']); 
        Route::put("classroom/update/{id}",[\App\Http\Controllers\Api\ClassroomController::class,'update']); 
        Route::post("classroom/create",[\App\Http\Controllers\Api\ClassroomController::class,'store']); 
        Route::delete("classroom/delete/{id}",[\App\Http\Controllers\Api\ClassroomController::class,'destroy']); 

        // Route  Activity
        Route::get("activity",[\App\Http\Controllers\Api\ActivityController::class,'index']);
        Route::get("activity/id/{id}",[\App\Http\Controllers\Api\ActivityController::class,'show']);  
        Route::post("activity/create",[\App\Http\Controllers\Api\ActivityController::class,'store']);
        Route::put("activity/update/{id}",[\App\Http\Controllers\Api\ActivityController::class,'update']); 
        Route::delete("activity/delete/{id}",[\App\Http\Controllers\Api\ActivityController::class,'destroy']); 

        // Route  Equipment
        Route::get("equipment",[\App\Http\Controllers\Api\EquipmentController::class,'index']);
        Route::get("equipment/id/{id}",[\App\Http\Controllers\Api\EquipmentController::class,'show']);  
        Route::get("equipment/{Equipment_Name}",[\App\Http\Controllers\Api\EquipmentController::class,'search']);
        Route::get("equipments/code/{Equipment_Code}",[\App\Http\Controllers\Api\EquipmentController::class,'search1']);
        Route::put("equipment/update/{id}",[\App\Http\Controllers\Api\EquipmentController::class,'update']); 
        Route::post("equipment/create",[\App\Http\Controllers\Api\EquipmentController::class,'store']); 
        Route::delete("equipment/delete/{id}",[\App\Http\Controllers\Api\EquipmentController::class,'destroy']); 
        Route::get("equipmentapp",[\App\Http\Controllers\Api\EquipmentappController::class,'index']);


        // Route  Subject
        Route::get("subject",[\App\Http\Controllers\Api\SubjectController::class,'index']);
        Route::get("subject/id/{id}",[\App\Http\Controllers\Api\SubjectController::class,'show']);
        Route::put("subject/update/{id}",[\App\Http\Controllers\Api\SubjectController::class,'update']); 
        Route::post("subject/create",[\App\Http\Controllers\Api\SubjectController::class,'store']); 
        Route::delete("subject/delete/{id}",[\App\Http\Controllers\Api\SubjectController::class,'destroy']); 
        Route::get("subject/{Subject_Detail}",[\App\Http\Controllers\Api\SubjectController::class,'search']);
        Route::get("subject/code/{Subject_Code}",[\App\Http\Controllers\Api\SubjectController::class,'search1']);
        Route::get("subject/term/{Subject_Term}",[\App\Http\Controllers\Api\SubjectController::class,'search2']);

        // Route Material
        Route::get("material",[\App\Http\Controllers\Api\MaterialController::class,'index']);
        Route::get("material/id/{id}",[\App\Http\Controllers\Api\MaterialController::class,'show']);  
        Route::get("materials/{Material_Name}",[\App\Http\Controllers\Api\MaterialController::class,'search']);
        Route::put("material/upadate/{id}",[\App\Http\Controllers\Api\MaterialController::class,'update']); 
        Route::post("material/create",[\App\Http\Controllers\Api\MaterialController::class,'store']); 
        Route::delete("material/delete/{id}",[\App\Http\Controllers\Api\MaterialController::class,'destroy']); 

        //Route  Alumni
        Route::get("alumni",[\App\Http\Controllers\Api\AlumniController::class,'index']);
        Route::get("alumni/id/{id}",[\App\Http\Controllers\Api\AlumniController::class,'show']);  
        Route::get("alumni/name/{Firstname_Alumni}",[\App\Http\Controllers\Api\AlumniController::class,'search']);
        Route::get("alumni/workplace/{Workplace}",[\App\Http\Controllers\Api\AlumniController::class,'search2']);
        Route::put("alumni/update/{id}",[\App\Http\Controllers\Api\AlumniController::class,'update']); 
        Route::post("alumni/create",[\App\Http\Controllers\Api\AlumniController::class,'store']); 
        Route::delete("alumni/delete/{id}",[\App\Http\Controllers\Api\AlumniController::class,'destroy']); 

        // Route Banner //
        Route::get("banner",[\App\Http\Controllers\Api\BannerController::class,'index']);
        Route::get("banner/id/{id}",[\App\Http\Controllers\Api\BannerController::class,'show']);  
        Route::post("banner/create",[\App\Http\Controllers\Api\BannerController::class,'store']); 
        Route::delete("banner/delete/{id}",[\App\Http\Controllers\Api\BannerController::class,'destroy']);  


        //Route  Student
        Route::get("student",[\App\Http\Controllers\Api\StudentController::class,'index']);
        Route::get("student/id/{id}",[\App\Http\Controllers\Api\StudentController::class,'show']);  
        Route::put("student/update/{id}",[\App\Http\Controllers\Api\StudentController::class,'update']); 
        Route::post("student/create",[\App\Http\Controllers\Api\StudentController::class,'store']); 
        Route::delete("student/delete/{id}",[\App\Http\Controllers\Api\StudentController::class,'destroy']); 
        Route::get("student/{studentCode}",[\App\Http\Controllers\Api\StudentController::class,'search']); 
        //Route  residaual
        Route::get("residaual",[\App\Http\Controllers\Api\ResidaualController::class,'index']);
        Route::get("residaual/id/{id}",[\App\Http\Controllers\Api\ResidaualController::class,'show']); 
        Route::post("residaual/create",[\App\Http\Controllers\Api\ResidaualController::class,'store']); 
        Route::delete("residaual/delete/{id}",[\App\Http\Controllers\Api\ResidaualController::class,'destroy']); 

        //Route  Bookclassroom
        Route::get("bookclassroom",[\App\Http\Controllers\Api\BookClassroomController::class,'index']);
        Route::get("bookclassroom/id/{id}",[\App\Http\Controllers\Api\BookClassroomController::class,'show']);
        Route::post("bookclassroom/create",[\App\Http\Controllers\Api\BookClassroomController::class,'store']);
        Route::delete("bookclassroom/delete/{id}",[\App\Http\Controllers\Api\BookClassroomController::class,'destroy']);
        Route::get("bookclassroom/{Email}",[\App\Http\Controllers\Api\BookClassroomController::class,'search']);
        Route::put("bookclassroom/update/{id}",[\App\Http\Controllers\Api\BookClassroomController::class,'update']);

        //Route  borrow_return
        Route::get("borrow_return",[\App\Http\Controllers\Api\BorrowReturnController::class,'index']);
        Route::get("borrow_return/id/{id}",[\App\Http\Controllers\Api\BorrowReturnController::class,'show']);
        Route::post("borrow_return/create",[\App\Http\Controllers\Api\BorrowReturnController::class,'store']);
        Route::put("borrow_return/update/{id}",[\App\Http\Controllers\Api\BorrowReturnController::class,'update']);
        Route::delete("borrow_return/delete/{id}",[\App\Http\Controllers\Api\BorrowReturnController::class,'destroy']);
        Route::get("borrow_return/{Email}",[\App\Http\Controllers\Api\BorrowReturnController::class,'search']);

        //Route  CV
        Route::get("cv",[\App\Http\Controllers\Api\CvController::class,'index']);
        Route::get("cv/{citizenId}",[\App\Http\Controllers\Api\CvController::class,'search']);
        Route::post("cv/create",[\App\Http\Controllers\Api\CvController::class,'store']);
        Route::get("cv/id/{id}",[\App\Http\Controllers\Api\CvController::class,'show']);
        Route::put("cv/update/{id}",[\App\Http\Controllers\Api\CvController::class,'update']);
        Route::delete("cv/delete/{id}",[\App\Http\Controllers\Api\CvController::class,'destroy']);  

        // Activity join
        Route::get("activityjoin",[\App\Http\Controllers\Api\ActivityjoinController::class,'index']);
        Route::get("activityjoin/id/{id}",[\App\Http\Controllers\Api\ActivityjoinController::class,'show']);
        Route::post("activityjoin/create",[\App\Http\Controllers\Api\ActivityjoinController::class,'store']);
        Route::put("activityjoin/update",[\App\Http\Controllers\Api\ActivityjoinController::class,'update']);
        Route::delete("activityjoin/delete/{id}",[\App\Http\Controllers\Api\ActivityjoinController::class,'destroy']); 
        Route::get("activityjoin/email/{Email}",[\App\Http\Controllers\Api\ActivityjoinController::class,'search']);
        Route::get("activityjoin/titile/{Activity_Title}",[\App\Http\Controllers\Api\ActivityjoinController::class,'search1']);

        // Route About
        Route::get("about",[\App\Http\Controllers\Api\AboutController::class,'index']);
        Route::get("about/id/{id}",[\App\Http\Controllers\Api\AboutController::class,'show']);
        Route::get("about/{Topic}",[\App\Http\Controllers\Api\AboutController::class,'search']);
        Route::post("about/create",[\App\Http\Controllers\Api\AboutController::class,'store']);
        Route::put("about/update/{id}",[\App\Http\Controllers\Api\AboutController::class,'update']);
        Route::delete("about/delete/{id}",[\App\Http\Controllers\Api\AboutController::class,'destroy']);

        // Route CheckLogin
        Route::get("checklogin",[\App\Http\Controllers\Api\CheckLoginController::class,'index']);
        Route::get("checklogin/code/{studentCode}",[\App\Http\Controllers\Api\CheckLoginController::class,'search']);
        Route::delete("checklogin/delete/{id}",[\App\Http\Controllers\Api\CheckLoginController::class,'destroy']);
        Route::get("checklogin/id/{id}",[\App\Http\Controllers\Api\CheckLoginController::class,'show']);
        Route::post("checklogin/create",[\App\Http\Controllers\Api\CheckLoginController::class,'store']);
 \
 
        // Route Album      
        Route::get("album/activity",[\App\Http\Controllers\Api\AlbumActivityController::class,'index']);
        Route::post("album/activity/create",[\App\Http\Controllers\Api\AlbumActivityController::class,'store']);
        Route::get("album/activity/id/{id}",[\App\Http\Controllers\Api\AlbumActivityController::class,'show']);
        Route::delete("album/activity/delete/{id}",[\App\Http\Controllers\Api\AlbumActivityController::class,'destroy']);
});



Route::post("register",[\App\Http\Controllers\AuthController::class,'register']);
Route::post("login",[\App\Http\Controllers\AuthController::class,'login']);

//////////////////////////////// public route ///////////////////////////////////////


 /* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */