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
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Rekap Hasil Test COVID-19</h4>
	</center>

	<table class='table table-bordered'>
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
                <td>{{ $hasil->test_id }}</td>
                <td>{{ $hasil->persentase }}</td>
                <td>{{ $hasil->result->keterangan }}</td>
                <td>{{ $hasil->result->desc_result }}</td>
                <td>{{ $hasil->result->saran }}</td>
                <td>{{ $hasil->result->edukasi }}</td>
            </tr>
        @endforeach
		</tbody>
	</table>

</body>
</html>