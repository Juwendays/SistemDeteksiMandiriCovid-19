<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\Test;
use App\Models\Hasil;

use Validator;


class TestController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'pilihan' => 'required'
            ];

            $messages = [
            'pilihan.required' => 'Indikator tidak boleh kosong.'
            ];

            $validator = Validator::make($request->all(), $rules, $messages);
       
      if($validator->fails()){
          return redirect()->back()->withErrors($validator)->withInput($request->all());
      }

        //$pilihan berisi jawaban inputan indikator dari user
        $pilihan     = $request->pilihan;

        //indikator soal dari database
        $id_soal    = $request->id;
        //jumlah indikator soal
        $jumlah      = $request->jumlah;

        $score=0;
        $benar=0;
        $salah=0;
        $kosong=0;

        for ($i = 0; $i < $jumlah; $i++){
            //id nomor soal
            $nomor=$id_soal[$i];

            //jika user tidak memilih jawaban
            if (empty($pilihan[$nomor])){
                $benar++;
            }else{
                //jawaban dari user
                $jawaban=$pilihan[$nomor];

                //cocokan jawaban user dengan jawaban di database

                $query = DB::table('tests')
                ->where('id', '=', $nomor)
                ->where('knc_jawaban', '=', $jawaban)
                ->count();

                if($query){
                    //jika jawaban cocok (benar)
                    $benar++;
                }else{
                    //jika salah
                    $salah++;
                }

            }
            /*RUMUS
            Jika anda ingin mendapatkan Nilai 100, berapapun jumlah soal yang ditampilkan
            hasil= 100 / jumlah soal * jawaban yang benar
            */

            $jumlah_soal = DB::table('tests')
            ->where('aktif', '=', 'Y')->count();
            // $jumlah_soal=mysqli_num_rows($result);
            $score = 100/$jumlah_soal*$benar;
            $hasil = number_format($score,1);
            }
            
            // $namaku = "Alvin Septo Juwenda";    
            if($hasil>=0 && $hasil<=35){
              $keterangan = "Resiko Rendah";
              $rawat= "Jaga Kondisi dan Ikuti Protokol Kesehatan";
            }
            else if($hasil>36 && $hasil<=66){
              $keterangan = "Resiko Rentan";
              $rawat= "direkomendasikan";
            }
            else{
              $keterangan = "Resiko Tinggi";
              $rawat= "Harus rawat";
            }
        
            // $data = new Hasil();
            // $data->persentase = $hasil;
            // $data->keterangan = $keterangan;
        
            Hasil::insert([
                     'persentase'=> $hasil,
                     'keterangan'=> $keterangan,
                     'hasil'    => $rawat
                     ]);


            // Untuk Pengiriman Session
            Session::put('hasil',$hasil);
            Session::put('keterangan',$keterangan);
            Session::put('pilihan',$request->pilihan);

            $tests= Test::all();
        
            // return view('hasil');
            return view('Indikator.indikator2',['tests' => $tests,'hasil' => $hasil ,'pilihan' => $pilihan,'keterangan'=> $keterangan])->with('status', 'Jawaban Anda berhasil tersimpan');
        
            
    //  return redirect('/indikator2');
    // return redirect()->route('/indikator', ['pilihan' => $pilihan]);
    }
}
