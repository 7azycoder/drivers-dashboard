<?php
require_once 'core/init.php';

if(Session::exists('home')){
	echo '<p>' . Session::flash('home') . '<p>';
}

$user = new User();
if($user->isLoggedIn()){
?>
	<p>Hello <a href="profile.php?user=<?php echo escape($user->data()->username); ?>"><?php echo escape($user->data()->username); ?></a>!</p>

	<ul>
		<li><a href="logout.php">Log out</a></li>
		<li><a href="update.php">Update Details</a></li>
		<li><a href="changepassword.php">Change Password</a></li>

	</ul>

<?php
	if($user->hasPermission('admin')){
		echo '<p>You are an administrator</p>';
	}


} else {
	echo '<p>You need to <a href="login.php">login</a> or <a href="register.php">register</a></p>';
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
												<a href="index1.php">Home</a>
											</li>

											<li>
												<a href="login1.php">Login</a>
											</li>

											<li>
												<a href="register1.php">Register</a>
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
			<p>Started in 1978, I-way Transport Inc is a privately held, family owned Canadian company. Our head Office is perfectly situated just off Highway 401 in Prescott Ontario, only minutes from two International bridges, between Montreal and Toronto. Our terminal locations provide you with convenient links to Mississauga and London with drop yards in Ingleside and Montreal. We provide freight transportation and logistics, outsource solutions, produce sourcing, and information services to over 46,000 customers throughout Canada and US. With the service and dedication of our employees, our performance-driven culture, and our proven track record of success, we've built a strong reputation as an industry leader. I-way Transport is a high-service, dependable and value-creating supply chain partner. The ongoing challenges of the supply chain industry inspire us to innovate and search for new ideas that challenge limits and extend Beyond Brokerage. By adopting innovation early, I-way is prepared and equipped to deliver continuous growth and improvement to you. We at I-way are not content to simply meet their expectations—we are committed to exceeding them every single day.
			</p>



		</div>
	</div>
<!-- welcome -->



	<!-- SERVICES SECTION -->
	<div id="services" class="home-section color-dark bg-gray">
				
		<div class="container">
			<div class="row mt">
				<div class="col-lg-1 centered">
					<i class="fa fa-certificate"></i>
				</div>
				<div class="col-lg-5">
					<h3>Login to your Account</h3>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				</div>

				<div class="col-lg-1 centered">
					<i class="fa fa-question-circle"></i>
				</div>
				<div class="col-lg-5">
					<h3>Register your Account</h3>
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