<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        return view('dashboard.dashboard');
    }
    public function customer() {
        return view('dashboard.customer');
    }
    
    
}

