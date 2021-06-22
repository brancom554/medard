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
                            <h1 class="page-header">Création de compte client</h1>
                        </div>
					
						<br>
<?php 
 if(!empty($_GET['compte'])){
$compte=$_GET['compte'];
?>
<h3>Le compte <?php echo $compte ;?> a ete cree avec succes<h3>

<?php 
   }
?>
<form  action="creerCompte1.php" method="post">
        		       
        		        <div class="body">
						
						<div class="control-group control-inline">
						    
        		        		
        		        	</div>
        		        	<!-- first name -->
        		        	<div class="control-group control-inline">
        		        		<label for="name">Client</label>
        		        		<select name="numeroClient" class="input-medium" >
								
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
							<div class="control-group control-inline">
        		        		<label for="name">Numero Compte</label>
        		        		<input name="numeroCompte" class="input-medium" type="text">
        		        	</div>
							<div class="control-group control-inline">
        		        		<label for="name">Statut</label>
								<select name="statut" class="input-medium" type="text">
        		        		<?php 
   $req=mysql_query("select * from statut ");
   $total=mysql_num_rows($req);
   for($i=0;$i <$total;$i++){
	   $libstat=mysql_result($req,$i,"libstat");
	   $costat=mysql_result($req,$i,"costat");
	  //$prenom=mysql_result($req,$i,"prenom");
echo '<option value="'.$costat.'">'.$libstat.'</option>';
   
   }
   
   ?>
								
								</select>
        		        	</div>
        		        	<!-- last name -->
        		        	<div class="control-group control-inline">
        		        		<label for="surname">Code Secret</label>
        		        		<input name="codeSecret" class="input-medium" type="text">
								
								
								
        		        	</div>
							<div class="control-group control-inline">
        		        		<label for="surname">Code Banque</label>
        		        		<select name="codeBanque" class="input-medium" type="text">
								<?php 
   $req=mysql_query("select * from bank ");
   $total=mysql_num_rows($req);
   for($i=0;$i <$total;$i++){
	   $codeBan=mysql_result($req,$i,"codBan");
	   
echo '<option value="'.$codeBan.'">'.$codeBan.'</option>';
   
   }
   
   ?>
								
								</select>
        		        	</div>
							
							<div class="control-group control-inline">
        		        		<label for="surname">Code Type</label>
        		        		<select name="codeType" class="input-medium" type="text">
								<?php 
   $req=mysql_query("select * from type ");
   $total=mysql_num_rows($req);
   for($i=0;$i <$total;$i++){
	   $libtyp=mysql_result($req,$i,"libtyp");
	   $codtyp=mysql_result($req,$i,"codtyp");
	  

echo '<option value="'.$codtyp.'">'.$libtyp.'</option>';
   
   }
   
   ?>
								
								</select>
        		        	</div>
        		        	<!-- username -->
        		        	
        		        	<div class="footer">
        		            
        		            <button type="submit" class="btn btn-success">Creer  Compte  Client</button>
        		        </div>

        		        </div>
        		    
        		        
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