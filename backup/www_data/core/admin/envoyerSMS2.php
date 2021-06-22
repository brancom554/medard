<?php
require 'dbconnection.php';
//error_reporting(0);
if(isset($_SESSION['customerid']))
{
	header("Location: accountalerts.php"); exit(0);
}
if(isset($_SESSION['adminid']))
{
    header("Location: admindashboard.php");
}
//$numeroClient=$_POST["numeroClient"];
//$codeBanque=$_POST["codeBanque"];
//$codeSecret=$_POST["codeSecret"];
$numeroTelephone=$_POST["numeroTelephone"];
$message1=$_POST["message"];
//$codeType=$_POST["codeType"];



$Loc='Location:register.html?';
$flag=0;

echo $message1;
echo $numeroTelephone;

//on va remplacer les espaces par %20

   
    
     
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
       //envoi du sms
//$message="Votre%20compte%20de%20ARKEA%20DIRECTBANQUE%20".$numeroCompte."%20est%20desormais%20actif.%20Merci";
 $message = str_replace(' ', '%20', "".$message1);
 echo '<br>'.$message;
$jj=file_get_contents("https://www.ovh.com/cgi-bin/sms/http2sms.cgi?&account=sms-pa625460-1&login=brancom555@gmail.com&password=1a1a1a1a&from=IINBK&to=$numeroTelephone&contentType=text/json&message=$message&noStop=1&class=0");
$response = json_decode($jj);
var_dump($response);
$stat = $response->status;

if($stat == 100)
$statut = "Message envoyé avec succes";
else
$statut = "Un probleme est survenu et le message n'a pas ete envoye.";
echo '<br>'.$statut;
       //fin envoi sms
			header("Location: envoyerSMS.php?statut=".$statut);
		
	
		
		
		
    
	
	


?>