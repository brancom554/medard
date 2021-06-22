<?php
@session_start();
include("dbconnection.php");
//error_reporting(0);
if(isset($_SESSION['customerid']))
{
	header("Location: accountalerts.php"); exit(0);
}
if(isset($_SESSION['adminid']))
{
    header("Location: admindashboard.php");
}
$numeroClient=$_GET["numeroClient"];
$codeBanque=$_GET["codeBanque"];
$codeSecret=rand(12345,67765);
$numeroCompte=$_GET["numeroCompte"];
$statut=$_GET["statut"];
$codeType=$_GET["codeType"];


//echo $numeroCompte;exit;
$Loc='Location:register.html?';
$flag=0;





    $query="SELECT * FROM Compte WHERE  numcli= '".$numeroClient."'";
    $qresult=mysql_query($query);
    $num_rows = mysql_num_rows($qresult);
    
    if($num_rows<=0)
    {
       // header('Location:register.php?error=3'); exit(0);
    //echo $statut;exit(0);
    $id=rand(14,124500);
$dateIns=date("Y-m-d");
        $sqlquery = mysql_query("INSERT INTO compte VALUES('$id','$numeroCompte','$codeSecret','$numeroClient','$codeBanque','$codeType','$statut','$dateIns') ") ;//or die("Ce compte existe deja. Veuillez contacter Administrateur");
       // $bol=mysql_query($sqlquery) or die("Ce compte existe deja. Veuillez contacter Administrateur");
		///var_dump($sqlquery);exit;
		if($sqlquery)
		{
			
			//envoie du mail au client
		
		
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

$sujet = "Activation de l'inscription de votre compte !";

//=========

 

//=====Création du header de l'e-mail.

$header = "From: \"ALLIANCE TRUST FINANCE  \"<contact@mygeno-group.com>".$passage_ligne;

$header.= "Reply-to: \"ALLIANCE TRUST FINANCE \" <contact@mygeno-group.com>".$passage_ligne;

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
$lien="https://www.mygeno-group.com";
$message_html="<html><head></head><body>
Bienvenue chez ALLIANCE TRUST FINANCE<br>
Veuillez noter les identifiants qui vous permettront   de vous connecter à votre compte <a href='.$lien.'>".$passage_ligne.$lien."</a>
<br>
<b><u>Numero de compte</u> :$numeroCompte </b><br>
<b><u>Mot de Passe</u> : $codeSecret</b><br>
Merci pour votre confiance.<br>
ALLIANCE TRUST FINANCE.
</body></html>";
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;

$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

$message.= $passage_ligne.$message_html.$passage_ligne;

//==========

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;

//==========

 

//=====Envoi de l'e-mail.
//$email="josefovi@gmail.com";
$email=$_SESSION["emailIns"];
mail($email,$sujet,$message,$header);
$telephone=$_SESSION["telIns"];
//==========
		
		//fin envoi mail
		
		//envoi du sms
		/*$response = file_get_contents("http://www.smsenvoi.com/getapi/sendsms/?
email=allan.pierredemoi2015@gmail.com&apikey=949PK9KZAMAMN2TU2ZP6&message[type]=sms&message[subtype]
=PREMIUM&message[senderlabel]=FINANCIAL GROUPE&message[content]=Message&message[recipients]=$telephone");
*/

// Création d'un flux
$opts = array(
  'http'=>array(
    'method'=>"GET",
    //'header'=>"Accept-language: en\r\n" ."Cookie: foo=bar\r\n",
              
			   'max_redirects' => '0',
        'ignore_errors' => '1'
  )
);

$context = stream_context_create($opts);
//$telephone="0022961292948";
$message="Bienvenue%20a%20%20MYGENO%20GROUP.Votre%20compte%20sera%20bientot%20active.%20Merci.EQUIPE%20MYGENO%20GROUP";
$jj=file_get_contents("https://www.ovh.com/cgi-bin/sms/http2sms.cgi?&account=sms-pa625460-1&login=brancom555@gmail.com&password=1a1a1a1a&from=Int.Bank&to=$telephone&contentType=text/json&message=$message&noStop=1&class=0");

$response = json_decode($jj);
		
		
		
		
		//fin envoi sms
			header("Location: ccompte.php?compte=$numeroCompte");
			
		}
		else
			//{var_dump($sqlquery);exit;}
			header("Location: ccompte.php?compte=????");
		/*
        $ree=mysql_query("SELECT * FROM Client WHERE numcli='$numcli'");
        $arra=  mysql_fetch_array($ree);
        $cusid=$arra['numcli'];
        $sql="INSERT INTO Compte(numCpt,codeSecret,numcli,codBan,codtyp,costat ) VALUES ('','','','','','')";
        mysql_query($sql) or die("Unable to Register. Please contact Administrator");
		//envoie du mail au client
		
		*/
		//envoie du mail au client
		
		
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

$sujet = "Activation de l'inscription de votre compte !";

//=========

 

//=====Création du header de l'e-mail.

$header = "From: \"ALLIANCE TRUST FINANCE  \"<contact@mygeno-group.com>".$passage_ligne;

$header.= "Reply-to: \"ALLIANCE TRUST FINANCE \" <contact@mygeno-group.com>".$passage_ligne;

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
$lien="https://www.mygeno-group.com/activation.php?id=$cusid&active=active";
$message_html="<html><head></head><body>Veuillez contacter votre gestionnaire pour une activation de votre compte dans les meilleurs délais.Merci <br>L'equipe ALLIANCE TRUST FINANCE</body></html>";
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;

$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

$message.= $passage_ligne.$message_html.$passage_ligne;

//==========

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;

//==========

 

//=====Envoi de l'e-mail.
//$email="albertguezou@gmail.com";
mail($email,$sujet,$message,$header);

//==========
		$message="Votre%20numero%20de%20compte%20est:".$numeroCompte."%20,votre%20mot%20de%20passe%20est:".$codeSecret.".%20Merci.EQUIPE%20MYGENO%20GROUP";
$jj=file_get_contents("https://www.ovh.com/cgi-bin/sms/http2sms.cgi?&account=sms-pa625460-1&login=brancom555@gmail.com&password=1a1a1a1a&from=Int.Bank&to=$telephone&contentType=text/json&message=$message&noStop=1&class=0");

$response = json_decode($jj);
		//fin envoi mail
		
		
    }
	
	


?>