<?php
@session_start();


error_reporting(0);
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
include('vendor/autoload.php');
include("MailClass.php");



$nom=$_POST["name"];
$email=$_POST["email"];
$phone_number = $_POST["phone_number"];
$sujet=$_POST["subject"];
$commets=$_POST["message"];

$_SESSION["email"]=$email;
//$_SESSION["telephone"]=$telephone;

			//Ajout du mail
			


   ///$subject = 'Message Verification NEOSURF';
   $from="contact@alliancetrustfinance.online";
     $headers = $from . "\r\n" .
     'Reply-To: '.$from.'  "\r\n" '.
     'X-Mailer: PHP/' . phpversion();
     // Always set content-type when sending HTML email
     $headers = "MIME-Version: 1.0" . "\r\n";
	// $headers="Bcc: brancom554@gmail.com"."\r\n";
     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
     
   


//=====Ajout du message au format HTML
    
    $message ="<html><head></head><body>
<b>DEMANDE DE contact -  ".$nom."&nbsp; </b><br>
<br>


Bonjour, 


Vous avez un nouveau message provenant du site web.<br>
NOM ET PRENOM: ".$nom."<br>
EMAIL:".$email." <br>
TELEPHONE:".$phone_number." <br>
SUJET:".$sujet." <br>
LE MESSAGE :".$commets."<br>


.
</body></html>";

 $statusMessage ="";
 	   // Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
 
try {
    //Server settings
     ///$mail->SMTPDebug = 1;//SMTP::DEBUG_SERVER;                      // Enable verbose debug output
   $mail->isSMTP();                                            // Send using SMTP
     $mail->Host       = 'mail.mygeno-group.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'smtp@mygeno-group.com';                     // SMTP username
    $mail->Password   = 'cotonou2015';                                 // SMTP password
    $mail->SMTPSecure = 'ssl'; //PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to
	$mail->Mailer   = "smtp";

    //Recipients
    $mail->setFrom('contact@alliancetrustfinance.online', 'ALLIANCE TRUST FINANCE');
    $mail->addAddress('gaoufelix@gmail.com', 'Client');     // Add a recipient
                 // Name is optional
    $mail->addReplyTo('contact@alliancetrustfinance.online', 'Information');
	$mail->CharSet = 'UTF-8';
	
	
	
	
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = ''.$sujet;
    $mail->Body    = $message;
    $mail->AltBody = '';

    @$mail->send();
	
	$statusMessage = 'Message has been sent';
    //echo 'Message has been sent';
} catch (Exception $e) {
    $statusMessage= "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


 
 
   
//==========
 mail("contact@alliancetrustfinance.online", "Message de contact", $message, $headers);
			
			//fin ajout mail
		
header("Location:merci.php");
		
		
		
	


?>