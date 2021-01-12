<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hasil;
use App\Models\Result;
use PDF;

class UnduhController extends Controller
{
    public function unduh()
    {
        // $hasil = Hasil::find($id);

        // Menampilkan unduh pdf
        $pdf = PDF::loadview('unduh')->setPaper('A4','potrait');
        return $pdf->download('hasiltestcovid.pdf');
        return $pdf->stream();

        $request->session()->flush();
    }

    public function cobaunduh(){
        $result=Result::all();

        return view('cobaunduh',compact('result'));
    }
}
