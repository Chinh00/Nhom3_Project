<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Discount;
use DateTime;
use Illuminate\Support\Facades\DB;

class DiscountController extends Controller
{
    protected $dis;
    public function __construct()
    {
        $this->dis = new Discount();
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->dis::all();
        return view('Admin.Pages.discount.discount', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
    
        $data = [
            'title' => $request-> title,
            'time_start' => date('Y-m-d h:i:s', strtotime($request->time_start)),
            'time_end' => date('Y-m-d h:i:s', strtotime($request->time_end)),
            'status' => "0",
            'percent' => (float)$request->percent,
            'created_at' => date('Y-m-d h:i:s')
        ];
        $check = $this->dis::insert($data);
        if ($check){
        
            
            return redirect('/admin/discount')->with('success', "Thanh cong");
        }
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
    public function show(Request $request)
    {
        $res = $this->dis::findOrFail($request->id);
        return view("Admin.Pages.discount.discount-view", compact('res'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $res = $this->dis::findOrFail($request->id);
        return response()->json($res);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
            $res = $this->dis::findOrFail($request->id);
            $res->title = $request-> title;
            $res->time_start = date('Y-m-d h:i:s', strtotime($request->time_start));
            $res->time_end = date('Y-m-d h:i:s', strtotime($request->time_end));
            $res->status = $request->status;
            $res->percent = ((float) $request->percent);
            $res->updated_at = date('Y-m-d h:i:s');
        $a = DB::table('products')->select('id', 'price')->where('discount_id', $request->id)->get()->toArray();
        $b = [];
        $c = [];
        foreach($a as $key){
            $b[] = $key->id;
            $c[] = $key->price;
        }
        if($request->status == "0"){
            for($i = 0; $i < count($a); $i++){
                DB::table('products')
                ->select('offer_price')
                ->where('id', $b[$i])
                ->update(['offer_price' => $c[$i]]);
            }
        }
        if($request->status == "1") {
            for($i = 0; $i < count($a); $i++){
                DB::table('products')
                ->select('offer_price')
                ->where('id', $b[$i])
                ->update(['offer_price' => $c[$i] * (1 - (float) $request->percent / 100) ]);
            }
        }
        $res->save();
        return redirect('/admin/discount')->with('info', 'update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $price = (DB::table('products')->select('price')->where('discount_id', $request->id)->get());
        if(isset($price[0])){
            DB::table('products')->where('discount_id', $request->id)->update(['discount_id' => null, 'offer_price' => $price[0]->price]);
        }
        $this->dis::findOrFail($request->id)->delete();
        return redirect('/admin/discount')->with('danger', "zdbdf");

    }
}
