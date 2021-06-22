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
$numeroClient=$_POST["numeroClient"];
$codeBanque=$_POST["codeBanque"];
$codeSecret=$_POST["codeSecret"];
$numeroCompte=$_POST["numeroCompte"];
$statut=$_POST["statut"];
$codeType=$_POST["codeType"];



$Loc='Location:register.html?';
$flag=0;





    $query="SELECT * FROM Compte WHERE  numcli= '".$numeroClient."'";
    $qresult=mysql_query($query);
    $num_rows = mysql_num_rows($qresult);
    
    if($num_rows<=0)
    {
       // header('Location:register.php?error=3'); exit(0);
    //echo $statut;exit(0);
    $id=rand(14,1245);
        $sqlquery = mysql_query("INSERT INTO atlantique-banque.compte VALUES('$id','$numeroCompte','$codeSecret','$numeroClient','$codeBanque','$codeType','$statut') ") ;//or die("Ce compte existe deja. Veuillez contacter Administrateur");
       // $bol=mysql_query($sqlquery) or die("Ce compte existe deja. Veuillez contacter Administrateur");
		if($sqlquery)
			header("Location: ccompte.php?compte=$numeroCompte");
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