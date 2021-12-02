<?php 
// Class Personne
// {
//     public $nom;
//     public $prenom;
//     public $metier;
//     public $dateNaissance;
//     public $paysOrigine;
//     public $regionOrigine;
//     public $statutMatrimonial;
//     public $nombreEnfant;
//     public $statutSante;
//     public $quartier;
//     public $paysResidence;
//     public $villeResidence;
//     public $longituteResidence;
//     public $latitudeResidence;
//     public $telephone;
//     public $contactMobile;
//     public $contactElectronique;
//     public $mail;
//     public $nombreProjet;
//     public $nombreContrat;
//     public $anneeExperience;

//     Public function presentation()
//     {
//         return "";
//     }
// }
// $pernonne1 =new Personne();
// $pernonne1->$nom="EBA DJON";
// $pernonne1->$prenom="Ralph";
// $pernonne1->$dateNaissance="03 Mars 2002";
// $pernonne1->$paysOrigine="Cameroun";
// $pernonne1->$regionOrigine="Centre";
// $pernonne1->$statutMatrimonial="Célibataire";
// $pernonne1->$nombreEnfant=0;
// $pernonne1->$statutSante="RAS";
// $pernonne1->$quartier="Logbessou";
// $pernonne1->$paysResidence="Cameroun";
// $pernonne1->$villeResidence="Douala";
// $pernonne1->$longituteResidence="4.54654";
// $pernonne1->$latitudeResidence="4.87956";
// $pernonne1->$telephone="699887766";
// $pernonne1->$contactMobile="Télégram, Whatsapp, Mobile";
// $pernonne1->$contactElectronique="Gmail, Twitter, Linkedin, Github";
// $pernonne1->$mail="edracresurek@gmail.com";
// $pernonne1->$nombreProjet=15;
// $pernonne1->$nombreContrat=02;
// $pernonne1->$anneeExperience=02;
// $pernonne1 =new Personne("EBA DJON","Ralph","Programmeur web / mobile","03 Mars 2002","Cameroun","Centre","Célibataire",
//                             "Aucun","RAS","Logbessou","Cameroun","Douala","4.54654","4.87956","699887766",
//                             "Télégram, Whatsapp, Mobile","Gmail, Twitter, Linkedin, Github","edracresurek@gmail.com",
//                             10,03,02);
$photoProfil="image/photo_2021-11-22_21-35-24.jpg";
$photoCouverture="image/photo_2021-11-22_21-34-47.jpg";
$nom="EBA DJON";
$prenom="Ralph";
$metier="Programmeur web / mobile";
$dateNaissance="03 Mars 2002";
$paysOrigine="Cameroun";
$regionOrigine="Centre";
$statutMatrimonial="Célibataire";
$nombreEnfant=0;
$statutSante="RAS";
$quartier="Logbessou";
$paysResidence="Cameroun";
$villeResidence="Douala";
$longituteResidence=" 4.54654";
$latitudeResidence=" 4.87956";
$telephone="699 887 766";
$contactMobile="Télégram, Whatsapp, Mobile";
$contactElectronique="Gmail, Twitter, Linkedin, Github";
$mail="edracresurek@gmail.com";
$nombreProjet=15;
$nombreContrat=02;
$anneeExperience=02;

$ellGeneralInfo =[
    'photoProfil' => $photoProfil,
    'photoCouverture'=> $photoCouverture

]
?>
<div class="generalInfo">
            <div class="backgroundPhoto" style="background: url(<?php echo $photoCouverture ?>);background-size: cover;">
                <!-- <img src="image/download5.jpg" alt="" class="theBackgroundPhoto" id="theBackGroundPhoto"> -->
                <div class="searchBar" id="searchBar">
                    <img src="image/menu_filled_50px.png" alt="" class="bigIcon" id="bigIcon">
                    <input type="search" placeholder="Besoin d'un chef de projet ?" class="inputSearchBar">
                    <img src="image/search_50px.png" alt="" class="smallIcon" id="smallIcon">
                    <img src="image/thick_vertical_line_filled_50px.png" alt="" class="smallIcon" id="smallIcon">
                    <img src="image/delete_sign_32px.png" alt="" class="smallIcon" id="smallIcon">
                </div>
                <div class="personnalInfo" id="personnalInfo">
                    <img src="<?php echo $photoProfil ?>" alt="" class="profilePhoto">
                    <div style="margin-left: 20px;">
                        <div class="nom"> <b> <?php echo $nom." ".$prenom ?> </b> </div>
                        <div class="simpleText"><?php echo $metier ?></div>
                    </div>
                </div>
            </div>
            <div class="coordonate" id="coordonate">
                <!-- <div class="contentCircleButton"> -->
                <div class="circleButton" id="circleButton">
                    <img src="image/sent_filled_50px.png" alt="" class="sentIcon">
                </div>
                <!-- </div>  -->
                <div class="birthday" id="birthday">
                    <img src="image/birthday_cake_24px.png" alt="" class="bigIcon">
                    <div style="margin-left: 20px; width:100%;">
                        <div class="simpleText">Ne le <?php echo $dateNaissance ?></div>
                        <div class="simpleText">Originaire du <?php echo $regionOrigine." ".$paysOrigine ?></div>
                        <div class="simpleText"><?php echo $statutMatrimonial ?>, 
                        <?php 
                            if($nombreEnfant < 1){
                                echo "Aucun enfant";
                            }
                            elseif($nombreEnfant == 1){
                                echo $nombreEnfant." enfant";
                            }
                            else{
                                echo $nombreEnfant." enfants";
                            }
                        ?>
                        - Sante <?php echo $statutSante ?></div>
                        <div class="bottomLine"></div>
                    </div>
                </div>

                <div class="address" id="address">
                    <img src="image/location_filled_50px.png" alt="" class="bigIcon">
                    <div style="margin-left: 20px; width:100%;">
                        <div class="simpleText">Resident à  <?php echo $quartier ?></div>
                        <div class="simpleText"> <?php echo $villeResidence ?> -  <?php echo $paysResidence ?></div>
                        <div class="oneLineText">
                            <div class="simpleText">Map : </div>
                            <div class="thinText">  <?php echo " $longituteResidence"." $latitudeResidence" ?></div>
                        </div>
                        <div class="bottomLine"></div>
                    </div>
                </div>

                <div class="telephone" id="telephone">
                    <img src="image/phone_24px.png" alt="" class="bigIcon">
                    <div style="margin-left: 20px; width:100%;">
                        <div class="simpleText">(+237)  <?php echo $telephone ?></div>
                        <div class="thinText"> <?php echo $contactMobile ?></div>
                        <div class="bottomLine"></div>
                    </div>
                </div>
                <div class="mail" id="mail">
                    <img src="image/filled_message_24px.png" alt="" class="bigIcon">
                    <div style="margin-left: 20px; width:100%;">
                        <div class="simpleText"> <?php echo $mail ?></div>
                        <div class="thinText"> <?php echo $contactElectronique ?></div>
                    </div>
                </div>
            </div>

            <div class="oldProject" id="oldProject">
                <div class="detailOldProjet">
                    <div class="contentSlideBar">
                        <div class="simpleText" style=" margin-bottom: 10px;">+ <?php echo $nombreProjet ?> projets </div>
                    </div>
                    <div class="thinText " style="margin-bottom: 10px; ">+ <?php echo $nombreContrat ?> contrats</div>
                    <div class="thinText " style="margin-bottom: 10px; ">+ <?php echo $anneeExperience ?> ans d'Exp</div>
                </div>
            </div>
            <div class="contentRedBar">
                <div class="redBar "></div>
            </div>
        </div>