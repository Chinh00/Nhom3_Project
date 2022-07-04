<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
        $categories = Categories::where(['status'=>'active','is_parent'=>1])->limit(3)->orderBy('id','DESC')->get();

        return view('index',compact('categories'));
    }
    public function cate(){
        $categories = Categories::where(['status'=>'active','is_parent'=>1])->limit(3)->orderBy('id','DESC')->get();

        return view('frontend.category.index',compact('categories'));
    }
}
