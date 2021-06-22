<?php
require_once('../../stripe/init.php');
@session_start();
//$montant=$_SESSION['solde'];
//verifier la balance
\Stripe\Stripe::setApiKey("sk_live_MIORaVvjwYICMbFSiqJx4uW2");

$acct = \Stripe\Balance::retrieve();
 ///$varr = var_dump($acct);
$varr = $acct["available"];
$varr1 = $varr[0];
$credit = $varr1->amount;
$varr2 = $acct["pending"];
$varr2_2 = $varr2[0];
$credit2 = $varr2_2->amount;
//echo $credit2;
//var_dump($varr2);exit;
?>


<?php
include("header.php");

?>


<!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Solde du compte de virement</h1>
                        </div>
						
						<H4> <?php echo " Solde disponible : ".$credit/100; ?>&nbsp;EUR </H4> <br><br>
								  <H4> <?php echo " Solde en attente : ".$credit2/100; ?>&nbsp;EUR</H4> <br>
								 
						
					
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