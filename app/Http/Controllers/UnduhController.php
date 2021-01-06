<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class UnduhController extends Controller
{
    public function unduh()
    {
        // Menampilkan unduh pdf
        $pdf = PDF::loadview('unduh')->setPaper('A4','potrait');
        return $pdf->download('hasiltestcovid.pdf');
        return $pdf->stream();

        $request->session()->flush();
    }
}
