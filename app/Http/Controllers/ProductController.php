<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $title = 'Product';
        $product = Product::all();
        $category = Category::all();
        return view('product.index', [
            'title' => $title,
            'product' => $product,
            'category' => $category
        ]);
    }

    public function create()
    {
    }
}
