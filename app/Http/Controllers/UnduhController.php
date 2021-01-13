<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hasil;
use App\Models\Result;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
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

        QrCode::size(500)

        ->format('png')

        ->generate('HDTuto.com', public_path('images/qrcode.png'));

        return view('cobaunduh');
    }

    public function welcome(){
        
        QrCode::generate('Make me into a QrCode!');
        return view('welcome');
    }
}
