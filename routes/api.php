<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\CodeController;
use App\Http\Controllers\Categories\CategoryController;
use App\Http\Controllers\Categories\CollageController;
use App\Http\Controllers\Categories\SpacializationController;
use App\Http\Controllers\Courses\CourseAnswerController;
use App\Http\Controllers\Courses\CourseController;
use App\Http\Controllers\Courses\CourseQuestionController;
use App\Http\Controllers\National\NationalAnswerController;
use App\Http\Controllers\National\NationalQuestionController;
use App\Http\Controllers\NotificationContentController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Roles\RoleController;
use App\Http\Controllers\Roles\RoleUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::group([

    'prefix' => 'auth'
], function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
});

// *******************************************************
// *****************Dashboard****************************
// *********************************************************
Route::group([
    'middleware' => ['auth:sanctum', 'chekUser:admin'],

    'prefix' => 'admin'
], function () {
    Route::post('/code', [CodeController::class, 'store']);

    Route::resource('/roles', RoleController::class);
    Route::resource('/rolesUser', RoleUserController::class);
    Route::resource('/course', CourseController::class);
    Route::resource('/courseQuestion', CourseQuestionController::class);
    Route::resource('/courseAnswer', CourseAnswerController::class);
    Route::resource('/nationalAnswer', NationalAnswerController::class);
    Route::resource('/nationalQuestion', NationalQuestionController::class);


    ///////////////   category /////////////////
    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/category/all', [CategoryController::class, 'getAll']);
    Route::get('/category/show/{id}', [CategoryController::class, 'show']);
    Route::post('category/create', [CategoryController::class, 'store']);
    Route::post('/category/update/{id}', [CategoryController::class, 'update']);
    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy']);



    //////////////  Collage //////////////////
    Route::get('collage', [CollageController::class, 'index']);
    Route::post('collage/create', [CollageController::class, 'store']);
    Route::post('collage/update/{id}', [CollageController::class, 'update']);
    Route::get('collage/show/{id}', [CollageController::class, 'show']);
    Route::get('collage/delete/{id}', [CollageController::class, 'destroy']);



    //////////////  Spacialization //////////////////
    Route::get('spacialization', [SpacializationController::class, 'index']);
    Route::post('spacialization/create', [SpacializationController::class, 'store']);
    Route::post('spacialization/edit/{id}', [SpacializationController::class, 'update']);
    Route::get('spacialization/show/{id}', [SpacializationController::class, 'show']);
    Route::get('spacialization/delete/{id}', [SpacializationController::class, 'destroy']);


    Route::post('/notification', [NotificationContentController::class, 'sendNotification']);
    
});

Route::middleware('auth:sanctum')->group(function () {

    Route::get('favorite',[FavoriteController::class,'index']);
    Route::post('favorite/create/{id}',[FavoriteController::class,'store']);
    Route::get('favorite/show/{id}',[FavoriteController::class,'show']);
    Route::post('favorite/delete/{id}',[FavoriteController::class,'destroy']);
    });

// *********************************************
// *************app***************************
// ********************************************



// Route::middleware('auth:sanctum')->group(function () {

    // Route::get('/category', [CategoryController::class, 'index']);

    // Route::get('/category/all', [CategoryController::class, 'getAll']);

    Route::get('collage', [CollageController::class, 'index']);
    Route::post('/login', [AuthController::class, 'login']);

    Route::post('collage/create', [CollageController::class, 'store']);

    Route::get('spacialization', [SpacializationController::class, 'index']);

    Route::get('collage/show/{id}', [CollageController::class, 'show']);
    Route::get('collage/delete/{id}', [CollageController::class, 'destroy']);


    Route::get('Course', [CourseController::class, 'index']);


    Route::post('collage/update/{id}', [CollageController::class, 'update']);


    Route::get('/courseAnswer',[ CourseAnswerController::class, 'index']);


    Route::get('/category/show/{id}', [CategoryController::class, 'show']);
    Route::post('category/create', [CategoryController::class, 'store']);
    Route::post('/category/update/{id}', [CategoryController::class, 'update']);
    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy']);



    Route::get('spacialization', [SpacializationController::class, 'index']);
    Route::post('spacialization/create', [SpacializationController::class, 'store']);
    Route::post('spacialization/edit/{id}', [SpacializationController::class, 'update']);
    Route::get('spacialization/show/{id}', [SpacializationController::class, 'show']);
    Route::get('spacialization/delete/{id}', [SpacializationController::class, 'destroy']);
// });
