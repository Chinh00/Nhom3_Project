<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Categories::orderBy('id','desc')->get();
        return view('backend.category.index',compact('category'));
    }
    public function categoryStatus(Request $request){
        if($request->mode=='true'){
            DB::table('categories')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('categories')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Cập nhật trạng thái Danh mục thành công','status'=>true]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_cats=Categories::where('is_parent',1)->orderBy('title','ASC')->get();
        return view('backend.category.create',compact('parent_cats'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'string|required|max:255',
            'photo'=>'required',
            'is_parent'=>'sometimes|in:1,0',
            'parent_id'=>'nullable',
            'status'=>'nullable|in:active,inactive',
        ],[
            'required' => 'Trường :attribute không được bỏ trống',
            'max:255'=> 'Số nhập phải nhỏ hơn :max chữ số',
        ]);

        $category = new Categories();
        $category-> title = $request->input('title');
        $category-> photo = $request->input('photo');
        $category-> status = $request->input('status');
        $category-> is_parent = $request->input('is_parent');
        $category-> parent_id = $request->input('parent_id');
        $category->save();
        return redirect()->route('category.index')->with('success','Thanh cong tạo Danh mục mới');




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
        $category = Categories::find($id);
        $parent_cats=Categories::where('is_parent',1)->orderBy('title','ASC')->get();

        if($category){
            return view('backend.category.edit',compact(['category','parent_cats']));
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
        $category = Categories::find($id);
        if($category){
            $data = $request->all();
            $request->validate([
                'title'=>'string|required|max:255',
                'photo'=>'required',
                'is_parent'=>'sometimes|in:1,0',
                'parent_id'=>'nullable',
                'status'=>'nullable|in:active,inactive',
            ],[
                'required' => 'Trường :attribute không được bỏ trống',
                'max:255'=> 'Số nhập phải nhỏ hơn :max chữ số',
            ]);
            $status=$category->fill($data)->save();
            if ($status){
                return redirect()->route('category.index')->with('success','Thanh cong update Danh muc');
            }
            else{
                return back()->with('error','Có loi xảy ra. Vui long kiem tra lại!');
            }
        }
        else{
            return back()->with('error','Khong tim thay item');
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
        $category = Categories::find($id);
        if($category){
            $status=$category->delete();
            if($status){
                return redirect()->route('category.index')->with('success','Đã xóa Danh mục');
            }else{
                return back()->with('error','Có lỗi xảy ra');
            }
        }
        else{
            return back()->with('error','Khong tim thay item');
        }
    }
}
