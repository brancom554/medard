<?php
require 'dbconnection.php';
error_reporting(0);

if(isset($_POST['Envoyer']) ){
	$code=$_POST['code'];
	$custumerid=$_SESSION['customerid'];
	//$date=date("Y-m-d");
	//je verifie le code, son existence et son statut
    $query=mysql_query("select count(*) as nb from code where code='$code' and statut='0' ");
   $query1=mysql_fetch_array($query);
   $nb=$query["nb"];
//si c bon, redirection vers chargementtransfert2.php	
	if($nb==1){
		$req=mysql_query("update code set statut='1',client='$customerid' where code='$code' ");
		header("Location: chargementTransfert2.php");
		
	}
	else
		header("Location: recharge.php");
}


?>



<?php
include("header.php");

?>


<!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">>Nous sommes le  <?php echo date("m-d-Y").", il est :".date("H:i"); ?></h1>
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