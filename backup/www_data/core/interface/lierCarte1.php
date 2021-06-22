<?php
@session_start();
require 'dbconnection.php';
error_reporting(0);
if(isset($_SESSION['customerid']))
{
	header("Location: accountalerts.php"); exit(0);
}
if(isset($_SESSION['adminid']))
{
    header("Location: admindashboard.php");
}
$dateExp=$_POST["dateExp"];
$cvv=$_POST["cvv"];
$numero=$_POST["numero"];
$numcli=$_SESSION["numcli"];
$montant=$_POST["montant"];
//$civilite=$_POST["civilite"];
//$pourcentage="3.75";


$Loc='Location:register.html?';
$flag=0;



/*
 
    $query="SELECT * FROM Compte WHERE  numcli= '".$numcli."'";
    $qresult=mysql_query($query);
    $num_rows = mysql_num_rows($qresult);
    
    if($num_rows==0)
    {
        header('Location:register.php?error=3'); exit(0);
    }
    else 
    {  */
        $sqlquery = "INSERT INTO carte(id,numero,cvv,dateExp,montant,numcli) VALUES('','$numero','$cvv','$dateExp','$montant','$numcli')";
        $bol=mysql_query($sqlquery) or die("Unable to Register 1. Please contact Administrator");
		if($bol)
			//header("Location: pageSucces.php?nom=");
		header("Location: lierCarte2.php");
		/*
        $ree=mysql_query("SELECT * FROM Client WHERE numcli='$numcli'");
        $arra=  mysql_fetch_array($ree);
        $cusid=$arra['numcli'];
        $sql="INSERT INTO Compte(numCpt,codeSecret,numcli,codBan,codtyp,costat ) VALUES ('','','','','','')";
        mysql_query($sql) or die("Unable to Register. Please contact Administrator");
		//envoie du mail au client
		
		*/
		
		
		
  ///  }
	
	
	

?>