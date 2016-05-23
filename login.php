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
<!-- contact -->
	<div class="contact">
			<div class="container">
				<h3>Login to your account</h3>
				<?php
					require_once 'core/init.php';

					if(Input::exists()){
						if(Token::check(Input::get('token'))){
							$validate = new Validate();
							$validation = $validate->check($_POST, array(
								'username' => array('required' => true),
								'password' => array('required' =>true)
								));

							if($validation->passed()){
								$user = new User();

								$remember = (Input::get('remember') === 'on') ? true : false ;
								$login = $user->login(Input::get('username'),Input::get('password'),$remember);

								if($login){
									Redirect::to('profile.php');
								} else {
									echo '<div class="alert alert-warning" role="alert"> Sorry , logging in failed .</div>';
								}
							} else {
								foreach ($validation->errors() as $error) {
								 echo '<div class="alert alert-warning" role="alert">'. $error. '</div>';
								}
							}
						}
					}

					?>

				<!--div class=" map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.91163207516!2d2.3470599!3d48.85885894999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1436340519910" allowfullscreen=""></iframe>				
				</div-->
				<div class="contact-grids">
					<div class="contact-form">
							<form action="" method="post">
						
								<div class="contact-bottom">
									<div class="col-md-6 in-contact">
										<input type="text" name="username" id="username" value="<?php echo escape(Input::get('username'));?>" autocomplete="off" placeholder="Username">
									</div>
									<div class="clearfix"> </div>
								</div>
							
								<div class="contact-bottom">
									<div class="col-md-6 in-contact">
										<input type="password" name="password" id="password" placeholder="Password">
									</div>
									<div class="clearfix"> </div>
								</div>
								

								<div class="contact-bottom">
									<div class="col-md-6 in-contact">
										<input type="checkbox" name="remember" id="remember"> Remember me
									</div>
									<div class="clearfix"> </div>
								</div>

								<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
								<input type="submit" value="Log In">
								
								<div class="contact-bottom">
									<div class="col-md-6 in-contact">
									<p> Not Registered?   <a href="register.php"><b>Register here</b></a></p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</form>
						</div>
		
				
			</div>
		</div>
	</div>
<!-- contact -->


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