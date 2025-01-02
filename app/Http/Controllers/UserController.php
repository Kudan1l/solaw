<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function viewDashboard()
    {
        $user = Auth::user();
        return view('dashboard.user.view', compact('user'));
    }
}
