<?php 
@session_start(); 
include("header.php");
?>
  <!-- Content
  ============================================= -->
  <div id="content" class="py-4">
    <div class="container">
      <div class="row"> 
        <!-- Left Panel
        ============================================= -->
        <aside class="col-lg-3"> 
          
          <!-- Profile Details
          =============================== -->
          <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
            <div class="profile-thumb mt-3 mb-4"> <img class="rounded-circle" src="<?php echo $_SESSION['image']?>" width="75" height="75" alt="">
              <div class="profile-thumb-edit custom-file bg-primary text-white" data-toggle="tooltip" title="Change Profile Picture"> <i class="fas fa-camera position-absolute"></i>
                <input type="file" class="custom-file-input" id="customFile">
              </div>
            </div>
            <p class="text-3 font-weight-500 mb-2">BIENVENUE, <?php echo $_SESSION["nom"].'&nbsp;&nbsp;'.$_SESSION["prenom"];?></p>
            <p class="mb-2"><a href="settings-profile.php" class="text-5 text-light" data-toggle="tooltip" title="Editer Profil"><i class="fas fa-edit"></i></a></p>
          </div>
          <!-- Profile Details End --> 
          
          <!-- Available Balance
          =============================== -->
          <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
            <div class="text-17 text-light my-3"><i class="fas fa-wallet"></i></div>
            <h3 class="text-9 font-weight-400"><?php echo $_SESSION['solde'];?> €</h3>
            <p class="mb-2 text-muted opacity-8">Solde disponible</p>
            <hr class="mx-n3">
            <div class="d-flex"><a href="withdraw-money.php" class="btn-link mr-auto">Retrait</a> <a href="deposit-money.php" class="btn-link ml-auto">Depot</a></div>
          </div>
          <!-- Available Balance End --> 
          
          <!-- Need Help?
          =============================== -->
          
          <!-- Need Help? End --> 
          
        </aside>
        <!-- Left Panel End --> 
        
        <!-- Middle Panel
        ============================================= -->
        <div class="col-lg-9"> 
          
          <!-- Profile Completeness
          =============================== -->
          <div class="bg-white shadow-sm rounded p-4 mb-4">
            <h3 class="text-5 font-weight-400 d-flex align-items-center mb-4">Création du profil <span class="border text-success rounded-pill font-weight-500 text-2 px-3 py-1 ml-2">100%</span></h3>
            <hr class="mb-4 mx-n4">
            <div class="row profile-completeness">
              <div class="col-sm-6 col-md-3 mb-4 mb-md-0">
                <div class="border rounded text-center px-3 py-4"> <span class="d-block text-10 text-light mt-2 mb-3"><i class="fas fa-mobile-alt"></i></span> <span class="text-5 d-block text-success mt-4 mb-3"><i class="fas fa-check-circle"></i></span>
                  <p class="mb-0">Mobile Ajoute</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 mb-4 mb-md-0">
                <div class="border rounded text-center px-3 py-4"> <span class="d-block text-10 text-light mt-2 mb-3"><i class="fas fa-envelope"></i></span> <span class="text-5 d-block text-success mt-4 mb-3"><i class="fas fa-check-circle"></i></span>
                  <p class="mb-0">Email Ajoute</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 mb-4 mb-sm-0">
                <div class="border rounded text-center px-3 py-4"> <span class="d-block text-10 text-light mt-2 mb-3"><i class="fas fa-credit-card"></i></span> <span class="text-5 d-block text-light mt-4 mb-3"><i class="far fa-circle "></i></span>
                  <p class="mb-0"><a class="btn-link stretched-link" href="settings-payment-methods.php">Ajouter Carte</a></p>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                
              </div>
            </div>
          </div>
          <!-- Profile Completeness End --> 
          
          <!-- Recent Activity
          =============================== -->
          <div class="bg-white shadow-sm rounded py-4 mb-4">
            <h3 class="text-5 font-weight-400 d-flex align-items-center px-4 mb-4">Activites recentes</h3>
            
            <!-- Title
            =============================== -->
            <div class="transaction-title py-2 px-4">
              <div class="row font-weight-00">
                <div class="col-2 col-sm-1 text-center"><span class="">Date</span></div>
                <div class="col col-sm-7">Description</div>
                <div class="col-auto col-sm-2 d-none d-sm-block text-center">Statut</div>
                <div class="col-3 col-sm-2 text-right">Montant</div>
              </div>
            </div>
            <!-- Title End --> 
            
            <!-- Transaction List
            =============================== -->
            <div class="transaction-list">
               <?php 
