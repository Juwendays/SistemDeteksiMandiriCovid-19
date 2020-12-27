<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndikatorController extends Controller
{
    public function index()
    {
        return view('Indikator.indikator');
    }

    public function indikator2()
    {
        return view('Indikator.indikator2');
    }
}
