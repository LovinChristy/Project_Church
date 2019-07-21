<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Brethren Church | Login</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Agro Seed Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="<?php echo base_url();?>asset/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="<?php echo base_url();?>asset/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Laila:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- //font -->
<script src="<?php echo base_url();?>asset/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url();?>asset/js/bootstrap.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link href="<?php echo base_url();?>asset/css/logincss.css" rel="stylesheet" type="text/css" media="all" />
<!--online fonts-->
<link href="//fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Righteous&amp;subset=latin-ext" rel="stylesheet">
<!--//online fonts-->
</head>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 

</head>

<body onload="ClearForm()" >
	<!-- banner -->
    <div class="banner">
	<div class="head">
            <div class="container">
		<div class="navbar-top">
	<!-- Brand and toggle get grouped for better mobile display -->
                    
                <?php include('header.php'); ?>
                </div>
		<div class="clearfix"></div>	
            </div>
        </div>
    </div>
 
  

<body>
	<h1></h1>
        
 <?php 
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("LoginController/index", $attributes);?><br><br>
	<div class="wthree-form">
			<h2>Login here</h2>
               <?php echo $this->session->flashdata('msg'); ?>
                        <br>
		<div class="w3l-login form">
			<!--<form action="#" method="post">-->
				<div class="form-sub-w3">
                                    <input id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>" required=""  />
                    <span class="text-danger"><?php echo form_error('txt_username'); ?></span>				</div>
				<div class="form-sub-w3">
                                    <input id="txt_password" name="txt_password" placeholder="Password" type="password" value="<?php echo set_value('txt_password'); ?>" required="" />
                                                        <a href="http://localhost/BrethrenChurch/index.php/forgot_controller/index"><span style="color:white;"><h5>Forgot password?</h5></span></a>  

                                    <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
				</div>
				<label class="anim">

<!--					
<input type="checkbox" class="checkbox"><span>
                                            Remember Me</span>-->
					 
				</label>
				<div class="submit-agileits">
					 <input id="btn_login" name="btn_login" type="submit"  value="Login" />
                   <input id="btn_cancel" name="btn_cancel" type="reset"  value="Reset" /> 
                   <!--<a href="<?php current_url();?>"> <input id="btn_cancel" name="btn_cancel" type="button"  value="Cancel" /></a>-->
                                </td></tr>
    
				</div>

                                          <a href="http://localhost/BrethrenChurch/index.php/LoginController/choose"> <span style="color:white;">Create an account</span></a>    
			     <?php echo form_close(); ?>
		</div>
	</div>
		
</body>

                    <div class="footer-agileits">
			<p>© 2017 Bretheren Church. All rights reserved | Design by <a href="https://www.facebook.com/lovin.a.abraham">Lovin Ann Abraham</a></p>
		</div>
		