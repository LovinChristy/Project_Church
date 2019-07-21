<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Brethren Church | Church Register</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<!--<meta name="keywords" content="Agro Seed Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />-->
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
<script src="<?php echo base_url();?>asset/js/check_availability" type="text/javascript"></script>
<!--<SCRIPT type="text/javascript">

$("#username").change(function() 
{ 
var username = $("#username").val();
var msgbox = $("#status");

if(username.length > 4)
{
$("#status").html('<img src="asset/images/loading.gif" align="absmiddle">&nbsp;Checking availability...');

$.ajax({  
    type: "POST",  
    url: "<?php echo base_url(); ?>index.php/RegisterController/check_username",  
    data: "username="+ username,  
    success: function(msg){  
   $("#status").ajaxComplete(function(event, request){ 
    if(msg == 'OK')
    { 
    
        $("#username").removeClass("red");
        $("#username").addClass("green");
        msgbox.html('<img src="success.png" align="absmiddle">');
    }  
    else  
    {  
         $("#username").removeClass("green");
         $("#username").addClass("red");
        msgbox.html(msg);
    }  
   
   });
   } 
   
  }); 

}
else
{
$("#username").addClass("red");
$("#status").html('<font color="#cc0000">Please enter atleast 5 letters</font>');
}
return false;
});


</SCRIPT>-->
<script>
    
