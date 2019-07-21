<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Brethren Church | Evangelist Register</title>

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
    
    <li><a href="<?php echo base_url();?>index.php/LoginController/index" data-hover="Login">Login</a></li>
    
 </ul>
</div>
<!-- /.navbar-collapse -->
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
  url: "<?php echo base_url()?>index.php/EvangelistController/check_username",
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
if(ev_email.value.match(mailformat))  
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
document.getElementById('errph').innerHTML="<div class='errph' style='color:red;'>Enter the valid Mobile Number(Like : 9566137117)</style>";
document.signupform.phone.focus();
return false;
}
else if((a.length < 10))
{
document.getElementById('errph').innerHTML="<div class='errph' style='color:red;'>Your Mobile Number must be 1 to 10 Integers</style>";
document.signupform.phone.select();
return false;
}
else
{
   document.getElementById('errph').innerHTML="<div class='errph' style='color:green;'></style>";
 
}
}

</script>
    
<!--//password match-->
<script type="text/javascript">
function checkPasswordMatch() {
//            var p= " ";

    var password = $("#password").val();
    var confirmPassword = $("#confirmpassword").val();
//if(password != p)
//            $("#divCheckPasswordMatch").html("Enter password field first!");
//        else
            if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("<div class='errpass' style='color:green;'>Password match</style>");
}
</script>

<!--style for well and table-->
<style type="text/css">
    .form-box{
        
        max-width:800px;
        position:relative;
        margin:4% auto;
    }
    
   
</style>
  <style type="text/css">
    .registrationFormAlert,.err,.errph,.errd,.errpass{
                     color:red;
                    font-family: "Times New Roman", Times, serif;
                     font-size: 14px;
    }
