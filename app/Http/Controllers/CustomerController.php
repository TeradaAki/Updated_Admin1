<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostCustomer;

class CustomerController extends Controller
{
    public function customer()
    {
        return view('dashboard.customer');
    }

    public function index()
    {
        $customers = PostCustomer::all();
        return view('dashboard.customer', ['customers' => $customers]);
    }
}