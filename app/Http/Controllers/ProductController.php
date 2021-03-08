<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $title = 'Product';
        $product = Product::all();
        return view('product.index', [
            'title' => $title,
            'product' => $product
        ]);
    }
}
