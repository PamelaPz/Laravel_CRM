<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Utils\ShoppingCartUtil;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
	public function products(Request $request)
	{
		$sCartUtil = new ShoppingCartUtil($request->user());

		return response()->json($sCartUtil->getCartProducts(), 200);
	}

	public function addProduct(Request $request)
	{
		$request->validate([
			'product_id' => 'required|integer',
			'qty' => 'required|integer',
		]);

		$sCartUtil = new ShoppingCartUtil($request->user());

		$response = $sCartUtil->addProduct($request->product_id, $request->qty);

		return response()->json($response, 201);
	}

	public function deleteProduct(Request $request)
	{
		$request->validate([
			'product_id' => 'required|integer',
		]);

		$sCartUtil = new ShoppingCartUtil($request->user());

		return response()->json($sCartUtil->deleteProduct($request->product_id), 200);
	}
}

