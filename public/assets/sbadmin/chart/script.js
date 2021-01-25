const bukanodp = document.querySelector('.bukanodp');
const otg = document.querySelector('.otg');
const odp = document.querySelector('.odp');


var ctx = document.getElementById("PieChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['ODP','PDP','Bukan ODP'],
        datasets: [
            {
                label: '# of Votes',
                data: [ 5, 1, 1],
                backgroundColor: ['#4572E', '#17BEBB', '#FFC914'],
                borderWidth: 1
            }
        ]
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

const updateChartValue = (input, dataOrder) => {
    input.addEventListener('change', e => {
        myChart.data.datasets[0].data[dataOrder] = e.target.value;
        myChart.update();
    });
};

updateChartValue(bukanodp, 0);
updateChartValue(odp, 1);
updateChartValue(otg, 2);