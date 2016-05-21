<?php
require_once 'core/init.php';
$user = new User();
if($user->isLoggedIn()){
   Redirect::to('profile.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>I-way Trans</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/icons/i-waytrans.png">


		<!-- Google Font -->
		<link href="fonts/css" rel="stylesheet" type="text/css">
		<link href="fonts/css(1)" rel="stylesheet" type="text/css">


		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/dropdown.css">
		<link rel="stylesheet" href="css/global.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">


		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/layout.css">
		
		


		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	





</head>
	
  <body>
		
		<!--Wrapper Section Start Here -->
		<div id="wrapper" class="homepage homepage-1" style="padding-top: 0px;">
			<!--header Section Start Here -->
			<header id="header" class="header normal">
				<!-- primary header Start Here -->
				<div class="primary-header">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="mail">
									<img src="images/icon-mail.png" alt="">
									<span>Email us at : <a class="email-us" href="mailto:dispatch@i-waytransport.com">dispatch@i-waytrans.com</a></span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="social-wrap clearfix">
									<a href="#" class="request">Driver Portal</a>
									<ul class="social">
										<li>
											<a href="#"> <i class="fa fa-facebook"></i> </a>
										</li>
										<li>
											<a href="#"> <i class="fa fa-twitter"></i> </a>
										</li>
										<li>
											<a href="#"> <i class="fa fa-google-plus"></i> </a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- primary header Ends Here -->
				<!-- main header Starts Here -->
				<div class="main-header">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 hidden-xs">

								<div class="call-us">
									<ul>
										<li>
											<img src="images/iphone.png" alt="">
											<span class="transport">CALL US NOW FOR <span></span> YOUR TRANSPORT</span>
										</li>
										<li>
											<a href="tel:5917890123">591 7890 123</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<a href="#" class="logo"> <img src="images/i-waytrans.jpg" alt=""> </a>

							</div>
							<div class="col-xs-12 col-sm-9 custom-nav">
								<nav>
									<div id="cssmenu"><div id="menu-button">Menu</div>
										<ul class="navigation">
											<li class="active ">
												<a href="index.php">Home</a>
											</li>

											<li>
												<a href="login.php">Login</a>
											</li>

											<li>
												<a href="register.php">Register</a>
											</li>

											
											
										</ul>
									</div>
								</nav>

								<div class="nav-icon">
									<span></span>
									<span></span>
									<span></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- main header Ends Here -->
			</header>
			<!--header Section Ends Here -->
		<!-- banner -->
	<div class="banner-1">
		
	</div>
<!-- banner -->
<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<h2>Welcome to Driver Portal</h2>

		</div>
	</div>
<!-- welcome -->

	<div class="container">

		<?php
				require_once 'core/init.php';

				if(Session::exists('home')){
					echo  Session::flash('home') ;
				}

		?>

	</div>



	<!-- SERVICES SECTION -->
	<div id="services" class="home-section color-dark bg-gray">
				
		<div class="container">
			<div class="row mt">
				<div class="col-lg-1 centered">
					<i class="fa fa-certificate"></i>
				</div>
				<div class="col-lg-5">
					<h3><a href="login.php" style="color:#ffffff;">Login to your Account</a></h3>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				</div>

				<div class="col-lg-1 centered">
					<i class="fa fa-question-circle"></i>
				</div>
				<div class="col-lg-5">
					<h3><a href="register.php" style="color:#ffffff;">Register your Account</a></h3>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				</div>
			
			
				
			
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- services section -->



<div class="hr">
</div>

<div class="hr">
</div>

<div class="hr">
</div>

<!--  footer -->

<!-- Map Section
   ================================================== -->
   <section id="map">

      <p class="map-error">Something went wrong... Unable to load map... Please try to enable javascript</p>

   </section> <!-- Map Section End-->
<footer>
   		<div class="container">

      <div class="row-new">

         <div class="col g-7">
            <ul class="copyright">
               <li>&copy; 2014 Kreative</li>
               <li>Design by <a href="http://www.styleshout.com/" title="Styleshout">Styleshout</a></li>               
            </ul>
         </div>

         <div class="col g-5 pull-right">
            <ul class="social-links">
               <li><a href="#"><i class="icon-facebook"></i></a></li>
               <li><a href="#"><i class="icon-twitter"></i></a></li>
               <li><a href="#"><i class="icon-google-plus-sign"></i></a></li>
               <li><a href="#"><i class="icon-linkedin"></i></a></li>
               <li><a href="#"><i class="icon-skype"></i></a></li>
               <li><a href="#"><i class="icon-rss-sign"></i></a></li>
            </ul>
         </div>

      </div>
      </div>

   </footer> <!-- Footer End-->

	
		</div>
		<!--Wrapper Section Ends Here -->

	
		<script src="js/script.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/site.js"></script>


		   <!-- Java Script
   ================================================== -->
   
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/jquery.reveal.js"></script>
   <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
   <script src="js/gmaps.js"></script>
   <script src="js/init.js"></script>


 
	
</html>