@extends('layout/main')

@section('title', ' Deteksi Mandiri COVID-19')

@section('container')

<!-- service page breadcrumns -->
<section class="inner-banner">

</section>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-padding">
        <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
    </ol>
</nav>
<!-- service page breadcrumns -->

<!-- services page block 1 -->
<section class="w3l-features">
    <div class="call-w3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                    <h4 class="section-title">Tentang Kami</h4>
                    <p class="text-center">Informasi Kegunaan dan tujuan Deteksi Mandiri COVID-19</p>
                </div>
            </div>
            <div class="row main-cont-wthree-2 mt-5">
                <div class="col-lg-6 feature-grid-left order2 mt-lg-0 mt-sm-5 mt-4">
                    <h4 class="title-left">Deteksi Mandiri COVID-19</h4>
                    <p class="text-para">Untuk mendukung penggunaan tes Real Time Polymerase Chain Reaction (RT-PCR) yang efektif dan tepat, maka Pemprov Jawa Tengah berkolaborasi dengan berbagai pihak menciptakan Deteksi Mandiri COVID-19</p>
<br>
<p class="text-para">merupakan kalkulator di Indonesia untuk melakukan skrining mandiri yang menggunakan model dalam mengukur kemungkinan Anda positif COVID-19.</p>
<br>
                    <!-- <a href="#readmore" class="btn btn-primary btn-style mt-4">Read More</a> -->
                </div>
                <div class="col-lg-6 feature-grid-right order1">
                    <img src="{{ asset('assets/starter/images/s1.png') }}" class="img-fluid img-shadow" alt="services">
                </div>
            </div>
            <div class="row main-cont-wthree-2 mt-5">
                <div class="col-lg-6 feature-grid-right">
                    <img src="{{ asset('assets/starter/images/s2.png') }}" class="img-fluid img-shadow" alt="services">
                </div>
                <div class="col-lg-6 feature-grid-left mt-lg-0 mt-sm-5 mt-4">
                    <h4 class="title-left">Tujuan</h4>
                    Dengan teknologi ini, Anda dapat menemukan jawaban dari pertanyaan seperti "Apakah saya mungkin positif corona?", "Apakah saya perlu tes?", dan "Apa yang sebaiknya sekarang dapat saya lakukan?". </p>
                    <!-- <a href="#readmore" class="btn btn-primary btn-style mt-4">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services page block 1 -->

<!-- services page block 2 -->
<section class="w3l-features bg-light">
    <div class="call-w3">
        <div class="container">
            <div class="row main-cont-wthree-2">
                <div class="col-lg-6 feature-grid-left">
                    <h4 class="section-title-left">Benefit Kegunaan Aplikasi</h4>
                    <!-- <p class="text-para">Curabitur id gravida risus. Fusce eget ex fermentum, ultricies nisi ac sed, lacinia est.
                        Quisque ut lectus consequat, venenatis eros et, commodo risus. Nullam sit amet laoreet elit.
                        Suspendisse non magna a velit imperdiet efficitur. </p> -->
                    <!-- <ul class="list mt-4">
                        <li><span class="fa fa-check"></span> Fusce eget ex fermentum, ultricies nisi ac sed</li>
                        <li><span class="fa fa-check"></span> Quisque ut lectus consequat, venenatis eros et amet</li>
                        <li><span class="fa fa-check"></span> Fusce eget ex fermentum, ultricies nisi ac sed</li>
                    </ul> -->
                    <a href="{{ url('/') }}" class="btn btn-primary btn-style mt-4">Kembali</a>
                </div>
                <div class="col-lg-6 feature-grid-right mt-lg-0 mt-5">
                    <div class="call-grids-w3 d-grid">
                        <div class="grids-1 box-wrap">
                            <a href="#more" class="icon"><span class="fa fa-building"></span></a>
                            <h4><a href="#feature" class="title-head">Cek Gejala Mandiri</a></h4>
                            <p>Anda bisa cek sendiri gejala mirip Covid-19 darimana saja</p>
                        </div>
                        <div class="grids-1 box-wrap">
                            <a href="#more" class="icon"><span class="fa fa-usb"></span></a>
                            <h4><a href="#feature" class="title-head">Gratis</a></h4>
                            <p>Tes tidak membutuhkan biaya apapun.</p>
                        </div>
                        <div class="grids-1 box-wrap">
                            <a href="#more" class="icon"><span class="fa fa-bar-chart"></span></a>
                            <h4><a href="#feature" class="title-head">Mudah dan Cepat</a></h4>
                            <p>Tes dilakukan relatif mudah dan tidak berbelit belit.</p>
                        </div>
                        <div class="grids-1 box-wrap">
                            <a href="#more" class="icon"><span class="fa fa-refresh"></span></a>
                            <h4><a href="#feature" class="title-head">Fleksible</a></h4>
                            <p>Tes hanya memerlukan user melakukan pengisian indikator tidak harus melewati test medis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //services page block 2 -->

@endsection