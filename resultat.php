<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>quiz</title>
        <link rel="stylesheet" type="text/css" href="questions.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    </head>
    <body>
    <?php
        include('connexion.php');
        

        $requete = $bdd->query("SELECT * FROM choix WHERE pseudo = '" . $_COOKIE['pseudo'] . "' ORDER BY id DESC LIMIT 0,1");

        $resultats = $requete->fetchAll();

        $requete2 = $bdd->query("SELECT AVG(total_point_musique), AVG(total_point_sport), AVG(total_point_culture_general), AVG(total_point_jeux_videos), AVG(total_point_cinema) FROM user");

        $statistiques = $requete2->fetchAll();

        foreach($resultats as $resultat) {
            include('affichagereponse.php');

        }
        echo "<center><h3><b>Ton score est de " . $_SESSION['totalPoint'] . "</h3></b>";

        if ($_SESSION['totalPoint'] <= 3) {
            echo "<p><i>Vous &ecirc;tes un d&eacute;butant &#9785;</p></i>";
        }elseif ($_SESSION['totalPoint'] >= 5) {
            echo "<p><i>Vous &ecirc;tes un expert ! &#9786;</p></i>";
        }else{
            echo "<i><p>Vous avez un niveau moyen</p></center></i>";
        }
    
    ?>
    <?php foreach($statistiques as $statistique) { ?>
        
        <input type='hidden' class='resultat1' value='<?= $statistique['AVG(total_point_musique)']?>'>
        <input type='hidden' class='resultat2' value='<?= $statistique['AVG(total_point_sport)']?>'>
        <input type='hidden' class='resultat3' value='<?= $statistique['AVG(total_point_cinema)']?>'>
        <input type='hidden' class='resultat4' value='<?= $statistique['AVG(total_point_culture_general)']?>'>
        <input type='hidden' class='resultat5' value='<?= $statistique['AVG(total_point_jeux_videos)']?>'>
    <?php } ?>
        

        <!-- La zone de dessin HTML5 nécessaire à Chart.js pour fonctionner -->
        <canvas id="myChart" width="300" height="60"></canvas>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
        <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
        <script src="quiz.js"></script>
    </body>
</html>