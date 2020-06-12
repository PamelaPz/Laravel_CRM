<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // $users = DB::table('users')->get();
        $users = User::all();

        $title = 'Clientes';
        
        return view('users.index', compact('title', 'users'));
    }

    public function show($id)
    {
        $user = User::find($id);

        $title = 'Información de usuario';

        return view('users.show', compact('user', 'title'));
    }
}
