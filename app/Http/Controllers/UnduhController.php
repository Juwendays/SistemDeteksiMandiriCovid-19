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
        return $pdf->stream();

        Session::flush();
        Session::forget('nama',$data->nama);
        Session::forget('nik',$data->nik);
        Session::forget('alamat',$data->alamat);
    }
}
