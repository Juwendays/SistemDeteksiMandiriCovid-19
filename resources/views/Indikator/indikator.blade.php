<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Indikator</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/multiple/css/roboto-font.css') }}">
    <!-- gambar -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/multiple/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/multiple/css/jquery-ui.min.css') }}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset('assets/multiple/css/style.css') }}"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link href="{{ asset('assets/img/jateng1.png')}}" style="width:50px;height:50px" rel="shortcut icon">



<!-- Custom styles for this template -->
<!-- <link href="{{ asset('assets/sbadmin/css/sb-admin-2.min.css') }}" rel="stylesheet"> -->


</head>

<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container" id="navbar">
      <div class="navbar-header">
        <a href="{{ url('/') }}" class="navbar-brand navbar-link"><img src="{{ asset('/assets/starter/images/logo-new.png') }}"></a>
        </div>
        </div>
        </nav>
	<div class="page-content" style="background-color: #ebe9e9">
		<div class="wizard-v3-content">
			<div class="wizard-form">
				<div class="wizard-header">
					<h3 class="heading">Deteksi Mandiri COVID-19</h3>
					<p>Isilah Pertanyaan-Pertanyaan Berikut Sesuai Dengan Kondisi Anda</p>
				</div>
                <form class="form-register" action="{{ route('test') }}" method="post">
		        	<div id="form-total">
                        <!-- SECTION 1 -->
                        <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-text">Profile</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Konfirmasi Data Diri</h3>
			                	<div class="form-row table-responsive">
									<table class="table">
										<tbody>
                                        <tr class="space-row">
												<th>No Test :</th>
												<td>{{Session::get('no_test')}}</td>
											</tr>
											<tr class="space-row">
												<th>Nomor Identitas :</th>
												<td>{{Session::get('nik')}}</td>
											</tr>
											<tr class="space-row">
												<th>Nama Pengguna :</th>
												<td>{{Session::get('nama')}}</td>
											</tr>
											<tr class="space-row">
												<th>Alamat Pengguna :</th>
												<td>{{Session::get('alamat')}}</td>
											</tr>
											<tr class="space-row">
												<th>Email Pengguna :</th>
												<td>{{Session::get('email')}}</td>
											</tr>
											<tr class="space-row">
												<th>No Hp Pengguna :</th>
												<td>{{Session::get('no')}}</td>
											</tr>
											<tr class="space-row">
												<th>Kota Pengguna :</th>
												<td>{{Session::get('kota')}}</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
			            </section>
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
			            	<span class="step-text">Indikator</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Jawab Indikator dibawah sesuai dengan kondisi Anda:</h3>
			                	<div class="form-row table-responsive">
									<table class="table">
									<!-- <form class="form-register" action="{{ route('test') }}" method="post"> -->
                                    <!-- <form class="form-register" action="{{ route('test') }}" method="post"> -->
                                    @csrf
										<tbody>
                                        @foreach ($tests as $t)
                                        <input type="hidden" name="id[]" value="{{ $t->id }}">
                                        <input type="hidden" name="jumlah" value="{{ $t->count()}}">
                                        <tr class="space-row">
                                        <td width="430">{{ $t->indikator }}</font></td>
									

                                        <td>
                                            <div id="radio">
                                                <input name="pilihan[{{ $t->id}}]" type="radio" value="Ya"> {{ $t->ya }}</font></td>

                                                <td><input name="pilihan[{{ $t->id}}]" type="radio" value="Tidak">{{ $t->tidak }}</font></td>
									    
                                                </div>
                                            </td>
                                        </tr>
                                                <label>
					  			                    <span class="border"></span>
								                </label>
								        </div>
                                
                                    @endforeach
                               
                        <!-- <input type="submit" class="btn btn-primary" name="submit" value="Lihat Hasil Test" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')"> -->
                        <!-- <a href="{{ url('/test/hasil') }}" class="btn btn-primary"> -->
                        <td>
                        <input type="submit" class="btn btn-primary" name="submit" value="Simpan Jawaban" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')">
                            <!-- <i class="fas fa-trash"></i> -->
                            <!-- <i class="fa fa-file-pdf"></i> -->
                            <!-- <a href="{{ route('indikator') }}" class="btn btn-primary"> -->
                            <i class="fas fa-trash"></i>
                            
                            </a>
                            </td>
                            </table>
							</form>
                                    </div>
                                    
                                    
						</div>
                        
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-lock"></i></span>
			            	<span class="step-text">Rangkuman</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Rangkuman Test</h3>
			                	<div class="form-row">
                                <!-- <div class="row justify-content-md-center content-scroll"> -->
                                <div class="alert alert-primary" role="alert">
                                    Anda Belum Mennyimpan Jawaban Anda, Silahkan Kembali Ke Halaman Indikator
                                </div> 
                          	<!-- <div class="col">
                            <div class="box-dashed">
                            <span>IDENTITAS</span>  -->
                            <!-- <table>
                                <tr> -->
                                    <!-- <br>
                                    <br>
                                    Nama    :   {{Session::get('nama')}}
                                    <br>
                                    <br>
                                    Nik     :   {{Session::get('nik')}}
                                    <br>
                                    <br>
                                    Email   :   {{Session::get('email')}}
                                    <br>
                                    <br>
                                    Alamat  :   {{Session::get('alamat')}}
                                    <br>
                                    <br>
                                    No Hp   :   {{Session::get('no')}}
                                    <br>
                                    <br>
                                    Kota    :   {{Session::get('kota')}} -->
                                    
                                <!-- </tr>
                            </table> -->
                            <!-- </div>
                        </div>
                    </div> -->
                            <!-- <div class="row justify-content-md-center content-scroll"> 
                                <div class="col">
                                    <div class="box-dashed">
                                    <span>INDIKATOR</span> 
                                        <table>
                                        @foreach ($tests as $t)
                                        <tr>
                                            <td>{{ $t->indikator}}</td>
                                            <td>{{ $t->ya}}</td>
                                        </tr>
                                        @endforeach
                                        </table> -->
                                                <!-- <br>
                                                <br>
                                                <tr> Batuk  : </tr>
                                                <br>
                                                <br>
                                                <tr> Demam/Pilek  :</tr>
                                                <br>
                                                <br>
                                                <tr> Kesulitan Bernafas/Sesak Nafas  :</tr>
                                                <br>
                                                <br>
                                                <tr> Nyeri Tenggorokan :</tr>
                                                <br>
                                                <br>
                                                <tr> Lama Penyakit Kurang dari 14 Hari  :</tr>
                                                <br>
                                                <br>
                                                <tr> kontak dengan penderita/probabel COVID-19   :</tr>
                                                <br>
                                                <br>
                                                <tr> Memiliki riwayat perjalanan/tinggal diluar negeri yang melakukan penularan lokal   :</tr> -->
                                                <!-- <br>
                                                <br>
                                                <tr> Memiliki riwayat perjalanan/tinggal diarea penularan lokal di Indonesia   :</tr> -->
                                            <!-- </td>
                                        </tr>
                                        </table> -->
                                    <!-- </div>
                                </div>
                            </div> -->
                            
                            
						</div>
                        </div>
                        <!-- <p>
                                 Berikut hal yang bisa Anda lakukan dan rekomendasi agar tetap aman:
                                <ul>
                                    <li>  Anda diimbau untuk tetap di rumah untuk melindungi diri sendiri dan orang di sekitar Anda</li>
                                    <li>  Upayakan berada dalam ruangan dengan ventilasi udara yang baik</li>
                                    <li> Apabila mendesak dan perlu keluar rumah, mohon patuhi protokol kesehatan</li>
                                    <li> Lakukan 3M: menggunakan masker, mencuci tangan, dan menjaga jarak</li>
                                    <li> Jika muncul gejala atau gejala bertambah parah, segera hubungi fasilitas layanan kesehatan</li>
                                </ul>
                            </p> -->
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
			            	<span class="step-text">Result</span>
			            </h2>
			            <section>
			                <div class="inner">
								<h3>Hasil Test</h3>
                                <div class="alert alert-primary" role="alert">
                                    Anda Belum Mennyimpan Jawaban Anda
                                </div> 
								 <!-- <div class="form-row">
                                <div class="row justify-content-md-center content-scroll"> -->
                                
                          	<!--<div class="col">
                            <div class="box-dashed">
                            <span>IDENTITAS</span>  -->
                            <!-- <table>
                                <tr> -->
                                    <!-- <br>
                                    <br>
                                    Nama    :   {{Session::get('nama')}}
                                    <br>
                                    <br>
                                    Nik     :   {{Session::get('nik')}}
                                    <br>
                                    <br>
                                    Email   :   {{Session::get('email')}}
                                    <br>
                                    <br>
                                    Alamat  :   {{Session::get('alamat')}}
                                    <br>
                                    <br>
                                    No Hp   :   {{Session::get('no')}}
                                    <br>
                                    <br>
                                    Kota    :   {{Session::get('kota')}} -->
                                    
                                <!-- </tr>
                            </table> -->
                            <!-- </div>
                        </div>
                    </div> -->
                            <!-- <div class="row justify-content-md-center content-scroll"> 
                                <div class="col">
                                    <div class="box-dashed">
                                    <span>INDIKATOR</span>  -->
                                        <!-- <table>
                                        <tr>
                                            <td> -->
                                                <!-- <br>
                                                <br>
                                                <tr> Batuk  : </tr>
                                                <br>
                                                <br>
                                                <tr> Demam/Pilek  :</tr>
                                                <br>
                                                <br>
                                                <tr> Kesulitan Bernafas/Sesak Nafas  :</tr>
                                                <br>
                                                <br>
                                                <tr> Nyeri Tenggorokan :</tr>
                                                <br>
                                                <br>
                                                <tr> Lama Penyakit Kurang dari 14 Hari  :</tr>
                                                <br>
                                                <br>
                                                <tr> kontak dengan penderita/probabel COVID-19   :</tr>
                                                <br>
                                                <br>
                                                <tr> Memiliki riwayat perjalanan/tinggal diluar negeri yang melakukan penularan lokal   :</tr>
                                                 <br>
                                                <br>
                                                <tr> Memiliki riwayat perjalanan/tinggal diarea penularan lokal di Indonesia   :</tr> -->
                                            <!-- </td>
                                        </tr>-->
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- <div class="row justify-content-md-center content-scroll"> 
                                <div class="col">
                                    <div class="box-dashed">
                                    <span>INDIKATOR</span> 
                                        <table>
										
                                        </table>
                                    </div>
                                </div>
                            </div> -->
						</div>
                        </div>
							<!-- <p>
                                 Hasil test menunjukkan bahwa anda:
                                <ul>
                                    <li>  <b><u></u></b>
                                    Anda beresiko terkena covid-19 dan dalam kategori <b><u></u></b> terjangakit maupun menularkan ke orang lain sebagai bahan runjukan Selanjutnya
                                    kami sarankan anda bersedia untuk melakukan swab test di tempat yang sudah kami rujukan</p></li>
                                </ul>
                            </p> -->

                            
                            <!-- <div class="col-md-6 text-center">
                            <a href="{{ route('unduh') }}" class="btn btn-primary"> -->
                            <!-- <i class="fas fa-trash"></i> -->
                            <!-- <i class="fa fa-file-pdf"></i>
                            Cetak Hasil Test -->

                            
			            </section>
			            <!-- SECTION 4 -->
			            
									<!-- <section>
									<fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset> -->
						</section>
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script src="{{ asset('assets/multiple/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('assets/multiple/js/jquery.steps.js') }}"></script> -->
	<script src="{{ asset('assets/multiple/js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('assets/multiple/js/main.js') }}"></script>
    
</body>
</html>
