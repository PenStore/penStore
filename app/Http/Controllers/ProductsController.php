<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(isset($request->price_range)){
            $range = explode('-', str_replace(' ', '', str_replace('$', '', $request->price_range)));
        }
        
        //tut bil Richmond i nadelal cringe
        //this is soooooooo scringe soultion, please no hate. I got brain dmg after 12h coding

        $raw_where = "(product_images.main_image = 1) AND ";
        if(isset($request->color_0))
            $raw_where .= "(categories.name = 'Blue') OR ";

        if(isset($request->color_1))
            $raw_where .= "(categories.name = 'Black') OR ";

        if(isset($request->color_2))
            $raw_where .= "(categories.name = 'Red') OR ";
        

        if(isset($request->out_of_stock))
            $raw_where .= '(products.quantity = 0) OR ';

        if(isset($request->in_stock))
            $raw_where .= '(products.quantity > 0)';


                    
        if(trim(substr($raw_where, -3)) == "OR")
            $raw_where = substr($raw_where, 0, -4);

        
        
        if(substr($raw_where, -4) == "AND "){
            $raw_where = substr($raw_where, 0, -4);
        }

        
        $raw_where = trim($raw_where);

            
        // product_images.main_image = 1 AND (categories.name = 'Blue' OR categories.name = 'Red' OR categories.name = 'Black' OR products.quantity = 0 OR )"

        $available_colors = DB::table('products')
            ->join('product_categories', 'products.id', 'product_categories.product_id')
            ->join('categories', 'product_categories.category_id', 'categories.id')
            ->select('categories.name')
            ->get();


        $products = DB::table('products')
            ->join('product_images', 'products.id', '=', 'product_images.product_id')
            ->join('product_categories', 'products.id', '=', 'product_categories.product_id')
            ->join('categories', 'product_categories.category_id', 'categories.id')
            ->select('products.*', 'categories.name as category_name', 'product_images.image')
            ->whereRaw($raw_where);
            // ->orWhere($where_query);
        if(isset($range))
            $products->whereBetween('products.price', $range);

        return view('home.catalog', ['products' => $products->get(), 'request' => $request, 'colors' => $available_colors]);
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
        //
    }

    public function show(Request $request)
    {
        $product = Products::where('id', '=', $request['id'])->first();
        $images = DB::table('products')
        ->join('product_images', 'products.id', 'product_images.product_id')
        ->select('product_images.image', 'products.name')
        ->where('products.id', '=', $request['id'])
        ->get();

        return view('product', ['product' => $product, 'images' => $images]);
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
