<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $types = DB::table('type_products')->get();        

        $title = 'Productos';
        
        return view('products.index', compact('title', 'products', 'types'));
    }
}
