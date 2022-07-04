<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
    public function staff()
    {
        return view('backend.index');
    }
    public function index()
    {
        return view('backend.auth.login');
    }

}
