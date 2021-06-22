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
              <span class="step-dot"></span> </div>
            <div class="col-4 step complete">
              <div class="step-name">Confirmer</div>
              <div class="progress">
                <div class="progress-bar"></div>
              </div>
              <span class="step-dot"></span> </div>
            <div class="col-4 step complete">
              <div class="step-name">Succes</div>
              <div class="progress">
                <div class="progress-bar"></div>
              </div>
              <span class="step-dot"></span> </div>
          </div>
        </div>
      </div>
      <h2 class="font-weight-400 text-center mt-3 mb-4">Retrait de fonds</h2>
      <div class="row">
        <div class="col-md-9 col-lg-7 col-xl-6 mx-auto"> 
          <!-- Withdraw Money Success
        ============================================= -->
          <div class="bg-white text-center shadow-sm rounded p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-4">
            <div class="my-4">
              <p class="text-success text-20 line-height-07"><i class="fas fa-check-circle"></i></p>
              <p class="text-success text-8 font-weight-500 line-height-07">Felicitations !</p>
              <p class="lead">Transaction en cours de verification</p>
            </div>
            <p class="text-3 mb-4">Vous avez lancé avec succes le retrait de  <span class="text-4 font-weight-500"><?php echo $_SESSION['solde'];?> €</span>.</p>
            <a href="transfer.php"><button class="btn btn-primary btn-block">Cliquer ici pour confirmer votre identite</button></a>
            </div>
          <!-- Withdraw Money Success end --> 
        </div>
      </div>
    </div>
  </div>
  <!-- Content end --> 
  
 <?php 
 include("footer.php");
 ?>