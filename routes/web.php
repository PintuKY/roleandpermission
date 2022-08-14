<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
