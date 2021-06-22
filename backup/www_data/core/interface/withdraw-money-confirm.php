<?php 
include("header.php");
?>
  <!-- Secondary menu
  ============================================= -->
  <div class="bg-white">
    <div class="container d-flex justify-content-center">
      <ul class="nav secondary-nav alternate">
        <li class="nav-item"> <a class="nav-link" href="deposit-money.php">Depot de fonds</a></li>
        <li class="nav-item"> <a class="nav-link active" href="withdraw-money.php">Retrait de fonds</a></li>
      </ul>
    </div>
  </div>
  <!-- Secondary menu end --> 
  
  <!-- Content
  ============================================= -->
  <div id="content" class="py-4">
    <div class="container"> 
      
      <!-- Steps Progress bar -->
      <div class="row mt-4 mb-5">
        <div class="col-lg-11 mx-auto">
          <div class="row widget-steps">
            <div class="col-4 step complete">
              <div class="step-name">Details</div>
              <div class="progress">
                <div class="progress-bar"></div>
              </div>
              <a href="withdraw-money.php" class="step-dot"></a> </div>
            <div class="col-4 step active">
              <div class="step-name">Confirmer</div>
              <div class="progress">
                <div class="progress-bar"></div>
              </div>
              <a href="#" class="step-dot"></a> </div>
            <div class="col-4 step disabled">
              <div class="step-name">Succes</div>
              <div class="progress">
                <div class="progress-bar"></div>
              </div>
              <a href="#" class="step-dot"></a> </div>
          </div>
        </div>
      </div>
      <h2 class="font-weight-400 text-center mt-3 mb-4">Retrait de fonds</h2>
      <div class="row">
        <div class="col-md-9 col-lg-7 col-xl-6 mx-auto"> 
          <!-- Withdraw Money Confirm
          ============================================= -->
          <div class="bg-white shadow-sm rounded p-3 pt-sm-5 pb-sm-5 px-sm-5 mb-4">
            <p class="lead text-center alert alert-info">Vous venez de lancer un retrait<br>
              sur<br>
              <span class="font-weight-500">IINBNK GROUP - XXXXXXXXXXXX-9025</span></p>
            <p class="mb-2 mt-4">Montant à retirer <span class="text-3 float-right"><?php echo $_SESSION['solde'];?> €</span></p>
            <!--p class="text-muted">Frais de transaction <span class="float-right d-flex align-items-center">150€ </span></p-->
            <hr>
            <p class="text-4 font-weight-500">Total<span class="float-right"><?php echo $_SESSION['solde'];?> €</span></p>
            <form id="form-withdraw-money-confirm" method="post" action="withdraw-money-success.php">
              <button class="btn btn-primary btn-block">Retirer l'argent</button>
            </form>
          </div>
          <!-- Withdraw Money Confirm end --> 
        </div>
      </div>
    </div>
  </div>
  <!-- Content end --> 
  <?php 
  include("footer.php");
  ?>