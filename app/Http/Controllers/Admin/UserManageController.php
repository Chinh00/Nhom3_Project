<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::orderBy('id','DESC')->get();

        return view('backend.usermanage.index',compact('user'));
    }
    public function userStatus(Request $request){
        if($request->mode=='true'){
            DB::table('users')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('users')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Cập nhật trạng thái Người dùng thành công','status'=>true]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.usermanage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
//        dd($data);
        $this->validate($request,[
            'fullName'=>'string|required',
            'userName'=>'string|nullable',
            'phone'=>'string|required',
            'email'=>'string|required',
            'address'=>'string|nullable',
            'photo'=>'required|nullable',
            'status'=>'nullable|in:active,inactive',
        ]);
        $data = new User();
        $data-> fullName = $request->input('fullName');
        $data-> userName = $request->input('userName');
        $data-> photo = $request->input('photo');
        $data-> status = $request->input('status');
        $data-> address = $request->input('address');
        $data-> email = $request->input('email');
        $data-> phone = $request->input('phone');
        $data->save();

        $status=UserManageController::create($data);
        if ($status){
            return redirect()->route('user.index')->with('success','Thanh cong tạo Người dùng mới');
        }
        else{
            return back()->with('error','Có loi xảy ra. Vui long kiem tra lại!');
        }
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
        $user = User::find($id);

        if($user){
            return view('backend.usermanage.edit',compact('user'));
        }
        else{
            return back()->with('error','Khong tim thay item');
        }
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
        $user = User::find($id);
        if($user){
            $data = $request->all();
            $this->validate($request,[
                'role'=>'string|required',
                'status'=>'string|required',

            ]);
            $status=$user->fill($data)->save();
            if ($status){
                return redirect()->route('user.index')->with('success','Thanh cong update Người dùng');
            }
            else{
                return back()->with('error','Có loi xảy ra. Vui long kiểm tra lại!');
            }
        }
        else{
            return back()->with('error','Không tim thay item');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user){
            $status=$user->delete();
            if($status){
                return redirect()->route('user.index')->with('success','Đã xóa Banner');
            }else{
                return back()->with('error','Có lỗi xảy ra');
            }
        }
        else{
            return back()->with('error','Khong tim thay item');
        }
    }
}
