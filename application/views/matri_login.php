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


<body>
	<h1></h1>
        
 <?php 
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("MatrimonyController/login_process", $attributes);?><br><br>
	<div class="wthree-form">
			<h2>Login here</h2>
               <?php echo $this->session->flashdata('msg'); ?>
                        <br>
		<div class="w3l-login form">
			<!--<form action="#" method="post">-->
				<div class="form-sub-w3">
					 <input id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>"  />
                    <span class="text-danger"><?php echo form_error('txt_username'); ?></span>				</div>
				<div class="form-sub-w3">
					 <input id="txt_password" name="txt_password" placeholder="Password" type="password" value="<?php echo set_value('txt_password'); ?>" />
                    <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
				</div>
				<label class="anim">
<!--					<input type="checkbox" class="checkbox"><span>
                                            Remember Me</span>-->
					 
				</label>
				<div class="submit-agileits">
					 <input id="btn_login" name="btn_login" type="submit"  value="Login" />
                   <input id="btn_cancel" name="btn_cancel" type="reset"  value="Reset" /> <a href="<?php current_url();?>"> <input id="btn_cancel" name="btn_cancel" type="button"  value="Cancel" /></a></td></tr>
    
				</div>
					  <a href="http://localhost/BrethrenChurch/index.php/forgot_controller/index"><span style="color:white;">Forgot password?</span></a>  

                                          <!--<span>Not a member?</span> <a href="http://localhost/BrethrenChurch/index.php/LoginController/choose"> <span style="color:white;">Sign up</span></a>-->    
			     <?php echo form_close(); ?>
		</div>
	</div>
		
</body>

                    <div class="footer-agileits">
			<p>© 2017 Bretheren Church. All rights reserved | Design by <a href="https://www.facebook.com/lovin.a.abraham">Lovin Ann Abraham</a></p>
		</div>
		