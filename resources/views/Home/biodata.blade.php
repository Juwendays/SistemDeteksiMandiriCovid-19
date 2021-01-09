@extends('layout/main')

@section('title', ' Deteksi Mandiri COVID-19')

@section('container')

<!-- service page breadcrumns -->
<section class="inner-banner">

</section>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-padding">
        <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Test</li>
    </ol>
</nav>
<!-- service page breadcrumns -->

<!-- services page block 1 -->
<section class="w3l-features">
    <div class="call-w3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                    <h4 class="section-title">Deteksi Mandiri Covid-19</h4>
                    <p class="text-center">Mohon Isi Biodata Dengan Sebenar-Benarnya</p>
                    </div>

        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-3">
                    <div class="card-body">

      <form class="" action="{{ route('storebiodata')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <table border="0" cellpadding="5">
        
          <div class="form-group row">
            <label for="nik" class="col-sm-5 col-form-label">NIK Sesuai KTP</label>

            <div class="col-sm-7">
            <input type="text"  class="form-control @error('nik') is-invalid @enderror" name="nik" id="nik" placeholder="Masukan Nomor Induk Kependudukan" value="{{ old('nik') }}">
            
            @error('nik')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          </div>

 
          <div class="form-group row">
            <label for="nama" class="col-sm-5 col-form-label">Nama Lengkap</label>

            <div class="col-sm-7">
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Masukan Nama" value="{{ old('nama') }}">
            

            @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>  
            </div>

            <div class="form-group row">
                <label for="lahir" class="col-sm-5 col-form-label">Tanggal Lahir</label>

                <div class="col-sm-7">
                  <input type="date" class="form-control @error('lahir') is-invalid @enderror" name="lahir" id="lahir" placeholder="Masukan Tanggal Lahir" value="{{ old('lahir') }}">
                

                    @error('lahir')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>


            <div class="form-group row">
              
                <label for="email" class="col-sm-5 col-form-label">E-mail</label>
              

              <div class="col-sm-7 ">
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Masukan E-mail" value="{{ old('email') }}">
            

            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
</div>

            <div class="form-group row">
            <label for="alamat" class="col-sm-5 col-form-label">Alamat</label>
 
            <div class="col-sm-7 ">
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" placeholder="Masukan Alamat Lengkap" value="{{ old('alamat') }}">
            

            @error('alamat')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
</div>

            <div class="form-group row">
            <label for="no" class="col-sm-5 col-form-label">No HP/WA</label>
 
            <div class="col-sm-7 ">
            <input type="text" class="form-control @error('no') is-invalid @enderror" name="no" id="no" placeholder="Masukan No.Telpon/No.WA" value="{{ old('no') }}">
            

            @error('no')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
</div>

            <div class="form-group row">

            <label for="kota" class="col-sm-5 col-form-label">Kabupaten/Kota</label>

              <div class="col-sm-7 ">
            <select class="custom-select-sm @error('kota') is-invalid @enderror" name="kota" id="kota" value="{{ old('kota') }}">
                <option selected>Pilih Kota/Kabupaten</option>
                <option value="banjarnegara">BANJARNEGARA</option>
                <option>BANYUMAS</option>
                <option>BATANG</option>
                <option>BLORA</option>
                <option>BOYOLALI</option>
                <option>BREBES</option>
                <option>CILACAP</option>
                <option>DEMAK</option>
                <option>GROBOGAN</option>
                <option>PURBALINGGA</option>
                <option>KEBUMEN</option>
                <option>PURWOREJO</option>
                <option>WONOSOBO</option>
                <option>MAGELANG</option>
                <option>KLATEN</option>
                <option>SUKOHARJO</option>
                <option>WONOGIRI</option>
                <option>KARANGANYAR</option>
                <option>SRAGEN</option>
                <option>REMBANG</option>
                <option>PATI</option>
                <option>KUDUS</option>
                <option>JEPARA</option>
                <option>SEMARANG</option>
                <option>TEMANGGUNG</option>
                <option>KENDAL</option>
                <option>PEKALONGAN</option>
                <option>PEMALANG</option>
                <option>TEGAL</option>
                <option>KOTA MAGELANG</option>
                <option>KOTA SURAKARTA</option>
                <option>KOTA SALATIGA</option>
                <option>KOTA SEMARANG</option>
                <option>KOTA PEKALONGAN</option>
                <option>KOTA TEGAL</option>
            </select>
            
            @error('kota')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
            </div>

            <div class="form-group row">
                <label for="foto" class="col-sm-5 col-form-label">Upload Foto 3*4</label>
              <!-- <img src="foto.jpg" width="100"> -->
              <div class="col-sm-7 ">
                <input type="file" name="foto" id="foto" class="@error('foto') is-invalid @enderror" value="{{ old('foto') }}">
                 

                @error('foto')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="fotoktp" class="col-sm-5 col-form-label">Upload Foto KTP</label>

                <div class="col-sm-7 ">
                <input type="file" class="form-control-file @error('fotoktp') is-invalid @enderror" name="fotoktp" id="fotoktp" value="{{ old('fotoktp') }}"> 
                 

                @error('fotoktp')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
            </div>


<div class="mt-4">
            <div class="d-flex justify-content-center">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
</div>
        

        </table>
      </form>   
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
<!-- services page block 3 -->


@endsection