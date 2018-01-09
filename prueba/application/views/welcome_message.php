<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <title>Login Page  | Prueba</title>
		<link rel="shortcut icon" href="./assets/images/favicon.png">
		<!-- Bootstrap CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="./css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="./css/elegant-icons-style.css" rel="stylesheet" />
    <link href="./css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/style-responsive.css" rel="stylesheet" />
</head>
<body class="login-img3-body">

	<div class="container">
		<p>
			<?php echo $this->session->flashdata('verify_msg'); ?>
		</p>
		<?php $attributes = array("name" => "loginform", "class"=>"login-form");
		echo form_open("users/login", $attributes);?>
			<div class="login-wrap">
					<p class="login-img"><i class="icon_lock_alt"></i></p>
					<div class="input-group">
						<span class="input-group-addon"><i class="icon_profile"></i></span>
						<input type="text" class="form-control" name="correo" placeholder="Correo" autofocus><span style="color:red"><?php echo form_error('correo'); ?></span>
					</div>
					<div class="input-group">
							<span class="input-group-addon"><i class="icon_key_alt"></i></span>
							<input type="password" class="form-control" name="password" placeholder="Password"><span style="color:red"><?php echo form_error('password'); ?></span>
					</div>
					<button class="btn btn-primary btn-lg btn-block" name="button-login-aceptar" type="submit">Login</button>
					<!--habilitar despuès <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>-->
			</div>
		<?php echo form_close(); ?>
	</div>
	  </div>
	</section>
	<!-- container section end -->
	<p style="color:green; font-style:bold"><?php echo $this->session->flashdata('msg_success'); ?></p>
	<p style="color:red; font-style:bold"><?php echo $this->session->flashdata('msg_error'); ?></p>
	<!-- javascripts -->
	<script src="./js/jquery.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<!-- nice scroll -->
	<script src="./js/jquery.scrollTo.min.js"></script>
	<script src="./js/jquery.nicescroll.js" type="text/javascript"></script>
	<!-- gritter -->

	<!-- custom gritter script for this page only-->
	<script src="./js/gritter.js" type="text/javascript"></script>
	<!--custome script for all page-->
	<script src="./js/scripts.js"></script>


	</body>
	</html>
