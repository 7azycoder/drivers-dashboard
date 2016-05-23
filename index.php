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
		
		<?php require_once('header.php') ; ?>
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

				$user = new User();
				if($user->isLoggedIn()){
				Redirect::to('profile.php');


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
					<h3><a href="login.php" style="color:#ffffff;">Login</a></h3>
					<p>Here you can log in to your Account</p>
				</div>

				<div class="col-lg-1 centered">
					<i class="fa fa-question-circle"></i>
				</div>
				<div class="col-lg-5">
					<h3><a href="register.php" style="color:#ffffff;">Register</a></h3>
					<p>Here ou can register for an account at I-way</p>
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

<?php require_once('footer.php') ; ?>

	
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