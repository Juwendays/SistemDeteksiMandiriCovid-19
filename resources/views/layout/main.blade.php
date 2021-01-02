<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400&display=swap" rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/starter/css/style-starter.css') }}">

  <!-- <link href="{{ asset('assets/starter/images/jateng1.png')}}" style="width:50px;height:50px" rel="shortcut icon"> -->

  <!-- Favicon -->
  <!-- <link href="{{ asset('assets/starter/images/jateng1.png') }}" rel="icon" type="image/png"> -->
  <link rel="shortcut icon" href="http://site1.xxx/favicon.ico"; type="image/x-icon">

</head>

<body>
<!-- site header -->
<header id="site-header" class="fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="{{ url('/')}}">
          <img src="{{ asset('assets/starter/images/logo.png') }}" alt="">
      </a>
      <button class="navbar-toggler bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav m-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('biodata') }}">Test</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">Admin</a>
              </li>
          </ul>
          </div>
  </nav>
</header>

    @yield('container')

    <!-- site footer -->
<footer id="site-footer">
  <div class="top-footer">
    <div class="container my-md-5 my-4">
      <div class="row">
        <div class="col-lg-7">
          <div class="footer-logo mb-3">
            <a href="index.html">
                <img src="{{ asset('assets/starter/images/logo.png') }}" width='180px'>
            </a>
          </div>
          <div>
          <h2 class="footer-title">Pemerintah Provinsi Jawa Tengah</h2>
            <p>Jl. Pahlawan No.9, Mugassari, Kec. Semarang Selatan</p>
          <p>Kota Semarang, Jawa Tengah 50249</p>
          </div>
        </div>
        <!-- Quick Links -->
        <!-- Newsletter -->
        <div class="col-lg-5 col-md-8 mt-lg-0 mt-5">
          <h4 class="footer-title">Kontak Kami</h4>
          <div class="mb-4">
            <a href="https://jatengprov.go.id/" target="blank" >Portal Jateng</span></a>
            <br> 
            <a href="https://covid19.kemkes.go.id/">Kemenkes</span></a>
            <br>
            <a href="https://covid19.kemkes.go.id/situasi-infeksi-emerging/info-corona-virus/tanya-jawab-novel-coronavirus-2019-ncov-faq-update-4-februari-2020/#.XmzSNagzZPZ">Info Corona</span></a>
            <br>
            <a href="https://dinkesjatengprov.go.id/v2018/5-protokol-utama-penanganan-covid-19/">Protocol Penanganan COVID-19</span></a>
            <br>
            <a href="https://laporgub.jatengprov.go.id/" target="blank">LaporGub</span></a>
            </div>
            
          <div class="col-lg-4 align-center text-lg-right text-center">
            <a href="https://www.facebook.com/Dinas-Kesehatan-Prov-Jateng-561985847631175/" target="blank" class="social-item"><span class="fa fa-facebook-f"></span></a>
            <a href="https://twitter.com/dinkesjateng" target="blank" class="social-item"><span class="fa fa-twitter"></span></a>
            <a href="https://www.instagram.com/dinkesjateng_prov/" target="blank" class="social-item"><span class="fa fa-instagram"></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-lg-left text-center mb-lg-0 mb-3">
          <p class="copyright">© Copyright Pemerintah Provinsi Jawa Tengah. All Rights Reserved 2020<p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- //site footer -->

<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>

<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };
  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }
  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- //move top -->

<!-- javascript -->
<script src="{{ asset('assets/starter/js/jquery-3.3.1.min.js') }}"></script>

<!-- libhtbox -->
<script src="{{ asset('assets/starter/js/lightbox-plus-jquery.min.js') }}"></script>

<!-- particles -->
<script src="{{ asset('assets/starter/js/particles.min.js') }}"></script>
<script src="{{ asset('assets/starter/js/script.js') }}"></script>
<!-- //particles -->

<!-- owl carousel -->
<script src="{{ asset('assets/starter/js/owl.carousel.js') }}"></script>
<script>
  $(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      margin: 10,
      nav: true,
      loop: false,
      responsive: {
        0: {
          items: 1
        },
        767: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    })
  })
</script>

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- bootstrap -->
<script src="{{ asset('assets/starter/js/bootstrap.min.js') }}"></script>
