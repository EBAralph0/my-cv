<?php

use JetBrains\PhpStorm\Language;

class Loisir{

    // public Personne $personne;
    //public $personne;
    public $imageLoisir;

   

    public function __construct($imageLoisir)
    {
         $this->imageLoisir=$imageLoisir;
    }

   

    public function getLoisir(){
        echo '
        <img src="'.$this->imageLoisir.'" alt=" " class="pleasureImage ">
        ';
    }

}

class Langue{

    // public Personne $personne;
    //public $personne;
    public $nomLangue;

   

    public function __construct($nomLangue)
    {
         $this->nomLangue=$nomLangue;
    }

   

    public function getLangues(){
        echo '
            <div class="checkLanguage ">
                <img src="image/checked_checkbox_24px.png " alt=" ">
                <div class="bigGreyText ">'.$this->nomLangue.'</div>
            </div>
            ';
    }

}

    $imagesLoisir=[
        new Loisir('image/tango_48px.png'),
        new Loisir('image/tv_show_100px.png'),
        new Loisir('image/football2_64px.png'),
        new Loisir('image/nintendo_switch_48px.png'),
        new Loisir('image/nintendo_gamecube__100px.png'),
        new Loisir('image/tango_48px.png'),
        new Loisir('image/tv_show_100px.png'),
        new Loisir('image/football2_64px.png'),
        new Loisir('image/nintendo_switch_48px.png'),
        new Loisir('image/nintendo_gamecube__100px.png')
    ];
    
    $langues=[
        new Langue('Français'),
        new Langue('Anglais')
    ];
?>
 <div class="doubleDiv " id="doubleDiv ">
    <div class="interestPoint " id="interestPoint ">
        <div class="mediumBlackText "><b>Point d'interêt</b></div>
        <div class="simpleGreyText " style="padding-bottom: 1%; ">Simple passe-temps pour se faire un peu plaisir</div>
        <div class="listeImageInteret ">
        <?php
            foreach ($imagesLoisir as $valeur) {
                $valeur->getLoisir();
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
                $valeur->getLangues();
            } 
        ?>
        </div>
    </div>
</div>