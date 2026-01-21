<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['id' => 1, 'name' => 'iPhone 15', 'price' => 30000000],
            ['id' => 2, 'name' => 'Samsung S23', 'price' => 25000000],
            ['id' => 3, 'name' => 'Xiaomi 13', 'price' => 18000000],
        ];

        return view('product.index', compact('products'));
    }
}
