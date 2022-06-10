<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function product()
    {
        return view('product');
    }
    public function cart()
    {
        return view('cart');
    }
    public function category()
    {
        return view('category');
    }
    public function thankyou()
    {
        return view('thankyou');
    }
    
    public function userinfo()
    {
        return view('userinfo');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function checkout()
    {
        return view('checkout');
    }
}

