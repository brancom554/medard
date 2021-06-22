<?php
@session_start();
@$user=$_SESSION['pseudo'];
?>

<?php
include("header.php");

?>


<!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <center><br></br>
                        <h4 style="color:red">ERREUR <?php echo $user;?>  CE CODE N'EST PAS VALIDE OU INEXISTANT</h4>
                        <br>
                        <a href="virementExt.php">VEUILLEZ CLIQUER ICI POUR REESSAYER S'IL VOUS PLAIT</a>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"></h1>
                        </div>
						
						<h3>&nbsp;</h3>
			

					
 </center>                       <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->








<?php
include("footer.php");

?>