<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function index(){

        $type_menu = user::get();
        return view('auth.V_index', compact('type_menu'));
    }

    // public function user(){

    //     $type_menu = User::get();

    //     return view('dashboard.V_dashboard',compact('type_menu'));
    // }

    

}
