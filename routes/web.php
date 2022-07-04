<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',[\App\Http\Controllers\Customer\IndexController::class,'home'])->name('home');

//Auth User

Route::get('userlogin',[\App\Http\Controllers\Customer\CustomerController::class,'index'])->name('userlogin');
Route::post('loginSubmit',[\App\Http\Controllers\Customer\CustomerController::class,'loginSubmit'])->name('loginSubmit');
Route::post('registerSubmit',[\App\Http\Controllers\Customer\CustomerController::class,'registerSubmit'])->name('registerSubmit');
Route::get('/',[\App\Http\Controllers\Customer\CustomerController::class,'customer'])->name('customer');
Route::post('/',[\App\Http\Controllers\Customer\CustomerController::class,'LogoutCustomer'])->name('LogoutCustomer');

//Category
Route::get('cate',[\App\Http\Controllers\Customer\IndexController::class,'cate'])->name('cate');

//login admin staff
Route::get('admin',[\App\Http\Controllers\Admin\AdminController::class,'index'])->name('amdinlogin');
Route::post('loginadmin',[\App\Http\Controllers\Admin\AdminController::class,'loginadmin'])->name('loginadmin');
Route::post('admin',[\App\Http\Controllers\Admin\AdminController::class,'LogoutAdmin'])->name('LogoutAdmin');

Auth::routes();



//Admin Backend


    Route::group(['middleware'=>'isAdmin'],function (){
        Route::get('dashboard',[\App\Http\Controllers\Admin\AdminController::class,'admin'])->name('admin');
        //UserManage
        Route::resource('user',\App\Http\Controllers\Admin\UserManageController::class);
        Route::post('user_status',[\App\Http\Controllers\Admin\UserManageController::class,'userStatus'])->name('userStatus');


        //Product
    Route::prefix('/products')->group(function (){
        Route::get('/', [ProductController::class, 'index'])->name('products');
        Route::post('/deleted', [ProductController::class, 'deleted'])->name('deleted');
        Route::get('/add', [ProductController::class, 'add'])->name('products.add');
        Route::post('/add', [ProductController::class, 'postAdd'])->name('postadd');

        });
    //Category
        Route::resource('category',\App\Http\Controllers\Admin\CategoryController::class);
        Route::post('category_status',[\App\Http\Controllers\Admin\CategoryController::class,'categoryStatus'])->name('categoryStatus');


        //Staff
        Route::get('/staff',[\App\Http\Controllers\Staff\StaffController::class,'staff'])->name('staff');





    });

