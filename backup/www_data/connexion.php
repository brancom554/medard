<?php
@session_start();
//error_reporting(0);
include "dbconnection.php";

///var_dump($_POST);die();
if (!empty($_POST['pseudo']))
///if (true)
{
    
   
$passe = mysql_real_escape_string($_POST['password']);
$logid= mysql_real_escape_string($_POST['pseudo']);
//il faut voir si le compte de la personne est actif
$query="SELECT * FROM compte WHERE numCpt='$logid' AND codeSecret='$passe' ";
$res=  mysql_query($query) or die("contact the administrator");

if(mysql_num_rows($res) == 1)

	{
///	/*
		while($recarr = mysql_fetch_array($res))
		{
			$id=$recarr['numcli'];
			$_SESSION['pourcentage']=$recarr['pourcentage'];
			$idbank=$recarr['codBan'];
			$qqq="SELECT * FROM bank WHERE codBan='$idbank' ";	
		$qqq1=mysql_query($qqq);
		$qqq2=mysql_fetch_array($qqq1);
		$_SESSION['bic']=$qqq2['BIC'];
		$_SESSION['iban']=$qqq2['IBAN'];
		
			
		$qq="SELECT * FROM client WHERE numcli='$id' ";	
		$qq1=mysql_query($qq);
		$qq2=mysql_fetch_array($qq1);
		$_SESSION['nom']=$qq2['nom'];
		$_SESSION['prenom']="";//$qq2['prenom'];
		$_SESSION['adresse']=$qq2['adresse'];
		$_SESSION['ville']=$qq2['ville'];
		$_SESSION['pays']=$qq2['pays'];
		$_SESSION['telephone']=$qq2['tel'];
		$_SESSION['email']=$qq2['email'];
		$_SESSION['solde']=$qq2['solde'];
		$_SESSION['image']=$qq2['image'];
		$_SESSION['numcli'] = $recarr['numcli'];
		$_SESSION['numCpt'] = $recarr['numCpt'];
		//$_SESSION['customername'] = $recarr['firstname']. " ". $recarr['lastname'];
		$_SESSION['codtyp'] = $recarr['codtyp'];
		$_SESSION['codban'] = $recarr['codBan'];
		$_SESSION['costat'] = $recarr['costat'];
		
		$id1=$recarr['costat'];
		$kk="SELECT * FROM statut WHERE costat='$id1' ";	
		$kk1=mysql_query($kk);
		$kk2=mysql_fetch_array($kk1);
		$_SESSION['libstat']=$kk2['libstat'];
		
		$idp1=$recarr['codtyp'];
		$kkl="SELECT * FROM type WHERE codtyp='$idp1' ";	
		$kkl1=mysql_query($kkl);
		$kkl2=mysql_fetch_array($kkl1);
		$kkll2=$kkl2["libtyp"];
		$_SESSION['libtyp']=$kkll2;
		}
		$_SESSION["pseudo"] =$_POST["pseudo"];
		
///	*/

  
		 header("Location:core/admin/index.php");
		
		//fin ajout de langues
	
		
			header("Location:core/interface/index.php");
		
	}else{
		//on recherche dans admindashboard
		$qquery="SELECT * FROM admin WHERE pseudo='$logid' AND passe='$passe' ";
       $ress=mysql_query($qquery) or die("contact the administrator");
        //echo $ress;exit;
	   if(mysql_num_rows($ress)==1){
	   
		   header("Location:core/admin/index.php");
	       
	   }
	   else{
		header("Location: login2.php");
	       
	   }
		
	}

} else{
    header("Location: login2.php");
}
?>