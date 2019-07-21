<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Brethren Church | Association Register</title>

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
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<style type="text/css">
   
</style>
<body >
	<!-- banner -->
	<div class="banner">
		<div class="head">
			<div class="container">
					<div class="navbar-top">
							<!-- Brand and toggle get grouped for better mobile display -->
							

											<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
    </button>
    <div class="navbar-brand logo ">
	<h1 class="animated wow pulse" data-wow-delay=".2s">
	<a href="<?php echo base_url();?>index.php">Bretheren<span>Church</span></a></h1>
    </div>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav link-effect-4">
    <li class="active"><a href="<?php echo base_url();?>index.php/HomeController/index" data-hover="Home">Home</a> </li>
    
    <li><a href="<?php echo base_url();?>index.php/LoginController/index" data-hover="Contact" >Login</a></li>
    
 </ul>
</div><!-- /.navbar-collapse -->
						</div>
					  <div class="clearfix"></div>	
			</div>
		</div>
        </div>
        

    <script>
        function checkname()
{
 var name=document.getElementById( "username" ).value;
 
	
 if(name)
 {
    // alert(login_emailid);
  $.ajax({
      
  type: "POST",
  url: "<?php echo base_url()?>index.php/AssociationController/check_username",
   data: {"username":name},
  success: function (response) {
    
   $( '#status' ).html(response);
   if(response=="OK")	
   {
      
    return true;	
   }
   else
   {
    return false;	
   }
  }
  });
 }
 else
 {
  $( '#status' ).html("");
  return false;
 }
}


	 function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
	  function ischar(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
        
                   if ((charCode < 33)||(charCode > 64 && charCode < 91) ||( charCode > 96 && charCode <123))
                    return true;

         return false;
      }
      </script>
<!--     //email validation-->
<script>
function ValidateEmail(ev_email)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(ev_femail.value.match(mailformat))  
{  
            alert("Valid email id")

return true;  
}  
else  
{  
                    alert("Enter a valid email id!");
 
 
return false;  
}  
}
</script>
<!--Password validation-->
<script>
function CheckPassword(password)   
{   
var passw=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{5,15}$/;
        if(password.value.match(passw))   
        {   
//            document.getElementById('errpass').innerHTML="<div class='errpass' style='color:green;'>Strong Password!</style>";  
            return true;  
        }
         
        else  
        {   
            alert("Try another password (minimum 5 character and include(digit,uppercase,underscore)!"); 
            document.signupform.password.focus();
            return false;  
        }  

}  
 </script>
 <!--phone validation-->
 
    <script type="text/javascript">
function phoneValidation()
{
var a = document.signupform.ev_phone.value;
 if(isNaN(a))
{
document.getElementById('errph').innerHTML="Enter the valid Mobile Number(Like : 9566137117)";
document.signupform.ev_phone.focus();
return false;
}
else if((a.length < 1) || (a.length > 10))
{
document.getElementById('errph').innerHTML="Your Mobile Number must be 1 to 10 Integers";
document.signupform.ev_phone.select();
return false;
}
else
{
   document.getElementById('errph').innerHTML="Your Mobile Number valid";
 
}
}

</script>
    
<!--//password match-->
<script type="text/javascript">
function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#confirmpassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("<div class='errpass' style='color:red;'> Passwords do not match!</style>");
    else
        $("#divCheckPasswordMatch").html("<div class='errpass' style='color:green;'></style>");
}
</script>

<!--style for well and table-->
<style type="text/css">
    .well{
        align:center;
        background:white;
        
        width:140%;
        height:120%;
    }
    .form-box{
        
        max-width:700px;
        position:relative;
        margin:2% auto;
    }
    
   
</style>

