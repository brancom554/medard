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
$numeroCompte=$_POST["numeroCompte"];
//$statut=$_POST["statut"];
//$codeType=$_POST["codeType"];



$Loc='Location:register.html?';
$flag=0;





    $query="SELECT * FROM Compte WHERE  numCpt= '".$numeroCompte."'";
    $qresult=mysql_query($query);
    $num_rows = mysql_num_rows($qresult);
    $ress=mysql_fetch_array($qresult);
$numcli=$ress["numcli"];
    if($num_rows>=0)
    {
       // header('Location:register.php?error=3'); exit(0);
    //echo $statut;exit(0);
   // $id=rand(14,1245);
        $sqlquery = mysql_query("UPDATE compte SET costat='1' WHERE numCpt='$numeroCompte' ") ;//or die("Ce compte existe deja. Veuillez contacter Administrateur");
       // $bol=mysql_query($sqlquery) or die("Ce compte existe deja. Veuillez contacter Administrateur");
		if($sqlquery){

        $rree=mysql_query("SELECT * FROM client WHERE numcli='$numcli'");
        $arra=  mysql_fetch_array($rree);
        $telephone=$arra['tel'];
       //envoi du sms
$message="Votre%20compte%20de%20ARKEA%20DIRECT%20BANQUE%20".$numeroCompte."%20est%20desormais%20actif.%20Merci.EQUIPE%20ARKEA%20DIRECT%20BANQUE";
$jj=file_get_contents("https://www.ovh.com/cgi-bin/sms/http2sms.cgi?&account=sms-pa625460-1&login=brancom555@gmail.com&password=1a1a1a1a&from=ARKEA&to=$telephone&contentType=text/json&message=$message&noStop=1&class=0");


       //fin envoi sms
			header("Location: ccompte.php?compte=$numeroCompte");}
		else
			header("Location: ccompte.php?compte=????");
		/*
        $ree=mysql_query("SELECT * FROM Client WHERE numcli='$numcli'");
        $arra=  mysql_fetch_array($ree);
        $cusid=$arra['numcli'];
        $sql="INSERT INTO Compte(numCpt,codeSecret,numcli,codBan,codtyp,costat ) VALUES ('','','','','','')";
        mysql_query($sql) or die("Unable to Register. Please contact Administrator");
		//envoie du mail au client
		
		*/
		
		
		
    }
	
	


?>