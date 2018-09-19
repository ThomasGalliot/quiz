<!DOCTYPE html>
<html>
    <head>
   

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
        <link href="https://fonts.googleapis.com/css?family=Bad+Script|El+Messiri|Great+Vibes|Kosugi|Lobster|Neucha|Rochester" rel="stylesheet">  
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="page.css" />

        <title>Quizz</title>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="left col-3">
                </div>
                <div class="middle col-6">
                    <h1><strong><center>Bienvenue sur notre quiz</center></strong></h1>
                </div>
                <div class="pseudo">
                    <p>Après avoir rempli le pseudo, clique sur la categorie que tu souhaites.</p>
                </div>
                <div class ="phrases">
                    <center><p>Vous avez du temps ? </br>
                    Venez r&eacute;pondre &agrave; quelques questions et d&eacute;couvrez vos r&eacute;sultats &agrave; la fin du questionnaire.</p>
                </div>
                <div class="bonjour">
                    <p1>Promis, les questions ne sont pas compliqu&eacute;es ! &#9786;</p1>
                </div></center>
                
                <form method='post' action='quizzv2.php'>
                    <input type="text"
                        id="pseudo"
                        name="pseudo"
                        placeholder="Pseudo"
                        minlength="2"
                        value="<?= isset($_COOKIE['pseudo']) ? $_COOKIE['pseudo'] : " " ; ?>"
                        required>
                    <div class="right col-3"></br></br>
                        <center><div class="btn-group">
                            <button type="submit" class="btn btn-raised btn-primary" name="categorie" value="cinema"><strong>Cinema</strong></button>
                            <button type="submit" class="btn btn-raised btn-danger" name="categorie" value="culture_general"><strong>Culture general</strong></button>
                            <button type="submit" class="btn btn-raised btn-success" name="categorie" value="sport"><strong>Sport</strong></button>
                            <button type="submit" class="btn btn-raised btn-info" name="categorie" value="jeux_videos"><strong>Jeux videos</strong></button>
                            <button type="submit" class="btn btn-raised active" name="categorie" value="musique"><strong>Musique</strong></button>
                        </center>
                    </div>
                </form>    
            
            </div>
        </div>
       
            
    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
        <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

    </body>
</html> 