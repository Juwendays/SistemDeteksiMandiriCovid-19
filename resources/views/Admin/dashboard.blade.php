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
    <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
  </div>
  <div class="card-body">
    <!-- <div class="table-responsive"> -->
    <!-- <div class="row justify-content-center"> -->

    @if (session('status'))
<div class="alert alert-success">
 {{ session('status') }}
</div>
@endif


    <img src="{{ asset('assets/starter/images/jateng1.png')}}" alt="" style="width:400px;height:400px">
                              <h1>SELAMAT DATANG ADMIN</h1>


<!-- </div> -->

<!-- </div> -->
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


@endsection