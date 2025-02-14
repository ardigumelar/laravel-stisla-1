<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $type_menu = user::get();

        return view('auth.v_dashboard',compact('type_menu'));
    }
}
