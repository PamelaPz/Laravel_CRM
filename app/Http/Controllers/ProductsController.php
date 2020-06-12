<?php

namespace App\Http\Controllers;

use App\Product;
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

		return view('dashboard.create', compact('types'));
	}

	public function store(Request $request)
	{
		$request->validate([
			'name' => 'required|string',
			'price' => 'required|numeric',
			'type_products_is' => 'required|numeric',
		]);

		$product = new Product();

		$product->name = $request->get('name');
		$product->price = $request->get('price');
		$product->type_products_id = $request->get('type_products_id');


		if ($request->hasFile('product')) {
			$path = $request->file('product')->store('products');

			$product->image = $path;
		}

		$product->save();

		return redirect()->route('products');
	}

	public function edit($id)
	{
		$types = TypeProduct::all();
		$product = Product::findOrFail($id);

		return view('products.edit', compact('product', 'types'));
	}

	public function update(Request $request)
	{
		$product = Product::findOrFail($request->get('id'));

		$product->name = $request->get('name');
		$product->price = $request->get('price');
		$product->type_products_id = $request->get('type_products_id');

		$product->save();

		return redirect()->route('products');
	}
}
