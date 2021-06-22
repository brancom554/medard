
<?php
require_once('../../stripe/init.php');
session_start();
$montant=$_POST['montant'];

\Stripe\Stripe::setApiKey("sk_live_fjDtU0ZdzHvhqyJQFWQMGnCa00Tn0LkPaw");

// Create a payout to the bank account associated with your Stripe account
$payout = \Stripe\Payout::create([
  "amount" => $montant*100, // amount in cents
  "currency" => "eur",
  //"recipient_id" => "self",
  //"destination" => "self",
  //"destination" => {CONNECTED_STRIPE_ACCOUNT_ID} ,
   //"source_type"=>"bank_account",
  "statement_descriptor" => "JULY SALES"
]);
$id = $payout["id"];
$dtArrived=$payout["arrival_date"];
$dtArrived1 = "le ".date('d/m/Y', $dtArrived)." A ".date('H:i:s', $dtArrived);
$statut = " Le virement ".$id." arrivera ".$dtArrived1;
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
					
						STATUT DU VIREMENT
							 <div class="registration_form"> <br>
		 <!-- Form -->
			<h4><?php echo $statut;?> </h4><br>
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