//function checkname()
//{
// var name=document.getElementById( "username" ).value;
//	alert($name);
// if(name)
// {
//  $.ajax({
//  type: 'post',
//  url: '<?php echo base_url(); ?>index.php/RegisterController/check_username',
//  data: {
//   username:name,
//  },
//  success: function (response) {
//    
//   $( '#status' ).html(response);
//   if(response=="OK")	
//   {
//      
//    return true;	
//   }
//   else
//   {
//    return false;	
//   }
//  }
//  });
// }
// else
// {
//  $( '#status' ).html("");
//  return false;
// }
//}
function checkname()
{
 var name=document.getElementById( "username" ).value;
 
	
 if(name)
 {
    // alert(login_emailid);
  $.ajax({
      
  type: "POST",
  url: "<?php echo base_url()?>index.php/RegisterController/check_username",
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

    </script>
</head>
<style type="text/css">
   
</style>
<body>
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
        
<script language="javascript">

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
 
<!--     //email validation-->

    function ValidateEmail(chemail)  
    {  
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
        if(chemail.value.match(mailformat))  
        {  
//            alert("Valid email id")
            return true;  
        }  
        else  
        {  
        alert("Enter a valid email id!");
//            document.getElementById('err').innerHTML="Enter a valid email id!";  
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
            return false;  
        }  
    }  
 </script>
    
<!--password match-->
    
<script type="text/javascript">
    function checkPasswordMatch() 
    {
//        var p= " ";
        
        var password = $("#password").val();
        var confirmPassword = $("#confirmpassword").val();
//        if(password != p)
//            $("#divCheckPasswordMatch").html("");
//        else 
            if (password != confirmPassword)
            $("#divCheckPasswordMatch").html("Passwords do not match!");
        
        else
            $("#divCheckPasswordMatch").html("<div class='errpass' style='color:green;'>Password match</style>");

    }
</script>

<!--form validation-->

<script language="javascript">
    function validateChurch() 
    {
    if (document.forms["signupform"]["chname"].value== "" ||document.forms["signupform"]["sname"].value== ""||
            document.forms["signupform"]["district"].value== ""||
            document.forms["signupform"]["taluk"].value== ""
            ||document.forms["signupform"]["village"].value== ""
            ||document.forms["signupform"]["postalcode"].value== ""
            ||document.forms["signupform"]["postoffice"].value== ""
            ||document.forms["signupform"]["secname"].value== ""
            ||document.forms["signupform"]["chemail"].value== ""
            ||document.forms["signupform"]["username"].value== ""
            ||document.forms["signupform"]["password"].value== ""
            ||document.forms["signupform"]["confirmpassword"].value== "") 
    {
        alert("Fill in all fields to register!!");
    }
    return false;
    }
</script>
        


<!--body begin-->

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
<!--Style for div-->
            
<style type="text/css">
    .well{
        align:center;
        background:white;
        
        width:150%;
        height:120%;
    }
   .form-box{
        
        max-width:700px;
        position:relative;
        margin:4% auto;
    }
    
   
</style>
<!-- Style for div ends-->
<!-- style for error type-->

<style type="text/css">
    .registrationFormAlert,.errpass,.err,.status{
                     color:red;
                    font-family: "Times New Roman", Times, serif;
                     font-size: 14px;
    }
</style>

<div class="w3-different-heading">
    <center><h3 style="color:black" >CHURCH SIGN UP</h3></center>
                   <!--<br>-->
                                    <?php echo $this->session->flashdata('msg'); ?>
                     
<div class="wrapper">
    <div class="container">
      <div class="row">
                   
              
                <?php
                $attributes=array("id"=>"signupform","name"=>"signupform");
                echo form_open("RegisterController/verifyChurch",$attributes);?>
                           <div class="form-box">
          <div class="panel">
            <div class="panel-heading text-center">
                           <hr></hr><center><strong><b>Church Details<b></strong></center><hr></hr>
                 </div>
            <div class="panel-body">
              <div class="row">
                    <div class="col-md-12">
                              <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label" for="chname">Church Name<span style="color:red;">*</span></label></div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="chname" name="chname" minlength="5"  maxlength="40"
                                                         placeholder="Church Name" onkeypress="return ischar(event)" required=""
                oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter church name'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">
                <span class="text-danger"> </span> <br></div></div>
                
                           
                           
                           <div class="form-group">
                           <div class="col-md-4">
                               <label class="control-label" for="sname">State
                                   <span style="color:red;">*</span></label></div>
                                   <div class="col-md-8">
                                       <select  id="sname" class="form-control"  name="sname" required="" onchange="getDist();">
                                       
                                          <option value="">Choose State</option>
                             <?php
                               foreach($records->result() as $row){ ?>
                              <option value="<?php echo $row->stateid ?>"><?php echo $row->state ?> </option>
                              <?php  } ?>

                                          </select>
                                       <span class="text-danger"><?php echo form_error('sname'); ?></span><br></div></div>
                                       
                                       
                              <div class="form-group">
                                        <div class="col-md-4">
                                           <label class="control-label" for="district">District</label></div>
                        <div class="col-md-8">
                                <select name="district" class="form-control" id="district" onchange="getTal();" 
                                    required="" >
                             <option value="">Choose district</option>
                            </select>
                              <span class="text-danger"><?php echo form_error('district'); ?></span><br></div></div>
                        
                               
                                
                             <div class="form-group">   
                                 <div class="col-md-4">
                                    <label class="control-label" for="taluk">Taluk</label> </div>
                        <div class="col-md-8"> 
                                <select name="taluk" class="form-control" id="taluk" onchange="getVillage();" 
                                     required="">
                               <option value="">Choose taluk</option>
                            </select>
                             <span class="text-danger"><?php echo form_error('taluk'); ?></span> <br></div></div>
                                
                             
                               <div class="form-group">
                                   <div class="col-md-4">
                                    <label class="control-label" for="village">Village<span style="color:red;">*</span></label></div>
                                <div class="col-md-8"> 
                                    <select name="village" class="form-control" id="village"  required="">
                                        <option value="">Choose village</option>
                            </select>
                                    <span class="text-danger"><?php echo form_error('village'); ?></span><br></div></div>
                                    
                                  
                                    <div class="form-group">
                                        <div class="col-md-4">
                                        <label class="control-label" for="postcode">Postal Code<span style="color:red;">*</span></label> </div>
                        
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="post" name="post" 
                                      onkeypress="return isNumberKey(event)" minlength="6" maxlength="6" 
                                        placeholder="Postal code like(689756)" required="" pattern="[6][0-9]{5}"
oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your postal code'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"
onchange="if( this.value.length < 6) { if(confirm('Enter 6 digit postal code'));  this.focus=true;}" >

                                        
                <span class="text-danger"><?php echo form_error('post'); ?></span><br></div></div>
                                        
                            
                                        <div class="form-group">
                                            <div class="col-md-4">
                                            <label class="control-label" for="postoffice">Post Office<span style="color:red;">*</span></label> </div>
                                    
                                               <div class="col-md-8">
                                                      <input type="text" class="form-control" id="postoffice" name="postoffice" onkeypress="return ischar(event)" 
                                                             minlength="5" maxlength="30" placeholder="PostOffice" required=""
                                                             oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter a valid postofficename'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">
                                        <span class="text-danger"><?php echo form_error('postoffice'); ?></span><br></div></div>
                                                             
                       <div class="col-md-12">
                           <hr></hr><center><strong><b>Login Credentials<b></strong></center><hr></hr></div>
                                                                          
                    
                                <div class="form-group"><div class="col-md-4">
                                    <label class="control-label" for="username">Username
                                    <span style="color:red;">*</span></label></div>
                             
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="username" name="username" onblur="checkname();"  maxlength="15" 
                                           minlength="5"  placeholder="Enter username" required="" oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter username'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                                   onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">
                                   
                                   
                            <span id="status" style=" color:red;
                    font-family: 'Times New Roman', Times, serif;
                     font-size: 14px;" ></span>
                               <?php echo form_error('username'); ?><br></div></div>
                                 
                                        
                                        
                             <div class="form-group"><div class="col-md-4">
                                 <label class="control-label" for="password">Password<span style="color:red;">*</span></label> </div>
                              <div class="col-md-8">
                                    <input type="password" class="form-control" id="password" name="password" minlength="3" maxlength="15" 
                                      onchange="return CheckPassword(this)" placeholder="Enter Password" required=""
                                      oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your password'));  
                                      this.value=this.value.replace(/\s/g,''); this.focus=true;}"
                                      onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">
                                         <div class="errpass" id="errpass">   </div>    
                                         <span class="text-danger"><?php echo form_error('password'); ?></span> <br></div></div>
                            
                                       
                                      <div class="form-group"><div class="col-md-4">
                                          <label class="control-label" for="confrimpassword">Confirm Password<span style="color:red;">*</span></label></div>
                                      <div class="col-md-8">
                                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" 
                                      placeholder="Confirm Password" onchange="checkPasswordMatch();" minlength="3" maxlength="15" 
                                                   required=""
oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your password'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}"
                                      onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">

                                        <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
                                      <span class="text-danger"><?php echo form_error('confirmpassword'); ?></span><br></div></div>
                       
                          <div class="col-md-12">
                           <hr></hr><center><strong><b>Contact Details<b></strong></center><hr></hr></div>
                               
                                  <div class="form-group"><div class="col-md-4">
                                          <label class="control-label" for="secname">Secretary
                                              <span style="color:red;">*</span> </label></div>
                                                     <div class="col-md-8">
                                        <input type="text" class="form-control" id="secname" name="secname" onkeypress="return ischar(event)"  
                                    placeholder="Secretary Name(fullname)" minlength="4" maxlength="25" required="" oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your email'));  
                                      this.value=this.value.replace(/\s/g,''); this.focus=true;}"
                                      onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">
                                        <span class="text-danger"><?php echo form_error('secname'); ?></span><br></div></div>
                        
                                              
                                               
                          <div class="form-group"><div class="col-md-4">
                                            <label class="control-label" for="chemail">Church mail id
                                                <span style="color:red;">*</span> </label></div>
                                            <div class="col-md-8">
                                         <input type="email" class="form-control" id="chemail" minlength="10" maxlength="30" name="chemail" 
                                     onchange="return ValidateEmail(this)" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"   placeholder=" Church Email Id" 
                                                required="" oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your email'));  
                                      this.value=this.value.replace(/\s/g,''); this.focus=true;}"
                                      onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">
                              <div id="err" class="err">   </div>        
                              <span class="text-danger"><?php echo form_error('chemail'); ?></span><br></div></div>
                         
                              
                              <div class="col-md-12">
                <center><button type="submit" name="btnsubmit"  id="btnsubmit" class="btn btn-warning" onclick ="return validateChurch()">SUBMIT</button></center>
                              
                   
                    <center><h5>Already a member?<a href="http://localhost/BrethrenChurch/index.php/LoginController/index">LOGIN</a></h5>
                                                    </div>
                    
                 
                </div>
                 
             <?php echo form_close(); ?>
        </div>
                  
          </div>
        </div>
      </div>
    </div>
           </div>
        </div>
      </div>
</div></div>
 <script src="<?php echo base_url();?>asset/js/jquery-1.11.1.min.js"></script>
 <!--ajax for district-->
 <script>
      
                    function getDist()
			{
				sname=$('#sname').val();
			
				$.ajax({
			    url:"<?php echo base_url(); ?>index.php/RegisterController/displays_district",
				type: "POST",
				data:{"sname":sname},
				success: function(data){
                                   // alert(data);
					$("#district").html(data);
				}
				
				});
			
			}

      
//        $("#menu-toggle").click(function (e) {
//            e.preventDefault();
//            $("#wrapper").toggleClass("toggled");
//        });
    </script>
    
    <!--ajax for taluk view-->
    <script>
      
                    function getTal()
			{
				district=$('#district').val();
			
				$.ajax({
			    url:"<?php echo base_url(); ?>index.php/RegisterController/displays_taluk",
				type: "POST",
				data:{"district":district},
				success: function(data){
                                   // alert(data);
					$("#taluk").html(data);
				}
				
				});
			
			}

      
//        $("#menu-toggle").click(function (e) {
//            e.preventDefault();
//            $("#wrapper").toggleClass("toggled");
//        });
    </script>
    
    <!--ajax for village-->
    <script>
      
                    function getVillage()
			{
				taluk=$('#taluk').val();
			
				$.ajax({
			    url:"<?php echo base_url(); ?>index.php/RegisterController/displays_village",
				type: "POST",
				data:{"taluk":taluk},
				success: function(data){
                                   // alert(data);
					$("#village").html(data);
				}
				
				});
			
			}

      
//        $("#menu-toggle").click(function (e) {
//            e.preventDefault();
//            $("#wrapper").toggleClass("toggled");
//        });
    </script>
    
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>               
                 
<!--<div class="copyright">
    <div class="container">
	<p>© 2017 Bretheren Church. All rights reserved | Design by <a href="https://www.facebook.com/lovin.a.abraham">Lovin Ann Abraham</a></p>
    </div>
</div>-->
<?php
include('footer.php');
?>