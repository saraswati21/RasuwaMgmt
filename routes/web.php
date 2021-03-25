<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\customerController;
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

Route::get('/login', function () {
    return view('login');
});

Route::post("/login",[usercontroller::class,'login']);
Route::get("/",[ProductController::class,'index']);
route::view('addcustomer', 'addcustomer');
route::post('addcustomer', [customerController::class,'addcustomer']);
route::get('listcustomer', [customerController::class,'listcustomer']);
route::get('/deletecustomer/{CustomerID}', [customerController::class,'deletecustomer']);
route::get('/editcustomer/{CustomerID}', [customerController::class,'editcustomer']);
route::post('editcustomer', [customerController::class,'updatecustomer']);

