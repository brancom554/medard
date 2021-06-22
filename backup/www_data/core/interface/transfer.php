<?php include("header.php");?>
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                                                    <a href="dashboard.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Tableau de bord</a>
                            <span class="breadcrumb-item active"></span>
                                            </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>
            </div>
        </div>
        <!-- /page header -->

        
        <!-- Content area -->
        <div class="content">
<center>
            
    <div class="card">
        <div class="bg-info card-header header-elements-inline">
            <h5 class="card-title">Transfert de Fonds</h5>
        </div>

        <div class="card-body">
            <p class="mb-4"> </p>

            <form action="virrementExt.php" method="post">
                <input type="hidden" name="_token" value="3ApnOMYj39MxzdVp76o380Tl81JOlvakWPo5kJpU">                <fieldset class="mb-3">
                    <legend class="text-uppercase font-size-sm font-weight-bold"></legend>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2" for="bank">NOM DE LA BANQUE</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="bank" value="" required id="bank">
                                                    
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2" for="iban">NUMERO IBAN</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="iban" value="" required id="iban">
                                                   
                        </div>
                    </div>
                    
                     <div class="form-group row">
                        <label class="col-form-label col-lg-2" for="iban">NOM DU BENEFICIAIRE</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="nomPersonne" value="" required id="nomPersonne">
                                                   
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2" for="iban">MOTIF DE TRANSACTION</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="motif" value="" required id="motif">
                                                   
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2" for="iban">NUMERO DE COMPTE</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="numeroCompte" value="" required id="numeroCompte">
                                                   
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2" for="swift">BIC</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="swift" value="" required id="swift">
                                                   
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2" for="amount">MONTANT (€)</label>
                        <div class="col-lg-6">
                            <input type="number" class="form-control" name="amount" value="<?php echo $_SESSION['solde'];?>" required id="amount">
                                                   
                         </div>
                    </div>

                </fieldset>

                <div class="text-right">
                    <button type="submit" id="block-page" class="btn btn-primary legitRipple btn-ladda btn-ladda-spinner">Continuer <i class="icon-next ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>

</center>
        </div>
        <!-- /content area -->


        <?php include("footer.php");?>
        