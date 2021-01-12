<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Hasil;
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

    public function indikator2(Hasil $hasil)
    {
        $tests= Test::all();

        return view('Indikator.indikator2'.$hasil->id,['tests' => $tests],compact('hasil'));
    }

    public function selesai(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
