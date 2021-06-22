<?php
session_start();
include("dbconnection.php");

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
                            <h1 class="page-header">Gestion des opérations</h1>
                        </div>
						
						MODIFICATION D'UNE OPERATION CLIENT
							
							<br>
<?php 
 if(!empty($_GET['compte'])){
$compte=$_GET['compte'];
?>
<h3>L'operation a ete ajoutee sur <?php echo $compte ;?> avec succes<h3>

<?php 
   }
?>

			
		
        		
        		    <form  action="modifierOperation2.php" method="post">
        		       
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
  //echo' <input name="numcli" value="'.$numcli.'" class="input-medium" type="hidden">';
   }
   
   ?>
								
								</select>
								
        		        	</div>
							
							
								
							
							
        		        	<!-- username -->
        		        	
        		        	<div class="footer">
        		            
        		            <button type="submit" class="btn btn-success">Acceder Operation</button>
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