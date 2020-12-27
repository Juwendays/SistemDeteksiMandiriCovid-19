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
    <h6 class="m-0 font-weight-bold text-primary">Table Rekap Biodata User</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
          <th>#</th>
            <th>Foto</th>
            <th>Foto KTP</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No</th>
            <th>Kota</th>
          </tr>
        </thead>
        <!-- <tfoot>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th> 
          <th></th>
          </tr>
        </tfoot> -->
        <tbody>
        @foreach ($biodatas as $bio)
    <tr>
    <td>{{ $loop->iteration }}</td> 
    <td><img src="{{ asset('storage/'.$bio['foto']) }}" width="100" height="100"></td>
    <td><img src="{{ asset('storage/'.$bio['fotoktp']) }}" width="100" height="100"></td>
    <td>{{ $bio->nik }}</td>
    <td>{{ $bio->nama }}</td>
    <td>{{ $bio->alamat }}</td>
    <td>{{ $bio->email }}</td>
    <td>{{ $bio->no }}</td>
    <td>{{ $bio->kota }}</td>
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