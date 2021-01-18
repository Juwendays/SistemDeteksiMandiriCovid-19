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
    <h6 class="m-0 font-weight-bold text-primary">Table Rekap Hasil Test</h6>
    <div class="float-right">
    <a href="{{ route('unduhrekaphasil') }}" class="btn btn-success">Unduh<i class="fas fa-download"></i></a>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
          <th>#</th>
            <th>No Test</th>
            <th>Persentase</th>
            <th>Kategori</th>
            <th>Golongan</th>
            <th>Saran</th>
            <th>Edukasi</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($hasils as $hasil)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $hasil->no_test }}</td>
                <td>{{ $hasil->persentase }}</td>
                <td>{{ $hasil->result->keterangan }}</td>
                <td>{{ $hasil->result->desc_result }}</td>
                <td>{{ $hasil->result->saran }}</td>
                <td>{{ $hasil->result->edukasi }}</td>
            </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


@endsection