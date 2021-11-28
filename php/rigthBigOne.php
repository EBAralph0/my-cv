<?php 
    $allExperiences =[
        [
            "Chef des projets technologique",
            "Ets. M DE M",
            "Juillet 2019",
            "ce jour",
            "http://mdem.cm",
            "Chef du projet annuaire-universel.cm de l'ART;"
        ],
        [
            "Fondateur & DT",
            "Startup ChickDev",
            "Juin 2015",
            "ce jour",
            "http://chickdev.com",
            "Réalisition de plusieurs sites web et applications web et mobiles"
        ],
        [
            "Enseignant",
            "Institut Universitaire de la Côte",
            "Octobre 2011",
            "ce jour",
            "http://istdi.net",
            "Analyse, UML & MERISE; BD/SQL, ORACLE & MySQL; Dev, IOS & Android; BI & Big Data Talend DI & Hadoop, 1ere, 2ème et 4ème année"
        ],
        [
            "Chef des projets technologique",
            "Ets. M DE M",
            "Juillet 2019",
            "à ce jour",
            "http://mdem.cm",
            "Chef du projet annuaire-universel.cm de l'ART;"
        ],
        [
            "Développeur en chef",
            "Kayroual group",
            "Mai 2013",
            "Juin 2015",
            "http://khayroual.com",
            "Réalisation de multiples projets logiciels et web, Infographie,..."
        ],
        [
            "Responsable commercial",
            "BAO Sarl",
            "Décembre 2012",
            "Juin 2013",
            "http://bao-sarl.com",
            "Définition des stratégies commerciales, Contrôle de qualité, suivi..."
        ],
    ];
    $imageLoisir=[
        'image/tango_48px.png',
        'image/tv_show_100px.png',
        'image/football2_64px.png',
        'image/nintendo_switch_48px.png',
        'image/nintendo_gamecube__100px.png',
        'image/tango_48px.png',
        'image/tv_show_100px.png',
        'image/football2_64px.png',
        'image/nintendo_switch_48px.png',
        'image/nintendo_gamecube__100px.png'
    ];
    
    $langues=[
        'Français',
        'Anglais'
        
    ];
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
<div class="rigthBigOne " id="rigthBigOne ">
            <div class="titleProfessionalExp " id="titleProfessionalExp ">
                <div class="titleBar ">
                    <div class="imageText ">
                        <img src="image/real_estate_80px.png " alt=" " class="geantIcon ">
                        <div>
                            <div class="titleText ">Expérience Professionnelle</div>
                            <div class="smallWhiteText "> <i>Expertise en entreprise</i></div>
                        </div>
                    </div>
                    <img src="image/menu_2_24px.png " alt=" " class="treeDots ">

                </div>
            </div>
            <div class="contentScroll ">
                <div class="scrollOne ">
                <?php
                foreach ($allExperiences as list($nomPoste, $entreprise, $dateDebut,$dateFin,$lien,$detail)) {
                    echo '
                    <div class="listProfessionalExp " id="listProfessionalExp ">
                    <div class="mediumBlackText ">'.$nomPoste.' - <b> @'.$entreprise.'</b></div>
                    <div class="simpleBlueText ">De '.$dateDebut.' à '.$dateFin.' - '.$lien.'</div>
                    <div class="simpleGreyText ">'.$detail.'</div>
                    <div class="greyBottomLine "></div>
                </div>
                        ';
                    } 
                ?>
                </div>
            </div>
            <div class="doubleDiv " id="doubleDiv ">
                <div class="interestPoint " id="interestPoint ">
                    <div class="mediumBlackText "><b>Point d'interêt</b></div>
                    <div class="simpleGreyText " style="padding-bottom: 1%; ">Simple passe-temps pour se faire un peu plaisir</div>
                    <div class="listeImageInteret ">
                    <?php
                        foreach ($imageLoisir as $valeur) {
                            echo '
                                <img src="'.$valeur.'" alt=" " class="pleasureImage ">
                                ';
                            } 
                    ?>
                    </div>
                </div>
                <div class="language " id="language ">
                    <div class="mediumBlackText "><b>Langue</b></div>
                    <div class="simpleGreyText " style="padding-bottom: 1%; ">Pratiquée en entreprise</div>
                    <div class="contentLanguage">
                    <?php
                        foreach ($langues as $valeur) {
                            echo '
                                <div class="checkLanguage ">
                                    <img src="image/checked_checkbox_24px.png " alt=" ">
                                    <div class="bigGreyText ">'.$valeur.'</div>
                                </div>
                                ';
                        } 
                    ?>
                    </div>
                </div>
            </div>
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
        </div>