<?php

namespace App\Http\Controllers\Master;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\product; //+eqoeluent

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$product = DB::table('product')->get();
        $product = product::all();
       return view('Master/Product/index', ['product' => $product]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('categories')->get();
         return view('Master/Product/create', ['categories' => $categories]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('categories')->get();
        //DB::table('product')->insert([
          product::create([
            'PRODUCT_ID' => $request->productid, 
            'CATEGORY_ID' => $request->categorid,
            'PRODUCT_NAME' => $request->productname,
            'PRODUCT_PRICE' => $request->price,
            'PRODUCT_STOCK' => $request->stock,
            'EXPLANATION' => $request->explanation
            
        ]);
         return redirect('Productindex');
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
        $categories = DB::table('categories')->get();
        //$product = DB::table('product)
       // ->where('PRODUCT_ID', $id)
       //->get();
        $product = product::where('PRODUCT_ID', $id)->get();
        return view('Master/Product/edit', ['product' => $product, 'categories'=>$categories]);
        
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
          DB::table('categories')->get();
         /*Db::table('product')
        ->where('PRODUCT_ID', $request->productid)
        ->update([*/
        product::where('PRODUCT_ID', $request->productid)
        ->update([
            'CATEGORY_ID' => $request->categorid,
            'PRODUCT_NAME' => $request->productname,
            'PRODUCT_PRICE' => $request->price,
            'PRODUCT_STOCK' => $request->stock,
            'PRODUCT_STATUS' => $request->pstatus,
            'EXPLANATION' => $request->explanation
        ]);

         return redirect('Productindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::table('product')
         ->where('PRODUCT_ID', $id)
         ->delete();
       return redirect('Productindex');

    }
}
