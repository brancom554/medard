<?php
@session_start();
if(!($_SESSION["pseudo"]))
{
		//@header("Location: ../index.html");
}
require "dbconnection.php";
@$montant=$_SESSION['solde'];

@$id=$_SESSION['numcli'];
@$numcli=$_SESSION['numcli'];
//charge le pourcentage depuis la base de donnees
$query=mysql_query("select pourcentage from client where numcli='$numcli' ");
   $query1=mysql_fetch_array($query);
   $pourcentage=$query1["pourcentage"];
//si c bon, redirection vers chargementtransfert2.php	

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon.png" rel="icon" />
<title>MYGENO-GROUP - ESPACE CLIENT</title>
<meta name="description" content="MYGENO-GROUP.">
<meta name="author" content="Mario B">

<!-- Web Fonts
============================================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i' type='text/css'>

<!-- Stylesheet
============================================= -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="vendor/currency-flags/css/currency-flags.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/css/bootstrap-select.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css" />

<!-- Colors Css -->
<link id="color-switcher" type="text/css" rel="stylesheet" href="#" />


  
	 <!-- Neew add -->
      
     <style>
#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 1%;
  height: 30px;
  background-color: #4CAF50;
}
</style>
	
	<script>
	//Pour masquer la division :
//var formulaire = document.getElementById("form_virement");
//formulaire.style.display = none;
//document.getElementById("mtant").style.display = none;
	
	var variableRecuperee = '<?php echo $pourcentage; ?>';
var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 400);
    function frame() {
      if (width >= variableRecuperee) {
        clearInterval(id);
        i = 0;
        document.getElementById("mtant").style.display = "";
        document.getElementById("monFormulaire").style.display = "";
        
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}
</script>
</head>
<body onload="move();">

<!-- Preloader -->
<div id="preloader">
  <div data-loader="dual-ring"></div>
</div>
<!-- Preloader End --> 

<!-- Document Wrapper   
============================================= -->
<div id="main-wrapper"> 
  <!-- Header
  ============================================= -->
  <header id="header">
    <div class="container">
      <div class="header-row">
        <div class="header-column justify-content-start"> 
          <!-- Logo
          ============================= -->
          <div class="logo"> <a class="d-flex" href="dashboard.php" title="IINBNK-GROUP"><img src="images/logo.png" alt="Payyed"  /></a> </div>
          <!-- Logo end --> 
          <!-- Collapse Button
          ============================== -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"> <span></span> <span></span> <span></span> </button>
          <!-- Collapse Button end --> 
          
          <!-- Primary Navigation
          ============================== -->
          <nav class="primary-menu navbar navbar-expand-lg">
            <div id="header-nav" class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
                <li class="active"><a href="dashboard.php">Dashboard</a></li>
                <li><a href="transactions.php">Transactions</a></li>
                 <li><a class="dropdown-item" href="settings-profile.php">Mon profil</a></li>
                              <li><a class="dropdown-item" href="settings-security.php">Securite</a></li>
                              <li><a class="dropdown-item" href="settings-payment-methods.php">Methodes de paiement</a></li>
               
             
			  
			  </ul>
            </div>
          </nav>
          <!-- Primary Navigation end --> 
        </div>
        <div class="header-column justify-content-end"> 
          <!-- My Profile
          ============================== -->
          
<style type="text/css">
<pre><code>.goog-te-banner-frame{
    display: none!important;
}
		.goog-te-banner-frame{
			display: none!important;
		}
		body{
			position: static!important;
			min-height: initial!important;
		}
	</style> 
          <script type="text/javascript">
            function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: '', includedLanguages: 'fr,en,pt,de,es,nl,it'}, 'google_translate_element');
          }
          </script>
          <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
          <nav class="login-signup navbar navbar-expand">
            <ul class="navbar-nav">
              <li class="dropdown language"> <a class="dropdown-toggle" href="#">LANGUE</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:void()"  onclick="window.location.hash='#googtrans(en)';location.reload();">English</a></li>
                  <li><a class="dropdown-item" href="javascript:void()"  onclick="window.location.hash='#googtrans(fr)';location.reload();">French</a></li>
                  <li><a class="dropdown-item" href="javascript:void()"  onclick="window.location.hash='#googtrans(pt)';location.reload();">Portugues</a></li>
                  <li><a class="dropdown-item"href="javascript:void()"  onclick="window.location.hash='#googtrans(de)';location.reload();">Deutche</a></li>
                  <li><a class="dropdown-item" href="javascript:void()"  onclick="window.location.hash='#googtrans(es)';location.reload();">Spain</a></li>
                  <li><a class="dropdown-item" href="javascript:void()"  onclick="window.location.hash='#googtrans(it)';location.reload();">Italian</a></li>
                </ul>
              </li>
              
              <li class="dropdown profile ml-2"> <a class="px-0 dropdown-toggle" href="#"><img class="rounded-circle" src="<?php echo $_SESSION['image']?>" width="75" height="75" alt=""></a>
                <ul class="dropdown-menu">
                  <li class="text-center text-3 py-2"><?php echo $_SESSION["nom"].'&nbsp;&nbsp;'.$_SESSION["prenom"];?></li>
                  <li class="dropdown-divider mx-n3"></li>
                  <li><a class="dropdown-item" href="settings-profile.php"><i class="fas fa-user"></i>Mon profil</a></li>
                  <li><a class="dropdown-item" href="settings-security.php"><i class="fas fa-shield-alt"></i>Securite</a></li>
                  <li><a class="dropdown-item" href="settings-payment-methods.php"><i class="fas fa-credit-card"></i>Methodes de paiement</a></li>

                  <li class="dropdown-divider mx-n3"></li>
                 
                  <li><a class="dropdown-item" href="deconnexion.php"><i class="fas fa-sign-out-alt"></i>Deconnexion</a></li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- My Profile end --> 
        </div>
      </div>
    </div>
  </header>
  <!-- Header End --> 
  