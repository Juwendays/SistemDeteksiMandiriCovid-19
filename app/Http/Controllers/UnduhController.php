<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hasil;
use App\Models\Result;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Session;
use App\Http\Controllers\Dompdf;
use PDF;

class UnduhController extends Controller
{
    public function unduh()
    {
        $id_test=Session::get('no_test');
        // $hasil = Hasil::find($id);
        $hasil=Hasil::where('no_test',$id_test)->first();
        // Menampilkan unduh pdf


        $pdf = PDF::loadview('unduh',['hasil'=>$hasil])->setPaper('A4','potrait');
        return $pdf->download('hasiltestcovid.pdf');
        return $pdf->stream();

        $request->session()->flush();
    }

    public function cobaunduh(Hasil $hasil)
    {
        $id_test=Session::get('no_test');
        // $hasil = Hasil::find($id);
        $hasil=Hasil::where('no_test',$id_test)->first();

        return view('cobaunduh',compact('hasil'));
    }

    public function welcome(){
        
        QrCode::generate('Make me into a QrCode!');
        return view('welcome');
    }
}
