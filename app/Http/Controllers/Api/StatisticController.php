<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
	public function statistics()
	{
		$orders = Order::all();
		$products = Product::all();
		$users = User::all();

		$total_sells = 0;

		foreach ($orders as $order) {
			foreach ($order->products as $product) {
				$total_sells += ($product->price * $product->pivot->quantity);
			}
		}


		$data = [
			'number_orders' => $orders->count(),
			'number_products' => $products->count(),
			'number_users' => $users->count(),
			'total_sells' => $total_sells
		];

		return response()->json($data, 200);
	}
}