</style>
<!--validate form,if empty-->
<script language="javascript">
            function validateEvangelist() {
    if (document.forms["signupform"]["evname"].value== "" 
//            ||document.forms["signupform"]["chname"].value== ""||
            document.forms["signupform"]["housename"].value== ""||
            document.forms["signupform"]["username"].value== ""
            ||document.forms["signupform"]["password"].value== ""
            ||document.forms["signupform"]["confirmpassword"].value== ""
           ||document.forms["signupform"]["gender"].value== ""
            ||document.forms["signupform"]["ev_email"].value== ""
            ||document.forms["signupform"]["ev_phone"].value== ""
            ||document.forms["signupform"]["state"].value== ""
           ||document.forms["signupform"]["district"].value== ""
            ||document.forms["signupform"]["taluk"].value== ""
            ||document.forms["signupform"]["village"].value== ""
              ||document.forms["signupform"]["postoffice"].value== ""
              ||document.forms["signupform"]["post"].value== ""
               ||document.forms["signupform"]["evphoto"].value== ""
       {
        alert("Fill in all fields to register!!");
        
    }
   return false;
}
        </script>
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
-->		<div class="w3-different-heading">
    <center><h3 style="color:black" >EVANGELIST SIGN UP</h3></center>  
                  <div class="wrapper">
    <div class="container">
      <div class="row">
                <?php
                $attributes=array("id"=>"signupform","name"=>"signupform", "enctype"=>"multipart/form-data");
                echo form_open("EvangelistController/verifyEvangelist",$attributes);?>
                <div class="form-box">
          <div class="panel">
            <div class="panel-heading text-center">
                <hr></hr><center><strong><b>Login details<b></strong></center><hr></hr></div>
                 <div class="panel-body">
              <div class="row">
                    <div class="col-md-12">
                              <div class="form-group">
                                                <div class="col-md-4">
                            <label class="control-label" for="evname">Full Name <span style="color:red;">*</span></label>
                                                </div>
                            <div class="col-md-8"><input type="text" class="form-control" id="evname" name="evname"  maxlength="30" placeholder="Full Name" 
                                                         onkeypress="return ischar(event)" required="" oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter evangelist name'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">
                                <span class="text-danger"><?php echo form_error('evname'); ?></span><br>
                            </div></div>
<!--                     <tr style="line-height:50px; width:30%;">
                         <td>
                           <label class="control-label" for="chname">Church<span style="color:red;">*</span></label>
                        </td>
                         <td>
                            <select name="chname" class="form-control" id="chname" onblur="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}" required=""  >
                               <option value="">Choose church</option>
                              <?php //foreach($churchdata as $ch){ ?>
                     <option value="<?php// echo $ch->chnameid ?>"><?php// echo $ch->chname ?></option>
                    <?php// } ?> 
                              </select>
                             <span class="text-danger"><?php //echo form_error('chname'); ?></span> 
                         </td>
                     </tr>-->
                     <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label" for="housename">Family name <span style="color:red;">*</span> </label></div>
                       
                          
                                                <div class="col-md-8"><input type="text" class="form-control" id="housename" name="housename" onkeypress="return ischar(event)"  
                                                                             oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your family name'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}" placeholder="Family Name" required="">
                                                    <span class="text-danger"><?php echo form_error('housename'); ?></span> <br></div></div> 
                                                    
                        <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label" for="username">Username<span style="color:red;">*</span></label></div>
                         
                                                <div class="col-md-8">
                              <input type="text" class="form-control" id="username" name="username" maxlength="15" 
                                     oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter a username'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}" onchange="checkname();" placeholder="User name" required="">
                              <span class="text-danger"><?php echo form_error('username'); ?></span>
                              <span id="status" style=" color:red;
                    font-family: 'Times New Roman', Times, serif;
                     font-size: 14px;" ></span><br></div></div>
                         
                              <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label" for="password">Password<span style="color:red;">*</span></label></div>
                        
                                                <div class="col-md-8">
                            <input type="password" class="form-control" id="password" name="password" onchange="return CheckPassword(this)" maxlength="15" 
                                   oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your password'));  
                                      this.value=this.value.replace(/\s/g,''); this.focus=true;}"
                                      onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"placeholder="Password" required="">
                            <div id="errpass">   </div>    <span class="text-danger"><?php echo form_error('password'); ?></span> <br></div></div> 
                        
                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label" for="confirmpassword">Confirm Password<span style="color:red;">*</span></label>
                                                </div>
                         
                                                <div class="col-md-8">
                              <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" onchange="checkPasswordMatch();" maxlength="15" 
                                     oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your password'));  
                                      this.value=this.value.replace(/\s/g,''); this.focus=true;}"
                                      onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"required="">
                                <div class="registrationFormAlert" id="divCheckPasswordMatch">
                                </div><span class="text-danger"><?php echo form_error('confirmpassword'); ?></span>
                                                </div>
                            </div>
                        
                       <div class="col-md-12">
    <hr></hr><center><strong><b>Enter personal details<b></strong></center><hr></hr></div>

                     
                     <div class="form-group">
                         <div class="col-md-4"><label class="control-label" for="userfile">Upload photo<span style="color:red;">*</span></label></div>
                             
                                                <div class="col-md-8">
                                                    <input type='file' class="form-control" name='userfile' accept="image/gif, image/jpeg, image/png, image/jpg"  size='20' id='file' required=""/><br></div></div>
		 
