@extends('layout/mainadmin')

@section('title', ' Deteksi Mandiri COVID-19')

@section('container')

       <!-- Begin Page Content -->
       <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Sistem Informasi Test Mandiri Covid Diskominfo Jateng</h1>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Indikator Soal</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">

   <div class="container">
<!-- <div class="row"> -->
<!-- <div class="col-6"> -->
    <!-- <h3 class="mt-3"> Tambah Indikator Soal</h3> -->

<form method="POST" action="/test/{{ $test->id }}">
    @method('patch')
    @csrf
      <div class="form-group">
      <label for="indikator">Masukan Indikator</label>
      <input type="text" class="form-control" id="indikator" placeholder="Masukan indikator" name="indikator" value="{{ $test->indikator }}">

      @error('indikator')
      <div class="invalid-feedback">Nama Mohon Untuk Di Isi</div>
      @enderror

</div>

<div class="form-group">
      <label for="opsia">Opsi A</label>
      <input type="text" class="form-control" id="opsia" placeholder="Masukan Opsi A" name="opsia" value="{{ $test->ya }}" >

      @error('opsia')
      <div class="invalid-feedback">{{ $message}} </div>
      @enderror
      
</div>

<div class="form-group">
      <label for="opsib">Opsi B</label>
      <input type="text" class="form-control" id="opsib" placeholder="Masukan Opsi B" name="opsib" value="{{ $test->tidak }}">

      @error('opsib')
      <div class="invalid-feedback">{{ $message}} </div>
      @enderror    
</div>

<div class="form-group">
      <label for="jawaban">Kunci Jawaban (Isikan <b>ya</b> untuk opsi a atau isikan <b>tidak</b> untuk opsi b)</label>
      <input type="text" class=" form-control @error('jawaban') is-invalid @enderror" id="jawaban" placeholder="Pilih Jawaban Benar" name="jawaban" value="{{ $test->knc_jawaban }}">

      @error('jawaban')
      <div class="invalid-feedback">{{ $message}} </div>
      @enderror 
</div>

<button type="submit" class="btn btn-primary">Update Soal</button>


</div>
</form>



</div>
</div>
</div>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


@endsection