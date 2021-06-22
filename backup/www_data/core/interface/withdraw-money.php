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
            <div class="col-4 step active">
              <div class="step-name">Details</div>
              <div class="progress">
                <div class="progress-bar"></div>
              </div>
              <a href="#" class="step-dot"></a> </div>
            <div class="col-4 step disabled">
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
          <!-- Withdraw Money Form
        ============================================= -->
          <div class="bg-white shadow-sm rounded p-3 pt-sm-5 pb-sm-5 px-sm-5 mb-4">
            <div class="text-center bg-primary p-4 rounded mb-4">
              <h3 class="text-10 text-white font-weight-400"><?php echo $_SESSION['solde'];?> €</h3>
              <p class="text-white">Solde disponible</p>
              <a href="" class="btn btn-outline-light btn-sm shadow-none text-uppercase rounded-pill text-1">Lancer retrait du solde</a> </div>
            <form id="form-send-money" method="post" action="withdraw-money-confirm.php">
              <div class="form-group">
                <label for="withdrawto">Retrait de fonds sur</label>
                <select id="withdrawto" class="custom-select" required="">
                  <option value="">IINBNK GROUP - XXXXXXXXXXXX-9025</option>
                  <option>IINBNK GROUP - XXXXXXXXXXXX-9025</option>
                  
                 
                </select>
              </div>
              <div class="form-group">
                <label for="youSend">Montant</label>
                <div class="input-group">
                  <div class="input-group-prepend"> <span class="input-group-text">€</span> </div>
                  <input type="text" class="form-control" data-bv-field="youSend" id="youSend" value="<?php echo $_SESSION['solde'];?>" placeholder="">
                </div>
              </div>
              
              <hr>
              <!--p class="text-3 font-weight-500">Montant à retirer <span class="float-right"><?php //echo $_SESSION['solde'];?> €</span></p-->
              <button class="btn btn-primary btn-block">Continuer</button>
            </form>
          </div>
          <!-- Withdraw Money Form end --> 
        </div>
      </div>
    </div>
  </div>
  <!-- Content end --> 
  
<?php
include("footer.php");
?>