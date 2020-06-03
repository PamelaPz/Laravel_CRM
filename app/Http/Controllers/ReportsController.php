<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        $true = 'active';
        // $products = Product::all();
        // $types = DB::table('type_products')->get();        

        $title = 'Productos';
        
        return view('reports.index', compact('title'));
    }
}