$numcpt=$_SESSION['numCpt'];
   $req=mysql_query("select * from operer where numCpt='$numcpt' ");
   $total=mysql_num_rows($req);
   for($i=0;$i <$total;$i++){
	   $datop=mysql_result($req,$i,"datop");
	   $numCpt=mysql_result($req,$i,"numCpt");
	   $credit=mysql_result($req,$i,"credit");
	   $debit=mysql_result($req,$i,"debit");
	   $dateval=mysql_result($req,$i,"dateval");
	   $description=mysql_result($req,$i,"description");
	 

echo '<div class="transaction-list">';
echo '<div class="transaction-item px-4 py-3" data-toggle="modal" data-target="#transaction-detail">';
echo '<div class="row align-items-center flex-row">';
echo '<div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300"></span> <span class="d-block text-1 font-weight-300 text-uppercase">'.$dateval.'</span> </div>';
echo '<div class="col col-sm-7"> <span class="d-block text-4">IINBNK-GROUP</span> <span class="text-muted">'.$description.'</span> </div>';
echo '<div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-warning" data-toggle="tooltip" data-original-title="Complete"><i class="fas fa-ellipsis-h"></i></span> </div>';
echo '<div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">'.$montant.'</span> <span class="text-2 text-uppercase">€</span> </div>';
echo '</div>';
echo '</div>';


	  
	   
   }
   
   ?>

              
              
            </div>
            <!-- Transaction List End --> 
            
            <!-- Transaction Item Details Modal
            =========================================== -->
            <div id="transaction-detail" class="modal fade" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered transaction-details" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="row no-gutters">
                      <div class="col-sm-5 d-flex justify-content-center bg-primary rounded-left py-4">
                        <div class="my-auto text-center">
                          <div class="text-17 text-white my-3"><i class="fas fa-building"></i></div>
                          <h3 class="text-4 text-white font-weight-400 my-3">IINBNK-GROUP</h3>
                          <div class="text-8 font-weight-500 text-white my-4">557.20</div>
                          <p class="text-white">15 Mars 2020</p>
                        </div>
                      </div>
                      <div class="col-sm-7">
                        <h5 class="text-5 font-weight-400 m-3">Transaction Details
                          <button type="button" class="close font-weight-400" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </h5>
                        <hr>
                        <div class="px-3">
                          <ul class="list-unstyled">
                            <li class="mb-2">Payment Amount <span class="float-right text-3">562.00</span></li>
                            <li class="mb-2">Fee <span class="float-right text-3">-4.80</span></li>
                          </ul>
                          <hr class="mb-2">
                          <p class="d-flex align-items-center font-weight-500 mb-4">Total Amount <span class="text-3 ml-auto">$557.20</span></p>
                          <ul class="list-unstyled">
                            <li class="font-weight-500">Paid By:</li>
                            <li class="text-muted">IINBNK-GROUP</li>
                          </ul>
                          <ul class="list-unstyled">
                            <li class="font-weight-500">Transaction ID:</li>
                            <li class="text-muted">26566689645685976589</li>
                          </ul>
                          <ul class="list-unstyled">
                            <li class="font-weight-500">Description:</li>
                            <li class="text-muted">VIREMENT EN ATTENTE</li>
                          </ul>
                          <ul class="list-unstyled">
                            <li class="font-weight-500">Statut:</li>
                            <li class="text-muted">Completed<span class="text-success text-3 ml-1"><i class="fas fa-check-circle"></i></span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Transaction Item Details Modal End --> 
            
            <!-- View all Link
            =============================== -->
            <div class="text-center mt-4"><a href="transactions.php" class="btn-link text-3">Voir tout<i class="fas fa-chevron-right text-2 ml-2"></i></a></div>
            <!-- View all Link End --> 
            
          </div>
          <!-- Recent Activity End --> 
        </div>
        <!-- Middle Panel End --> 
      </div>
    </div>
  </div>
  <!-- Content end --> 
  <?php
  include("footer.php");
  ?>