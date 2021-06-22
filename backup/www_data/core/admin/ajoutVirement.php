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
///echo $credit;
///var_dump($acct["available"]);//exit;
?>

<?php
include("header.php");

?>


<!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Recharger le compte de virement</h1>
                        </div>
						
						 <form action="ajoutVirement2.php" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_live_INTcEKKC2PluEMSTH8DHOcJp"
    data-amount="300"
    data-name="Bordier Banque Services"
    data-description="Widget"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto"
    data-currency="eur">
  </script>
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