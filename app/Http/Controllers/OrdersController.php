<?php

namespace App\Http\Controllers;

use App\Buy;
use App\Car;
use App\User;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function index()
    {
        $users = User::all();
        
        $buys = Buy::all();

        $title = 'Pedidos';
        
        return view('orders.index', compact('title', 'users','buys'));
    }

    public function show($id)
    {
        $users = User::all();

        $buys = Buy::find($id);

        $cars = Car::all();

        $products = Product::all();

        $title = 'Información de pedido';

        return view('orders.show', compact('title', 'buys', 'users', 'cars', 'products'));
    }
}
