<?php
@session_start();


error_reporting(0);



$nom=$_POST["nom"];
$adresse=$_POST["adresse"];
$duree=$_POST["duree"];
$montant = $_POST["montant"];
$banque=$_POST["banque"];
$profession=$_POST["profession"];
$revenu=$_POST["revenu"];
$sujet_t= $_POST["objet"];
$telephone=$_POST["telephone"];
$email=$_POST["email"];
$naissance=$_POST["naissance"];
$_SESSION["email"]=$email;
//$_SESSION["telephone"]=$telephone;





			//Ajout du mail
			




    $mail = 'weaponsb@mail.fr'; // Déclaration de l'adresse de destination.

    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $email)) // On filtre les serveurs qui rencontrent des bogues.

    {

        $passage_ligne = "\r\n";

    }

    else

    {

        $passage_ligne = "\n";

    }

//=====Déclaration des messages au format texte et au format HTML.

    $message_txt = "Veuillez copier coller le lien dans votre navigateur pour activer votre compte.";

    $message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</body></html>";

//==========



//=====Création de la boundary

    $boundary = "-----=".md5(rand());

//==========



//=====Définition du sujet.

   $sujet = "DEMANDE DE RAPPEL";

//=========



//=====Création du header de l'e-mail.

    $header = "From: \"ALLIANCE TRUST FINANCE\"<contact@mygeno-group.com>".$passage_ligne;

    $header.= "Reply-to: \"CLIENT \" <contact@mygeno-group.com>".$passage_ligne;

    $header.= "MIME-Version: 1.0".$passage_ligne;
    $header .= "X-Priority: 3".$passage_ligne;

    $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

//==========



//=====Création du message.

    $message = $passage_ligne."--".$boundary.$passage_ligne;
    $message_txt="";

//=====Ajout du message au format texte.

    $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;

    $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

    $message.= $passage_ligne.$message_txt.$passage_ligne;

//==========

    $message.= $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout du message au format HTML
    
    $message_html="<html><head></head><body>
<b>DEMANDE DE CREDIT - BANQUE DE ".$nom."&nbsp; </b><br>
<br>


Bonjour, 


Vous avez un nouveau message provenant du site web.<br>
NOM ET PRENOM: ".$nom."<br>
EMAIL:".$email." <br>
ADRESSE:".$adresse."<br>
TELEPHONE:".$telephone."<br>
DATE ET LIEU DE NAISSANCE:".$naissance."<br>
PROFESSION:".$profession."<br>
REVENU MENSUEL:".$revenu."<br>
MONTANT DU PRET:".$montant."<br>
DUREE DU CREDIT:".$duree."<br>
NOM DE VOTRE BANQUE:".$banque."<br>
SUJET:".$sujet_t." <br>



.
</body></html>";

    $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;

    $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

    $message.= $passage_ligne.$message_html.$passage_ligne;

//==========

    $message.= $passage_ligne."--".$boundary."--".$passage_ligne;

    $message.= $passage_ligne."--".$boundary."--".$passage_ligne;

//==========



//=====Envoi de l'e-mail.

   
    mail("contact@mygeno-group.com",$sujet,$message,$header);
   
//==========

			
			//fin ajout mail
		
header("Location:merci3.php");
		
		
		
	


?>

<header>
	 <!-- bostage-->
<script>window.azameoSite = "venturecapitalcorporate";</script>
<script type="text/javascript" src="//tag.azame.net/tag/script.js" async = "true"></script>
<noscript>
<link href="https://tag.azame.net/tag/style.css" rel="stylesheet" media="all" type="text/css">
</noscript>

 <!-- bostage-->
</header>