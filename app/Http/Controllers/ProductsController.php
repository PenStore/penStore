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

        $raw_where = "(product_images.main_image = 1) AND (";
        $raw_where_temp = '';
        $is_added_new_where = false;     


        // for($i = 0; $i <)
        if(isset($request->color_0)){
            $raw_where_temp .= "categories.name = 'Black' OR ";
            $is_added_new_where = true;
        }
        if(isset($request->color_1)){
            $raw_where_temp .= "categories.name = 'Red' OR ";
            $is_added_new_where = true;
        }
            if(isset($request->color_2)){
            $raw_where_temp .= "categories.name = 'Blue' OR ";
            $is_added_new_where = true;
        }
        if(isset($request->color_3)){
            $raw_where_temp .= "categories.name = 'Green' OR ";
            $is_added_new_where = true;
        }
        if(isset($request->out_of_stock)){
            $raw_where_temp .= 'products.quantity = 0 OR ';
            $is_added_new_where = true;
        }
        if(isset($request->in_stock)){
            $raw_where_temp .= 'products.quantity > 0';
            $is_added_new_where = true;
        }

        $raw_where .= $raw_where_temp;
        $raw_where = trim($raw_where);
                    
        if(trim(substr($raw_where, -3)) == "OR")
            $raw_where = substr($raw_where, 0, -3);
        
        if(substr($raw_where, -5) == "AND ("){
            $raw_where = substr($raw_where, 0, -5);
        }

        
        
        if($is_added_new_where)
            $raw_where .= ")";
        
        // product_images.main_image = 1 AND (categories.name = 'Blue' OR categories.name = 'Red' OR categories.name = 'Black' OR products.quantity = 0 OR )"

        $available_colors = DB::table('categories')
            ->select('name')
            ->get();


        $products = DB::table('products')
            ->join('product_images', 'products.id', '=', 'product_images.product_id')
            ->join('product_categories', 'products.id', '=', 'product_categories.product_id')
            ->join('categories', 'product_categories.category_id', 'categories.id')
            ->select('products.*', 'categories.name as category_name', 'product_images.image')
            ->whereRaw($raw_where);
            // ->orWhere($where_query);
            

        $products = $products->get();
        
        if(isset($range))
            $products->whereBetween('products.price', $range);

        return view('home.catalog', ['products' => $products, 'request' => $request, 'colors' => $available_colors]);
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
