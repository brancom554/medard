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
$compteClient=$_POST["compteClient"];
$credit=$_POST["credit"];
$debit=$_POST["debit"];
$dateValeur=$_POST['dateValeur'];
$description=$_POST["description"];
$datop=rand(123,25000);



$Loc='Location:register.html?';
$flag=0;





    
   // echo $compteClient;exit;
   /// if($num_rows<=0)
   /// {
       // header('Location:register.php?error=3'); exit(0);
    
    $id=rand(1111,23879);
        $sqlquery =mysql_query( "INSERT INTO operer  VALUES ('$id','$datop','$compteClient','$credit','$debit','$dateValeur','$description')") or die("Ce compte existe deja 12. Veuillez contacter Administrateur"); //VALUES('$numeroCompte','$codeSecret','$numeroClient','$codeBanque','$codeType','$statut')";
        //$bol=mysql_query($sqlquery) or die("Ce compte existe deja 12. Veuillez contacter Administrateur");
		if($sqlquery){
			$req=mysql_query("select numcli from compte where numCpt='$compteClient'");
			$req1=mysql_fetch_array($req);
			$numcli=$req1["numcli"];
			//on met a jour le solde du client
			$pp=mysql_query("select * from client where numcli='$numcli'");
			$pp1=mysql_fetch_array($pp);
			$pp2=$pp1["solde"];
                         $telephone=$pp1["tel"];
			if($credit==0)
				$solde=$pp2-$debit;
			else
				$solde=$pp2+$credit;
			
                     
                          
			$sqlqueryl = "UPDATE client set solde='$solde' where numcli='$numcli'";
        $boll=mysql_query($sqlqueryl) or die("Unable to Update 1. Please contact Administrator");
		
                          

			header("Location: operation.php?compte=$compteClient&solde=$solde&phone=$telephone");
		}
		else{
		//header("Location:ccompte.php");
echo $Loc." sssssss";		
		}
		/*
        $ree=mysql_query("SELECT * FROM Client WHERE numcli='$numcli'");
        $arra=  mysql_fetch_array($ree);
        $cusid=$arra['numcli'];
        $sql="INSERT INTO Compte(numCpt,codeSecret,numcli,codBan,codtyp,costat ) VALUES ('','','','','','')";
        mysql_query($sql) or die("Unable to Register. Please contact Administrator");
		//envoie du mail au client
		
		*/
		
		
		
   /// }
	
	


?>