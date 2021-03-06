<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CheckLoginAdmin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\Home_CategoriesController;
use App\Http\Controllers\HomeController;
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
Auth::routes();
Route::get('/', [HomeController::class, 'index']);
Route::get('/category', function () {
    return view('Frontend.Pages.categories');
});
Route::get('/about', function () {
    return view('Frontend.Pages.about');
});
Route::get('/cart', function () {
    return view('Frontend.Pages.cart');
});
Route::get('/login', function () {
    return view('Frontend.Pages.login');
});
Route::get('/checkout', function () {
    return view('Frontend.Pages.checkout');
});

//Pages Admin
Route::prefix('/admin')->group(function(){
    //Login logout admin
    Route::get('/login', [CheckLoginAdmin::class, 'index'])->middleware('checklogin')->name('login-admin');
    Route::post('/login', [CheckLoginAdmin::class, 'checkLogin']);
    Route::get('/logout', [CheckLoginAdmin::class, 'logout']);
    //partial: Pages Admin
    Route::middleware('checkLoginAdmin')->group(function(){
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        //Products
        Route::prefix('/products')->group(function(){
            Route::get('/', [ProductsController::class, 'index']);
            Route::get('/add', [ProductsController::class, 'create']);
            Route::post('/add', [ProductsController::class, 'store']);
            Route::post('deleted/{id}', [ProductsController::class, 'destroy']);

        });
        //discount
        Route::prefix('/discount')->group(function(){
            Route::get('/', [DiscountController::class, 'index']);
            Route::post('/add', [DiscountController::class, 'create']);
            Route::get('/view', [DiscountController::class, 'show']);
            Route::post('/update', [DiscountController::class, 'update']);
            Route::post('/update', [DiscountController::class, 'update']);
            Route::post('/deleted', [DiscountController::class, 'destroy']);

        });

        //Categories
        Route::prefix('/category')->group(function (){
            Route::post('category_status',[\App\Http\Controllers\Admin\CategoryController::class,'categoryStatus'])->name('categoryStatus');
            Route::get('/',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('category.index');
            Route::get('update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update']);
            Route::get('/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('category.create');
            Route::post('/store',[\App\Http\Controllers\Admin\CategoryController::class,'store'])->name('category.store');

            Route::get('/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('category.edit');
            Route::post('/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update']);

            Route::post('/create',[\App\Http\Controllers\Admin\CategoryController::class,'store']);

            Route::post('/destroy',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('category.destroy');
        
        });
        Route::prefix('/users')->group(function(){
            Route::get('/', [UsersController::class, 'index']);


        });
        Route::prefix('homecategories')->group(function (){
            Route::get('/',[\App\Http\Controllers\Admin\Home_CategoriesController::class,'index'])->name('homecategories.index');
            Route::get('update/{id}', [\App\Http\Controllers\Admin\Home_CategoriesController::class, 'update']);
            Route::get('/create',[\App\Http\Controllers\Admin\Home_CategoriesController::class,'create'])->name('homecategories.create');
            Route::post('/store',[\App\Http\Controllers\Admin\Home_CategoriesController::class,'store'])->name('homecategories.store');

            Route::get('/edit/{id}',[\App\Http\Controllers\Admin\Home_CategoriesController::class,'edit'])->name('homecategories.edit');
            Route::post('/edit/{id}', [\App\Http\Controllers\Admin\Home_CategoriesController::class, 'update']);

            Route::post('/create',[\App\Http\Controllers\Admin\Home_CategoriesController::class,'store']);

            Route::delete('/destroy/{id}',[\App\Http\Controllers\Admin\Home_CategoriesController::class,'destroy'])->name('homecategories.destroy');

        });

        // anh vi???t v?? ????y nh??
        // c??n c??c ph???n kh??c k??? nha
        // ch??? c???n b??? m???y c??i code v??o l?? ???????c
    });


});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
