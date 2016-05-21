<?php

require_once 'core/init.php';

$user = new User();

if(!$user->isLoggedIn()){
	Redirect::to('index.php');

}
else {





?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>I-waytrans</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/boot.min.css" rel="stylesheet">
	<link href="css/boot-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/sty.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/sty-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
			<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>I-way Transport Inc</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> <?php echo escape($user->data()->username); ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="profile.php"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="logout.php"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="profile.php"><i class="icon-user"></i><span class="hidden-tablet"> Profile</span></a></li>	
						<li><a href="edit_profile.php"><i class="icon-edit"></i><span class="hidden-tablet"> Edit Profile</span></a></li>
						<li><a href="documents.php"><i class="icon-folder-open"></i><span class="hidden-tablet"> Documents</span></a></li>
						<li><a href="upload.php"><i class="icon-upload"></i><span class="hidden-tablet"> Upload File</span></a></li>	
						<li><a href="payrolls.php"><i class="icon-file"></i><span class="hidden-tablet"> Payrolls</span></a></li>
						<li><a href="calendar.php"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					
					<a href="edit_profile.php">Edit Profile</a>
				</li>
			</ul>
			
			

			<div class="row-fluid sortable">
				<div class="container">

				<?php
						if(Input::exists()){
							if(Token::check(Input::get('token'))){
								$validate = new Validate();
								$validation = $validate->check($_POST, array(
									'name' => array(
									'required' => true,
									'min' => 2,
									'max' => 50
									),
									'address' => array(
							        'required' => true,
							        'min' => 4,
							        'max' => 150
							        ),
							        'email1' => array(
							        'required' => true,
							        'min' => 2,
							        'max' => 50,
							        'email_format' => true
							        ),
							       'email2' => array(
							        'min' => 2,
							        'max' => 50,
							        'email_format' => true
							        ),
							      'contact1' => array(
							        'required' => true,
							        'min' => 6,
							        'max' => 15
							        ),
							       'contact2' => array(
							        'min' => 6,
							        'max' => 15
							        )
							      
								));
								if($validation->passed()){
									try{
										$user->update(array(
											'name' => Input::get('name'),
							                'address'=> Input::get('address'),
							                'email1' => Input::get('email1'),
							                'email2' => Input::get('email2'), 
							                'contact1' => Input::get('contact1'),
							                'contact2' => Input::get('contact2')
											));
										echo '<div class="alert alert-success" role="alert"> Your details have been updated !</div>';
										//Session::flash('profile', '<div class="alert alert-success" role="alert">Your details have been updated !</div>');
										//Redirect::to('profile.php');

									} catch(Exception $e){
										die($e->getMessage());
									}


								} else{
									foreach($validation->errors() as $error){
										echo '<div class="alert alert-warning" role="alert">' . $error . '</div>';
									}
								}
							}
						}
						
				?>
				</div>
				
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
						
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="name">Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="name" id="name" type="text" value="<?php echo escape($user->data()->name); ?>">
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="focusedInput">Address</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="address" id="address" type="text" value="<?php echo escape($user->data()->address); ?>">
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="focusedInput">Email 1</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="email1" id="email1" type="text" value="<?php echo escape($user->data()->email1); ?>">
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="focusedInput">Email 2</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="email2" id="email2" type="text" value="<?php echo escape($user->data()->email2); ?>">
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="contact1">Contact 1</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="contact1" id="contact1" type="text" value="<?php echo escape($user->data()->contact1); ?>">
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="contact2">Contact 2</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="contact2" id="contact2" type="text" value="<?php echo escape($user->data()->contact2); ?>">
								</div>
							  </div>
							  
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary" >Save changes</button>
								<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
								</div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			


	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2016 <a href="www.i-waytrans.com" alt="">I-way Transport Inc</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="js/dashboard/jquery-1.9.1.min.js"></script>
	<script src="js/dashboard/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/dashboard/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/dashboard/jquery.ui.touch-punch.js"></script>
	
		<script src="js/dashboard/modernizr.js"></script>
	
		<script src="js/dashboard/bootstrap.min.js"></script>
	
		<script src="js/dashboard/jquery.cookie.js"></script>
	
		<script src='js/dashboard/fullcalendar.min.js'></script>
	
		<script src='js/dashboard/jquery.dataTables.min.js'></script>

		<script src="js/dashboard/excanvas.js"></script>
	<script src="js/dashboard/jquery.flot.js"></script>
	<script src="js/dashboard/jquery.flot.pie.js"></script>
	<script src="js/dashboard/jquery.flot.stack.js"></script>
	<script src="js/dashboard/jquery.flot.resize.min.js"></script>
	
		<script src="js/dashboard/jquery.chosen.min.js"></script>
	
		<script src="js/dashboard/jquery.uniform.min.js"></script>
		
		<script src="js/dashboard/jquery.cleditor.min.js"></script>
	
		<script src="js/dashboard/jquery.noty.js"></script>
	
		<script src="js/dashboard/jquery.elfinder.min.js"></script>
	
		<script src="js/dashboard/jquery.raty.min.js"></script>
	
		<script src="js/dashboard/jquery.iphone.toggle.js"></script>
	
		<script src="js/dashboard/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/dashboard/jquery.gritter.min.js"></script>
	
		<script src="js/dashboard/jquery.imagesloaded.js"></script>
	
		<script src="js/dashboard/jquery.masonry.min.js"></script>
	
		<script src="js/dashboard/jquery.knob.modified.js"></script>
	
		<script src="js/dashboard/jquery.sparkline.min.js"></script>
	
		<script src="js/dashboard/counter.js"></script>
	
		<script src="js/dashboard/retina.js"></script>

		<script src="js/dashboard/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>

<?php
 }

 ?>
