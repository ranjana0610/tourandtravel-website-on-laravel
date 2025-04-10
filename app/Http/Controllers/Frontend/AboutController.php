<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return view('frontend.about');
    }
    
    public function about2(){
        return view('frontend.about2');
    }
    
}
