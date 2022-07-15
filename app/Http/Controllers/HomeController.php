<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $home_categories = DB::table('home_categories')->join('categories', 'home_categories.category_id', '=', 'categories.id')->get();
        $new = DB::table('products')->take(5)->join('product_images', 'products.id', '=', 'product_images.product_id')->orderBy('products.id', 'DESC')->get();
        $sale = DB::table('products')->take(5)->join('product_images', 'products.id', '=', 'product_images.product_id')->whereNot('discount_id', '=', null)->orderBy('offer_price', 'ASC')->get();
        $ratings = DB::table('products')->take(5)->join('product_images', 'products.id', '=', 'product_images.product_id')->orderBy('ratings', 'DESC')->get();
        $product_categories = DB::table('products')->join('product_images', 'products.id', '=', 'product_images.product_id')->get();
        return view('welcome', compact('home_categories', 'new', 'sale', 'ratings','product_categories'));
    }
  
}
