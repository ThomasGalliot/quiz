var resultatMusique = document.getElementsByClassName('resultat1')[0].value;
var resultatSport = document.getElementsByClassName('resultat2')[0].value;
var resultatCinema = document.getElementsByClassName('resultat3')[0].value;
var resultatCultureGeneral = document.getElementsByClassName('resultat4')[0].value;
var resultatJeuxVideos = document.getElementsByClassName('resultat5')[0].value;

console.log(resultatMusique, resultatSport, resultatMusique, resultatCultureGeneral, resultatJeuxVideos);

var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Culture générale", "Jeux vidéos", "Cinéma", "Musique", "Sport"],
        datasets: [{
            label: 'Bonnes réponses',
            data: [resultatCultureGeneral, resultatJeuxVideos, resultatCinema, resultatMusique, resultatSport],
            backgroundColor: [
                'rgba(147, 93, 12, 0.2)',
                'rgba(51, 85, 13, 0.2)',
                'rgba(134, 27, 88, 0.2)',
                'rgba(61, 61, 61, 0.2)',
                'rgba(124, 45, 25, 0.2)'
            ],
            borderColor: [
                'rgba(147,93,12,1)',
                'rgba(51, 85, 12, 1)',
                'rgba(134, 27, 88, 1)',
                'rgba(61, 61, 61, 1)',
                'rgba(124, 45, 25, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});