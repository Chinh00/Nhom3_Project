<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('index');
//Auth User

Route::get('userlogin',[\App\Http\Controllers\Customer\CustomerController::class,'index'])->name('userlogin');
Route::post('loginSubmit',[\App\Http\Controllers\Customer\CustomerController::class,'loginSubmit'])->name('loginSubmit');
Route::post('registerSubmit',[\App\Http\Controllers\Customer\CustomerController::class,'registerSubmit'])->name('registerSubmit');

//login admin staff
Route::get('admin',[\App\Http\Controllers\Admin\AdminController::class,'index'])->name('amdinlogin');
Route::post('loginadmin',[\App\Http\Controllers\Admin\AdminController::class,'loginadmin'])->name('loginadmin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function (){

    Route::group(['prefix'=>'admin','middleware'=>['is_admin','is_admin']],function (){
        Route::get('dashboard',[\App\Http\Controllers\Admin\AdminController::class,'admin'])->name('admin');
        //UserManage
        Route::resource('user',\App\Http\Controllers\Admin\UserManageController::class);
        Route::post('user_status',[\App\Http\Controllers\Admin\UserManageController::class,'userStatus'])->name('userStatus');

    });
    Route::group(['prefix'=>'staff','middleware'=>'is_staff'],function (){
        Route::get('dashboard',[\App\Http\Controllers\Staff\StaffController::class,'staff'])->name('staff');
        //UserManage
        Route::resource('user',\App\Http\Controllers\Admin\UserManageController::class);
        Route::post('user_status',[\App\Http\Controllers\Admin\UserManageController::class,'userStatus'])->name('userStatus');

    });

    Route::group(['prefix'=>'customer','middleware'=>'is_customer'],function (){
        Route::get('/',[\App\Http\Controllers\Customer\CustomerController::class,'customer'])->name('customer');
        Route::post('/',[\App\Http\Controllers\Customer\CustomerController::class,'LogoutCustomer'])->name('LogoutCustomer');

    });

});
