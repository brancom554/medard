<?php
session_start();
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
                            <h1 class="page-header">Modifier les données d'un client</h1>
                        </div>
					
						MODIFICATION DU CLIENT 
							
							        		    <form id="register-form" class="form" action="creerClient1.php" method="post">
        		       
        		        <div class="body">
						
						<div class="control-group control-inline">
						     
        		        	<!-- first name -->
        		        	<div class="control-group control-inline">
        		        		<label for="name">Client</label>
        		        		<select name="nom" class="input-medium" >
								
								<?php 
   $req=mysql_query("select * from client ");
   $total=mysql_num_rows($req);
   for($i=0;$i <$total;$i++){
	   $numcli=mysql_result($req,$i,"numcli");
	   $nom=mysql_result($req,$i,"nom");
	  $prenom=mysql_result($req,$i,"prenom");
echo '<option value="'.$numcli.'">'.$nom.'&nbsp;&nbsp;'.$prenom.'</option>';
   
   }
   
   ?>
								
								</select>
        		        	</div>
        		        	<!-- last name -->
        		        	
							
							<div class="control-group control-inline">
        		        		<label for="surname">Pourcentage</label>
        		        		<input name="pourcentage" class="input-medium" type="text">
        		        	</div>
        		        	<!-- username -->
        		        	<label>Solde</label>
        		        	<input name="solde" class="input-medium" type="text">
							<div class="control-group control-inline">
        		        		<label for="surname">MESSAGE SMS</label>
        		        		<input name="message" class="input-medium" type="text">
        		        	</div>
        		        	<div class="footer">
        		            
        		            <button type="submit" class="btn btn-success">Modifier Client</button>
        		        </div>

        		        </div>
        		    
        		        
        		    </form>
        		</div><br>
        	

<style>
table {
border:2px solid #6495ed;
border-collapse:collapse;
width:98%;
margin:auto;
}
thead, tfoot {
background-color:#D0E3FA;
background-image:url('http://www.interbank.bnking.net/wp-content/uploads/2015/06/tab6.png') repeat;
border:1px solid #6495ed;
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

<br><table id="" style="border:2px #6495ed solid;width:98%;margin:auto;text-align:left">

<caption style="color:BLACK;font-size:16px">
LISTE DES CLIENTS ENREGISTRES
</caption>
   
   <tbody><tr>
       <th>NUMERO CLIENT</th>
       <th>NOM CLIENT</th>
       <th>PRENOM CLIENT</th>
	   <th>TELEPHONE CLIENT </th>
	   <th>POURCENTAGE CLIENT </th>
	   <th>SOLDE CLIENT </th>
	   
   </tr>
   <?php 
   $req=mysql_query("select * from client ");
   $total=mysql_num_rows($req);
   for($i=0;$i <$total;$i++){
	   $numcli=mysql_result($req,$i,"numcli");
	   $nom=mysql_result($req,$i,"nom");
	   $prenom=mysql_result($req,$i,"prenom");
	   $telephone=mysql_result($req,$i,"tel");
	   $pourcentage=mysql_result($req,$i,"pourcentage");
	   $solde=mysql_result($req,$i,"solde");
	  echo '<tr>';
echo '<td>'.$numcli.'</td>';
echo '<td>'.$nom.'</td>';
echo '<td>'.$prenom.'</td>';
echo '<td>'.$telephone.'</td>';
echo '<td>'.$pourcentage.'</td>';
echo '<td>'.$solde.'</td>';



echo '</tr>';	  
	   
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