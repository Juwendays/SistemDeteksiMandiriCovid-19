@extends('layout/maindetail')

@section('title', 'Daftar Detail Student')

@section('container')

    <div class="container">
      <div class="row">
        <div class="col-10">
              <h1 class="mt-3">Preview Detail Hasil Test</h1>
        
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nama: {{ $biodata -> nama }}</h5>
            <h6 class="card-title">Nik: {{ $biodata -> nik}}</h6>
            <p class="card-text">No Test: {{ $biodata->no_test  }}</p>
             <p class="card-text">Kota: {{ $biodata->nama }}</p>
             <p class="card-text">{{ $biodata->nik }}</p>
            </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Hasil Persentase Terpapar: {{ $biodata -> hasil -> persentase }}%</h5>
            <h6 class="card-title">Anda Dalam Kategori: {{ $biodata -> hasil->result->desc_result}}</h6>
             <h5 class="card-text">Keterangan: {{ $biodata->hasil->result->keterangan }}</h5>
             <p class="card-text">Saran: {{ $biodata->hasil->result->saran }}</p>
             <p class="card-text">Edukasi: {{ $biodata->hasil->result->edukasi }}</p>
            </div>
            <div class="wizard-headerlink" class="d-inline">
                                <div class="visible-print text-center">
                                    {!! QrCode::size(100)->generate(Request::url()); !!}
                                    <p>Scan untuk melihat hasil data</p>    
                                </div>
                            </div>
    </div>

    

        <a href="{{ route('rekapbiodata') }}" class="card-link">Kembali</a>
       
    

        </div>
      </div>
  </div>

@endsection