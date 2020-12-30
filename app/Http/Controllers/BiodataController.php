<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use Session;
use Validator;

class BiodataController extends Controller
{
    public function index()
    {
        return view('home.biodata');
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'nik'  => 'required|min:16|max:16|unique:biodatas',
            'email' => 'required|email|unique:biodatas',
            'alamat' => 'required',
            'no' => 'required|min:10|max:12',
            'kota' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'fotoktp' => 'required|image|mimes:jpg,png,jpeg|max:2048'
      ];

      $messages = [
          'nama.required'          => 'Nama wajib diisi.',
          'nik.required'           => 'Nomor Induk Kependudukan wajib diisi.',
          'nik.unique'             => 'Nomor Induk Kependudukan sudah terdaftar.',
          'nik.min'                => 'Nomor Induk Kependudukan minimal diisi dengan 16 karakter.',
          'nik.max'                => 'Nomor Induk Kependudukan maksimal diisi dengan 16 karakter.',
          'email.required'         => 'Email wajib diisi.',
          'email.email'            => 'Email tidak valid.',
          'email.unique'           => 'Email sudah pernah terdaftar.',
          'alamat.required'        => 'Alamat wajib diisi',
          'no.required'            => 'Nomor HP wajib diisi.',
          'no.min'                 => 'Nomor HP minimal 10 angka',
          'no.max'                 => 'Nomor HP maksimal 12 angka',
          'kota.required'          => 'Kota wajib diisi.',
          'foto.required'          => 'Foto wajib diisi.',
          'foto.image'             => 'Foto wajib dalam bentuk image',
          'foto.mimes'             => 'Foto wajib dalam bentuk image',
          'fotoktp.required'       => 'Foto KTP wajib diisi.'
      ];

      $validator = Validator::make($request->all(), $rules, $messages);
       
      if($validator->fails()){
          return redirect()->back()->withErrors($validator)->withInput($request->all());
  
        // Membuat Storage Penyimpanan Untuk Upload
        $foto = $request->file('foto')->store('foto','public');
        $fotoktp = $request->file('fotoktp')->store('fotoktp','public');


        //Menyimpan inputan ke dalam database
        $data = new Biodata();
        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->no = $request->no;
        $data->kota = $request->kota;
        $data->foto = $foto;
        $data->fotoktp = $fotoktp;
        $data->save(); 

        // Menyimpan session
        Session::put('nama',$data->nama);
        Session::put('nik',$data->nik);
        Session::put('alamat',$data->alamat);
        Session::put('email',$data->email);
        Session::put('no',$data->no);
        Session::put('kota',$data->kota);
        Session::put('foto',$data->foto);
        Session::put('fotoktp',$data->fotoktp);

	// alihkan halaman ke halaman TEST FUNGSI SAMA DENGAN HEADER
	return redirect('/indikator');
    }
}
}