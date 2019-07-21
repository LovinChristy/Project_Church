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
          function ValidateEmail(email)  
    {  
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
        if(email.value.match(mailformat))  
        {  
                alert("Valid email id!!");
return true;
    }
    else
    {
        alert("Enter a valid email id!!");
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
            <h2>Need help with your password?</h2>
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "forgotform", "name" => "forgotform");
          echo form_open("forgot_controller/send_mail", $attributes);?>
          
            <center>  <div class="w3l-login form"><br>
			
                    <div class="form-sub-w3">
                        <input class="form-control" required="" id="email" name="email" placeholder="email" type="email" onblur="return ValidateEmail(this)" value="<?php echo set_value('email'); ?>" />
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                    </div>
                                <h5 style="color:white;">Enter the email you used in registration we’ll help you create a new password.</h5>

                    <br>
                 <div class="submit-agileits">
                     <button type="submit" id="btn_forgot" name="btn_forgot" class="btn btn-primary">Submit</button></div>
    
                
          <?php echo form_close(); ?>
          
          </div>
     
                  
	</div>
  <br><br>   <br><br>   <br><br>   <br>
<!--<hr/>-->

 <?php
                include('footer.php');
                ?>