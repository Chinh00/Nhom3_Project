<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function admin(){
        return view('backend.index');
    }
    public function index(){
        return view('backend.auth.login');
    }
    public function loginadmin(Request $request){
//        dd($request->all());
        $request ->validate([
            'email'=>'required|email',
            'password'=>'required|min:4'
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'status'=>'active','role'=>'admin'])){
            return redirect()->route('admin');
        }
        else{
            if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'status'=>'active','role'=>'staff'])){
                return redirect()->route('staff');
            }else{
                return back()->with('error','Sai Tên hoặc mật khẩu đăng nhập');

            };


        };
    }
    public function LogoutAdmin(){
        Auth::logout();
        return redirect()->route('amdinlogin');
    }
}

