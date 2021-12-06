<?php 
    $allCompetences =[
        [
            "Développement front-end",
            "HTML5, SASS, VueJS, Angular, JavaFx",
            90
        ],
        [
            "Développement back-end",
            "Lavarel, Dupral 8, NodeJS, Kotlin, Java EE 7",
            75
        ],
        [
            "Développement mobile",
            "Android Kotlin, IOS Swift, Cordova, Flutter",
            80
        ],
        [
            "UI / UX Design",
            "Photoshop CC, Adobe XD, Material Design",
            65
        ],
        [
            "Base de données & Big Data",
            "Oracle 11g, PostgreSQL, Hadoop, TalendDI",
            95
        ],
        [
            "Outils / Environnements",
            "Visual Paradigm, Git, Docker, K8s, Linux",
            85
        ]
        
        ];
?>
<div class="detailProject" id="detailProject ">
            <?php
                foreach ($allCompetences as list($nomCompetence, $outils, $pourcentageMaitrise)) {
                    // echo 'La clé ' . $cle . ' contient la valeur ' . $valeur . "\n";
                    // echo '[' . $allCompetenceCle . ', ' . $cle . '] = ' . $valeur . "\n";
                    $nonMaitrise=100-$pourcentageMaitrise;
                    echo '
                        <div class="checked " id="checked ">
                        <i class="fas fa-check-square fa-2x " id="myCheck"></i>
                        <div class="properlyProject ">
                            <div class="mediumBlackText "><b> ' . $nomCompetence .' </b> </div>
                            <div class="simpleBlackText "> ' . $outils .'</div>
                            <div class="slidecontainer ">
                                <span class="theFulled " style="width:'. $pourcentageMaitrise.'%; "></span>
                                <span class="theEmpty " style="right:'.$nonMaitrise.'%; "></span>
                            </div>
                        </div>
                        <div class="contentStar">
                            <img src="image/star_24px.png " alt=" " class="smallStar ">
                        </div>
                    </div>
                    ';
                } 
            ?>
        </div>