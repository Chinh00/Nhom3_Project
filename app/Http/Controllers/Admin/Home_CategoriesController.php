<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Home_Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home_CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeCategory = Home_Categories::orderBy('id','desc')->get();
        return view('Admin.Pages.HomeCategories.show',compact('homeCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $a = DB::table('home_categories')->select('category_id')->get()->toArray();
        $b = [];
        foreach($a as $key){
            $b[] = $key->category_id;
        }
        $parent_cats=DB::table('categories')->whereNotIn('id', $b)->get();
        return view('Admin.Pages.HomeCategories.create',compact('parent_cats'));
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
            'category_id'=>'nullable',
        ]);

        $homecategory = new Home_Categories();
        $homecategory-> category_id = $request->input('parent_id');
        $homecategory->save();
//        return $request->all();
        return redirect()->route('homecategories.index')->with('success','Thanh cong hien thi Danh mục mới');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $home_categories = DB::table('home_categories')->get();

        return view('index',compact(['home_categories']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $homeCategory=Home_Categories::find($id);
        $category=Categories::orderBy('title','ASC')->get();
        $homeCate = $homeCategory->category_id;

        if($category){
            return view('Admin.Pages.HomeCategories.edit',compact(['homeCategory','category','homeCate']));
        }
        else{
            return back()->with('error','Khong tim thay item');
        }
    }
//    homecategories của admin mà ???
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $homeCategory = Home_Categories::find($id);
        if ($homeCategory) {
            $request->validate([
                'category_id'=>'nullable',

            ]);

            $homeCategory->category_id = $request->input('parent_id');
            $homeCategory->save();
//        return $request->all();
            return redirect()->route('homecategories.index')->with('info', 'Thanh cong Sua hien thi Danh mục');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $homeCategory=Home_Categories::find($id);
        $homeCategory->delete();
        return redirect()->route('homecategories.index')->with('danger', 'Thanh cong Xoa danh mục');
    }
}
