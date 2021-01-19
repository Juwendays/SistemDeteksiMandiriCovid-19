@extends('layout/maindetail')

@section('title', 'Daftar Detail Student')

@section('container')

    <div class="container">
      <div class="row">
        <div class="col-40">
        <div class="text-center">
              <h1 class="mt-3">Preview Detail Hasil Test</h1>
              </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6 mb-3">
                            <img src="{{ asset('storage/'.$biodata['foto']) }}" class="rounded mx-auto d-block w-75">
                                <br>
                            </div>
                            
                            <div class="col-xl-9 col-sm-6 mb-9">
                                <div class="card text-white o-hidden h-100 bg-info">
                                    <div class="card-body">
                                        <div class="mr-5">
                                        <h3>Data Diri Anda:</h3>
                                        </div>
                                    </div>
                                    <div class="card-footer text-white clearfix small z-1">
                                        <span class="float-left">
                                            <blockquote class="blockquote">
                                                <b>No Test:</b>
                                                {{ $biodata -> no_test }}
                                                <br>
                                                <b> Nik: </b>
                                                {{ $biodata->nik }}
                                                <br>
                                                <b>Nama:</b>
                                                {{ $biodata->nama }}
                                                <br>
                                                <b>Tanggal Lahir:</b>
                                                {{ $biodata->lahir }}
                                                <br>
                                                <b>Alamat:</b>
                                                {{ $biodata->alamat }}
                                                <br>
                                                <b>Email:</b>
                                                {{ $biodata->email }}
                                                <br>
                                                <b>No:+62</b>
                                                {{ $biodata->no }}
                                                <br>
                                                <b>Kota:</b>
                                                {{ $biodata->kota }}
                                                
                                            </blockquote>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
                            

    <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6 mb-3">
                            <img src="{{ asset('assets/image/'.$biodata->hasil->result->img) }}" class="rounded mx-auto d-block w-75" alt="Result">
                                <br>
                                <div class="visible-print text-center">
                                    {!! QrCode::size(100)->generate(Request::url()); !!}
                                    <p>Scan untuk melihat hasil data</p>    
                                </div>
                            </div>
                            
                            <div class="col-xl-9 col-sm-6 mb-9">
                                <div class="card text-white o-hidden h-100 {{  $biodata->hasil->result->bg }}">
                                    <div class="card-body">
                                        <div class="mr-5">
                                        <h3>Hasil Test Anda:</h3>
                                        </div>
                                    </div>
                                    <div class="card-footer text-white clearfix small z-1">
                                        <span class="float-left">
                                            <blockquote class="blockquote">
                                                <b>{{ $biodata->nama }}</b> 
                                                Anda termasuk dalam pasien <b>{{ $biodata->hasil->result->desc_result }}</b><br><br>
                                                <b>Hasil Persentase Terpapar:</b>
                                                {{ $biodata -> hasil -> persentase }}%
                                                <br>
                                                <b> Keterangan: </b>
                                                {{ $biodata->hasil->result->keterangan }}, dalam Tertular maupun Menularkan  COVID-19 ke orang lain
                                                <br>
                                                <br>
                                                <b>Saran:</b><br>
                                                {{ $biodata->hasil->result->saran }}<br><br>
                                                <b>Edukasi:</b><br>
                                                {{ $biodata->hasil->result->edukasi }}
                                            </blockquote>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    
                <div class="text-center">
                    <a href="{{ route('rekapbiodata') }}" class="btn btn-primary mb-3">Kembali <i class="fas fa-arrow-circle-left"></i></a>
                 </div>
       
        </div>
      </div>
  </div>

@endsection