<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function index()
    {
        $type_menu = User::get();

        return view('admin.v_users',compact('type_menu'));
    }

    // public function user(){

    //     $type_menu = User::get();

    //     return view('dashboard.V_dashboard',compact('type_menu'));
    // }



}
