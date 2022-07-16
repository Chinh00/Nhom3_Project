<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function customer()
    {
        return route('index');
    }
    public function index()
    {
        return view('frontend.login.login');
    }
    public function loginSubmit(Request $request)
    {
//        dd($request->all());
        $this ->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:8'
        ],[
          'unique'=>'Email da ton tai',
          'required'=>'Thieu truong :attribute ',
          'min'=>'Mật khẩu phải dài tối thiểu 8 ký tự',
        ]);
 
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'status'=>'active','role'=>'customer'])){
            return redirect()->route('index');
        }
        else{
            return back()->with('error','Sai thong tin dang nhap');
        };
    }

    public function registerSubmit(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'fullName'=>'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
            ],[
                'unique'=>'Email da ton tai',
                'required'=>'Thieu truong :attribute ',
                'min'=>'Mật khẩu phải dài tối thiểu 8 ký tự',
              ]);

        $data = $request->all();
        $check = $this->create($data);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'status'=>'active','role'=>'customer'])){
            if($check){
                return redirect()->route('index');
            }
            else{

                return back()->with('error','Da ton tai tai khoan');
            };
        }
        else{

            return back()->with('error','Sai thong tin dang nhap');
        };




    }

    public function LogoutCustomer(){
        Auth::logout();
        return redirect()->route('index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        return User::create([
            'fullName' => $data['fullName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}