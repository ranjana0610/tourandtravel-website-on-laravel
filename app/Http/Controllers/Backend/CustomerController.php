<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CustomerController extends Controller
{
  
    public function customerlist() {
        $customers = User::all(); 
        return view('backend.customeraccount', compact('customers'));
    }
}
