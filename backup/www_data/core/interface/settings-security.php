
<?php 
include("header.php");
?>
  
  <!-- Secondary Menu
  ============================================= -->
  <div class="bg-primary">
    <div class="container d-flex justify-content-center">
      <ul class="nav secondary-nav">
        <li class="nav-item"> <a class="nav-link" href="settings-profile.php">Mon compte</a></li>
        <li class="nav-item"> <a class="nav-link active" href="settings-security.php">Securite</a></li>
        <li class="nav-item"> <a class="nav-link" href="settings-payment-methods.php">Methodes de paiement</a></li>
        
      </ul>
    </div>
  </div>
  <!-- Secondary Menu end --> 
  
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
            <div class="profile-thumb mt-3 mb-4"> <img class="rounded-circle" src="<?php echo $_SESSION["image"]?>" width="75" height="75" alt="">
              
            </div>
            <p class="text-3 font-weight-500 mb-2">BIENVENUE, <?php echo $_SESSION["nom"].'&nbsp;&nbsp;'.$_SESSION["prenom"];?></p>
           
          </div>
          <!-- Profile Details End --> 
          
          <!-- Available Balance
          =============================== -->
          <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
            <div class="text-17 text-light my-3"><i class="fas fa-wallet"></i></div>
            <h3 class="text-9 font-weight-400"><?php echo $_SESSION['solde'];?> €</h3>
            <p class="mb-2 text-muted opacity-8">Solde disponible</p>
            <hr class="mx-n3">
            <div class="d-flex"><a href="withdraw-money.php" class="btn-link mr-auto">Faire un retrait</a> <a href="deposit-money.php" class="btn-link ml-auto">Faire un depot</a></div>
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
          
          <!-- Password
          ============================================= -->
          <div class="bg-white shadow-sm rounded p-4 mb-4">
            <h3 class="text-5 font-weight-400 d-flex align-items-center mb-4">Mot de passe<a href="#change-password" data-toggle="modal" class="ml-auto text-2 text-uppercase btn-link"><span class="mr-1"><i class="fas fa-edit"></i></span>Change</a></h3>
            <hr class="mx-n4 mb-4">
            <p class="text-3">Modifier le mot de passe. - <span class="text-muted"> </span></p>
          </div>
          <!-- Edit Details Modal
          ================================== -->
          <div id="change-password" class="modal fade " role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title font-weight-400">Changer mot de passe</h5>
                  <button type="button" class="close font-weight-400" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body p-4">
                  <form id="changePassword" method="post" action="changerAcces1.php">
                    
                    <div class="form-group">
                      <label for="newPassword">Nouveau mot de passe</label>
                      <input type="text" class="form-control" data-bv-field="newpassword" id="newPassword" name="code" required placeholder="Entrer nouveau mot de passe">
                    </div>
                    
                    <button class="btn btn-primary btn-block mt-4" type="submit">Mettre à jour</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Password End --> 
          
          
          
        
          
        </div>
        <!-- Middle Panel End --> 
      </div>
    </div>
  </div>
  <!-- Content end --> 
  
 <?php 
 include("footer.php");
 ?>