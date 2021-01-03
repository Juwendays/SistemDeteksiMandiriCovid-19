<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\Test;
use App\Models\Hasil;
use Validator;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard()
    {
        $biodatas = Biodata::count();
        $hasils = Hasil::count();
        $tests = Test::count();

        $widget = [
            'biodatas' => $biodatas,
            'hasils'    => $hasils,
            'tests' => $tests,
        ];

        return view('Admin.dashboard',compact('widget'));
    }

    public function rekapbiodata()
    {
        $biodatas = Biodata::all();

        return view('Admin.rekapbiodata',['biodatas'=>$biodatas]);
    }

    public function rekaphasil()
    {
        $hasils = Hasil::all();

        return view('Admin.rekaphasiltest',['hasils'=>$hasils]);
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

        return redirect('/rekapsoaltest')->with('status', 'Indikator Soal Berhasil ditambahkan');
    }

    public function edit(Test $test)
    {
        return view('Admin.updatesoal', compact('test'));
    }

    public function update(Request $request, Test $test)
    {
        // return $request;
        $rules = [
            'indikator' => 'required',
            'opsia'      => 'required',
            'opsib'      => 'required',
            'jawaban' => 'required',

      ];

      $messages = [
          'indikator.required'          => 'Indikator masih kosong',
          'opsia.required'           => 'Nomor Induk Kependudukan wajib diisi.',
          'opsib.required'         => 'Email wajib diisi.',
          'jawaban.required'        => 'Pilihan jawaban yang benar masih kosong',
      ];

      $validator = Validator::make($request->all(), $rules, $messages);
       
      if($validator->fails()){
          return redirect()->back()->withErrors($validator)->withInput($request->all());
      }

           Test::where('id', $test->id)
           ->update([
               'indikator' => $request->indikator,
               'ya'      => $request->opsia,
               'tidak'      => $request->opsib,
               'knc_jawaban' => $request->jawaban
           ]);
           
            return redirect('/rekapsoaltest')->with('status','Data Indikator berhasil di update');
        }

    public function destroy(Test $test)
    {
        // return $test;
        Test::destroy($test->id);
        return redirect('/rekapsoaltest')->with('status', 'Data Indikator berhasil di hapus');
    }
}