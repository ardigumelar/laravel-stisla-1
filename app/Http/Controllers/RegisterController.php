<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.v_register');
    }

    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string|max:255',
            'email' => 'required|string|email:dns|unique:users',
            'password' => 'required|string|min:4',
            'role_id' => 'required|string'

        ]);

        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => $request->role_id

        ]);

        return to_route('login');
    }
}
