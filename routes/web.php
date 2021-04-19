<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\UserRolesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoriesController;
use App\Http\Controllers\accountController;
use App\Http\Controllers\AccountTypeController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SaleItemController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\PurchaseItemController;
use App\Http\Controllers\MyOrderItemController;
use App\Http\Controllers\CustomerOrderItemController;
use App\Http\Controllers\CustomerOrderController;
use App\Http\Controllers\MyOrderController;
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
Route::view("/dashboard",'dashboard');


route::get('addaccount', [accountController::class,'addnewaccount']);
route::post('addaccount', [accountController::class,'addaccount']);
route::get('listaccount', [accountController::class,'listaccount']);
route::get('/deleteaccount/{accountID}', [accountController::class,'deleteaccount']);
route::get('/editaccount/{accountID}', [accountController::class,'editaccount']);
route::post('editaccount', [accountController::class,'updateaccount']);

route::get('addproduct', [ProductController::class,'addnewproduct']);
route::post('addproduct', [ProductController::class,'addproduct']);
route::get('listproduct', [ProductController::class,'listproduct']);
route::get('/deleteproduct/{ProductID}', [ProductController::class,'deleteproduct']);
route::get('/editproduct/{ProductID}', [ProductController::class,'editproduct']);
route::post('editproduct', [ProductController::class,'updateproduct']);


route::view('addaccounttype',[AccountTypeController::class,'addaccounttype']);
route::post('addaccounttype', [AccountTypeController::class,'addaccounttype']);
route::get('listaccounttype',[AccountTypeController::class,'listaccounttype']);
route::get('/deleteaccounttype/{accountTypeID}',[AccountTypeController::class,'deleteaccounttype']);
route::get('/editaccounttype/{accountTypeID}', [AccountTypeController::class,'editaccounttype']);
route::post('editaccounttype', [AccountTypeController::class,'updateaccounttype']);

route::view('addproductcategories', 'addproductcategories');
route::post('addproductcategories', [ProductCategoriesController::class,'addproductcategories']);
route::get('listproductcategories', [ProductCategoriesController::class,'listproductcategories']);
route::get('/deleteproductcategories/{ProductCategoryID}', [ProductCategoriesController::class,'deleteproductcategories']);
route::get('/editproductcategories/{ProductCategoryID}', [ProductCategoriesController::class,'editproductcategories']);
route::post('editproductcategories', [ProductCategoriesController::class,'updateproductcategories']);

route::get('adduser', [usercontroller::class,'addnewuser']);
route::post('adduser', [usercontroller::class,'adduser']);
route::get('listuser', [usercontroller::class,'listuser']);
route::get('/deleteuser/{UserID}', [usercontroller::class,'deleteuser']);
route::get('/edituser/{UserID}', [usercontroller::class,'edituser']);
route::post('edituser', [usercontroller::class,'updateuser']);

route::view('adduserrole', 'adduserrole');
route::post('adduserrole', [UserRolesController::class,'adduserrole']);
route::get('listuserrole', [UserRolesController::class,'listuserrole']);
route::get('/deleteuserrole/{UserRoleID}', [UserRolesController::class,'deleteuserrole']);
route::get('/edituserrole/{UserRoleID}', [UserRolesController::class,'edituserrole']);
route::post('edituserrole', [UserRolesController::class,'updateuserrole']);

route::get('addsale', [SaleController::class,'addnewsale']);
route::post('addsale', [SaleController::class,'addsale']);
route::get('listsale', [SaleController::class,'listsale']);
route::get('/deletesale/{SaleID}', [SaleController::class,'deletesale']);
route::get('/editsale/{SaleID}', [SaleController::class,'editsale']);
route::post('editsale', [SaleController::class,'updatesale']);

