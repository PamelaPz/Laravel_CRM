<?php

namespace App\Http\Controllers;

use App\Buy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    public function index()
    {
        $title = 'Productos';

        $orders = Buy::select([
            DB::raw('count(id) as quantity'),
            DB::raw('week(created_at) as week'),
            DB::raw('year(created_at) as year')
        ])
        ->groupBy(['year', 'week'])
        ->get()
        ->toArray();

        // dd($orders);
        
        return view('reports.index', compact('title', 'orders'));
    }
}
