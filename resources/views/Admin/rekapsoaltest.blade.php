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

                            <button type="submit" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#DeleteModal">
                            <i class="fas fa-trash"></i></button>

                            <!-- Model confirmasi -->
                            <div id="DeleteModal" class="modal fade" role="dialog">
                                <div class="modal-dialog ">
                                
                                 <div class="modal-content">
                                <div class="modal-header">
                              <h4 class="modal-title text-center">Hapus Indikator</h4>
                                  <button type="button" class="close" data-dismiss="modal">
                                    </button>
                                      </div>
                                        <div class="modal-body">
                                          <p class="text-center">Anda yakin akan menghapus indikator ini?</p>
                                        </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-success" data-dismiss="modal">
                                          Batal</button>
                                        
                                        <form action="/test/{{ $test->id }}" method="POST" class="d-inline">
                                          @method('delete')
                                          @csrf
                                              <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#DeleteModal">
                                                  Hapus</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <!-- model Konfirmasi -->
                            </div>
                        </td>
                    </tr>
                @endforeach
                </table>
              </div>
            </div>
          </div>     
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

@endsection