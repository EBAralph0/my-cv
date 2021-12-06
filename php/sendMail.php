<?php 
//Load Composer's autoloader
require_once '../vendor/autoload.php';

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

if(isset($_GET['sendEmailButton'])){
$emailDestination=$_GET['receptionEmail'];

//declare personal var
$myEmail = 'edracresurek@gmail.com';
$myPassword='Azerter1?';
$myName='Ralph Eba';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

try {
    //Server settings
    $mail->SMTPDebug  = 1;
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 25;
    $mail->Username   = $myEmail;                     //SMTP username
    $mail->Password   = $myPassword;                               //SMTP password
    //$mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );
      

    //Recipients eand content
    $mail->IsHTML(true);
    $mail->AddAddress($emailDestination,$myName);
    $mail->SetFrom($myEmail,$myName);
    //$mail->AddReplyTo("reply-to-".$emailDestination);
    //$mail->AddCC("cc-recipient-".$emailDestination);
    $mail->Subject = "Curriculum Vitae de - EBA DJON Ralph";
    $content = '<b>Thi s is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>';

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    

    $mail->MsgHTML($content); 
        if(!$mail->Send()) {
        echo "Error while sending Email.";
        } else {
        echo "Email sent successfully";
        }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}
else{echo 'WHAT THE HECK ARE YOU LOOKING HERE FOR ???';}
?>