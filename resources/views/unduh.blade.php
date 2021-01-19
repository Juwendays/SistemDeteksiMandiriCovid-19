<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

            <div class="container-fluid">
            <h1>Pemerintah Provinsi Jawa Tengah
       <br>
     Surat Pernyataan Hasil Test Mandiri Covid-19</h1>

     <hr>
            <div class="card mb-3">
                    <div class="card-body">

                    <div class="card-footer text-white clearfix small z-1 {{ $hasil->result->bg }}">
                                        <span class="float-left">
                                            <!-- <blockquote class="blockquote"> -->
            
                    <h4>Data Anda : </h4>

                                    No Test    :   {{Session::get('no_test')}}
                                    <br>
                                    Nama    :   {{Session::get('nama')}}
                                    <br>
                                    Nik     :   {{Session::get('nik')}}
                                    <br>
                                    Tanggal Lahir   :   {{Session::get('lahir')}}
                                    <br>
                                    Email   :   {{Session::get('email')}}
                                    <br>
                                    Alamat  :   {{Session::get('alamat')}}
                                    <br>
                                    No Hp   :   {{Session::get('no')}}
                                    <br>
                                    Kota    :   {{Session::get('kota')}}
                                    

                    <!-- </blockquote> -->
                                    </span>
                                </div>
                            </div>
                        </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6 mb-3">
                                <!-- <img src="{{ asset('assets/image/'.$hasil->result->img) }}" class="rounded mx-auto d-block w-75" alt="Result"> -->
                            </div>
                            <!-- <div class="col-xl-9 col-sm-6 mb-9"> -->
                                <div class="card text-white o-hidden h-100 {{ $hasil->result->bg }}">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fas fa-fw fa-comments"></i>
                                        </div>
                                        <div class="mr-5">
                                        Hasil Test
                                        </div>
                                    </div>
                                    <div class="card-footer text-white clearfix small z-1 {{ $hasil->result->bg }}">
                                        <span class="float-left">
                                            <blockquote class="blockquote">
                                                <b>{{Session::get('nama')}}</b> 
                                                Anda termasuk dalam pasien <b>{{ $hasil->result->desc_result }}</b><br><br>
                                                <b>Saran:</b><br>
                                                {{ $hasil->result->saran }}<br><br>
                                                <b>Edukasi:</b><br>
                                                {{ $hasil->result->edukasi }}
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
                                Menghadapi wabah Covid-19 yang semakin hari semakin membuat takut dan menimbulkan rasa tidak aman bagi masyarakat dunia, Provinsi Jawa Tengah Padang turut berpartisipasi dalam menyediakan sistem deteksi dini terhadap serangan Covid-19.
                                <br>
                                <br>
                                Deteksi dini ini dibuat online yang dapat dimanfaatkan oleh masyarakat umum. Saudara tinggal menjawab beberapa pertanyaan dan hasil jawaban akan dianalisis secara online untuk menduga status saudara termasuk dalam kategori: sehat/bebas Covid-19, ODP (Orang Dalam Pemantauan) atau PDP (Pasien Dalam Pengawasan).
                                <br>
                                <br>
                                <b>Call Center Tim Kewaspadaan COVID-19 Provinsi Jawa Tengah :</b>
                                <br>
                                MEDIS : 082313600560
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