<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function menu() {
        return view('Customers.menu');
    }
}
