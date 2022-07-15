<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckLoginAdmin extends Controller
{
    public function index(){
        return view('Admin/Pages/login');
    }
    public function checkLogin(Request $request){

        if (Auth::attempt(['userName' => $request->userName, 'password' => $request->password,  'role' => 'admin'])) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login-admin');
        }

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login-admin');
    }
}
