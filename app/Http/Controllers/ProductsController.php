<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $data = $request->all();
        $validator = Validator::make($data, [
            'user_detail' => 'required',
            'product_id' => 'required',
            'updated_price'=>'required'
        ]);

        if ($validator->fails()) {
            return redirect('/admin')
                        ->withErrors($validator)
                        ->withInput();
        }

        $user = $data['user_detail'];
        $product=$data['product_id'];
        $price=$data['updated_price'];

        $product=Products::where('id',$data['product_id'])->first();
        // dd($product);
        $product->user()->attach($user ,['price' => $price]);

        return redirect()->back()->with('sucesss', "You Sucessfully Saved the Price for a User");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($id,$price)
    {
        // dd($id,$price);
        $custom_price = DB::table('product_users') // pivot table
        ->where('price_id', $id) // product id
        ->where('user_id', Auth::user()->id) // user id
        ->first();
        $unique_price = $custom_price->price;
        return ( ! empty($unique_price) ) ? $price : $unique_price ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
}
