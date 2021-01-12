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
              <h6 class="m-0 font-weight-bold text-primary">Table Rekap Indikator Soal</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  
                @if (session('status'))
        <div class="alert alert-success">
           {{ session('status') }}
        </div>
          @endif 

                  <thead>
                    <tr>
                    <th>#</th>
                      <th>Indikator</th>
                      <th>Opsi A</th>
                      <th>Opsi B</th>
                      <th>Kunci Jawaban</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                 
                  <tbody>
                  @foreach ($tests as $test)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $test->indikator }}</td>
                        <td>{{ $test->ya }}</td>
                        <td>{{ $test->tidak }}</td>
                        <td>{{ $test->knc_jawaban }}</td>
                        <td>
                            <a href="/test/{{ $test->id }}/edit" class="btn btn-success btn-sm">
                                <i class="fas fa-pen"></i>
                            </a>

                            <form action="/test/{{ $test->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin untuk menghapus indikator?')">
                            <i class="fas fa-trash"></i></button>
                            </form>
                        </td>
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