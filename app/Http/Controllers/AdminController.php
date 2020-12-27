<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\Test;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('Admin.dashboard');
    }

    public function rekapbiodata()
    {
        $biodatas = Biodata::all();

        return view('Admin.rekapbiodata',['biodatas'=>$biodatas]);
    }

    public function rekaphasil()
    {
        return view('Admin.rekaphasiltest');
    }

    public function rekapsoal()
    {
        $tests = Test::all();

        return view('Admin.rekapsoaltest',['tests'=>$tests]);
    }

    public function tambahsoal()
    {
        return view('Admin.tambahsoal');
    }

    // public function store(Request $request)
    // {
    // Test::create([
    //     'indikator' => $request->indikator,
    //     'opsia' => $request->ya,
    //     'opsib' => $request->tidak,
    //     'jawaban' => $request->knc_jawaban
    // ]);

    // return redirect('/rekapsoal')->with('status', 'Data Student Berhasil ditambahkan');
    // }  
    
    public function create(Request $request)
    {
        // nama di table => $request-> name pada inputan di html
        $rules = [
            'indikator'  => 'required',
            'opsia'      => 'required',
            'opsib'      => 'required',
            'jawaban'    => 'required',

      ];

      $messages = [
          'indikator.required'     => 'Indikator masih kosong',
          'opsia.required'         => 'Opsi A belum di isi',
          'opsib.required'         => 'Opsi B belum di isi.',
          'jawaban.required'       => 'Pilihan jawaban yang benar masih kosong',
      ];

      $validator = Validator::make($request->all(), $rules, $messages);
       
      if($validator->fails()){
          return redirect()->back()->withErrors($validator)->withInput($request->all());
      }

        Test::create([
            'indikator' => $request->indikator,
            'ya' => $request->opsia,
            'tidak' => $request->opsib,
            'knc_jawaban' => $request->jawaban,
            'aktif' => 'Y'
        ]);

        return redirect('/admin/tablesoal')->with('status', 'Indikator Soal Berhasil ditambahkan');
    }
}