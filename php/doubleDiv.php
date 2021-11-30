<?php 
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
?>
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