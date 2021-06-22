<?php 
include("header.php");
$montant = $_POST["montant"];
$_SESSION["montant"] = $montant;
?>
  <!-- Secondary menu
  ============================================= -->
  <div class="bg-white">
    <div class="container d-flex justify-content-center">
      <ul class="nav secondary-nav alternate">
        <li class="nav-item"> <a class="nav-link active" href="deposit-money.php">Depot de fonds</a></li>
        <li class="nav-item"> <a class="nav-link" href="withdraw-money.php">Retrait de fonds</a></li>
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
              <a href="#" class="step-dot"></a> </div>
            <div class="col-4 step active">
              <div class="step-name">Confirm</div>
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
      <h2 class="font-weight-400 text-center mt-3 mb-4">Depot de fonds</h2>
      <div class="row">
        <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
          <div class="bg-white shadow-sm rounded p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-4">
            <h3 class="text-5 font-weight-400 mb-3 mb-sm-4">Depot de fonds sur</h3>
            <hr class="mx-n3 mx-sm-n5 mb-4">
            <!-- Deposit Money Confirm
            ============================================= -->
            <form id="form-send-money" method="post" action="deposit-money-success.php">
              <div class="form-group">
                <label for="paymentMethod">Bank</label>
                <select id="cardType" class="custom-select" required="">
                  <option>HDFC Bank</option>
                  <option>Bank 2</option>
                  <option>Bank 3</option>
                </select>
              </div>
              <div class="alert alert-info rounded shadow-sm py-3 px-4 px-sm-2 mb-5">
                <div class="form-row align-items-center">
                  <p class="col-sm-5 opacity-7 text-sm-right mb-0 mb-sm-3">Nom du compte:</p>
                  <p class="col-sm-7 text-3"><?php echo $_SESSION["nom"].'&nbsp;&nbsp;'.$_SESSION["prenom"];?></p>
                </div>
                <div class="form-row align-items-center">
                  <p class="col-sm-5 opacity-7 text-sm-right mb-0 mb-sm-3">Numero de compte:</p>
                  <p class="col-sm-7 text-3">XXXXXXXXXXXX-9025</p>
                </div>
                <div class="form-row align-items-center">
                  <p class="col-sm-5 opacity-7 text-sm-right mb-0">Nom de la banque:</p>
                  <p class="col-sm-7 text-3 mb-0">HDFC Bank</p>
                </div>
              </div>
              <hr class="mx-n3 mx-sm-n5 mb-4">
              <h3 class="text-5 font-weight-400 mb-4">Details</h3>
              <hr class="mx-n3 mx-sm-n5 mb-4">
              <p class="mb-1">Montant à deposer <span class="text-3 float-right"><?php echo $montant;?></span></p>
             
              <hr>
              <p class="text-4 font-weight-500">Total<span class="float-right"><?php echo $montant;?></span></p>
              <button class="btn btn-primary btn-block">Confirmer</button>
            </form>
            <!-- Deposit Money Confirm end --> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Content end --> 
  
  <?php 
  include("footer.php");
  ?>