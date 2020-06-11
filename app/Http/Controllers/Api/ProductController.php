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

<<<<<<< HEAD
    public function read($id)
    {
        return Product::with('type_products')->findOrFail($id);
    }
=======
	public function read($id)
	{
		return Product::with(['type_products', 'status_product'])->findOrFail($id);
	}
>>>>>>> 2ad86b517d3c4e99a210d1533c3e76191474d78c
}
