<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\Hasil;
use App\Models\Kota;
use Session;
use Validator;

class BiodataController extends Controller
{
    public function index()
    {
      $kota = Kota::all();
      $biodata = Biodata::all();

        return view('home.biodata',compact('kota','biodata'));
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'nik'  => 'required|min:16|max:16',
            'lahir' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'no' => 'required|min:10|max:12',
            'kota' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'fotoktp' => 'required|image|mimes:jpg,png,jpeg|max:2048'
      ];

      $messages = [
          'nama.required'          => 'Nama wajib diisi.',
          'nik.required'           => 'Nomor Induk Kependudukan wajib diisi.',
        //   'nik.unique'             => 'Nomor Induk Kependudukan sudah terdaftar.',
          'nik.min'                => 'Nomor Induk Kependudukan minimal diisi dengan 16 karakter.',
          'nik.max'                => 'Nomor Induk Kependudukan maksimal diisi dengan 16 karakter.',
          'lahir.required'         => 'Tanggal Lahir wajib diisi.',
          'email.required'         => 'Email wajib diisi.',
          'email.email'            => 'Email tidak valid.',
        //   'email.unique'           => 'Email sudah pernah terdaftar.',
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
        }

        // Membuat Storage Penyimpanan Untuk Upload
        $foto = $request->file('foto')->store('foto','public');
        $fotoktp = $request->file('fotoktp')->store('fotoktp','public');

        $id=uniqid();

        //Menyimpan inputan ke dalam database
        $data = new Biodata();
        $data->no_test = $id;
        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->lahir = $request->lahir;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->no = $request->no;
        $data->kota = $request->kota;
        $data->foto = $foto;
        $data->fotoktp = $fotoktp;
        $data->hasil_id = 1;
        session(['no_test'=> true]);
        $data->save();

        // $hasil = new Hasil;

        // $hasil->biodata_id = uniqid();
        // $hasil->save();
        Hasil::wherebiodata_id($data->no_test);

        // Menyimpan session
        Session::put('nama',$data->nama);
        Session::put('nik',$data->nik);
        Session::put('no_test',$data->no_test);
        Session::put('lahir',$data->lahir);
        Session::put('alamat',$data->alamat);
        Session::put('email',$data->email);
        Session::put('no',$data->no);
        Session::put('kota',$data->kota);
        Session::put('foto',$data->foto);
        Session::put('fotoktp',$data->fotoktp);

    // alihkan halaman ke halaman TEST FUNGSI SAMA DENGAN HEADER
    // return Redirect::route('indikator, $data->no_test')->with( ['data' => $data] );
    // return redirect('/indikator/covid19/'.$data->no_test);
    
    return redirect('/indikator');
    }
}