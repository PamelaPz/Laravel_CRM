<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
	public function create(Request $request)
	{
		$user = User::whereId($request->user()->id)->first();

		if ($user->shoppingCart == null) {
			abort(500, "The user needs create a shopping cart first");
		}

		$order = Order::create([
			'user_id' => $user->id
		]);

		foreach ($user->shoppingCart->products as $product) {
			$order->products()->attach($product, ['quantity' => $product->pivot->quantity]);
		}

		$user->shoppingCart()->delete();

		return response()->json(["message" => "Order created"], 201);
	}
}
