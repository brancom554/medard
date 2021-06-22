<?php
require_once('../../stripe/init.php');
session_start();
include "dbconnection.php";
//$montant=$_SESSION['solde'];
//liste des payouts
\Stripe\Stripe::setApiKey("sk_live_MIORaVvjwYICMbFSiqJx4uW2");

$liste = \Stripe\Payout::all(["limit" => 3]);
 //var_dump($liste["data"]);EXIT;


?>


<?php
include("header.php");

?>


<!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Liste des virements effectués</h1>
                        </div>
					
						<div class="table-responsive">
						

				<style>
table {
border:2px solid #6495ed;
border-collapse:collapse;
width:98%;
margin:auto;
}
thead, tfoot {
background-color:#000000;
background-image:url('http://www.interbank.bnking.net/wp-content/uploads/2015/06/tab6.png') repeat;
border:1px solid #919eaf; 
}
tbody {
background-color:#FFFFFF;
border:1px solid #6495ed;
}
th {
font-family:monospace;
border:1px dotted #6495ed;
padding:5px;background-image:url('http://www.interbank.bnking.net/wp-content/uploads/2015/06/tab6.png') repeat;
background-color:#EFF6FF;
width:Auto;text-align:
}
td {
font-family:sans-serif;
font-size:80%;
border:1px solid #6495ed;
padding:5px;
text-align:left;
}
caption {
font-family:sans-serif;font-weight:bold;
}
button {
	-moz-box-shadow:inset -1px 1px 0px 0px #cbd1c6;
	-webkit-box-shadow:inset -1px 1px 0px 0px #cbd1c6;
	box-shadow:inset -1px 1px 0px 0px #cbd1c6;
	background-color:green;
	-webkit-border-top-left-radius:5px;
	-moz-border-radius-topleft:5px;
	border-top-left-radius:5px;
	-webkit-border-top-right-radius:5px;
	-moz-border-radius-topright:5px;
	border-top-right-radius:5px;
	-webkit-border-bottom-right-radius:5px;
	-moz-border-radius-bottomright:5px;
	border-bottom-right-radius:5px;
	-webkit-border-bottom-left-radius:5px;
	-moz-border-radius-bottomleft:5px;
	border-bottom-left-radius:5px;
	text-indent:0;
	border:1px solid #0d1401;
	display:inline-block;
	color:white;
	font-family:Arial;
	font-size:11.2px;
	font-weight:bold;
	font-style:normal;
	height:25px;
	line-height:25px;
	width:auto;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #689324;
}button:hover {;color:black;
	background-color:#F55C5F;
}button:active {
	position:relative;
	top:1px;
}
</style>
        <table summary="This table " class="table table-bordered table-hover">
          <caption style="color:black;" class="text-center">LISTE DES VIREMENTS EFFECTUES:</caption>
          <thead style="color:black;">
            <tr style="color:black;">
			<th style="color:black;">ID</th>
       <th>DATE CREATION</th>
       <th>DATE DESTINATION </th>
	   <th>MONTANT EN EUROS</th>
	   
            </tr>
          </thead>
          <tbody>
		  <?php 
		   $listeArray = $liste["data"];
   foreach($listeArray as $item){
	  
	  //selection des infos clients a partir du compte
	  
						
						$id=$item["id"];
						$dtCreated=$item["created"];
						$dtArrived=$item["arrival_date"];
						$montant=$item["amount"]/100;
						$dtArrived1 = "LE ".date('d/m/Y', $dtArrived)." A ".date('H:i:s', $dtArrived);
						
						$dtCreated1 = "LE ".date('d/m/Y', $dtCreated)." A ".date('H:i:s', $dtCreated);
						
						
						echo "<tr><td> <u class='notranslate'>".$id."</u></td>";
						echo "<td style=\"width:135px\" class='notranslate'>".$dtCreated1."</td>";
       echo "<td style='width:80px' class='notranslate'>".$dtArrived1."</td>";
	  echo " <td style='width:220px' class='notranslate'>".$montant."</td>";
	 
	 
   echo "</tr>";
						
   }
						?>
   
   
   
</tbody></table>
				
					
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->








<?php
include("footer.php");

?>