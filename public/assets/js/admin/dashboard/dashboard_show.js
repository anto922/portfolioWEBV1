/// charts dashboard


var ctx1 = document.getElementById("myChart1");
var myDoughnutChart = new Chart(ctx1, {
    type: 'doughnut',
    data: {
        labels: ["Experiencia", "Habilidades", "Formacion", "Trabajos"],
        datasets: [{
            data: [2, 7, 3, 1],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ]
        }]
    }
});

var ctx2 = document.getElementById("myChart2");
var myDoughnutChart = new Chart(ctx2, {
    type: 'horizontalBar',
    data: {
        labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Dicembre"],
        datasets: [{
            data: [2, 7, 3, 1, 2, 3, 2, 1, 3, 2, 1, 2],
            label: "Visitas",
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ]
        }],

    },
    options: {
        legend: {
            display: true,
            labels: {
                fontColor: 'rgb(75, 192, 192)'
            }
        }
    }
});


