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
$pourcentage=$_POST["pourcentage"];
$code=$_POST["code"];
///$telephone=$_POST["telephone"];
$numcli=$_SESSION['numcli'];
///$numcli=$_POST['nom'];
//$email=$_POST["email"];

    $query="SELECT * FROM compte WHERE  numcli= '".$numcli."'";
    $qresult=mysql_query($query);
    $num_rows = mysql_num_rows($qresult);
    
    if($num_rows>0)
    {
        //header('Location:register.php?error=3'); exit(0);
    
        $sqlquery = "UPDATE compte set codeSecret='$code' where numcli='$numcli'";
        $bol=mysql_query($sqlquery) ;//or die("Unable to Update 1. Please contact Administrator");
		if($bol)
			header("Location: settings-profile.php");
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