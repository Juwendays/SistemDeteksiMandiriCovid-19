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

    public function indikator2()
    {
        // Mengambil id hasil dengan session
        $id_test=Session::get('no_test');
        $pilihan=Session::get('pilihan');
        
        // Mengambil Database Tests
        $tests= Test::all();

        // Mencocokan no_test hasil
        $hasil=Hasil::where('test_id',$id_test)->first();

        // $hasil = Session::get('no_test');
        $pilihan = Session::get('pilihan');


        return view('Indikator.indikator2',['tests' => $tests,'hasil' => $hasil,'pilihan' => $pilihan]);
    }

    public function selesai(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
