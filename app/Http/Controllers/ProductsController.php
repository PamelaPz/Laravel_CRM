<?php

namespace App\Http\Controllers;

use App\Product;
use App\StatusCar;
use App\TypeProduct;
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

    public function create()
    {
        $types = TypeProduct::all();
        // $statuses = StatusCar::all();


        return view('dashboard.create', compact('types'));
    }

    public function store(Request $request)
    {
        // dd($request->all())

        Product::create([
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'type_products_id' => $request->get('type_products_id'),
            'status_product_id' => $request->get('status_product_id')
        ]);

        return redirect()->route('products');
    }

    public function edit($id)
    {
        $types = TypeProduct::all();
        $statuses = StatusCar::all();
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product', 'types', 'statuses'));
    }

    public function update(Request $request)
    {
        $product = Product::findOrFail($request->get('id'));

        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->type_products_id = $request->get('type_products_id');
        $product->status_product_id = $request->get('status_product_id');

        $product->save();

        return redirect()->route('products');
    }
}
