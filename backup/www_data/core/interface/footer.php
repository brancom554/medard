
  <!-- Footer
  ============================================= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg d-lg-flex align-items-center">
          <ul class="nav justify-content-center justify-content-lg-start text-3">
            
            <li class="nav-item"> <a class="nav-link" href="#">Carrieres</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Affiliation</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Frais</a></li>
          </ul>
        </div>
        <div class="col-lg d-lg-flex justify-content-lg-end mt-3 mt-lg-0">
          <ul class="social-icons justify-content-center">
            <li class="social-icons-facebook"><a data-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li class="social-icons-twitter"><a data-toggle="tooltip" href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
            <li class="social-icons-google"><a data-toggle="tooltip" href="http://www.google.com/" target="_blank" title="Google"><i class="fab fa-google"></i></a></li>
            <li class="social-icons-youtube"><a data-toggle="tooltip" href="http://www.youtube.com/" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="footer-copyright pt-3 pt-lg-2 mt-2">
        <div class="row">
          <div class="col-lg">
            <p class="text-center text-lg-left mb-2 mb-lg-0">Copyright &copy; 2020 <a href="#">MYGENO-GROUP</a>. All Rights Reserved.</p>
          </div>
          <div class="col-lg d-lg-flex align-items-center justify-content-lg-end">
            <ul class="nav justify-content-center">
              <li class="nav-item"> <a class="nav-link active" href="#">Securite</a></li>
              <li class="nav-item"> <a class="nav-link" href="#">Termes et conditions</a></li>
              <li class="nav-item"> <a class="nav-link" href="#">Politique de confidentiaite</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer end --> 
  
</div>
<!-- Document Wrapper end --> 

<!-- Back to Top
============================================= --> 
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- Styles Switcher -->
<div id="styles-switcher" class="left">
  <h2 class="text-3">Color Switcher</h2>
  <hr>
  <ul>
    <li class="blue" data-toggle="tooltip" title="Blue" data-path="css/color-blue.css"></li>
	<li class="indigo" data-toggle="tooltip" title="Indigo" data-path="css/color-indigo.css"></li>
    <li class="purple" data-toggle="tooltip" title="Purple" data-path="css/color-purple.css"></li>
	<li class="pink" data-toggle="tooltip" title="Pink" data-path="css/color-pink.css"></li>
	<li class="red" data-toggle="tooltip" title="Red" data-path="css/color-red.css"></li>
    <li class="orange" data-toggle="tooltip" title="Orange" data-path="css/color-orange.css"></li>
	<li class="yellow" data-toggle="tooltip" title="Yellow" data-path="css/color-yellow.css"></li>
	<li class="teal" data-toggle="tooltip" title="Teal" data-path="css/color-teal.css"></li>
    <li class="cyan" data-toggle="tooltip" title="Cyan" data-path="css/color-cyan.css"></li>
    <li class="brown" data-toggle="tooltip" title="Brown" data-path="css/color-brown.css"></li>
  </ul>
  <button class="btn btn-dark btn-sm btn-block border-0 font-weight-400 rounded-0 shadow-none" data-toggle="tooltip" title="Green" id="reset-color">Reset Default</button>
  <button class="btn switcher-toggle"><i class="fas fa-cog"></i></button>
</div>
<!-- Styles Switcher End --> 

<!-- Script --> 
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="vendor/daterangepicker/moment.min.js"></script> 
<script src="vendor/daterangepicker/daterangepicker.js"></script> 
<script>
$(function() {
 'use strict';
  // Birth Date
  $('#birthDate').daterangepicker({
	singleDatePicker: true,
	showDropdowns: true,
	autoUpdateInput: false,
	maxDate: moment().add(0, 'days'),
	}, function(chosen_date) {
  $('#birthDate').val(chosen_date.format('MM-DD-YYYY'));
  });
  });
</script> 
<!-- Style Switcher --> 
<script src="js/switcher.min.js"></script> 
<script src="js/theme.js"></script>
</body>
</html>