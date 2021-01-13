<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Deteksi Mandiri COVID-19</title>
    <style type="text/css">
		</style>
  </head>

  </body>

  <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6 mb-3">
                            
    <h1>Pemerintah Provinsi Jawa Tengah
       <br>
     Surat Pernyataan Hasil Test Mandiri Covid-19</h1>

     <hr>

     <h3>Data Anda : </h3>

     Nama           : {{Session::get('nama')}}
     <br>
     Nik            : {{Session::get('nik')}}
     <br>
     Alamat         : {{Session::get('alamat')}}
     <br>
     Email          : {{Session::get('email')}}
     <br>
     No Hp/Wa       : {{Session::get('no')}}
     <br>
     Kota           : {{Session::get('kota')}}
     <br>

     
                            
                            </div>
                            <div class="col-xl-9 col-sm-6 mb-9">
                                <div class="card text-white o-hidden h-100 ">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fas fa-fw fa-comments"></i>
                                            {{ $hasil->result->desc_result }}
                                        </div>
                                        <div class="mr-5">
                                        {{ $hasil->result->bg }}
                                        </div>
                                    </div>
                                    <div class="card-footer text-white clearfix small z-1">
                                        <span class="float-left">
                                            <blockquote class="blockquote">
                                                Anda termasuk dalam pasien: <b>{{ $hasil->result->desc_result }}</b><br><br>
                                                <p>Hasil Test Menunjukan bahwa
                                                <b><u> {{$hasil->persentase}} </u></b>
                                                anda beresiko terkena covid-19 dan dalam kategori <b>{{$hasil->keterangan }}  <u>
                                                </u></b> terjangakit maupun menularkan ke orang lain sebagai bahan runjukan Selanjutnya
                                                kami sarankan anda bersedia untuk melakukan swab test di tempat yang sudah kami rujukan</p>  
                                                <b>Saran:{{ $hasil->result->saran}}</b><br>
                                                <b>Edukasi:{{ $hasil->result->edukasi}}</b><br>
                                            </blockquote>
                                        </span>
                                        <span class="float-right">
                                            <i class="fas fa-angle-right"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p>
                                Menghadapi wabah Covid-19 yang semakin hari semakin membuat takut dan menimbulkan rasa tidak aman bagi masyarakat dunia, Dinas Komunikasi dan Informatika Provinsi Jawa Tengah turut berpartisipasi dalam menyediakan sistem deteksi dini terhadap serangan Covid-19.
                                <br>
                                <br>
                                Deteksi dini ini dibuat online yang dapat dimanfaatkan oleh masyarakat umum. Saudara tinggal menjawab beberapa pertanyaan dan hasil jawaban akan dianalisis secara online untuk menduga status saudara termasuk dalam kategori: sehat/bebas Covid-19, ODP (Orang Dalam Pemantauan) atau PDP (Pasien Dalam Pengawasan).
                                <br>
                                <br>
                                <b>Call Center Tim Kewaspadaan COVID-19 Dinas Komunikasi dan Informatika Provinsi Jawa Tengah :</b>
                                <br>
                                MEDIS : 082313600560
                                <br>
                                UMUM : 085294051915
                            </p>
                            <footer class="blockquote-footer">Tim Kewaspadaan COVID-19 Provinsi Jawa Tengah</footer>
                        </blockquote>
                    </div>
                </div>

              


                <!-- /.container-fluid -->

                <!-- Sticky Footer -->

            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->
</body>

</html>

     
 </body>
 </html>
