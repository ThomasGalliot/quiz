<?php
    session_start();

    include('connexion.php');

    $req = $bdd->prepare('INSERT INTO c0quiz.user (pseudo, total_point_' . $_SESSION['categorie'] . ') VALUES(?, ?)');
  
    $req->execute(array($_COOKIE['pseudo'], $_SESSION['totalPoint']));
  
    header('Location: resultat.php');

    ?>