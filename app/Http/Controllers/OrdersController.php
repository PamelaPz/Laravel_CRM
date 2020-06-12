<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function index()
    {
        $users = User::all();
        
        $buys = Order::all();

        $title = 'Pedidos';
        
        return view('orders.index', compact('title','buys', 'users'));
    }

    public function show($id)
    {
        $users = User::all();

        $buys = Order::find($id);

        $products = Product::all();

        $title = 'Información de pedido';

        return view('orders.show', compact('title', 'buys', 'users'));
    }
}
