<?php
    session_start();

    echo "<div class='col-12 slide' id='question-container'>
        <div class='card mb-0 message questions'>
            <div class='card-body'>
                <p class='my-0'>
                    <strong>
                        <center>" . $_SESSION['question1'] . "</center></br>
                    </strong>
                    <ol>";
                        if ($_SESSION['choix1_1'] === $resultat['choix1'] && $_SESSION['choix1_1'] === $resultat['reponse1'] || $_SESSION['choix1_1'] === $resultat['reponse1']) {
                            echo "<li style='color: rgb(0, 168, 20)!important;' class='reponse'>" . $_SESSION['choix1_1'] . "</li>";
                        }
                        
                        else if ($_SESSION['choix1_1'] === $resultat['choix1'] && $_SESSION['choix1_1'] !== $resultat['reponse1']) {
                            echo "<li style='color: rgb(212, 35, 20)!important;' class='reponse'>" . $_SESSION['choix1_1'] . "</li>";
                        }

                        else {
                            echo "<li class='reponse'>" . $_SESSION['choix1_1'] . "</li>";
                        }

                        if ($_SESSION['choix2_1'] === $resultat['choix1'] && $_SESSION['choix2_1'] === $resultat['reponse1'] || $_SESSION['choix2_1'] === $resultat['reponse1']) {
                            echo "<li style='color: rgb(0, 168, 20)!important;' class='reponse'>" . $_SESSION['choix2_1'] . "</li>";
                        }
                        
                        else if ($_SESSION['choix2_1'] === $resultat['choix1'] && $_SESSION['choix2_1'] !== $resultat['reponse1']) {
                            echo "<li style='color: rgb(212, 35, 20)!important;' class='reponse'>" . $_SESSION['choix2_1'] . "</li>";
                        }

                        else {
                            echo "<li class='reponse'>" . $_SESSION['choix2_1'] . "</li>";
                        }

                        if ($_SESSION['choix3_1'] === $resultat['choix1'] && $_SESSION['choix3_1'] === $resultat['reponse1'] || $_SESSION['choix3_1'] === $resultat['reponse1']) {
                            echo "<li style='color: rgb(0, 168, 20)!important;' class='reponse'>" . $_SESSION['choix3_1'] . "</li>";
                        }
                        
                        else if ($_SESSION['choix3_1'] === $resultat['choix1'] && $_SESSION['choix3_1'] !== $resultat['reponse1']) {
                            echo "<li style='color: rgb(212, 35, 20)!important;' class='reponse'>" . $_SESSION['choix3_1'] . "</li>";
                        }

                        else {
                            echo "<li class='reponse'>" . $_SESSION['choix3_1'] . "</li>";
                        }

                        if ($_SESSION['choix4_1'] === $resultat['choix1'] && $_SESSION['choix4_1'] === $resultat['reponse1'] || $_SESSION['choix4_1'] === $resultat['reponse1']) {
                            echo "<li style='color: rgb(0, 168, 20)!important;' class='reponse'>" . $_SESSION['choix4_1'] . "</li>";
                        }
                        
                        else if ($_SESSION['choix4_1'] === $resultat['choix1'] && $_SESSION['choix4_1'] !== $resultat['reponse1']) {
                            echo "<li style='color: rgb(212, 35, 20)!important;' class='reponse'>" . $_SESSION['choix4_1'] . "</li>";
                        }

                        else {
                            echo "<li class='reponse'>" . $_SESSION['choix4_1'] . "</li>";
                        }
                    echo "</ol>
                    <strong>
                        <center>" . $_SESSION['question2'] . "</center></br>
                    </strong>
                    <ol>";
                        if ($_SESSION['choix1_2'] === $resultat['choix2'] && $_SESSION['choix1_2'] === $resultat['reponse2'] || $_SESSION['choix1_2'] === $resultat['reponse2']) {
                            echo "<li style='color: rgb(0, 168, 20)!important;' class='reponse'>" . $_SESSION['choix1_2'] . "</li>";
                        }
                        
                        else if ($_SESSION['choix1_2'] === $resultat['choix2'] && $_SESSION['choix1_2'] !== $resultat['reponse2']) {
                            echo "<li style='color: rgb(212, 35, 20)!important;' class='reponse'>" . $_SESSION['choix1_2'] . "</li>";
                        }

                        else {
                            echo "<li class='reponse'>" . $_SESSION['choix2_2'] . "</li>";
                        }

                        if ($_SESSION['choix2_2'] === $resultat['choix2'] && $_SESSION['choix2_2'] === $resultat['reponse2'] || $_SESSION['choix2_2'] === $resultat['reponse2']) {
                            echo "<li style='color: rgb(0, 168, 20)!important;' class='reponse'>" . $_SESSION['choix2_2'] . "</li>";
                        }
                        
                        else if ($_SESSION['choix2_2'] === $resultat['choix2'] && $_SESSION['choix2_2'] !== $resultat['reponse2']) {
                            echo "<li style='color: rgb(212, 35, 20)!important;' class='reponse'>" . $_SESSION['choix2_2'] . "</li>";
                        }

                        else {
                            echo "<li class='reponse'>" . $_SESSION['choix2_2'] . "</li>";
                        }

                        if ($_SESSION['choix3_2'] === $resultat['choix2'] && $_SESSION['choix3_2'] === $resultat['reponse2'] || $_SESSION['choix3_2'] === $resultat['reponse2']) {
                            echo "<li style='color: rgb(0, 168, 20)!important;' class='reponse'>" . $_SESSION['choix3_2'] . "</li>";
                        }
                        
                        else if ($_SESSION['choix3_2'] === $resultat['choix2'] && $_SESSION['choix3_2'] !== $resultat['reponse2']) {
                            echo "<li style='color: rgb(212, 35, 20)!important;' class='reponse'>" . $_SESSION['choix3_2'] . "</li>";
                        }

                        else {
                            echo "<li class='reponse'>" . $_SESSION['choix3_2'] . "</li>";
                        }

                        if ($_SESSION['choix4_2'] === $resultat['choix2'] && $_SESSION['choix4_2'] === $resultat['reponse2'] || $_SESSION['choix4_2'] === $resultat['reponse2']) {
                            echo "<li style='color: rgb(0, 168, 20)!important;' class='reponse'>" . $_SESSION['choix4_2'] . "</li>";
                        }
                        
                        else if ($_SESSION['choix4_2'] === $resultat['choix2'] && $_SESSION['choix4_2'] !== $resultat['reponse2']) {
                            echo "<li style='color: rgb(212, 35, 20)!important;' class='reponse'>" . $_SESSION['choix4_2'] . "</li>";
                        }

                        else {
                            echo "<li class='reponse'>" . $_SESSION['choix4_2'] . "</li>";
                        }
                    echo "</ol>
                    <strong>
                        <center>" . $_SESSION['question3'] . "</center></br>
                    </strong>
                    <ol>";
                        if ($_SESSION['choix1_3'] === $resultat['choix3'] && $_SESSION['choix1_3'] === $resultat['reponse3'] || $_SESSION['choix1_3'] === $resultat['reponse3']) {
                            echo "<li style='color: rgb(0, 168, 20)!important;' class='reponse'>" . $_SESSION['choix1_3'] . "</li>";
                        }
                        
                        else if ($_SESSION['choix1_3'] === $resultat['choix3'] && $_SESSION['choix1_3'] !== $resultat['reponse3']) {
                            echo "<li style='color: rgb(212, 35, 20)!important;' class='reponse'>" . $_SESSION['choix1_3'] . "</li>";
                        }

                        else {
                            echo "<li class='reponse'>" . $_SESSION['choix1_3'] . "</li>";
                        }

                        if ($_SESSION['choix2_3'] === $resultat['choix3'] && $_SESSION['choix2_3'] === $resultat['reponse3'] || $_SESSION['choix2_3'] === $resultat['reponse3']) {
                            echo "<li style='color: rgb(0, 168, 20)!important;' class='reponse'>" . $_SESSION['choix2_3'] . "</li>";
                        }
                        
                        else if ($_SESSION['choix2_3'] === $resultat['choix3'] && $_SESSION['choix2_3'] !== $resultat['reponse3']) {
                            echo "<li style='color: rgb(212, 35, 20)!important;' class='reponse'>" . $_SESSION['choix2_3'] . "</li>";
                        }

                        else {
                            echo "<li class='reponse'>" . $_SESSION['choix2_3'] . "</li>";
                        }

                        if ($_SESSION['choix3_3'] === $resultat['choix3'] && $_SESSION['choix3_3'] === $resultat['reponse3'] || $_SESSION['choix3_3'] === $resultat['reponse3']) {
                            echo "<li style='color: rgb(0, 168, 20)!important;' class='reponse'>" . $_SESSION['choix3_3'] . "</li>";
                        }
                        
                        else if ($_SESSION['choix3_3'] === $resultat['choix3'] && $_SESSION['choix3_3'] !== $resultat['reponse3']) {
                            echo "<li style='color: rgb(212, 35, 20)!important;' class='reponse'>" . $_SESSION['choix3_3'] . "</li>";
                        }

                        else {
                            echo "<li class='reponse'>" . $_SESSION['choix3_3'] . "</li>";
                        }

                        if ($_SESSION['choix4_3'] === $resultat['choix3'] && $_SESSION['choix4_3'] === $resultat['reponse3'] || $_SESSION['choix4_3'] === $resultat['reponse3']) {
                            echo "<li style='color: rgb(0, 168, 20)!important;' class='reponse'>" . $_SESSION['choix4_3'] . "</li>";
                        }
                        
                        else if ($_SESSION['choix4_3'] === $resultat['choix3'] && $_SESSION['choix4_3'] !== $resultat['reponse3']) {
                            echo "<li style='color: rgb(212, 35, 20)!important;' class='reponse'>" . $_SESSION['choix4_3'] . "</li>";
                        }

                        else {
                            echo "<li class='reponse'>" . $_SESSION['choix4_3'] . "</li>";
                        }
                    echo "</ol>
                    <strong>
                        <center>" . $_SESSION['question4'] . "</center></br>
                    </strong>
                    <ol>";
                        if ($_SESSION['choix1_4'] === $resultat['choix4'] && $_SESSION['choix1_4'] === $resultat['reponse4'] || $_SESSION['choix1_4'] === $resultat['reponse4']) {
                            echo "<li style='color: rgb(0, 168, 20)!important;' class='reponse'>" . $_SESSION['choix1_4'] . "</li>";
                        }
                        
                        else if ($_SESSION['choix1_4'] === $resultat['choix4'] && $_SESSION['choix1_4'] !== $resultat['reponse4']) {
                            echo "<li style='color: rgb(212, 35, 20)!important;' class='reponse'>" . $_SESSION['choix1_4'] . "</li>";
                        }

                        else {
                            echo "<li class='reponse'>" . $_SESSION['choix1_4'] . "</li>";
                        }

                        if ($_SESSION['choix2_4'] === $resultat['choix4'] && $_SESSION['choix2_4'] === $resultat['reponse4'] || $_SESSION['choix2_4'] === $resultat['reponse4']) {
                            echo "<li style='color: rgb(0, 168, 20)!important;' class='reponse'>" . $_SESSION['choix2_4'] . "</li>";
                        }
                        
                        else if ($_SESSION['choix2_4'] === $resultat['choix4'] && $_SESSION['choix2_4'] !== $resultat['reponse4']) {
                            echo "<li style='color: rgb(212, 35, 20)!important;' class='reponse'>" . $_SESSION['choix2_4'] . "</li>";
                        }

                        else {
                            echo "<li class='reponse'>" . $_SESSION['choix2_4'] . "</li>";
                        }

                        if ($_SESSION['choix3_4'] === $resultat['choix4'] && $_SESSION['choix3_4'] === $resultat['reponse4'] || $_SESSION['choix3_4'] === $resultat['reponse4']) {
                            echo "<li style='color: rgb(0, 168, 20)!important;' class='reponse'>" . $_SESSION['choix3_4'] . "</li>";
                        }
                        
                        else if ($_SESSION['choix3_4'] === $resultat['choix4'] && $_SESSION['choix3_4'] !== $resultat['reponse4']) {
                            echo "<li style='color: rgb(212, 35, 20)!important;' class='reponse'>" . $_SESSION['choix3_4'] . "</li>";
                        }

                        else {
                            echo "<li class='reponse'>" . $_SESSION['choix3_4'] . "</li>";
                        }

                        if ($_SESSION['choix4_4'] === $resultat['choix4'] && $_SESSION['choix4_4'] === $resultat['reponse4'] || $_SESSION['choix4_4'] === $resultat['reponse4']) {
                            echo "<li style='color: rgb(0, 168, 20)!important;' class='reponse'>" . $_SESSION['choix4_4'] . "</li>";
                        }
                        
                        else if ($_SESSION['choix4_4'] === $resultat['choix4'] && $_SESSION['choix4_4'] !== $resultat['reponse4']) {
                            echo "<li style='color: rgb(212, 35, 20)!important;' class='reponse'>" . $_SESSION['choix4_4'] . "</li>";
                        }

                        else {
                            echo "<li class='reponse'>" . $_SESSION['choix4_4'] . "</li>";
                        }
                    echo "</ol>
                    <strong>
                        <center>" . $_SESSION['question5'] . "</center></br>
                    </strong>
                    <ol>";
                        if ($_SESSION['choix1_5'] === $resultat['choix5'] && $_SESSION['choix1_5'] === $resultat['reponse5'] || $_SESSION['choix1_5'] === $resultat['reponse5']) {
                            echo "<li style='color: rgb(0, 168, 20)!important;' class='reponse'>" . $_SESSION['choix1_5'] . "</li>";
                        }
                        
                        else if ($_SESSION['choix1_5'] === $resultat['choix5'] && $_SESSION['choix1_5'] !== $resultat['reponse5']) {
                            echo "<li style='color: rgb(212, 35, 20)!important;' class='reponse'>" . $_SESSION['choix1_5'] . "</li>";
                        }

                        else {
                            echo "<li class='reponse'>" . $_SESSION['choix1_5'] . "</li>";
                        }

                        if ($_SESSION['choix2_5'] === $resultat['choix5'] && $_SESSION['choix2_5'] === $resultat['reponse5'] || $_SESSION['choix2_5'] === $resultat['reponse5']) {
                            echo "<li style='color: rgb(0, 168, 20)!important;' class='reponse'>" . $_SESSION['choix2_5'] . "</li>";
                        }
                        
                        else if ($_SESSION['choix2_5'] === $resultat['choix5'] && $_SESSION['choix2_5'] !== $resultat['reponse5']) {
                            echo "<li style='color: rgb(212, 35, 20)!important;' class='reponse'>" . $_SESSION['choix2_5'] . "</li>";
                        }

                        else {
                            echo "<li class='reponse'>" . $_SESSION['choix2_5'] . "</li>";
                        }

                        if ($_SESSION['choix3_5'] === $resultat['choix5'] && $_SESSION['choix3_5'] === $resultat['reponse5'] || $_SESSION['choix3_5'] === $resultat['reponse5']) {
                            echo "<li style='color: rgb(0, 168, 20)!important;' class='reponse'>" . $_SESSION['choix3_5'] . "</li>";
                        }
                        
                        else if ($_SESSION['choix3_5'] === $resultat['choix5'] && $_SESSION['choix3_5'] !== $resultat['reponse5']) {
                            echo "<li style='color: rgb(212, 35, 20)!important;' class='reponse'>" . $_SESSION['choix3_5'] . "</li>";
                        }

                        else {
                            echo "<li class='reponse'>" . $_SESSION['choix3_5'] . "</li>";
                        }

                        if ($_SESSION['choix4_5'] === $resultat['choix5'] && $_SESSION['choix4_5'] === $resultat['reponse5'] || $_SESSION['choix4_5'] === $resultat['reponse5']) {
                            echo "<li style='color: rgb(0, 168, 20)!important;' class='reponse'>" . $_SESSION['choix4_5'] . "</li>";
                        }
                        
                        else if ($_SESSION['choix4_5'] === $resultat['choix5'] && $_SESSION['choix4_5'] !== $resultat['reponse5']) {
                            echo "<li style='color: rgb(212, 35, 20)!important;' class='reponse'>" . $_SESSION['choix4_5'] . "</li>";
                        }

                        else {
                            echo "<li class='reponse'>" . $_SESSION['choix4_5'] . "</li>";
                        }
                    echo "</ol>
                </p>
            </div>
        </div>
    </div>";
?>