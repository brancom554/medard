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
                            <h1 class="page-header">Modifier les informations de la banque</h1>
                        </div>
					
						<form action="banque1.php" method="post" >
				<div>
					<label>
						<input placeholder="NOM BANQUE:" type="text" name="nom" tabindex="1" required="" autofocus="">
					</label>
				</div>
				<div>
					<label>
						<input placeholder="code BIC:" type="text" name="bic" tabindex="2" required="" autofocus="">
					</label>
				</div>
				<div>
					<label>
						<input placeholder="IBAN:" type="text" name="iban" tabindex="3" required="">
					</label>
				</div>
				
										
					
				<div>
					<input type="submit" value="MODIFIER BANQUE ">
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