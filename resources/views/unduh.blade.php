<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Unduh Hasil Test</title>
  </head>
  </body>
    <h1>Pemerintah Provinsi Jawa Tengah
       <br>
     Surat Pernyataan Hasil Test Mandiri Covid-19</h1>

     <hr>

     <h3>Data Anda : </h3>

     Nama           : {{Session::get('nama')}}
     <br>
     Nik            :  {{Session::get('nik')}}
     <br>
     Alamat         : {{Session::get('alamat')}}
     <br>
     Email          : {{Session::get('email')}}
     <br>
     No Hp/Wa       : {{Session::get('no')}}
     <br>
     Kota           : {{Session::get('kota')}}
     <br>

     <p>Hasil Test Menunjukan bahwa
    <b><u> {{Session::get('hasil')}} %</u></b>
       anda beresiko terkena covid-19 dan dalam kategori <b> {{Session::get('keterangan')}} <u>
       </u></b> terjangakit maupun menularkan ke orang lain sebagai bahan runjukan Selanjutnya
     kami sarankan anda bersedia untuk melakukan swab test di tempat yang sudah kami rujukan</p>

 </body>
 </html>
