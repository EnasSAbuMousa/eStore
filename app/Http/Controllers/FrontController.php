<?php

namespace App\Http\Controllers;

use App\Models\Product;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('home.index', compact('products'));

    }
}
