<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->flush();

        return view('home.index');
    }

    public function about(Request $request)
    {
        $request->session()->flush();
        
        return view('home.about');
    }

}
