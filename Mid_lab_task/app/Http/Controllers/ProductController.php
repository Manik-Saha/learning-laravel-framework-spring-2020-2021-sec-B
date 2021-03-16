<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index');
    }

    public function existing(){
        $product = Product::all();
        return view('product.existing')->with('list', $product);
    }

    public function upcoming(){
        $product = Product::all();
        return view('product.upcoming')->with('list', $product);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $date = date('Y-m-d H:i:s');
        
        $product = new Product();

        $product->product_name = $req->product_name;
        $product->category = $req->category;
        $product->unit_price = $req->unit_price;
        $product->status = $req->status;
        $product->updated_at = $date;

        $product->save();
        return view('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit')->with('list', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
        $product = Product::find($id);
        return view('product.delete')->with('list', $product);
    }

    public function destroy(Product $product)
    {
        //
    }

    public function details($product_id,$vendor_id){
        $list = DB::table('product')
                ->join('vendor', 'product.product_id', '=', 'vendor.product_id')
                ->select('product.*', 'vendor.*')
                ->get();
         return view('product.delete')->with('list', $list);

    }
}
