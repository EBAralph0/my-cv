<?php


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
    public function getLoisirPreview(){
        echo '
        <img src="../'.$this->imageLoisir.'" alt=" " class="pleasureImage ">
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
    
?>