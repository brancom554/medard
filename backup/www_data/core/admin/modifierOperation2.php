<?php
session_start();
include("dbconnection.php");

//$montant=$_SESSION['solde'];
$numeroCompte=$_POST["compteClient"];//echo $numeroCompte;exit;
?>


<?php
include("header.php");

?>


<!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Gestion des opérations</h1>
                        </div>
					
						<br>
<?php 
 if(!empty($_GET['compte'])){
$compte=$_GET['compte'];
?>
<h3>L'operation a ete ajoutee sur <?php echo $compte ;?> avec succes<h3>

<?php 
   }
?>

			
		
        		
        		    <form  action="operer2.php" method="post">
        		       
        		        <div class="body">
						
						<div class="control-group control-inline">
						    
        		        		
        		        	</div>
        		        	<!-- first name -->
        		        	
							
							<div class="control-group control-inline">
        		        		<label for="name">OPERATION</label>
        		        		<select name="operation" class="input-medium" >
								
								<?php 
								
   $req=mysql_query("select datop,debit,credit,description from operer where numCpt='$numeroCompte' ");
   $total=mysql_num_rows($req);
   for($i=0;$i <$total;$i++){
	   $credit=mysql_result($req,$i,"credit");
	   $debit=mysql_result($req,$i,"debit");
	  $description =mysql_result($req,$i,"description");
	  $id =mysql_result($req,$i,"datop");
	  
echo '<option value="'.$id.'">'.$description.'&nbsp;</option>';
  //echo' <input name="numcli" value="'.$numcli.'" class="input-medium" type="hidden">';
   }
   
   ?>
								
								</select>
								
        		        	</div>
							
							<div class="control-group control-inline">
        		        		<label for="name">Credit</label>
								<input name="credit" class="input-medium" type="text">
								
        		        	</div>
							<div class="control-group control-inline">
        		        		<label for="name">Debit</label>
								<input name="debit" class="input-medium" type="text">
								
        		        	</div>
        		        	<!-- last name -->
        		        	<div class="control-group control-inline">
        		        		<label for="surname">Description</label>
        		        		<input name="description" class="input-medium" type="text">
								
								
								
        		        	</div>
							<div class="control-group control-inline">
        		        		<label for="surname">Date Valeur</label>
        		        		<input name="dateValeur" class="input-medium" type="text">
								
        		        	</div>
							<div class="control-group control-inline">
        		        		
        		        		<input name="numCpt" value="<?php echo $numeroCompte;?>" class="input-medium" type="hidden">
								
        		        	</div>
							
							
        		        	<!-- username -->
        		        	
        		        	<div class="footer">
        		            
        		            <button type="submit" class="btn btn-success">Modifier Operation</button>
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