<!--validate form,if empty-->
<script language="javascript">
            function validateAssociation() {
    if (document.forms["signupform"]["asname"].value== "" 
            ||document.forms["signupform"]["username"].value== ""
            ||document.forms["signupform"]["password"].value== ""
            ||document.forms["signupform"]["confirmpassword"].value== ""
           
       {
        alert("Fill in all fields to register!!");
        return false;
    }
//   
}
        </script>
          <style type="text/css">
    .registrationFormAlert,.err,.errph,.errd,.errpass{
                     color:red;
                    font-family: "Times New Roman", Times, serif;
                     font-size: 14px;
    }
</style>
  <body>
  <div class="jarallax about-banner">
   <div class="container">
<!--                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>
-->
<div class="w3-different-heading">
    <center><h3 style="color:black" >ASSOCIATION SIGN UP</h3> </center>
                   <!--<br>-->
                  
<div class="wrapper">
    <div class="container">
      <div class="row">
         <?php
                $attributes=array("id"=>"signupform","name"=>"signupform", "enctype"=>"multipart/form-data");
                echo form_open("AssociationController/verifyAssociation",$attributes);?>
        <div class="form-box">
          <div class="panel">
            <div class="panel-heading text-center">
              <hr></hr>Login details<hr></hr>
            </div>
            <div class="panel-body">
              <div class="row">
                    <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-md-4"><label for="state">Association Name<span style="color:red;">*</span></label></div>
<!--                    <input type="text" class="form-control" id="statename" name="statename" maxlength="30" placeholder="Enter State Name in capital letter" onkeypress="return ischar(event)" required onblur="if (this.value == '') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">-->
                                                <div class="col-md-8"><input type="text" class="form-control" id="asname" name="asname" minlength="3"  maxlength="50" placeholder="Association Name" 
                              onkeypress="return ischar(event)" required="" oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter association name'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">                         
                                            </div></div>

                        <br>
                                              <div class="form-group">
                                                  <div class="col-md-4"><label for="state">Username<span style="color:red;">*</span></label></div>
<!--                    <input type="text" class="form-control" id="statename" name="statename" maxlength="30" placeholder="Enter State Name in capital letter" onkeypress="return ischar(event)" required onblur="if (this.value == '') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">-->
                                                  <div class="col-md-8"> <input type="text" class="form-control" id="username" minlength="5" name="username" maxlength="15" oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter username'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}" 
                                                    onchange="checkname();" placeholder="Maximum 14 characters" required="">
                                <span id="status" style=" color:red;
                    font-family: 'Times New Roman', Times, serif;
                     font-size: 14px;" ></span> <span class="text-danger"><?php echo form_error('username'); ?></span> </div></div>
                               
                               <br>
                               
                               <div class="form-group">
                                   <div class="col-md-4"> <label for="state">Password<span style="color:red;">*</span></label></div>
<!--                    <input type="text" class="form-control" id="statename" name="statename" maxlength="30" placeholder="Enter State Name in capital letter" onkeypress="return ischar(event)" required onblur="if (this.value == '') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">-->
                                   <div class="col-md-8"><input type="password" class="form-control" id="password" name="password" minlength="5" onchange="return CheckPassword(this)" oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your password'));  
                                      this.value=this.value.replace(/\s/g,''); this.focus=true;}" onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}" maxlength="15"  placeholder="Password" required="">
                            <div id="errpass">   </div>    <span class="text-danger"><?php echo form_error('password'); ?></span>    </div>
                               </div>
                            <br>
                            
                            
                            <div class="form-group">
                                <div class="col-md-4"><label for="state">Confirm Password<span style="color:red;">*</span></label></div>
                      <div class="col-md-8"><input type="password" class="form-control" id="confirmpassword" name="confirmpassword" oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your password'));  
                                                   this.value=this.value.replace(/\s/g,''); this.focus=true;}" onchange="return checkPasswordMatch();" maxlength="15" minlength="5"   onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}" placeholder="confirm Password" required="">
                          <div id="divCheckPasswordMatch">   </div>    <span class="text-danger"><?php echo form_error('confirmpassword'); ?></span><br></div>    </div>
                          
                               </div>
                  <br>
                    <div class="form-group">
                                    <div class="col-md-12">
                                         <center>  
                                             <button type="submit"  value ="add" id="btnsubmit" name="btnsubmit"  class="btn btn-warning next-step" onclick ="return CheckPassword()">SUBMIT</button>
                                                 </center>
                                        <br>
                                         <center><h5>Already a member?<a href="http://localhost/BrethrenChurch/index.php/LoginController/index">LOGIN</a></h5>
                                            </div>
                                            </div>
                  
                 
                </div>
                 <?php echo form_close();?>
                  <?php echo $this->session->flashdata('msg');?>
        </div>
                  </div>
          </div>
          
        </div>
        
      </div>
    </div>
                   <br><br><br><br>
  </div>
    </div>
   </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>               
                 
<?php
include('footer.php');
?>