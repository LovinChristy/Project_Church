<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Brethren Church</title>

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

<!--//password match-->
<script type="text/javascript">
function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#confirmpassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("Passwords match");
}
</script>
  <script language="javascript">
            function validateForm() 
            {
    if (document.forms["forgotform"]["txt_username"].value== ""
            ||document.forms["forgotform"]["old_password"].value== ""
    ||document.forms["forgotform"]["new_password"].value== ""
            ||document.forms["forgotform"]["retype_password"].value== "") 
    {
        alert("Fill in all fields to register!!");
        return false;
    }
    }
    </script>
</head>

<body >
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
  <br><br> <br><br>
        <div class="wthree-form">
            <h2>Change Password</h2>
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "forgotform", "name" => "forgotform");
          echo form_open("AssociationMainController/checkoldpswd", $attributes);?>
          
            <center>  <div class="w3l-login form"><br>
			<!--<form action="#" method="post">-->
<!--				<div class="form-sub-w3">
                    <input class="form-control" id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>"  />
                    <span class="text-danger"><?php // echo form_error('txt_username'); ?></span></div>-->
                    <div class="form-sub-w3">
                          <input class="form-control" id="oldpassword" name="oldpassword" placeholder="Old Password" type="password" value="<?php echo set_value('old_password'); ?>" />
                    <span class="text-danger"><?php echo form_error('oldpassword'); ?></span>
                    </div>
                    <div class="form-sub-w3">
                        <input class="form-control" id="new_password" name="new_password" placeholder="New Password" type="password" value="<?php echo set_value('new_password'); ?>" />
                    <span class="text-danger"><?php echo form_error('new_password'); ?></span>
                    </div>
                    <div class="form-sub-w3">
                        <input class="form-control" id="new_password" name="retype_password" placeholder="Confirm Password" type="password" value="<?php echo set_value('retype_password'); ?>" />
                    <span class="text-danger"><?php echo form_error('retype_password'); ?></span>
                    </div>
                   
                 <div class="submit-agileits">
                     <button type="submit" id="btn_forgot" name="btn_forgot" class="btn btn-warning" onclick="return validateForm()" >Submit</button></div>
    
                
          <?php echo form_close(); ?>
          
          </div>
     
                  
	</div>
  <br><br> 
<hr/>

 <?php
                include('footer.php');
                ?>
</div>