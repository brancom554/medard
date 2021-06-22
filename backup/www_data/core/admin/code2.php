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
                            <h1 class="page-header">Création de codes secrets</h1>
                        </div>
						ffffffffffffffddddddddddd
						VOTRE CODE A ETE GENERE AVEC SUCCES 
							<br>
     		 Votre code est <?php echo  $_SESSION['code'] ;?> .<br> Vousp pourrez le copier et l'envoyer.
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