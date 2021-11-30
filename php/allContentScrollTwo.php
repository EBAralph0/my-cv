<?php 
    $academicCursus =[
        [
            "DIPET Electrotechnique",
            "ENSET de Douala",
            "Août 2012",
            "Gestion d'éclairage d'une maison (Android + Arduino)",
        ],
        [
            "Oracle Certified Associate",
            "Kentnix Sarl",
            "Mars 2009",
            "Oracle Database 11g Administration",
        ],
        [
            "Oracle SQL Certified",
            "Kentnix Sarl",
            "Décembre 2008",
            "SQL 2, SQL 3, XML",
        ],
        [
            "Licence professionnelle",
            "Douala Institute of Tech",
            "Octobre 2008",
            "Télécommunication & Réseaux",
        ],
        [
            "DEC / BTS",
            "CCNB Dieppe - Canada",
            "Septembre 2007",
            "Programmation Appliquée Pour Internet",
        ],
        [
            "Baccalauréat",
            "Lyscée Technique de Douala Bassa",
            "Juin 2005",
            "Electrotechnique, mention BIEN(major de centre)",
        ],
    ];
?>
<div class="academicCursusTitle " id="academicCursusTitle ">
                <div class="titleBar ">
                    <div class="imageText ">
                        <img src="image/motarboard_30px.png " alt=" " class="geantIcon ">
                        <div>
                            <div class="titleText ">Cursus Academique</div>
                            <div class="smallWhiteText "> <i>Diplôme et formation certifiante</i></div>
                        </div>
                    </div>
                    <img src="image/menu_2_24px.png " alt=" " class="treeDots ">
                </div>
            </div>
            <div class="contentScrollTwo ">
                <div class="scrollTwo ">
                <?php
                    foreach ($academicCursus as list($nomDiplome, $etablissement, $date,$detail)) {
                        echo '
                            <div class="listProfessionalExp " id="listProfessionalExp ">
                                <div class="mediumBlackText ">'.$nomDiplome.' - <b> @'.$etablissement.'</b></div>
                                <div class="dateSpeciality ">
                                    <div class="simpleBlueText ">'.$date.' - </div>
                                    <div class="simpleBlackText "><i>'.$detail.'</i> </div>
                                </div>
                                <div class="greyBottomLine "></div>
                            </div>
                        ';
                        } 
                ?>
                </div>
            </div>