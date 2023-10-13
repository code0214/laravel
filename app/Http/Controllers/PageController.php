<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    
    public function HomePage(Request $request)
    {
        return view('/pages/home');
    }
}
