<?php

    session_start();
    include('connexion.php');

    $array = array("point1", "point2", "point3", "point4", "point5");

    for ($i = 0; $i < 4; $i++) {
        if ($_POST['choix' . $i] === $_POST['reponse' . $i]) {
            $array[$i] = $_POST['point' . $i];
        }

        else {
            $array[$i] = 0;
        }
    }

    $req = $bdd->prepare('INSERT INTO c0quiz.choix (pseudo, choix1, choix2, choix3, choix4, choix5, reponse1, reponse2, reponse3, reponse4, reponse5, point1, point2, point3, point4, point5) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    try {
        $result = $req->execute(array($_COOKIE['pseudo'], $_POST['choix0'], $_POST['choix1'], $_POST['choix2'], $_POST['choix3'], $_POST['choix4'], $_POST['reponse0'], $_POST['reponse1'], $_POST['reponse2'], $_POST['reponse3'], $_POST['reponse4'], $point1, $point2, $point3, $point4, $point5));
    }
    catch(Exception $e) {
        $req->debugDumpParams();
    }

    $_SESSION['totalPoint'] = $point1 + $point2 + $point3 + $point4 + $point5;

    $_SESSION['question1'] = $_POST['question0'];
    $_SESSION['question2'] = $_POST['question1'];
    $_SESSION['question3'] = $_POST['question2'];
    $_SESSION['question4'] = $_POST['question3'];
    $_SESSION['question5'] = $_POST['question4'];

    $_SESSION['choix1_1'] = $_POST['choix1_0'];
    $_SESSION['choix1_2'] = $_POST['choix1_1'];
    $_SESSION['choix1_3'] = $_POST['choix1_2'];
    $_SESSION['choix1_4'] = $_POST['choix1_3'];
    $_SESSION['choix1_5'] = $_POST['choix1_4'];

    $_SESSION['choix2_1'] = $_POST['choix2_0'];
    $_SESSION['choix2_2'] = $_POST['choix2_1'];
    $_SESSION['choix2_3'] = $_POST['choix2_2'];
    $_SESSION['choix2_4'] = $_POST['choix2_3'];
    $_SESSION['choix2_5'] = $_POST['choix2_4'];

    $_SESSION['choix3_1'] = $_POST['choix3_0'];
    $_SESSION['choix3_2'] = $_POST['choix3_1'];
    $_SESSION['choix3_3'] = $_POST['choix3_2'];
    $_SESSION['choix3_4'] = $_POST['choix3_3'];
    $_SESSION['choix3_5'] = $_POST['choix3_4'];

    $_SESSION['choix4_1'] = $_POST['choix4_0'];
    $_SESSION['choix4_2'] = $_POST['choix4_1'];
    $_SESSION['choix4_3'] = $_POST['choix4_2'];
    $_SESSION['choix4_4'] = $_POST['choix4_3'];
    $_SESSION['choix4_5'] = $_POST['choix4_4'];

    header('Location: store_users.php');
?>