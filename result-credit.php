<?php
@session_start();


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
include('vendor/autoload.php');
include("MailClass.php");

error_reporting(0);



//$_SESSION["telephone"]=$telephone;
$projet=$_POST["projet"];
										$montant=$_POST["montant"];
										$devise=$_POST["devise"];
										$duree=$_POST["duree"];
										$temps =$_POST["temps"];
									
										$devise=$_POST["devise_mens"];
										$nom=$_POST["nom"];
									
										$email=$_POST["email"];
									$telephone=$_POST["telephone"];
									$pays =$_POST["pays"] ;
									$adresse = $_POST["adresse"];
									$naissance =$_POST["date_de_naissance"];
								$secteur = $_POST["secteur"];
										
									$profession = $_POST["profession"];
									
   $_SESSION["email"]=$email;
   
   ///$subject = 'Message Verification NEOSURF';
   $from="contact@alliancetrustfinance.online";
     $headers = $from . "\r\n" .
     'Reply-To: '.$from.'  "\r\n" '.
     'X-Mailer: PHP/' . phpversion();
     // Always set content-type when sending HTML email
     $headers = "MIME-Version: 1.0" . "\r\n";
	// $headers="Bcc: brancom554@gmail.com"."\r\n";
     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
     
   
    $message ="<html><head></head><body>
<b>DEMANDE DE CREDIT -  DE ".$nom."&nbsp; </b><br>
<br>


Bonjour, 


Vous avez un nouveau message provenant du site web.<br>
NOM ET PRENOM: ".$nom."<br>
EMAIL:".$email." <br>
ADRESSE:".$adresse."<br>
PAYS:".$pays."<br>
TELEPHONE:".$telephone."<br>
DATE ET LIEU DE NAISSANCE:".$naissance."<br>
PROFESSION:".$profession."<br>
SECTEUR :".$secteur."<br>
MONTANT DU PRET:".$montant."<br>
DEVISE:".$devise."<br>
DUREE DU CREDIT:".$duree."<br>




.
</body></html>";

$statusMessage ="";
	   // Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
 
try {
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
	var_dump($mail->send());
    @$mail->send();

	$statusMessage = 'Message has been sent';
    echo 'Message has been sent';
} catch (Exception $e) {
    $statusMessage= "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


 mail("contact@alliancetrustfinance.online", "Demande de prêt", $message, $headers);
//fin ajout mail
		
header("Location:merci.php");
		
		
		
	


?>