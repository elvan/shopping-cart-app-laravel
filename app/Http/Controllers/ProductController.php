<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('shop.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::FindOrFail($id);

        return view('shop.show', compact('product'));
    }
}
