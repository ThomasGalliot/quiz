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
        <link rel="stylesheet" href="questions.css">
        
    </head>
     <body>
     
        <?php
            session_start();

            $_SESSION['categorie'] = $_POST['categorie'];

            if(isset($_POST['pseudo'])) {
                setcookie('pseudo', $_POST['pseudo'], time()+365243600, "/" );
            }
            
            include('connexion.php');
            
            $requete = $bdd->query("SELECT * FROM question WHERE categories='" . $_POST['categorie'] . "' ORDER BY rand() LIMIT 0,5");
            
            $questions = $requete->fetchAll();
   
            if (!empty($_POST['categories']))
            {
            //traitement
            }
          
?>
           
        <div class="reveal">
			<div class="slides">
                <section>

                    <?php foreach($questions as  $i => $question) {
                        echo"<section>
                             <img src='logo.png' class='logo' alt='image' width='100' height='75' align='top'></br>
                                <p class='my-0'>
                                    <center><h3><i>" . htmlspecialchars($question['categories']) . "</i></h3></center>
                                    <strong>
                                        <center>" . htmlspecialchars($question['question']) . "</center></br>
                                    </strong>
                                    <center><input type='radio' id='choix1' name='choix" . $i . "' value='" . htmlspecialchars($question['choix_1']) . "'><label for='choix1' >" . htmlspecialchars($question['choix_1']) . "</label></br>
                                    <input type='radio' id='choix2' name='choix" . $i . "' value='" . htmlspecialchars($question['choix_2']) . "'><label for='choix2' >" . htmlspecialchars($question['choix_2']) . "</label></br>
                                    <input type='radio' id='choix3' name='choix" . $i . "' value='" . htmlspecialchars($question['choix_3']) . "'><label for='choix3' >" . htmlspecialchars($question['choix_3']) . "</label></br>
                                    <input type='radio' id='choix4'name='choix" . $i . "' value='" . htmlspecialchars($question['choix_4']) . "'><label for='choix4' >" . htmlspecialchars($question['choix_4']) . "</label></br>
                                    <input type='hidden' name='reponse" . $i . "' value='" . $question['reponse'] . "'>
                                    <input type='hidden' name='point" . $i . "' value='" . $question['point'] . "'>
                                    <input type='hidden' name='question" . $i . "' value='" . $question['question'] . "'>
                                    <input type='hidden' name='choix1_" . $i . "' value='" . $question['choix_1'] . "'>
                                    <input type='hidden' name='choix2_" . $i . "' value='" . $question['choix_2'] . "'>
                                    <input type='hidden' name='choix3_" . $i . "' value='" . $question['choix_3'] . "'>
                                    <input type='hidden' name='choix4_" . $i . "' value='" . $question['choix_4'] . "'>
                                    </center>
                                </p>
                            </section>";
                    }?>
                    
                    <section>
                        <p><i>Appuie sur le bouton valider afin de voir ton resultat</p></i>
                        <input type='button' class="btn btn-warning" value='Valider' id="sendForm">
                    </section>
                </section>
			</div>
		</div>
        
        <form id="formHidden" method='post' action='store_reponse.php'>
                
        </form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        
        <script src="reveal.js"></script>
        <script src="decompte.js"></script>
        <script src="quiz.js"></script>
    

		<script>
			// More info about config & dependencies:
			// - https://github.com/hakimel/reveal.js#configuration
			// - https://github.com/hakimel/reveal.js#dependencies
			Reveal.initialize({

            });
            

            // 1/ On copie tous les input dans le formulaire caché
            // 2/ On recopie les valeurs au fur et à mesure qu'elles sont sélectionnés

            function copyInputs() {
                $("#formHidden").html("");
                $('.reveal input').each(function() {
                    $(this).clone().appendTo('#formHidden');
                    console.log("Etat input "+$(this).attr("name")+" / "+$(this).val()+" -- checked : "+this.checked);
                })
            }
            copyInputs();

            $('.reveal input').on('change', function() {
                copyInputs();

                var realFormInput = this;

                console.log("--------------------------------");
                $("#formHidden input").each(function () {
                    console.log("Etat input "+$(this).attr("name")+" / "+$(this).val()+" -- checked : "+this.checked+" --- realinput checked : "+realFormInput.checked);
                });
            });

            $('#sendForm').click(function ()  {
                $('#formHidden').submit();
            });
		</script>
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
        <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
        <script src="reveal.js"></script>
        <script src="decompte.js"></script>

    </body>
</html>