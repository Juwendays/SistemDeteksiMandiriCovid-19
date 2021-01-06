<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Session;
use Validator;
use PDF;

class IndikatorController extends Controller
{
    public function index()
    {
        $tests= Test::all();

        return view('Indikator.indikator',['tests' => $tests]);
    }

    public function indikator2()
    {
        $tests= Test::all();

        return view('Indikator.indikator2',['tests' => $tests]);
    }

    public function selesai(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
