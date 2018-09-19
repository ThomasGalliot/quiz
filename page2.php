<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>quiz</title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    
		<link rel="stylesheet" href="reveal.css">
        <link rel="stylesheet" href="reveal-white.css">

        <link rel="stylesheet" type="text/css" href="questions.css" />
    </head>
    <body>

        <?php
            session_start();

            $i = 0;

            include('connexion.php');
            
            $requete = $bdd->query("SELECT * FROM question WHERE categories='" . $_SESSION['categorie'] . "' ORDER BY rand() LIMIT 0,5");
            
            $questions = $requete->fetchAll();
   
            if (!empty($_POST['categories']))
            {
            //traitement
            }

            echo "<h1><center><i>" . $_SESSION['categorie'] . "</i></center></h1>
            <form method='post' action='store_reponse.php'>
                ";
            
            foreach($questions as $question)
            {
                echo "<div class='col-12 slide' id='question-container'>
                    <div class='card mb-0 message questions'>
                        <div class='card-body'>
                            <p class='my-0'>
                                <strong>
                                    <center>" . htmlspecialchars($question['question']) . "</center></br>
                                </strong>
                                <input type='radio' name='choix" . $i . "' value='" . htmlspecialchars($question['choix_1']) . "'>" . htmlspecialchars($question['choix_1']) . "</input></br>
                                <input type='radio' name='choix" . $i . "' value='" . htmlspecialchars($question['choix_2']) . "'>" . htmlspecialchars($question['choix_2']) . "</input></br>
                                <input type='radio' name='choix" . $i . "' value='" . htmlspecialchars($question['choix_3']) . "'>" . htmlspecialchars($question['choix_3']) . "</input></br>
                                <input type='radio' name='choix" . $i . "' value='" . htmlspecialchars($question['choix_4']) . "'>" . htmlspecialchars($question['choix_4']) . "</input></br>
                                <input type='hidden' name='reponse" . $i . "' value='" . $question['reponse'] . "'>
                                <input type='hidden' name='point" . $i . "' value='" . $question['point'] . "'>
                                <input type='hidden' name='question" . $i . "' value='" . $question['question'] . "'>
                                <input type='hidden' name='choix1_" . $i . "' value='" . $question['choix_1'] . "'>
                                <input type='hidden' name='choix2_" . $i . "' value='" . $question['choix_2'] . "'>
                                <input type='hidden' name='choix3_" . $i . "' value='" . $question['choix_3'] . "'>
                                <input type='hidden' name='choix4_" . $i . "' value='" . $question['choix_4'] . "'>
                            </p>
                        </div>
                    </div>
                </div>";

                $i++;
            }
            echo "<input type='submit' value='Valider'>
            </form>";
            
           
        ?>
        <!--<script type="text/javascript" src="/quiz.js"></script>-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
        <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
        <script src="reveal.js"></script>
        <script src="decompte.js"></script>

        
        
    </body>
</html>