route::get('addsaleitem', [SaleItemController::class,'addnewsaleitem']);
route::post('addsaleitem', [SaleItemController::class,'addsaleitem']);
route::get('listsaleitem', [SaleItemController::class,'listsaleitem']);
route::get('/deletesaleitem/{SaleID}', [SaleItemController::class,'deletesaleitem']);
route::get('/editsaleitem/{SaleID}', [SaleItemController::class,'editsaleitem']);
route::post('editsaleitem', [SaleItemController::class,'updatesaleitem']);

route::get('addpurchase', [PurchaseController::class,'addnewpurchase']);
route::post('addpurchase', [PurchaseController::class,'addpurchase']);
route::get('listpurchase', [PurchaseController::class,'listpurchase']);
route::get('/deletepurchase/{purchaseID}', [PurchaseController::class,'deletepurchase']);
route::get('/editpurchase/{purchaseID}', [PurchaseController::class,'editpurchase']);
route::post('editpurchase', [PurchaseController::class,'updatepurchase']);

route::get('addpurchaseitem', [PurchaseItemController::class,'addnewpurchaseitem']);
route::post('addpurchaseitem', [PurchaseItemController::class,'addpurchaseitem']);
route::get('listpurchaseitem', [PurchaseItemController::class,'listpurchaseitem']);
route::get('/deletepurchaseitem/{purchaseItemID}', [PurchaseItemController::class,'deletepurchaseitem']);
route::get('/editpurchaseitem/{purchaseItemID}', [PurchaseItemController::class,'editpurchaseitem']);
route::post('editpurchaseitem', [PurchaseItemController::class,'updatepurchaseitem']);


route::get('addmyorderitem', [MyOrderItemController::class,'addnewmyorderitem']);
route::post('addmyorderitem', [MyOrderItemController::class,'addmyorderitem']);
route::get('listmyorderitem', [MyOrderItemController::class,'listmyorderitem']);
route::get('/deletemyorderitem/{MyOrderId}', [MyOrderItemController::class,'deletemyorderitem']);
route::get('/editmyorderitem/{MyOrderId}', [MyOrderItemController::class,'editmyorderitem']);
route::post('editmyorderitem', [MyOrderItemController::class,'updatemyorderitem']);

route::get('addcustomerorderitem', [CustomerOrderItemController::class,'addnewcustomerorderitem']);
route::post('addcustomerorderitem', [CustomerOrderItemController::class,'addcustomerorderitem']);
route::get('listcustomerorderitem', [CustomerOrderItemController::class,'listcustomerorderitem']);
route::get('/deletecustomerorderitem/{MyOrderId}', [CustomerOrderItemController::class,'deletecustomerorderitem']);
route::get('/editcustomerorderitem/{MyOrderId}', [CustomerOrderItemController::class,'editcustomerorderitem']);
route::post('editcustomerorderitem', [CustomerOrderItemController::class,'updatecustomerorderitem']);


route::get('addmyorder', [MyOrderController::class,'addnewmyorder']);
route::post('addmyorder', [MyOrderController::class,'addmyorder']);
route::get('listmyorder', [MyOrderController::class,'listmyorder']);
route::get('/deletemyorder/{MyOrderID}', [MyOrderController::class,'deletemyorder']);
route::get('/editmyorder/{MyOrderID}', [MyOrderController::class,'editmyorder']);
route::post('editmyorder', [MyOrderController::class,'updatemyorder']);

route::get('addcustomerorder', [CustomerOrderController::class,'addnewcustomerorder']);
route::post('addcustomerorder', [CustomerOrderController::class,'addcustomerorder']);
route::get('listcustomerorder', [CustomerOrderController::class,'listcustomerorder']);
route::get('/deletecustomerorder/{CustomerorderOrderID}', [CustomerOrderController::class,'deletecustomerorder']);
route::get('/editcustomerorder/{CustomerOrderID}', [CustomerOrderController::class,'editcustomerorder']);
route::post('editcustomerorder', [CustomerOrderController::class,'updatecustomerorder']);
