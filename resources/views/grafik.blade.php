<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deteksi Mandiri Covid-19</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="{{ asset('assets/starter/images/jateng1.png')}}" style="width:50px;height:50px" rel="shortcut icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<style>
    * {
    margin: 0;
    padding: 0;
}
body {
    background: #2e282a;
    min-height: 100vh;
    font-family: sans-serif;
    color: white;
    text-align: center;
    font-size: 14px;
}

canvas {
    max-height: 500px;
    max-width: 500px;
}

h1 {
    margin: 32px;
    font-size: 5em;
}
.input-block {
    margin-top: 32px;
    font-size: 2em;
}
.input-block input {
    border: 0;
    border-radius: 5px;
    padding: 10px;
    font-size: 0.8em;
    font-color: red;
    outline: 0;
    margin-left: 16px;
}
</style>
<body>
    <h1>Diagram Hasil Test</h1>
    <center>
    <canvas id="myChart" style="height:600px; width:900px"></canvas>
    </center>

    <br>
    <div class="text-center">
                    <a href="{{ route('rekaphasil') }}" class="btn btn-primary mb-3">Kembali <i class="fas fa-arrow-circle-left"></i></a>
                 </div>
       

    <script src="{{ asset('assets/sbadmin/chart/Chart.js') }}" type="text/javascript"></script>
    <!-- <script src="{{ asset('assets/sbadmin/chart/script.js') }}" type="text/javascript"></script> -->

    
    <script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["Bukan ODP/PDP", "OTG", "ODP", "PDP"],
				datasets: [{
					label: '',
					data: [
					{{ $bukanodp }}, {{ $otg }},{{ $odp }},{{ $pdp}}
					],
					backgroundColor: ['	#00FF00','#FFC914', '#17BEBB', '#FF0000'],
					borderColor: [
					'rgba(0,0,0,1)',
					'rgba(0, 0, 0, 0)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
    </script>
    
<!--     
<script  type="text/javascript">
  var ctx = document.getElementById("piechart").getContext("2d");
  var data = {
            labels: ["BukanODP", "OTG", "PDP", "ODP"],
            datasets: [
            {
              label: "",
              data: [{{ $bukanodp }}, {{ $odp }},{{ $otg }},{{ $pdp}}],
              backgroundColor: [
                '#29B0D0',
                '#2A516E',
                '#F07124',
                '#CBE0E3'
              ]
            }
            ]
            };

  var myPieChart = new Chart(ctx, {
                  type: 'pie',
                  data: data,
                  options: {
                    responsive: true
                }
              }); -->


</body>
</html>