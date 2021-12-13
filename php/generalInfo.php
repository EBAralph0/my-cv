<?php

setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set('Europe/Paris');
require 'classPersonne.php';
?> 
<div class="generalInfo">
    <div class="backgroundPhoto" style="background: url('<?php echo $pernonne1->getPhotoCouverture() ?>');background-size: cover;">
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
        <div class="smallCircleButtonOne" id="smallCircleButtonOne" data-toggle="modal" data-target="#myPdfModal">
                <img src="image/pdf_2_48px.png" alt="" srcset="" class="sentedIcon" id="sentedIcon1" >
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
                <div style="display: flex;justify-content:center;" >
                        <div style="display: flex;flex-flow:column;align-items:center;">  
                        <i class="fas fa-spinner loadingImage" id="loadingIcon1"></i>
                        </div>
                </div>
                <form method="get" action="php/sendMail.php">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="text" class="form-control" id="receptionEmail" name="receptionEmail" style="width: 94%;" placeholder="exemple@gmail.com..." required>

                        <div class="modal-footer" style="display:flex; justify-content:space-between;">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button onclick="sendButton();" type="submit" name="sendEmailButton" class="btn btn-primary" >Envoyer</button>
                        </div>
                       
                    </div>
                </form>
           </div>
        </div>
    </div>
</div>


<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Envoie Reussi !</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cancelButton();">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" >
                    <form method="" action="">
                        <div style="display: flex;justify-content:center;" >
                            <div style="display: flex;flex-flow:column;align-items:center;">
                            <i class="fas fa-check-circle appearImage " style="color: green;"></i>
                            <i class="fas exclamation-triangle appearImage " style="color: tomato;"></i>
                            </div>
                        </div>
                        <!-- <div class="form-group"> -->
                            <!-- <label for="recipient-name" class="col-form-label">Email</label> -->
                            <!-- <input type="text" class="form-control" id="receptionEmail" name="receptionEmail" style="width: 94%;" placeholder="exemple@gmail.com..." required> -->

                            <div class="modal-footer" style="display:flex; justify-content:flex-end;">
                                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="cancelButton();">OK</button>
                                <!-- <button type="submit" name="sendEmailButton" class="btn btn-primary" >Envoyer</button> -->
                            </div>
                        <!-- </div> -->
                    </form>
            </div>
            </div>
        </div>
</div>


<div class="modal fade" id="failedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
<div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Echec de l'envoie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cancelButton();">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" >
                <div style="display: flex;justify-content:center;" >
                    <div style="display: flex;flex-flow:column;align-items:center;">  
                    <i class="fas fa-exclamation-triangle appearImage" id ="errorImage" style="color: tomato;"></i>
                    <h6 class="modal-title" id="exampleModalLabel"><?php echo $_SESSION["feedBack"] ?></h6>
                    </div>
                </div>
                <form method="get" action="php/sendMail.php">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <?php 
                            if(isset($_SESSION["resentMail"])){
                                $resentEmail=$_SESSION["resentMail"];
                                
                            }
                        ?>
                        <input type="text" value="<?php echo $resentEmail ?>" class="form-control" id="receptionEmail" name="receptionEmail" style="width: 94%;" placeholder="exemple@gmail.com..." required>

                        <div class="modal-footer" style="display:flex; justify-content:space-between;">
                            <button type="button" onclick="cancelButton();" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button onclick="resendButton();" type="submit" name="sendEmailButton" class="btn btn-primary" >Renvoyer</button>
                        </div>
                       
                    </div>
                </form>
           </div>
        </div>
    </div>
</div>

<!-- The PDF Modal -->
<div class="modal fade" id="myPdfModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Exporter le document PDF</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" >
                <div style="display: flex;justify-content:center;" >
                        <div style="display: flex;flex-flow:column;align-items:center;">  
                        <i class="fas fa-spinner loadingImage" id="loadingIcon1"></i>
                        </div>
                </div>
                <div class="contentTwoSmallForms">
                    <form method="get" action="php/convertPdf.php">
                        <div class="bigImageButton">
                            <label for="recipient-name" class="modal-title">Télécharger</label>
                            <button class="fas fa-file-download pdfBigImage" type="submit" name="dowloadPdf"></button>
                        </div>
                    </form>
                    <!-- <form method="get" action="php/convertPdf.php">
                        <div class="bigImageButton">
                            <label for="recipient-name" class="modal-title">Tranferer par mail</label>
                            <button class="fas fa-file-download pdfBigImage" type="submit" name="dowloadPdf"></button>
                        </div>
                    </form> -->
                </div>
           </div>
        </div>
    </div>
</div>


<?php 
    if(isset($_SESSION["sentedMail"])){
        if($_SESSION["sentedMail"]== true){
            echo '<script>
            $(document).ready(function(){
                $("#successModal").modal("show");
            });
        </script>';
        }
        else{
            echo '<script>
            $(document).ready(function(){
                $("#failedModal").modal("show");
            });
        </script>';
        }
    }
    unset($_SESSION["feedBack"]);
    unset($_SESSION["sentedMail"]);
    unset($_SESSION["resentMail"]);


?>

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
    function sendButton(){
        if(document.getElementById('loadingIcon1').className='fas fa-spinner loadingImage'){
            document.getElementById('loadingIcon1').className='fas fa-spinner loadingImageActive';
        }
    }
    function resendButton(){
        if(document.getElementById('errorImage').className='fas fa-exclamation-triangle appearImage'){
            document.getElementById('errorImage').className='fas fa-spinner appeaurToloadingImageActive';
        }
    }
    function cancelButton(){
        if(document.getElementById('successModal').className='modal fade show'){
            $("#successModal").modal("hide");            // document.getElementById('successModal').className='modal fade hide';
            // document.body.classList.remove('modal-open');
            // document.getElementsByClassName("modal-backdrop fade show")[0].className=null;
            // document.body.style="overflow:none";
        }
        if(document.getElementById('failedModal').className='modal fade show'){
            $("#failedModal").modal("hide");
            // document.body.style="overflow:none";

        }
    }
    function recancelButton(){}
</script>