<?php
session_start();
include("dbconnection.php");
$montant=$_SESSION['solde'];
?>


<?php
include("header.php");

?>


<!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">SMS BANKING</h1>
                        </div>
					
					
        		       
        		        <div class="body">
						
						
        		    <br>
        		    <?php if(isset($_GET['statut'])) 
        		         echo $_GET['statut'];
        		    ?>
        		   <form action="envoyerSMS2.php" method="post">
<ul class="form-style-1">
    
    <li>
       <label for="name">Client</label>
        		        		<select name="numeroTelephone" class="input-medium" >
								
								<?php 
   $req=mysql_query("select * from client ");
   $total=mysql_num_rows($req);
   for($i=0;$i <$total;$i++){
	   $numcli=mysql_result($req,$i,"numcli");
	   $nom=mysql_result($req,$i,"nom");
	  $prenom=mysql_result($req,$i,"prenom");
	  $tel=mysql_result($req,$i,"tel");
	  $ttt=mysql_query("select numCpt from compte where numcli='$numcli'");
	  $ttt1=mysql_fetch_array($ttt);
	  $ttt2=$ttt1["numCpt"];
echo '<option value="'.$tel.'">'.$nom.'&nbsp;&nbsp;'.$prenom.'</option>';
   
   }
   
   ?>
								
								</select>
    </li>
    <li>
        <label>Votre Message <span class="required">*</span></label>
        <textarea name="message" id="field5" class="field-long field-textarea"></textarea>
    </li>
    <li>
        <input type="submit" value="Envoyer SMS" />
    </li>
</ul>
</form>
					
<style type="text/css">
.form-style-1 {
	margin:10px auto;
	max-width: 400px;
	padding: 20px 12px 10px 20px;
	font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
	padding: 0;
	display: block;
	list-style: none;
	margin: 10px 0 0 0;
}
.form-style-1 label{
	margin:0 0 3px 0;
	padding:0px;
	display:block;
	font-weight: bold;
}
.form-style-1 input[type=text], 
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea, 
select{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	border:1px solid #BEBEBE;
	padding: 7px;
	margin:0px;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;
	outline: none;	
}
.form-style-1 input[type=text]:focus, 
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus, 
.form-style-1 select:focus{
	-moz-box-shadow: 0 0 8px #88D5E9;
	-webkit-box-shadow: 0 0 8px #88D5E9;
	box-shadow: 0 0 8px #88D5E9;
	border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
	width: 49%;
}

.form-style-1 .field-long{
	width: 100%;
}
.form-style-1 .field-select{
	width: 100%;
}
.form-style-1 .field-textarea{
	height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
	background: #4B99AD;
	padding: 8px 15px 8px 15px;
	border: none;
	color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
	background: #4691A4;
	box-shadow:none;
	-moz-box-shadow:none;
	-webkit-box-shadow:none;
}
.form-style-1 .required{
	color:red;
}
</style>					
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

<br><table id="" style="border:2px #6495ed solid;width:AUTO;margin:auto;text-align:left">

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
<br>	
<form>
    
    
</form>
						
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