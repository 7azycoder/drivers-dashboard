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
		
		<?php require_once('header.php'); ?>
		<!-- banner -->
	<div class="banner-1">
		
	</div>
<!-- banner -->
<!-- contact -->
	<div class="contact">
			<div class="container">
				<h3>Register Your Account</h3>

				<?php
				require_once 'core/init.php';

				if(Input::exists()){
					if(Token::check(Input::get('token'))) {

						$validate = new Validate();
						$validation = $validate->check($_POST, array(
						'code' => array( 
				         'matchcode' => Input::get('code') ,
				         'required' => true,
				        ),
				       'name' => array(
				        'required' => true,
				        'min' => 2,
				        'max' => 50
				        ),
				      'username' => array(
				        'required' => true,
				        'min' => 2,
				        'max' => 20,
				        'unique' => 'drivers'
				        ),
				      'address' => array(
				        'required' => true,
				        'min' => 4,
				        'max' => 150
				        ),
				      'contact1' => array(
				        'required' => true,
				        'min' => 6,
				        'max' => 15
				        ),
				       'contact2' => array(
				        'min' => 6,
				        'max' => 15
				        ),
				      'email1' => array(
				        'required' => true,
				        'min' => 2,
				        'max' => 50,
				        'unique' => 'drivers',
				        'email_format' => true
				        ),
				       'email2' => array(
				        'min' => 2,
				        'max' => 50,
				        'unique' => 'drivers',
				        'email_format' => true
				        ),
				      'password' => array(
				        'required' => true,
				        'min' => 6
				        ),
				      'confirm' => array(
				        'required' => true,
				        'matches' => 'password'
				        )
				      ));

					    if($validation->passed()){
					      $user = new User();

					      $salt = Hash::salt(32);
					    


					      try{
					        $user->create(array(
					                   'username' => Input::get('username'),     
					                   'password' => Hash::make(Input::get('password'),$salt),    
					                   'salt' => $salt,    
					                   'name' => Input::get('name'),
					                   'address'=> Input::get('address'),
					                   'contact1' => Input::get('contact1'),
					                   'contact2' => Input::get('contact2'),
					                   'email1' => Input::get('email1'),
					                   'email2' => Input::get('email2'),        
					                   'joined' => date('Y-m-d H:i:s'),
					                   'group' => 1
					          ));

					        Session::flash('home', '<div class=" alert alert-success" role="alert">You have been registered sucessfully and can now log in!</div>');
					        Redirect::to('index.php');

					      } catch(Exception $e) {
					        die($e->getMessage());
					      }

							
						} else {
							foreach ($validation->errors() as $error) {
								echo '<div class="alert alert-warning" role="alert">' . $error .'</div>';
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
									<div class="col-md-12 in-contact">
										<input type="text" name="code" id="code" value="<?php echo escape(Input::get('code'));?>" autocomplete="off" placeholder="Enter Registration Code Provided to you by I-way">
									</div>
									<div class="clearfix"> </div>
								</div>

								<div class="contact-bottom">
									<div class="col-md-6 in-contact">
										<input type="text" name="name" id="name" value="<?php echo escape(Input::get('name'));?>" autocomplete="off" placeholder="Your Name">
									</div>
									<div class="col-md-6 in-contact">
										<input type="text" name="username" id="username" value="<?php echo escape(Input::get('username'));?>" autocomplete="off" placeholder="Username of your choice">
									</div>
									<div class="clearfix"> </div>
								</div>
							

								<div class="contact-bottom">
									<div class="col-md-6 in-contact">
										<input type="text" name="email1" id="email1" value="<?php echo escape(Input::get('email1'));?>" autocomplete="off" placeholder="Primary Email Address">
									</div>
									<div class="col-md-6 in-contact">
										<input type="text" name="email2" id="email2" value="<?php echo escape(Input::get('email2'));?>" autocomplete="off" placeholder="Secondary Email Address (Optional)">
									</div>
									<div class="clearfix"> </div>
								</div>

								<div class="contact-bottom">
									<div class="col-md-6 in-contact">
										<input type="text" name="contact1" id="contact1" value="<?php echo escape(Input::get('contact1'));?>" autocomplete="off" placeholder="Primary Contact Number">
									</div>
									<div class="col-md-6 in-contact">
										<input type="text" name="contact2" id="contact2" value="<?php echo escape(Input::get('contact2'));?>" autocomplete="off" placeholder="Secondary Contact Number (Optional)">
									</div>
									
									<div class="clearfix"> </div>
								</div>

								<div class="contact-bottom-top">
									<textarea name="address" id="address" value="<?php echo escape(Input::get('address'));?>" autocomplete="off" placeholder="Enter Your Address"></textarea>								
								</div>

								<div class="contact-bottom">
									<div class="col-md-6 in-contact">
										<input type="password" name="password" id="password" placeholder="Preferred Password">
									</div>
									<div class="col-md-6 in-contact">
										<input type="password" name="confirm" id="confirm" placeholder="Password Again">
									</div>
									<div class="clearfix"> </div>
								</div>
							
								<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
								<input type="submit" value="Register">
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