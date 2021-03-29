<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\UserRolesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoriesController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\CustomerTypeController;
use App\Http\Controllers\SupplierController;
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
Route::get("logout",[usercontroller::class,'logout']);
Route::view("/",'dashboard');


route::view('addcustomer', 'addcustomer');
route::post('addcustomer', [customerController::class,'addcustomer']);
route::get('listcustomer', [customerController::class,'listcustomer']);
route::get('/deletecustomer/{CustomerID}', [customerController::class,'deletecustomer']);
route::get('/editcustomer/{CustomerID}', [customerController::class,'editcustomer']);
route::post('editcustomer', [customerController::class,'updatecustomer']);

route::view('addproduct', 'addproduct');
route::post('addproduct', [ProductController::class,'addproduct']);
route::get('listproduct', [ProductController::class,'listproduct']);
route::get('/deleteproduct/{ProductID}', [ProductController::class,'deleteproduct']);
route::get('/editproduct/{ProductID}', [ProductController::class,'editproduct']);
route::post('editproduct', [ProductController::class,'updateproduct']);

route::view('addsupplier',[SupplierController::class,'addsupplier']);
route::post('addsupplier', [SupplierController::class,'addsupplier']);
route::get('listsupplier', [SupplierController::class,'listsupplier']);
route::get('/deletesupplier/{SupplierID}',[SupplierController::class,'deletesupplier']);
route::get('/editsupplier/{ProductID}', [SupplierController::class,'editsupplier']);
route::post('editsupplier', [SupplierController::class,'updatesupplier']);

route::view('addcustomertype',[CustomerTypeController::class,'addcustomertype']);
route::post('addcustomertype', [CustomerTypeController::class,'addcustomertype']);
route::get('listcustomertype',[CustomerTypeController::class,'listcustomertype']);
route::get('/deletecustomertype/{CustomerTypeID}',[CustomerTypeController::class,'deletecustomertype']);
route::get('/editcustomertype/{CustomerTypeID}', [CustomerTypeController::class,'editcustomertype']);
route::post('editcustomertype', [CustomerTypeController::class,'updatecustomertype']);

route::view('addproductcategories', 'addproductcategories');
route::post('addproductcategories', [ProductCategoriesController::class,'addproductcategories']);
route::get('listproductcategories', [ProductCategoriesController::class,'listproductcategories']);
route::get('/deleteproductcategories/{ProductCategoryID}', [ProductCategoriesController::class,'deleteproductcategories']);
route::get('/editproductcategories/{ProductCategoryID}', [ProductCategoriesController::class,'editproductcategories']);
route::post('editproductcategories', [ProductCategoriesController::class,'updateproductcategories']);

route::view('adduserrole', 'adduserrole');
route::post('adduserrole', [UserRolesController::class,'adduserrole']);
route::get('listuserrole', [UserRolesController::class,'listuserrole']);
route::get('/deleteuserrole/{UserRoleID}', [UserRolesController::class,'deleteuserrole']);
route::get('/edituserrole/{UserRoleID}', [UserRolesController::class,'edituserrole']);
route::post('edituserrole', [UserRolesController::class,'updateuserrole']);
