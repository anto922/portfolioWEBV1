/// charts dashboard


var ctx1 = document.getElementById("ChartSkills");

var countWorks = $("#works").val();
var countSkills = $("#skills").val();
var countStudies = $("#studies").val();
var countExp = $("#exp").val();
var skills_levels = $("#skills_levels").val();
var data = JSON.parse(skills_levels);
console.log(data[0].description);
var etiquetas = new Array();
var niveles = new Array();
data.forEach(function (valor, indice, array) {

    etiquetas.push(valor.description);
    niveles.push(valor.level);
});

var myDoughnutChart = new Chart(ctx1, {
    type: 'line',
    data: {
        labels: etiquetas,
        datasets: [{
            data: niveles,
            borderColor: ['rgba(32, 162, 183,1)'],
            backgroundColor: ['rgba(0, 0, 0, 0)']
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Habilidades'
        },
        legend: {
            display: false
        },
    }
});





