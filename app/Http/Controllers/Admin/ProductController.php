<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;

use DB;
class ProductController extends Controller
{
    public $table;
    public function __construct(){
        $this->table = new Products();
    }
    public function index(){
        $products = Products::all();
        return view('backend.product.products', compact('products'));
    }
    public function deleted(Request $request){
        Products::where('id', $request->id)->update(['deleted' => ($request->deleted == "0") ? "1" : "0", 'updated_at' => date("Y-m-d H:i:s")]);
    return redirect()->route('products');
    }
    public function restore(Request $request){
        $key = Products::findOrFail($request->id);
        $key->deleted =  1;
        $key->updated_at = date("M-y-d H:i:s");
        $key->save();
        return redirect()->route('products');
    }
    public function add(){
        $data = Categories::all();
        return view('backend.product.productsAdd', compact('data'));
    }
    public function postAdd(Request $request){
        $request->validate([
            'name' => 'required|max:255|unique:products',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'content' => 'required',
            'configuration' => 'required',
            'categories' => '',
            'img' => 'required'
        ],[
            'required' => 'Trường :attribute không được bỏ trống',
            'max:255'=> 'Số nhập phải nhỏ hơn :max chữ số',
            'unique' => 'Tên vừa nhập đã tồn tại'
        ]);


        $this->table->name = $request->name;
        $this->table->price = $request->price;
        $this->table->quantity = $request->quantity;
        $this->table->content = $request->content;
        $this->table->configuration = $request->configuration;
        $this->table->category_id = $request->categories;
        $this->table->status = $request->status == "Active" ? "1" : "0";
        $this->table->condition = $request->condition == "Old" ? "1" : "0";
        $this->table->deleted = "1";
        $this->table->created_at = date("Y-m-d H:i:s");
        $this->table->save();
        return redirect()->route('products');

    }
}
