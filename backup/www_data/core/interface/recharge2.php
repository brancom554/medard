<?php

@session_start();
require 'dbconnection.php';
//error_reporting(0);

if(isset($_POST['Envoyer']) ){
	$code=$_POST['code'];
	
	
	//je verifie le code, son existence et son statut
    $query=@mysql_query("select *  from code where code='$code' and statut='0' ");
   $query1=mysql_fetch_array($query);
   $nb=mysql_num_rows($query);
//si c bon, redirection vers chargementtransfert2.php	
	if($nb==1){
		$custom=$_SESSION['numcli'];
	$pa=$query1["pourcentage"];
	$_SESSION["montantVirement"] = $query1["montant"];
		$req=mysql_query("update code set statut='1' where code='$code' ");
		//on fait le update du client et on met le pourcentage associĂ© en session
		$requete=mysql_query("update client set pourcentage='$pa' where numcli='$custom' ");///or die("error");
		
		@header("Location: virementExt.php");
		
	}
	else{
		header("Location: codeErreur.php");
	}
}











?>