<?php 
include("header.php");
?>
  <!-- Secondary menu
  ============================================= -->
  <div class="bg-primary">
    <div class="container d-flex justify-content-center">
      <ul class="nav secondary-nav">
        <li class="nav-item"> <a class="nav-link" href="settings-profile.php">Mon profil</a></li>
        <li class="nav-item"> <a class="nav-link" href="settings-security.php">Securite</a></li>
        <li class="nav-item"> <a class="nav-link active" href="settings-payment-methods.php">Methodes de paiement</a></li>
        
      </ul>
    </div>
  </div>
  <!-- Secondary menu end --> 
  
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
            <p class="mb-2"><a href="settings-profile.php" class="text-5 text-light" data-toggle="tooltip" title="Edit Profile"><i class="fas fa-edit"></i></a></p>
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
          
          <!-- Credit or Debit Cards
          ============================================= -->
          <div class="bg-white shadow-sm rounded p-4 mb-4">
            <h3 class="text-5 font-weight-400 mb-4">Carte de credit ou de debit  <span class="text-muted text-4">(pour paiement)</span></h3>
            <hr class="mb-4 mx-n4">
            <div class="row">
              <div class="col-12 col-sm-6 col-lg-4">
                <div class="account-card account-card-primary text-white rounded p-3 mb-4 mb-lg-0">
                  <p class="text-4">4972-9164-8551-1052</p>
                  <p class="d-flex align-items-center"> <span class="account-card-expire text-uppercase d-inline-block opacity-7 mr-2">Valide<br>
                    thru<br>
                    </span> <span class="text-4 opacity-9">02/22</span> <span class="badge badge-warning text-0 font-weight-500 rounded-pill px-2 ml-auto">Primaire</span> </p>
                  <p class="d-flex align-items-center m-0"> <span class="text-uppercase font-weight-500"><?php echo $_SESSION["nom"].'&nbsp;&nbsp;'.$_SESSION["prenom"];?></span> <img class="ml-auto" src="images/payment/visa.png" alt="visa" title=""> </p>
                  <div class="account-card-overlay rounded"> <a href="#" data-target="#edit-card-details" data-toggle="modal" class="text-light btn-link mx-2"><span class="mr-1"><i class="fas fa-edit"></i></span>Editer</a> <a href="#" class="text-light btn-link mx-2"><span class="mr-1"><i class="fas fa-minus-circle"></i></span>Supprimer</a> </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-lg-4">
                <div class="account-card text-white rounded p-3 mb-4 mb-lg-0">
                  <p class="text-4">5137-7082-3685-3969</p>
                  <p class="d-flex align-items-center"> <span class="account-card-expire text-uppercase d-inline-block opacity-7 mr-2">Valide<br>
                    thru<br>
                    </span> <span class="text-4 opacity-9">04/22</span> </p>
                  <p class="d-flex align-items-center m-0"> <span class="text-uppercase font-weight-500"><?php echo $_SESSION["nom"].'&nbsp;&nbsp;'.$_SESSION["prenom"];?></span> <img class="ml-auto" src="images/payment/mastercard.png" alt="mastercard" title=""> </p>
                  <div class="account-card-overlay rounded"> <a href="#" data-target="#edit-card-details" data-toggle="modal" class="text-light btn-link mx-2"><span class="mr-1"><i class="fas fa-edit"></i></span>Editer</a> <a href="#" class="text-light btn-link mx-2"><span class="mr-1"><i class="fas fa-minus-circle"></i></span>Supprimer</a> </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-lg-4"> <a href="" data-target="#add-new-card-details" data-toggle="modal" class="account-card-new d-flex align-items-center rounded h-100 p-3 mb-4 mb-lg-0">
                <p class="w-100 text-center line-height-4 m-0"> <span class="text-3"><i class="fas fa-plus-circle"></i></span> <span class="d-block text-body text-3">Ajouter une carte</span> </p>
                </a> </div>
            </div>
          </div>
          <!-- Edit Card Details Modal
          ================================== -->
          <div id="edit-card-details" class="modal fade" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title font-weight-400">Modifier Carte</h5>
                  <button type="button" class="close font-weight-400" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body p-4">
                  <form id="updateCard" method="post">
                    <div class="form-group">
                      <label for="edircardNumber">Numero carte</label>
                      <div class="input-group">
                        <div class="input-group-prepend"> <span class="input-group-text"><img class="ml-auto" src="images/payment/visa.png" alt="visa" title=""></span> </div>
                        <input type="text" class="form-control" data-bv-field="edircardNumber" id="edircardNumber" disabled value="4972-9164-8551-1052" placeholder="Card Number">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="editexpiryDate">Date expiration</label>
                          <input id="editexpiryDate" type="text" class="form-control" data-bv-field="editexpiryDate" required value="02/22" placeholder="MM/YY">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="editcvvNumber">CVV <span class="text-info ml-1" data-toggle="tooltip" data-original-title="For Visa/Mastercard, the three-digit CVV number is printed on the signature panel on the back of the card immediately after the card's account number. For American Express, the four-digit CVV number is printed on the front of the card above the card account number."><i class="fas fa-question-circle"></i></span></label>
                          <input id="editcvvNumber" type="password" class="form-control" data-bv-field="editcvvNumber" required value="568" placeholder="CVV (3 digits)">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="editcardHolderName">Nom sur la carte</label>
                      <input type="text" class="form-control" data-bv-field="editcardHolderName" id="editcardHolderName" required value='<?php echo $_SESSION["nom"].'&nbsp;&nbsp;'.$_SESSION["prenom"];?>' placeholder="Card Holder Name">
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Mettre à jour carte</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Add New Card Details Modal
          ================================== -->
          <div id="add-new-card-details" class="modal fade" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title font-weight-400">Ajouter une carte</h5>
                  <button type="button" class="close font-weight-400" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body p-4">
                  <form id="addCard" method="post" action="lierCarte1.php">
                    <div class="btn-group d-flex btn-group-toggle mb-3" data-toggle="buttons">
                      <label class="btn btn-outline-secondary btn-sm shadow-none w-100 active">
                        <input type="radio" name="options" id="option1" checked>
                        Debit </label>
                      <label class="btn btn-outline-secondary btn-sm shadow-none w-100">
                        <input type="radio" name="options" id="option2">
                        Credit </label>
                    </div>
                    <div class="form-group">
                      <label for="cardType">Card Type</label>
                      <select id="cardType" class="custom-select" required="">
                        <option value="">Card Type</option>
                        <option>Visa</option>
                        <option>MasterCard</option>
                        <option>American Express</option>
                        <option>Discover</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="cardNumber">Numero carte</label>
                      <input type="text" class="form-control" data-bv-field="cardnumber" id="cardNumber" name="numero" required value="" placeholder="Card Number">
                    </div>
                    <div class="form-row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="expiryDate">Date expiration</label>
                          <input id="expiryDate" type="text" class="form-control" data-bv-field="expiryDate" name="dateExp" required value="" placeholder="MM/YY">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="cvvNumber">CVV <span class="text-info ml-1" data-toggle="tooltip" data-original-title="For Visa/Mastercard, the three-digit CVV number is printed on the signature panel on the back of the card immediately after the card's account number. For American Express, the four-digit CVV number is printed on the front of the card above the card account number."><i class="fas fa-question-circle"></i></span></label>
                          <input id="cvvNumber" type="password" class="form-control" data-bv-field="cvvnumber" name="cvv" required value="" placeholder="CVV (3 digits)">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="cardHolderName">Nom sur la carte</label>
                      <input type="text" class="form-control" data-bv-field="cardholdername" id="cardHolderName" name="montant" required value="" placeholder="Card Holder Name">
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Ajouter Carte</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Credit or Debit Cards End --> 
          
          <!-- Bank Accounts
          ============================================= -->
          <div class="bg-white shadow-sm rounded p-4 mb-4">
            <h3 class="text-5 font-weight-400 mb-4">Compte bancaire offshore <span class="text-muted text-4"></span></h3>
            <hr class="mb-4 mx-n4">
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="account-card account-card-primary text-white rounded mb-4 mb-lg-0">
                  <div class="row no-gutters">
                    <div class="col-3 d-flex justify-content-center p-3">
                      <div class="my-auto text-center"> <span class="text-13"><i class="fas fa-university"></i></span>
                        <p class="badge badge-warning text-0 font-weight-500 rounded-pill px-2 mb-0">Primaire</p>
                      </div>
                    </div>
                    <div class="col-9 border-left">
                      <div class="py-4 my-2 pl-4">
                        <p class="text-4 font-weight-500 mb-1">IINBNK GROUP</p>
                        <p class="text-4 opacity-9 mb-1">XXXXXXXXXXXX-9025</p>
                        <p class="m-0">Approved <span class="text-3"><i class="fas fa-check-circle"></i></span></p>
                      </div>
                    </div>
                  </div>
                  <div class="account-card-overlay rounded"> <a href="#" data-target="#bank-account-details" data-toggle="modal" class="text-light btn-link mx-2"><span class="mr-1"><i class="fas fa-share"></i></span>More Details</a> <a href="#" class="text-light btn-link mx-2"><span class="mr-1"><i class="fas fa-minus-circle"></i></span>Delete</a> </div>
                </div>
              </div>
              
            </div>
          </div>
          <!-- Edit Bank Account Details Modal
          ======================================== -->
          <div id="bank-account-details" class="modal fade" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered transaction-details" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="row no-gutters">
                    <div class="col-sm-5 d-flex justify-content-center bg-primary rounded-left py-4">
                      <div class="my-auto text-center">
                        <div class="text-17 text-white mb-3"><i class="fas fa-university"></i></div>
                        <h3 class="text-6 text-white my-3">IINBNK GROUP</h3>
                        <div class="text-4 text-white my-4">XXXXXXXXXXXX-9025</div>
                        <p class="badge badge-light text-0 font-weight-500 rounded-pill px-2 mb-0">Primaire</p>
                      </div>
                    </div>
                    <div class="col-sm-7">
                      <h5 class="text-5 font-weight-400 m-3">Details du compte bancaire offshore
                        <button type="button" class="close font-weight-400" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                      </h5>
                      <hr>
                      <div class="px-3">
                        <ul class="list-unstyled">
                          <li class="font-weight-500">Type de compte:</li>
                          <li class="text-muted">Temoin</li>
                        </ul>
                        <ul class="list-unstyled">
                          <li class="font-weight-500">Nom du compte:</li>
                          <li class="text-muted">XXXX XXXX</li>
                        </ul>
                        <ul class="list-unstyled">
                          <li class="font-weight-500">Numero de compte:</li>
                          <li class="text-muted">XXXXXXXXXXXX-9025</li>
                        </ul>
                        <ul class="list-unstyled">
                          <li class="font-weight-500">Pays de la banque:</li>
                          <li class="text-muted">USA</li>
                        </ul>
                        <ul class="list-unstyled">
                          <li class="font-weight-500">Statut:</li>
                          <li class="text-muted">Approuve <span class="text-success text-3"><i class="fas fa-check-circle"></i></span></li>
                        </ul>
                        <p><a href="#" class="btn btn-sm btn-outline-danger btn-block shadow-none"><span class="mr-1"><i class="fas fa-minus-circle"></i></span>Supprimer le comptet</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
        </div>
        <!-- Middle Panel End --> 
      </div>
    </div>
  </div>
  <!-- Content end --> 
 <?php
 include("footer.php");
 ?>