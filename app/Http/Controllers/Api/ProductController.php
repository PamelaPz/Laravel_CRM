<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    public function lists()
    {
        return Product::all();
    }

    public function read($id)
    {
        return Product::with('type_products')->findOrFail($id);
    }
}
