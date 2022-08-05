<?php

use App\Http\Controllers\Api\CrudController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\LoginAuthController;

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


/**
 * get, -  data fetch
 * post, - to insert the data
 * put, -  update the data
 * petch, -  update the data
 * delete -  delete the record
 */

Route::get("student", [CrudController::class, "index"]);
Route::post("student", [CrudController::class, "store"]);
Route::get('student/edit/{id}',[CrudController::class,"edit"]);
Route::put('student/update/{id}',[CrudController::class,"update"]);
Route::delete('student/delete/{id}',[CrudController::class,"destroy"]);

/**
 * 
 * customers
 */

Route::middleware('auth:api')->group(function () {
    // Route::resource('posts', PostController::class);
    Route::get('customer/list',[CustomerController::class,'index']);
    Route::post('customer/add',[CustomerController::class,'store']);
    Route::get('customer/show/{id}',[CustomerController::class,"show"]);
    Route::PUT('customer/update/{id}',[CustomerController::class,'update']);
    Route::delete('customer/delete/{id}',[CustomerController::class,"destroy"]);
});


/**
 * 
 * register
 * 
 */

 Route::POST('/register',[LoginAuthController::class,'Register']);
 Route::POST('/login',[LoginAuthController::class,'login']);
 Route::get('/logout',[LoginAuthController::class,'logout']);





