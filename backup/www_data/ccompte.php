<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Page de contact de la MyGeno-Group Banque Services">
    <meta name="keywords" content="credit,banque, services">
    <meta name="author" content="Venture Capital">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devenir client | MyGeno-Group Banque Services</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Goole Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/assets/bootstrap.min.css">
    <!-- Font awsome CSS -->
    <link rel="stylesheet" href="css/assets/font-awesome.min.css">    
    <link rel="stylesheet" href="css/assets/flaticon.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/assets/owl.carousel.css">
    <link rel="stylesheet" href="css/assets/owl.theme.css">     
    <link rel="stylesheet" href="css/assets/animate.css"> 
    <!-- Mean Menu-->
    <link rel="stylesheet" href="css/assets/meanmenu.css">
    <link rel="stylesheet" href="css/assets/preloader.css"/>
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="css/assets/slick.css">   

    <!-- main style-->
    <link rel="stylesheet" href="css/style.css">    
    <link rel="stylesheet" href="css/master.css"> 
    <link rel="stylesheet" href="css/responsive.css">
                     
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
</head>

<header>
	 <!-- bostage-->
<script>window.azameoSite = "venturecapitalcorporate";</script>
<script type="text/javascript" src="//tag.azame.net/tag/script.js" async = "true"></script>
<noscript>
<link href="https://tag.azame.net/tag/style.css" rel="stylesheet" media="all" type="text/css">
</noscript>

 <!-- bostage-->
</header>
<body class="contact_page">
<!-- Preloader -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!--========={ EcoStudy Nav }========-->
<?php include("menu-service.php")?>

<?php include("menu2.php")?>
<!--========={ Title Header }========-->
<section class="sub_header_banner">
    <div class="container">  
        <div class="row">        
            <div class="col-sm-10 col-md-12 col-lg-12">
                <div class="intro_text">
                    <h1>Inscription</h1>
                    <div class="pages_linka">
                        <a href="#" title="">Accueil</a>
                        <a href="#" title="" class="active">Devenir client</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section>  <!-- End title header -->


<!--========={ contact Info }========-->
<section class="contact_info_wrapper">
    <div class="container">  
        <div class="row">                  
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 p-0">
               <div class="event_details">
                    <div class="details_title">
                        
						<?php 
 if(!empty($_GET['compte'])){
$compte=$_GET['compte'];
?>
<h3>Votre compte
 <?php echo $compte ;?> a été créé avec succès dans notre banque. Les informations de connexion vous ont été envoyées par email </ h3> <br> <br> <br> <br>
<h5 style = "color: red! important;"> NB: votre compte est toujours inactif, veuillez contacter votre responsable de compte pour l'activation dans les 24 heures.</h5>
<br><br><br><br><br><br><br><br>
<?php 
   }
?>
<br>
                    </div>
                    <div class="event_location_info">                  
                        <ul class="list-unstyled">
                            <li><p class="hall_location">Location</p></li>                        
                            <li><p>1 rue Louis Lichou</p><span>29480 Le Relecq-Kerhuon<br> France</span></li>
                            <li><p>Email</p><span>contact@mygeno-group.com</span></li>                        
                            <li><p>Phone</p><span>+337-5234-0759</span><br><span> </span></li>
                        </ul>
                        <img src="images/shape/contact.png" alt="" class="contact__info_shpae">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="info_banner">
        <div class="container-fluid">  
            <div class="row">                  
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 ml-auto p-0">
                   <img src="images/contact1.png" alt="" class="img-fluid">
               </div>
            </div>
        </div>
    </div>
</section> <!-- End contact Info -->




<!--========={ Footer }========-->
<?php include("footer.php")?>