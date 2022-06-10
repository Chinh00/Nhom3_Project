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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    public function login()
    {
        return view('login');
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
}

