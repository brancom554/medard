<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="mygeno">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace client - MYGENO-GROUP BANQUE SERVICES</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Goole Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/assets/bootstrap.min.css">
    <!-- Font awsome CSS -->
    <link rel="stylesheet" href="css/assets/font-awesome.min.css">    
    <link rel="stylesheet" href="css/assets/flaticon.css">
    <link rel="stylesheet" href="css/assets/magnific-popup.css"> 
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/assets/owl.carousel.css">
    <link rel="stylesheet" href="css/assets/owl.theme.css">     
    <link rel="stylesheet" href="css/assets/animate.css"> 
    <!-- Mean Menu-->
    <link rel="stylesheet" href="css/assets/meanmenu.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="css/assets/slick.css">   
	<link rel="stylesheet" href="css/assets/preloader.css"/>
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

<body>
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
                    <h1>Espace client</h1>
                    <div class="pages_linka">
                        <a href="#" title="">Accueil</a>
                        <a href="#" title="" class="active">Connexion</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section>  <!-- End title header -->


<section class="become_a_instructor">
    <div class="container">  
        <div class="row">        
            <div class="col-sm-10 col-md-4 col-lg-4">
                <div class="video_img wow fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
                    <img src="images/instructor.jpg" alt="" class="img-fluid">
                    <div class="video_wrapper  wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s">
                        <div class="video-play-btn">
                            <span><a href="https://www.youtube.com/watch?v=s3qN4Ea2xVU" class="video-iframe"><i class="fa fa-play"></i></a></span>
                        </div>
                    </div> 
                </div>
            </div>            
            <div class="col-sm-10 col-md-8 col-lg-8">
                <div class="apply_instructor">
                    <div class="form_title">
                        <h3>Veuillez remplir le formulaire ci-dessous</h3>
                    </div>
                    <form action="connexion.php" method="POST">
                        <div class="row">
                            <div class="col-12 col-lg-12 col-md-12 col-lg-12">
							    <div class="row">
                                <div class="form-group">
								   
                                    <label class="control-label">Identifiant</label>
                                    <input type="text" name="pseudo" class="form-control" required placeholder="">
                                </div>&nbsp;&nbsp;
								
								</div>
                            </div>                            
                            <div class="col-12 col-lg-12 col-md-12 col-lg-12">
							  <div class="row">
                                <div class="form-group">
                                    <label class="control-label">Code secret</label>
                                    <input type="password" name="password" class="form-control" required placeholder="">
                                </div>&nbsp;&nbsp;
							
								</div>
                            </div> 
                           
                           
                            
                            

                            

                            						
                            
                            
                            <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                
                                <div class="col-3">
                                    
                                </div>
                                
                                <div class="col-6">
                                     <button type="submit" class="btn btn-default submit_btn">Connexion</button>
                                </div>
                               
                               <div class="col-3">
                                    
                                </div>
                            </div> 
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>             
</section>

<!--========={ Footer }========-->
<?php include("footer.php")?>