@extends('layout/main')

@section('title', ' Deteksi Mandiri COVID-19')

@section('container')


<section id="home" class="banner">
    <div id="banner-bg-effect" class="banner-effect"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12 col-sm-12 order-lg-first mt-lg-0 mt-4">
                <h1 class="mb-4 title"><strong>Test Mandiri COVID-19</strong>
                </h1>
                <p>Sistem aplikasi uji risiko mandiri gejala Covid-19 sebagai upaya menekan penyebaran Covid-19 di Provinsi Jawa Tengah.</p>
                <div class="mt-5">
                    <a class="btn btn-primary btn-style mr-2" href="{{ ('/biodata' ) }}">Mulai Test </a>
                    <a class="btn btn-outline btn-outline-style" href="{{ route('about') }}">Informasi Tentang Kami</a>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 order-first text-lg-left text-center">
                <div>
                    <img src="{{ asset('assets/starter/images/virus1.png') }}">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //banner section -->
<!-- testimonials section -->
<section id="slider" class="testimonials">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                <h4 class="section-title">Petunjuk Penggunaan Aplikasi</h4>
                <p class="text-center">Petunjuk dibawah ini akan menjelaskan cara penggunaan aplikasi</p>
            </div>
        </div>
        <div class="large-12 columns mt-5">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="w3l-customers-7">
                        <div class="customers_sur">
                            <div class="customers-left_sur">
                                <div class="customers_grid">
                                    <div class="custo-img-res">
                                        <img src="{{ asset('assets/starter/images/click.png') }}" alt=" " class="">
                                    </div>
                                    <div class="custo_grid">
                                            <h5>1.Mulai Test</h5>
                                        </div>
                                    <div class="ratings my-4 my-4">
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p>Mulai mengikuti test dengan mengklik tombol mulai halaman utama</p>
                                    <div class="customers-bottom_sur">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="w3l-customers-7">
                        <div class="customers_sur">
                            <div class="customers-left_sur">
                                <div class="customers_grid">
                                    <div class="custo-img-res">
                                        <img src="{{ asset('assets/starter/images/personal.png') }}" alt=" " class="">
                                    </div>
                                    <div class="custo_grid">
                                            <h5>2.Isi Data Diri</h5>
                                        </div>
                                    <div class="ratings my-4 my-4">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p>Isi data diri anda dengan jujur dan benar</p>
                                    <div class="customers-bottom_sur">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="w3l-customers-7">
                        <div class="customers_sur">
                            <div class="customers-left_sur">
                                <div class="customers_grid">
                                    <div class="custo-img-res">
                                        <img src="{{ asset('assets/starter/images/form.png') }}" alt=" " class="">
                                    </div>
                                    <div class="custo_grid">
                                            <h5>3.Jawab Pertanyaan</h5>
                                        </div>
                                    <div class="ratings my-4 my-4">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p>Isi pertanyaan dengan jujur sesuai dengan kondisi anda sebenarnya</p>
                                    <div class="customers-bottom_sur">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="w3l-customers-7">
                        <div class="customers_sur">
                            <div class="customers-left_sur">
                                <div class="customers_grid">
                                    <div class="custo-img-res">
                                        <img src="{{ asset('assets/starter/images/report.png') }}" alt=" " class="">
                                    </div>
                                    <div class="custo_grid">
                                            <h5>4.Lihat Hasil Test</h5>
                                        </div>
                                    <div class="ratings my-4 my-4">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p>Lihat hasil test untuk mengetuhai anda teridentifikasi terpapar atau tidak</p>
                                    <div class="customers-bottom_sur">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="w3l-customers-7">
                        <div class="customers_sur">
                            <div class="customers-left_sur">
                                <div class="customers_grid">
                                    <div class="custo-img-res">
                                        <img src="{{ asset('assets/starter/images/unduh.png') }}" alt=" " class="">
                                    </div>
                                    <div class="custo_grid">
                                            <h5>5.Unduh Hasil Test</h5>
                                        </div>
                                    <div class="ratings my-4 my-4">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p>Hasil test dapat diunduh sebagai dokumen kesehatan</p>
                                    <div class="customers-bottom_sur">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//testimonials section -->

<!-- stats section -->

<!-- home page about -->
<section class="w3l-about">
    <div class="container">
        <div class="row about-content">
            <div class="col-lg-6 info mb-lg-0 mb-sm-5 mb-4 align-center">
                <h3 class="title">Perlukah Melakukan Deteksi Mandiri?</h3>
                <h6>Corona Virus Disease-19 (COVID-19) adalah infeksi saluran pernapasan yang disebabkan oleh jenis virus corona. Nama lain dari penyakit ini adalah Severe Acute Respiratory Syndrome Coronavirus-2 (SARS-COV2). </h6>
                <p class="mt-md-4 mt-3 mb-0"> Terkait Kebutuhan deteksi COVID-19 dengan cepat mudah dan murah untuk mencegahnya penyebaran virus yang semakin luas mendorong dibuatnya aplikasi ini sebagai alternatif pengecekan gejala serta indikasi seseorang sedang terjangkit atau tidaknya COVID-19. Maka dari itu mari deteksi mandiri diri anda sekarang.</p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/starter/images/about.png') }}" class="img-fluid img-shadow" alt="about">
            </div>
        </div>
    </div>
</section>
<!-- //home page about -->

<!-- home page service grids -->
<section id="services" class="bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
        <h4 class="section-title">Keuntungan Deteksi Mandiri COVID-19</h4>
        <p class="text-center">Beberapa Kelebihan Sistem Aplikasi Deteksi Mandiri COVID-19</p>
      </div>
    </div>
    <div class="row mt-lg-3">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-briefcase"></span>
          </div>
          <h4><a href="#url">Cek Gejala Mandiri</a></h4>
          <p>Anda bisa cek sendiri gejala mirip Covid-19 darimana saja</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-shield"></span>
          </div>
          <h4><a href="#url">Akurasi Tinggi</a></h4>
          <p>Dengan teknologi yang dipakai, hasil tes gejala akan lebih akurat.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-dollar"></span>
          </div>
          <h4><a href="#url">Gratis</a></h4>
          <p>Tes tidak membutuhkan biaya apapun.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-industry"></span>
          </div>
          <h4><a href="#url">Mudah dan Cepat</a></h4>
          <p>Test dilakukan relatif mudah dan tidak berbelit belit.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-lightbulb-o"></span>
          </div>
          <h4><a href="#url">Rekomendasi Test PCR</a></h4>
          <p>Akan direkomendasikan test lanjut jika anda beresiko tinggi terpapar.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-picture-o"></span>
          </div>
          <h4><a href="#url">Privasi Anda Terjaga</a></h4>
          <p>Privasi Anda adalah prioritas dan dijaga oleh Pemprov Jawa Tengah.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //home page service grids -->

@endsection