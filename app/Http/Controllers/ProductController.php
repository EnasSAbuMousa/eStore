<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }

    public function create(){
        $categories = Category::all();
        return view('admin.products.create',compact('categories'));
    }

    public function store (Request $request){
        $products = new Product();
        $products-> product_name = $request -> name;
        $products-> price = $request -> price;
        $products-> details = $request -> details;
        $products-> quantity = $request -> quantity;
        $products-> category_id = $request -> category_id;


        $products->save();
        return redirect() -> back();
    }



    public function destroy ($id){
        Product:: where ('id',$id)->delete();
        return redirect() -> back();
    }

    public function edit ($id){
        $product = Product::find($id);
        $categories = Category::all();
        $category_name= Category::find($product->category_id);
        return view('admin.products.edit',compact('product','categories','category_name'));
    }

    public function update (Request $request , $id){
        $product = Product::find($id);

        $product-> product_name = $request -> name;
        $product-> price = $request -> price;
        $product-> details = $request -> description;
        $product-> quantity = $request -> quantity;
        $product-> category_id = $request -> category_id;


        $product->save();
        return redirect('products');
    }

}