<!--                            -->
                       <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label" for="ev_email">E-Mail id <span style="color:red;">*</span></label></div>
                        
                                                <div class="col-md-8">
                            <input type="email" class="form-control" id="ev_email" name="ev_email" onchange="return ValidateEmail(this)"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" 
                                   
                                       placeholder=" Enter a valid Email Id" required="" oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter email id'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">
                            <div id="err" class="err">   </div>  
                            <span class="text-danger"><?php echo form_error('ev_email'); ?></span> <br> </div></div> 
                            
                        <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label" for="ev_phone">Phone<span style="color:red;">*</span></label></div>
                       
                                                <div class="col-md-8">
                                                    <input type="phone" class="form-control" id="ev_phone" name="ev_phone" maxlength="10" minlength="10" pattern="[789] [0-9] {9}" onchange="return phoneValidation()" 
                                                           onkeypress="return isNumberKey(event)" placeholder="contact no." required="" onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">
                            <div id="errph">   </div>    
                            <span class="text-danger"><?php echo form_error('ev_phone'); ?></span>  <br></div></div>
                   <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label" for="gender">Gender<span style="color:red;">*</span></label></div>
                         
                                                <div class="col-md-8">
                             <input type="radio"  id="gender" name="gender" required="" value="Male">Male
                             <input type="radio"  id="gender" name="gender"  required="" value="Female">Female
                                                   <input type="radio"  id="gender" name="gender"  required="" value="Other">Other
                                                   <span class="text-danger"><?php echo form_error('gender'); ?></span><br></div></div>
                            <div class="col-md-12">
  <hr></hr><center><strong><b>Enter address details<b></strong></center><hr></hr></div>

                     
                     <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label" for="state">State<span style="color:red;">*</span></label></div>
                       
                                                <div class="col-md-8">
                            <select name="state" class="form-control" id="state" onchange="getDist();"  required=""  >
                               <option value="">Choose state</option>
                              <?php foreach($statedata as $s){ ?>
                     <option value="<?php echo $s->stateid ?>"><?php echo $s->state ?></option>
                    <?php } ?> 
                              </select>
                                                    <span class="text-danger"><?php echo form_error('state'); ?></span> <br></div></div>
                       <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label" for="district">District</label></div>
                       
                                                <div class="col-md-8">
                            <select name="district" class="form-control" id="district" onchange="getTal();" required=""  >
                               <option value="">Choose district</option>
                              
                              </select>
                                                    <span class="text-danger"><?php echo form_error('district'); ?></span><br> </div></div>
                      <div class="form-group">
                                                <div class="col-md-4">                               
                                                    <label class="control-label" for="taluk">Taluk</label></div>
                        
                                                <div class="col-md-8">
                         <select name="taluk" class="form-control" id="taluk" onchange="getVillage();"  required="">
                               <option value="">Choose taluk</option>
                            
                         </select>
                                                    <span class="text-danger"><?php echo form_error('taluk'); ?></span> <br>  </div></div> 
                       <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label" for="village">Village</label></div>
                       
                                                <div class="col-md-8">
                           <select name="village" class="form-control" id="village" required="">
                          <option value="">Choose village</option>
                             
                         </select>
                                                    <span class="text-danger"><?php echo form_error('village'); ?></span> <br> </div></div>
                       <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label" for="postoffice">Post office<span style="color:red;">*</span></label></div>
                         
                                                <div class="col-md-8">
                             <input type="text" class="form-control" id="postoffice" name="postoffice" maxlength="25" onkeypress="return ischar(event)" 
                                    oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter a valid postofficename'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}" placeholder="Enter post office" required="">
                             <span class="text-danger"><?php echo form_error('postoffice'); ?></span> <br></div></div>
                       <div class="form-group">
                                              
                           <div class="col-md-4">
                                                    
                               <label class="control-label" for="postcode">Postal Code<span style="color:red;">*</span></label></div>
                        
                                                
                               <div class="col-md-8">
                                    <input type="text" class="form-control" id="post" name="post" maxlength="6" pattern="[6][0-9]{5}"  onkeypress="return isNumberKey(event)"
                                        oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your postal code'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                                            onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"
                                                onchange="if( this.value.length < 6) { if(confirm('Enter 6 digit postal code'));  this.focus=true;}"placeholder="Enter postal code" required="">
                             <span class="text-danger"><?php echo form_error('post'); ?></span> </div></div>
                        
<!--                      <tr style="line-height:50px; width:30%;">
                         <td>
                            <label class="control-label" for="hofphoto">Photo</label>
                         </td>
                         <td>
                             <input type="text" class="form-control" id="hofphoto" name="hofphoto" maxlength="14" onblur="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"  placeholder="Enter postal code" required="">
                            <span class="text-danger"><?php// echo form_error('hofphoto'); ?></span> 
                         </td>
                     </tr>-->
                     
                     
                     
                        <div class="col-md-12"><br>
                            <center><button type="submit" name="btnsubmit" class="btn btn-warning" onclick="return validateEvangelist()" onsubmit="return CheckPassword();">SUBMIT</button>
                       <br><center><h5>Already a member?<a href="http://localhost/BrethrenChurch/index.php/LoginController/index">LOGIN</a></h5>
                       </center></div>
                    <?php //echo $this->session->flashdata('msg'); ?>
                 
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
    </div> </div>
    
 <script src="<?php echo base_url();?>asset/js/jquery-1.11.1.min.js"></script>
 <!--ajax for district-->
 <script>
      
                    function getDist()
			{
				state=$('#state').val();
			
				$.ajax({
			    url:"<?php echo base_url(); ?>index.php/EvangelistController/displays_district",
				type: "POST",
				data:{"state":state},
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
			    url:"<?php echo base_url(); ?>index.php/EvangelistController/displays_taluk",
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
			    url:"<?php echo base_url(); ?>index.php/EvangelistController/displays_village",
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
                 
<?php
include('footer.php');
?>