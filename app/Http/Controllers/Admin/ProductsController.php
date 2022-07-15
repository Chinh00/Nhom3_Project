<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = DB::table('products')->orderBy('id', 'DESC')->get();

        return view('Admin/Pages/products/products', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $discount = DB::table('discount')->get();
        $categories = DB::table('categories')->get();
        return view('Admin/Pages/products/add-product', compact('discount', 'categories'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
         $configuration = json_encode([
            'size' => $request->size,
            'technology_display' => $request->technology_display,
            'camera' => $request->camera,
            'chipset' => $request->chipset,
            'ram' => $request->ram,
            'rom' => $request->rom,
            'pin' => $request->pin,
            'sim' => $request->sim,
            'system' => $request->system,
            'resolution' => $request->resolution,
         ]);
        $offer_price = $request->price;
        if($request->discount != null){
            $a = DB::table('discount')->select('percent', 'status')->where('id', $request->discount)->get();
            if($a[0]->status == "1"){
                $offer_price = $request->price * (1 - $a[0]->percent / 100);
            }
        }
        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'condition' => $request->type,
            'discount_id' => $request->discount,
            'category_id' => $request->category,
            'content' => $request->content,
            'status' => "0",
            'ratings' => 100,
            'offer_price' => $offer_price,
            'configuration' => $configuration,
            'quantity' => $request->quantity,
            'created_at' => date('Y-m-d h:i:s')
        ];
        
        $status = DB::table('products')->insert($data);
        $name = $request->image_link->getClientOriginalName();
        $request->file('image_link')->move(public_path('Images\Product-images'), $name);
        
        $image_list = [];
        foreach($request->image as $key => $value){
            $e = $value->getClientOriginalName();
            $value->move(public_path('Images\Product-images'), $e);
            $image_list[] = $e;
        }
        $image_list = implode("|", $image_list);
        $last = DB::table('products')->select('id')->orderBy('id', 'DESC')->first();
        $images = [
            'product_id' => $last->id,
            'image_link' => $name,
            'image_list' => $image_list,
            'created_at'=> date("Y-m-d h:i:s"),
        ];
        $check = DB::table('product_images')->insert($images);
        if ($status && $check) {
            return redirect('/admin/products')->with('success', "Thanh cong");
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
            $images = DB::table('product_images')->select('image_link', 'image_list')->where('product_id', $id)->get();
            foreach($images->all() as $key){
                File::delete(public_path() . '\Images\Product-images\\'. $key->image_link);
                foreach(explode("|", $key->image_list) as $a => $b){
                    File::delete(public_path() . '\Images\Product-images\\' . $b);
                }
            }
            DB::table('product_images')->select('image_link', 'image_list')->where('product_id', $id)->delete();
            DB::table('products')->where('id', $id)->delete();
            return redirect('/admin/products')->with("danger", "danger");

    }
}
