<?php
include("header.php");

?>


<!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">>Nous sommes le  <?php echo date("m-d-Y").", il est :".date("H:i"); ?></h1>
                        </div>
					
											<center>
		 <h3>LIER SA CARTE DE CREDIT AU COMPTE</h3>
			
<form id="forminter" action="lierCarte1.php" method="post" name="" id="" class="" scrolltop="0" scrollleft="0" style="display: block; width: auto;float:center;display:; min-height: 0px; height: auto;border:0 black solid;text-align:left" margin:auto>
<fieldset style="min-width:438px;width:85%;border-radius:10px;padding-bottom:;border:2px #e6e6e6ed solid">
<center><legend style="font-size:12px;background:#6495ed;color:white;font-weight:bold">LIER SA CARTE DE CREDIT AU COMPTE </legend></center>
<h4 style="color:red">ERREUR <?php echo $user;?>  .VEUILLEZ D'ABORD LIER UNE CARTE DE CRÉDIT À VOTRE COMPTE</h4>
</fieldset>
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