<?php

require "verifLogin.php";

?>

<?php
include("header.php");

?>


<!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Blank</h1>
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

			
		
        		
        		    <form  action="operer1.php" method="post">
        		       
        		        <div class="body">
						
						<div class="control-group control-inline">
						    
        		        		
        		        	</div>
        		        	<!-- first name -->
        		        	<div class="control-group control-inline">
        		        		<label for="name">Client</label>
        		        		<select name="compteClient" class="input-medium" >
								
								<?php 
   $req=mysql_query("select * from client ");
   $total=mysql_num_rows($req);
   for($i=0;$i <$total;$i++){
	   $numcli=mysql_result($req,$i,"numcli");
	   $nom=mysql_result($req,$i,"nom");
	  $prenom=mysql_result($req,$i,"prenom");
	  $ttt=mysql_query("select numCpt from compte where numcli='$numcli'");
	  $ttt1=mysql_fetch_array($ttt);
	  $ttt2=$ttt1["numCpt"];
echo '<option value="'.$ttt2.'">'.$nom.'&nbsp;&nbsp;'.$prenom.'</option>';
   
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
							
							
        		        	<!-- username -->
        		        	
        		        	<div class="footer">
        		            
        		            <button type="submit" class="btn btn-success">Ajouter Operation</button>
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