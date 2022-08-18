<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\role\RoleController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::group(['prefix'=>'admin'], function(){

//     Route::middleware([SuperAdmin::class])->group(function () {

//         Route::get('customers/form',[CustomerController::class,'CustomerForm']);
        
//     });
// });

Route::get('customers',[CustomerController::class,'index']);
Route::get('customers/form',[CustomerController::class,'CustomerForm']);
Route::POST('customer/add',[CustomerController::class,'AddCustomer']);
Route::get('customer/edit/{id}',[CustomerController::class,'Edit']);
Route::POST('customer/update/{customer_id}',[CustomerController::class,'Update']);
Route::get('customer/view/{customer_id}',[CustomerController::class,'View']);
Route::get('customer/delete/{customer_id}',[CustomerController::class,'Delete']);
/**
 * 
 * Manage Role
 * 
 */
Route::get('role/list',[RoleController::class,'index']);
Route::get('role/form',[RoleController::class,'create']);
Route::post('role/form',[RoleController::class,'store']);
Route::get('role/edit/{id}',[RoleController::class,'edit']);
Route::get('role/show/{id}',[RoleController::class,'show']);
Route::POST('role/update/{id}',[RoleController::class,'update']);
Route::get('delete/{id}',[RoleController::class,'destroy']);
/**
 * 
 * Manage User
 * 
 */
Route::get('user/list',[UserController::class,'index']);
Route::get('user/form',[UserController::class,'create']);
Route::post('user/add',[UserController::class,'store']);
Route::get('user/edit/{id}',[UserController::class,'edit']);
Route::get('user/show/{id}',[UserController::class,'show']);
Route::POST('user/update/{id}',[UserController::class,'update']);
Route::get('delete/{id}',[UserController::class,'destroy']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
