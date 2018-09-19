var sec = 20;
/*function tick()
{
    document.getElementById('decompte').innerHtml = 'Il reste ' + sec + 'seconde(s)';
    sec--;
     
    if(sec == 0)
    {
        document.getElementById('decompte').innerHtml = 'Terminé !';
        document.location = 'page2.php';
    }
}
var timer = window.setInterval(tick, 1000);*/

$(document).ready(function() {
    setInterval(function(){
        sec--;
        console.log(sec);
        if(sec == 0){
           document.location.href="resultat.php"
        }
    }, 10000);
});