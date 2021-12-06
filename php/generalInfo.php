<?php

setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set('Europe/Paris');
Class Personne
{
    public $nom;
    public $prenom;
    public $photoProfil;
    public $photoCouverture;
    public $metier;
    public $dateNaissance;
    public $paysOrigine;
    public $regionOrigine;
    public $statutMatrimonial;
    public $nombreEnfant;
    public $statutSante;
    public $quartier;
    public $paysResidence;
    public $villeResidence;
    public $longituteResidence;
    public $latitudeResidence;
    public $telephone;
    public $contactMobile;
    public $contactElectronique;
    public $mail;
    public $nombreProjet;
    public $nombreContrat;
    public $anneeExperience;

    public function __construct($nom,$prenom,$photoProfil,$photoCouverture,$metier,$dateNaissance,$paysOrigine,$regionOrigine,$statutMatrimonial,$nombreEnfant,
                                $statutSante,$quartier,$paysResidence,$villeResidence,$longituteResidence,$latitudeResidence,$telephone,
                                $contactMobile,$contactElectronique,$mail,$nombreProjet,$nombreContrat,$anneeExperience){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->photoProfil=$photoProfil;
        $this->photoCouverture=$photoCouverture;
        $this->metier=$metier;
        $this->dateNaissance=$dateNaissance;
        $this->paysOrigine=$paysOrigine;
        $this->regionOrigine=$regionOrigine;
        $this->statutMatrimonial=$statutMatrimonial;
        $this->nombreEnfant=$nombreEnfant;
        $this->statutSante=$statutSante;
        $this->quartier=$quartier;
        $this->paysResidence=$paysResidence;
        $this->villeResidence=$villeResidence;
        $this->longituteResidence=$longituteResidence;
        $this->latitudeResidence=$latitudeResidence;
        $this->telephone=$telephone;
        $this->contactMobile=$contactMobile;
        $this->contactElectronique=$contactElectronique;
        $this->mail=$mail;
        $this->nombreProjet=$nombreProjet;
        $this->nombreContrat=$nombreContrat;
        $this->anneeExperience=$anneeExperience;
    }

    public function __destruct(){
        
    }

    public function setNom($nom){
        $this->nom = $nom;
    }
    public function getNom(){
        return ucfirst($this->nom);
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function getPrenom(){
        return ucfirst($this->prenom);
    }

    public function setPhotoProfil($photoProfil){
        $this->photoProfil = $photoProfil;
    }
    public function getPhotoProfil(){
        return ucfirst($this->photoProfil);
    }

    public function setPhotoCouverture($photoCouverture){
        $this->photoCouverture = $photoCouverture;
    }
    public function getPhotoCouverture(){
        return ucfirst($this->photoCouverture);
    }

    public function setMetier($metier){
        $this->metier = $metier;
    }
    public function getMetier(){
        return $this->metier;
    }

    public function setDateNaissance($dateNaissance){
        $this->dateNaissance = $dateNaissance;
    }
    public function getDateNaissance(){
        return $this->dateNaissance;
    }

    public function setPaysOrigine($paysOrigine){
        $this->paysOrigine = $paysOrigine;
    }
    public function getPaysOrigine(){
        return $this->paysOrigine;
    }

    public function setRegionOrigine($regionOrigine){
        $this->regionOrigine = $regionOrigine;
    }
    public function getregionOrigine(){
        return $this->regionOrigine;
    }

    public function setStatutMatrimonial($statutMatrimonial){
        $this->statutMatrimonial = $statutMatrimonial;
    }
    public function getstatutMatrimonial(){
        return $this->statutMatrimonial;
    }

    public function setNombreEnfant($nombreEnfant){
        $this->nombreEnfant = $nombreEnfant;
    }
    public function getNombreEnfant(){
        return $this->nombreEnfant;
    }

    public function setStatutSante($statutSante){
        $this->statutSante = $statutSante;
    }
    public function getStatutSante(){
        return $this->statutSante;
    }

    public function setQuartier($quartier){
        $this->quartier = $quartier;
    }
    public function getQuartier(){
        return $this->quartier;
    }

    public function setPaysResidence($paysResidence){
        $this->paysResidence = $paysResidence;
    }
    public function getpaysResidence(){
        return $this->paysResidence;
    }

    public function setVilleResidence($villeResidence){
        $this->villeResidence = $villeResidence;
    }
    public function getVilleResidence(){
        return $this->villeResidence;
    }

    public function setLongituteResidence($longituteResidence){
        $this->longituteResidence = $longituteResidence;
    }
    public function getLongituteResidence(){
        return $this->longituteResidence;
    }

    public function setLatitudeResidence($latitudeResidence){
        $this->latitudeResidence = $latitudeResidence;
    }
    public function getLatitudeResidence(){
        return $this->latitudeResidence;
    }

    public function setTelephone($telephone){
        $this->telephone = $telephone;
    }
    public function getTelephone(){
        return $this->telephone;
    }

    public function setContactMobile($contactMobile){
        $this->contactMobile = $contactMobile;
    }
    public function getContactMobile(){
        return $this->contactMobile;
    }

    public function setContactElectronique($contactElectronique){
        $this->contactElectronique = $contactElectronique;
    }
    public function getContactElectronique(){
        return $this->contactElectronique;
    }

    public function setMail($mail){
        $this->mail = $mail;
    }
    public function getMail(){
        return $this->mail;
    }

    public function setNombreProjet($nombreProjet){
        $this->nombreProjet = $nombreProjet;
    }
    public function getnombreProjet(){
        return $this->nombreProjet;
    }

    public function setnombreContrat($nombreContrat){
        $this->nombreContrat = $nombreContrat;
    }
    public function getNombreContrat(){
        return $this->nombreContrat;
    }

    public function setanneeExperience($anneeExperience){
        $this->anneeExperience = $anneeExperience;
    }
    public function getanneeExperience(){
        return $this->anneeExperience;
    }


}
    $pernonne1 =new Personne("EBA DJON","Ralph","image/photo_2021-11-22_21-35-24.jpg","image/photo_2021-11-22_21-34-47.jpg","Programmeur web / mobile",'03-03-2002',"Cameroun","Centre","Célibataire",
                                "Aucun","RAS","Logbessou","Cameroun","Douala","4.54654","4.87956","699 887 766",
                                "Télégram, Whatsapp, Mobile","Gmail, Twitter, Linkedin, Github","edracresurek@gmail.com",
                                10,03,02);
?> 
<div class="generalInfo">
    <div class="backgroundPhoto" style="background: url(<?php echo $pernonne1->getPhotoCouverture() ?>);background-size: cover;">
        <!-- <img src="image/download5.jpg" alt="" class="theBackgroundPhoto" id="theBackGroundPhoto"> -->
        <div class="searchBar" id="searchBar">
            <img src="image/menu_filled_50px.png" alt="" class="bigIcon" id="bigIcon">
            <input type="search" placeholder="Besoin d'un chef de projet ?" class="inputSearchBar">
            <img src="image/search_50px.png" alt="" class="smallIcon" id="smallIcon">
            <img src="image/thick_vertical_line_filled_50px.png" alt="" class="smallIcon" id="smallIcon">
            <img src="image/delete_sign_filled_50px.svg" alt="" class="smallIcon" id="smallIcon">
        </div>
        <div class="personnalInfo" id="personnalInfo">
            <img src="<?php echo $pernonne1->getPhotoProfil() ?>" alt="" class="profilePhoto">
            <div style="margin-left: 20px;">
                <div class="nom"> <b> <?php echo $pernonne1->getNom(). " " . $pernonne1->getPrenom() ?> </b> </div>
                <div class="simpleText"><?php echo $pernonne1->getMetier() ?></div>
            </div>
        </div>
    </div>
    <div class="coordonate" id="coordonate">

        <!-- <div class="contentCircleButton"> data-toggle="modal" data-target="#myModal" -->
        <div class="smallCircleButtonOne" id="smallCircleButtonOne">
            <img src="image/pdf_2_48px.png" alt="" srcset="" class="sentedIcon" id="sentedIcon1">
        </div>
        <div class="smallCircleButtonTwo" id="smallCircleButtonTwo"  data-toggle="modal" data-target="#myModal">
            <img src="image/gmail_48px.svg" alt="" srcset="" class="sentedIcon" id="sentedIcon2">
        </div>
        <div class="circleButton" id="circleButton" onclick="myScript()">
            <img src="image/sent_filled_50px.png" alt="" class="sentIcon" id="sentIcon">
            <img src="image/delete_sign_32px.png" alt="" class="deleteIcon" id="deleteIcon">
        </div>
        <!-- </div>  -->
        
        <div class="birthday" id="birthday">
            <img src="image/birthday_cake_24px.png" alt="" class="bigIcon">
            <div style="margin-left: 20px; width:100%;">
                <div class="simpleText">Ne le <?php echo utf8_encode(strftime("%d %B %Y",strtotime($pernonne1->getDateNaissance()))) ?></div>
                <div class="simpleText">Originaire du <?php echo $pernonne1->getRegionOrigine(). " " . $pernonne1->getPaysOrigine() ?></div>
                <div class="simpleText"><?php echo $pernonne1->getStatutMatrimonial() ?>,
                    <?php
                    if ($pernonne1->getnombreEnfant() < 1) {
                        echo "Aucun enfant";
                    } elseif ($pernonne1->getNombreEnfant() == 1) {
                        echo $pernonne1->getNombreEnfant() . " enfant";
                    } else {
                        echo $pernonne1->getNombreEnfant() . " enfants";
                    }
                    ?>
                    - Sante <?php echo $pernonne1->getStatutSante() ?></div>
                <div class="bottomLine"></div>
            </div>
        </div>

        <div class="address" id="address">
            <img src="image/location_filled_50px.png" alt="" class="bigIcon">
            <div style="margin-left: 20px; width:100%;">
                <div class="simpleText">Resident à <?php echo $pernonne1->getQuartier() ?></div>
                <div class="simpleText"> <?php echo $pernonne1->getVilleResidence() ?> - <?php echo $pernonne1->getPaysResidence() ?></div>
                <div class="oneLineText">
                    <div class="simpleText">Map : </div>
                    <div class="thinText"> <?php echo $pernonne1->getLongituteResidence()." . ".$pernonne1->getLatitudeResidence() ?></div>
                </div>
                <div class="bottomLine"></div>
            </div>
        </div>

        <div class="telephone" id="telephone">
            <img src="image/phone_24px.png" alt="" class="bigIcon">
            <div style="margin-left: 20px; width:100%;">
                <div class="simpleText">(+237) <?php echo $pernonne1->getTelephone() ?></div>
                <div class="thinText"> <?php echo $pernonne1->getContactMobile() ?></div>
                <div class="bottomLine"></div>
            </div>
        </div>
        <div class="mail" id="mail">
            <img src="image/filled_message_24px.png" alt="" class="bigIcon">
            <div style="margin-left: 20px; width:100%;">
                <div class="simpleText"> <?php echo $pernonne1->getMail() ?></div>
                <div class="thinText"> <?php echo $pernonne1->getContactElectronique() ?></div>
            </div>
        </div>
    </div>

    <div class="oldProject" id="oldProject">
        <div class="detailOldProjet">
            <div class="contentSlideBar">
                <div class="simpleText" style=" margin-bottom: 10px;">+ <?php echo $pernonne1->getNombreProjet() ?> projets </div>
            </div>
            <div class="thinText " style="margin-bottom: 10px; ">+ <?php echo $pernonne1->getNombreContrat() ?> contrats</div>
            <div class="thinText " style="margin-bottom: 10px; ">+ <?php echo $pernonne1->getAnneeExperience() ?> ans d'Exp</div>
        </div>
    </div>
    <div class="contentRedBar">
        <div class="redBar "></div>
    </div>
</div>
<!-- The Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Partager par mail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" >
                <form method="get" action="php/sendMail.php">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="email" class="form-control" id="receptionEmail" name="receptionEmail" style="width: 94%;" placeholder="exemple@gmail.com..." required>

                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button type="submit" name="sendEmailButton" class="btn btn-primary" >Envoyer</button>
                        </div>
                       
                    </div>
                </form>
           </div>
        </div>
    </div>
</div>
<script>
    function myScript() {
        if(document.getElementById('circleButton').className == 'circleButton'){
            document.getElementById('circleButton').className='activeCircleButton';
            document.getElementById('sentIcon').className = 'unactiveImage';
            document.getElementById('deleteIcon').className = 'activeImage';
            document.getElementById('smallCircleButtonOne').className ='activeSmallCircleButtonOne';
            document.getElementById('smallCircleButtonTwo').className ='activeSmallCircleButtonTwo';
            document.getElementById('sentedIcon1').className ='sentIcon';
            document.getElementById('sentedIcon2').className ='sentIcon';
        }
        else{
            document.getElementById('circleButton').className='circleButton';
            document.getElementById('sentIcon').className = 'sentIcon';
            document.getElementById('deleteIcon').className= 'unactiveImage';
            document.getElementById('smallCircleButtonOne').className ='smallCircleButtonOne';
            document.getElementById('smallCircleButtonTwo').className ='smallCircleButtonTwo';
            document.getElementById('sentedIcon1').className ='sentedIcon';
            document.getElementById('sentedIcon2').className ='sentedIcon';
        }
    }
</script>