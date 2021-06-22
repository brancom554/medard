<?php
session_start();
require "dbconnection.php";
$montant=$_SESSION['solde'];
$numcli=$_SESSION['numcli'];
//$pourcentage=$_SESSION["pourcentage"];
//charge le pourcentage depuis la base de donnees
$query=mysql_query("select pourcentage from client where numcli='$numcli' ");
   $query1=mysql_fetch_array($query);
   $pourcentage=$query1["pourcentage"];
//si c bon, redirection vers chargementtransfert2.php	
	

//$pour=$_GET["pourc"];
?>

<?php
include("header.php");
$montantt = $_SESSION["montantVirement"];
?>

	
<!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                                                    <a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Tableau de bord</a>
                            <span class="breadcrumb-item active"></span>
                                            </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>
            </div>
        </div>
        <!-- /page header -->

        
        <!-- Content area -->
        <div class="content">
						 <!--link href="css/marioCss.css" rel ="stylesheet"-->
      <!--script src="js/mariojs1.js"></script>
      <script src="js/mariojs2.js"></script-->
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     
      <style>
         .ui-widget-header {
            background: #32CD32;
            border: 1px solid #DDDDDD;
            color: #333333;
            font-weight: bold;
         }
         .progress-label {
            position: absolute;
            text-color: black;
            left: 50%;
            top: 13px;
            font-weight: bold;
            text-shadow: 1px 1px 0 #fff;
         }
      </style>
      
      <script>
      /*
      
        $(document).ready(function() {
            var progressbar = $( "#progressbar-5" );
            progressLabel = $( ".progress-label" );
            $( "#progressbar-5" ).progressbar({
               value: false,
               change: function() {
                  progressLabel.text( 
                     progressbar.progressbar( "value" ) + "%" );
               },
               complete: function() {
                  progressLabel.text( "ERREUR DE TRANSFERT !!!" );
               }
            });
            function progress() {
				var val1='<?php echo $pourcentage;?>';
               var val = progressbar.progressbar( "value" ) || 0;
               progressbar.progressbar( "value", val + 1 );
			   
               if ( val < val1 ) {
                  setTimeout( progress, 100 );
				  //afficher formulaire
				  //alert("salut");
				  //fin affiche
               }else{
				   //setTimeout( progress, 100 );
				  //afficher formulaire
				  alert("ERREUR DE TRANSFERT!! VEUILLEZ CONTACTER VOTRE GESTIONNAIRE POUR IDENTIFICATION");
				  //fin affiche
				 /// $('#mtant').show();
				  ///$('#form_virement').show();
				  $( "#form_virement" ).slideUp( 300 ).delay( 800 ).fadeIn( 400 );
                  $( "#mtant" ).slideUp( 300 ).fadeIn( 400 );
			   }
            }
          ///  setTimeout( progress, 3000 );
            setTimeout( progress, 100 );
         });
         
         */
      </script>
      
      
      <div id="mtant" style="color:red;display:none;margin-left: 100px;">
           <p align="center">
            <?php 
           echo "<h3>Montant en cours de transfert : ".$_SESSION['solde']."</h3><br><h4>Les frais à payer sont de : ".$montantt." € </h4>";
                       ?>
              </p>
         </div>
      
<!--div id="progressbar-5">
         <div class="progress-label" style="color:red">
            Virement en cours...

         </div>
      </div-->
      <div style="margin-left: 90px;width: 50%;">
          CHARGEMENT EN COURS. VEUILLEZ PATIENTER S'IL VOUS PLAIT<br><br>
      <div id="myProgress">
        <div id="myBar"></div>
       </div>
      </div>
       <br><br><br>

      <center>
						
							<div id="monFormulaire" style="display:none;margin-left: 100px;">
							<form id="form_virement" action="recharge2.php" method="post" name=""  class="" scrolltop="0" scrollleft="0" style="display: block; width: auto;float:center;display:; min-height: 0px; height: auto;border:0 blue solid;text-align:left" margin:auto>
<fieldset style="min-width:438px;width:438px;background:AliceBlue;border-radius:10px;padding-bottom:;border:0px #6495ed solid">
<legend style="font-size:12px;background:#e6e6e6;color:red;font-weight:bold"><center>CONTROLE D'IDENTIFICATION .COMMUNIQUEZ AVEC VOTRE ADMINISTRATEUR DE COMPTES POUR AVOIR LE CODE D'ACTIVATION!</center> </legend>
<table style="width:300px">
<tr style="width:300px">
<td style="width:100px"><label>Code d'activation 
</label></td>
<td style="width:100px"><input type="text" placeholder="Entrer le code" name="code"/></td>
</tr>

<tr style="width:300px"><td style="width:200px">
</td>
<td style="width:100px"><input type="submit" id="virExterne" value="SOUMETTRE" name="Envoyer"/></td>
</tr>
</table>
</fieldset>
</form>
</div>
 </center>
 
 </div>
 
 <?php
include("footer.php");

?>


