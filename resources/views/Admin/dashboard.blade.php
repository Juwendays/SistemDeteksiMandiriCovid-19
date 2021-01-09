@extends('layout/mainadmin')

@section('title', ' Deteksi Mandiri COVID-19')

@section('container')

 <!-- Begin Page Content -->
 <div class="container-fluid">

 @if (session('status'))
        <div class="alert alert-success">
           {{ session('status') }}
        </div>
          @endif 

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Sistem Informasi Test Mandiri Covid Diskominfo Jateng</h1>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

    <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-comments"></i>
                                </div>
                                <div class="mr-5">{{ $widget['biodatas'] }} Data User</div>
                            </div>
                            <a class="card-footer text-blue clearfix small z-1" href="{{ route('rekapbiodata')}}">
                                <span class="float-left">User yang menggunakan</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-list"></i>
                                </div>
                                <div class="mr-5">{{ $widget['hasils'] }} Data Hasil Test</div>
                            </div>
                            <a class="card-footer text-yelow clearfix small z-1" href="{{ route('rekaphasil')}}">
                                <span class="float-left">Hasil Test Yang Tersimpan</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-shopping-cart"></i>
                                </div>
                                <div class="mr-5">{{ $widget['tests'] }} Data Indikator</div>
                            </div>
                            <a class="card-footer text-green clearfix small z-1" href="{{ route('rekapsoal')}}">
                                <span class="float-left">Jumlah Soal Indikator</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-life-ring"></i>
                                </div>
                                <div class="mr-5">13 New Tickets!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                   
                </div>

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

<div class="d-flex justify-content-center">
    <!-- <img src="{{ asset('assets/starter/images/jateng1.png')}}" alt="" style="width:400px;height:400px"> -->
                              <h1>SELAMAT DATANG ADMIN</h1>
</div>

<!-- </div> -->

<!-- </div> -->
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


@endsection