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
});
Route::get('/loginadmin', function () {
    return view('backend.login.loginadmin');
})->name('loginadmin');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware'=>'auth'],function (){

    Route::group(['prefix'=>'admin','middleware'=>'is_admin'],function (){
        Route::get('/',[\App\Http\Controllers\AdminController::class,'index'])->name('admin.index');

        //UserManage
        Route::resource('user',\App\Http\Controllers\Admin\UserManageController::class);
        Route::post('user_status',[\App\Http\Controllers\Admin\UserManageController::class,'userStatus'])->name('userStatus');

    });
        Route::group(['prefix'=>'staff','middleware'=>'is_staff'],function (){
            Route::get('/',[\App\Http\Controllers\AdminController::class,'index'])->name('staff.index');

    });
    Route::group(['prefix'=>'customer'],function (){
        Route::get('/',[\App\Http\Controllers\Client\CustomerController::class,'index'])->name('customer.index');
    });
});

