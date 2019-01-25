/// charts dashboard


var ctx1 = document.getElementById("myChart");

var countWorks = $("#works").val();
var countSkills = $("#skills").val();
var countStudies = $("#studies").val();
var countExp = $("#exp").val();

var myDoughnutChart = new Chart(ctx1, {
    type: 'doughnut',
    data: {
        labels: ["Experiencia", "Habilidades", "Formacion", "Trabajos"],
        datasets: [{
            data: [countExp, countSkills, countStudies, countWorks],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ]
        }]
    }
});


