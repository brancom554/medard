<?php
session_start();
include "dbconnection.php";
//$montant=$_SESSION['solde'];

?>


<?php
include("header.php");

?>


<!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Récapitulatif des clients</h1>
                        </div>
					
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
          <caption style="color:black;" class="text-center">PROFIL DES CLIENTS:</caption>
          <thead style="color:black;">
            <tr style="color:black;">
			<th style="color:black;">NOM & PRENOMS</th>
       <th>ADRESSE</th>
       <th>TELEPHONE </th>
	   <th>EMAIL </th>
	   <th>NUMERO CLIENT </th>
	   <th>NUMERO COMPTE </th>
	   <th>CODE D'ACCES </th>
	   <th>POURCENTAGE VIREMENT</th>
            </tr>
          </thead>
          <tbody>
		  <?php 
		  $req=mysql_query("select * from compte where 1 order by dateIns desc");
   $total=mysql_num_rows($req);
   for($i=0;$i <$total;$i++){
	   $numcli=mysql_result($req,$i,"numcli");
	   $numCpt=mysql_result($req,$i,"numCpt");
	  $codeSecret=mysql_result($req,$i,"codeSecret");
	  //selection des infos clients a partir du compte
	  
						//$numcli=$_SESSION["numcli"];
						$sql=mysql_query("select * from client where numcli='$numcli'  ");
						$sql1=mysql_fetch_array($sql);
						$adresse=$sql1["adresse"];
						$telephone=$sql1["tel"];
						$email=$sql1["email"];
						$pourcentage=$sql1["pourcentage"];
						$nom=$sql1["nom"];
						$prenom=$sql1["prenom"];
						
						echo "<tr><td> <u class='notranslate'>".$nom.'&nbsp;&nbsp;'.@$prenom."</u></td>";
						echo "<td style=\"width:135px\" class='notranslate'>".$adresse."</td>";
       echo "<td style='width:80px' class='notranslate'>".$telephone."</td>";
	  echo " <td style='width:220px' class='notranslate'>".$email."</td>";
	  echo" <td>".$numcli."</td>";
	   echo "<td style='width:130px'><b>".$numCpt." </b></td>";
	   echo "<td style='width:130px'><b>".$codeSecret." </b></td>";
	   echo"<td style='width:130px'><b> ".$pourcentage." </b></td>";
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