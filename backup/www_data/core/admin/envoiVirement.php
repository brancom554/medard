<?php
require_once('../../stripe/init.php');
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
                            <h1 class="page-header">Envoi de virements</h1>
                        </div>
					
						<div class="registration_form">
		 <!-- Form -->
			<form action="envoiVirement2.php" method="post" >
				<div>
					<label>
						<input placeholder="LE MONTANT EN EUROS:" type="number" name="montant" tabindex="1" required="" autofocus="">
					</label>
				</div>
				
				
										
					
				<div>
					<input type="submit" value="ENVOYER VIREMENT ">
				</div>
				
			</form>
			<!-- /Form -->
		</div>
						
					
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