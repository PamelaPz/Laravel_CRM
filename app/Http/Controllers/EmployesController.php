<?php

namespace App\Http\Controllers;

use App\Employe;
use Illuminate\Http\Request;

class EmployesController extends Controller
{
    public function index()
    {
        $employes = Employe::all();

        $title = 'Empleados';
        
        return view('employe.employe', compact('title', 'employes'));
    }
}
