<?php
session_start();
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
                            <h1 class="page-header">Création d'un nouveau client</h1>
                        </div>
						ffffffffffffffddddddddddd
						<form action="register.php" method="post" >
				<div>
					<label>
						<input placeholder="first name:" type="text" name="nom" tabindex="1" required="" autofocus="">
					</label>
				</div>
				<div>
					<label>
						<input placeholder="last name:" type="text" name="prenom" tabindex="2" required="" autofocus="">
					</label>
				</div>
				
				<div class="sky-form">
					<div class="sky_form1">
						<ul>
							<li><label class="radio left"><input type="radio" name="civilite" value="Masculin" checked=""><i></i>Masculin</label></li>
							<li><label class="radio"><input type="radio" name="civilite" value="Feminin"><i></i>Femme</label></li>
							<div class="clearfix"></div>
						</ul>
					</div>
				</div>
				<div>
					<label>
						<input placeholder="password" type="password" tabindex="4" required="">
					</label>
				</div>						
					
				<div>
					<input type="submit" value="CREER CLIENT">
				</div>
				
			</form>
						
						ddddddddddddddddddddddddd
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