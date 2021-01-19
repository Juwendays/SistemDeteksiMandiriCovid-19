<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
            font-size: 10px;
        }
        
        table {
        border-collapse: collapse;
        }

        
.table-bordered {
  border: 1px solid #e3e6f0;
}

.table-bordered th,
.table-bordered td {
  border: 1px solid #e3e6f0;
}

.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05);
}
	</style>
	<center>
		<h5>Laporan Rekap Data Diri User Test COVID-19</h4>
	</center>

	<table class='table table-striped'>
		<thead>
        <tr>
          <th>#</th>
            <!-- <th>Foto</th>
            <th>Foto KTP</th> -->
            <th>No Test</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No</th>
          </tr>
		</thead>
		<tbody>
        @foreach ($biodatas as $bio)
            <tr>
            <td>{{ $loop->iteration }}</td> 
              <!-- <td><img src="{{ asset('storage/'.$bio['foto']) }}" width="100" height="100"></td>
              <td><img src="{{ asset('storage/'.$bio['fotoktp']) }}" width="100" height="100"></td> -->
              <td>{{ $bio->no_test }}</td>
              <td>{{ $bio->nik }}</td>
              <td>{{ $bio->nama }}</td>
              <td>{{ $bio->lahir }}</td>
              <td>{{ $bio->alamat }}</td>
              <td>{{ $bio->email }}</td>
              <td>{{ $bio->kota }}</td>
              
            </tr>
        @endforeach
		</tbody>
	</table>

</body>
</html>