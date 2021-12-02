<?php 
    $actualDate = strftime('%Y-%m-%d %H:%M:%S');
    $allExperiences =[
        [
            "Chef des projets technologique",
            "Ets. M DE M",
            '2019-07-01 00:00:00',
            $actualDate,
            "http://mdem.cm",
            "Chef du projet annuaire-universel.cm de l'ART;",
            
        ],
        [
            "Fondateur & DT",
            "Startup ChickDev",
            '2015-06-01 00:00:00',
            $actualDate,
            "http://chickdev.com",
            "Réalisition de plusieurs sites web et applications web et mobiles"
        ],
        [
            "Enseignant",
            "Institut Universitaire de la Côte",
            '2011-10-01 00:00:00',
            $actualDate,
            "http://istdi.net",
            "Analyse, UML & MERISE; BD/SQL, ORACLE & MySQL; Dev, IOS & Android; BI & Big Data Talend DI & Hadoop, 1ere, 2ème et 4ème année"
        ],
        [
            "Développeur en chef",
            "Kayroual group",
            '2013-05-01 00:00:00',
            '2015-06-01 00:00:00',
            "http://khayroual.com",
            "Réalisation de multiples projets logiciels et web, Infographie..."
        ],
        [
            "Responsable commercial",
            "BAO Sarl",
            '2012-12-01 00:00:00',
            '2013-06-01 00:00:00',
            "http://bao-sarl.com",
            "Définition des stratégies commerciales, Contrôle de qualité, suivi..."
        ],
    ];
    function date_compare($a, $b)
    {
        $t1 = strtotime($a[2]);
        $t2 = strtotime($b[2]);
        return $t2 - $t1;
    }    
    usort($allExperiences, 'date_compare');
    
    // $firstExperience = $allExperiences = [2];
    setlocale(LC_TIME, 'fr_FR');
    date_default_timezone_set('Europe/Paris');
    //echo utf8_encode(strftime('%A %d %B %Y, %H:%M'));

    $tableLength = sizeof($allExperiences)-1;
    $firstExperienceDate = strftime($allExperiences[$tableLength][2]); 
    $expYearOld =round((time()-strtotime($firstExperienceDate))/(3600*24*365.25));

    //echo $firstExperienceDate;
    //echo $actualDate;
    //echo $expYearOld;

?>
 <div class="titleProfessionalExp " id="titleProfessionalExp ">
                <div class="titleBar ">
                    <div class="imageText ">
                        <img src="image/real_estate_80px.png " alt=" " class="geantIcon ">
                        <div>
                            <div class="titleText" >Expérience Professionnelle </div>
                            <div class="smallWhiteText "> <i><?php echo " ".$expYearOld." ans d'" ?>expertise en entreprise</i></div>
                        </div>
                    </div>
                    <div class="simpleText"> </div>
                    <img src="image/menu_2_24px.png " alt=" " class="treeDots ">

                </div>
            </div>
            <div class="contentScroll ">
                <div class="scrollOne ">
                <?php
                foreach ($allExperiences as list($nomPoste, $entreprise, $dateDebut,$dateFin,$lien,$detail)) {
                    if($dateFin == $actualDate){
                        echo '
                            <div class="listProfessionalExp " id="listProfessionalExp ">
                            <div class="mediumBlackText ">'.$nomPoste.' - <b> @'.$entreprise.'</b></div>
                            <div class="simpleBlueText ">De '.utf8_encode(strftime("%B %Y",strtotime($dateDebut))).' à nos jours - '.$lien.'</div>
                            <div class="simpleGreyText ">'.$detail.'</div>
                            <div class="greyBottomLine "></div>
                        </div>
                                ';
                    }
                    else{
                    echo '
                    <div class="listProfessionalExp " id="listProfessionalExp ">
                    <div class="mediumBlackText ">'.$nomPoste.' - <b> @'.$entreprise.'</b></div>
                    <div class="simpleBlueText ">De '.utf8_encode(strftime("%B %Y",strtotime($dateDebut))).' à '.utf8_encode(strftime("%B %Y",strtotime($dateFin))).' - '.$lien.'</div>
                    <div class="simpleGreyText ">'.$detail.'</div>
                    <div class="greyBottomLine "></div>
                </div>
                        ';
                    }
                    } 
                ?>
                </div>
            </div>