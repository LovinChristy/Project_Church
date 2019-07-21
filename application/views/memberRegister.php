<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Brethren Church | Family Register</title>

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

<script src="<?php echo base_url();?>asset/js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});$(function() {
 $("#datepicker").datepicker();
 $("#datepicker").on('change', function(){

         var date = Date.parse($(this).val());

         if (date > Date.now()){
             alert('Please select another date');
             $(this).val('');
         }

    });
});
        
</script> 
<script src="<?php echo base_url(); ?>asset/js/jquery-ui.js"></script>
					  <script>
							  $(function() {
							    $( "#datepicker1,#datepicker2" ).datepicker();
//                                                            minDate:new Date();
                                                            max
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
  url: "<?php echo base_url()?>index.php/FamilyController/check_username",
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
function ValidateEmail(hofemail)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(hofemail.value.match(mailformat))  
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

function Name() {
    var nameInput = document.signupform.famname.value;
    var letters =/^[A-Za-z]+$/;
    if (nameInput.match(letters))  {
    return true ;
  } else { 
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
    
var a = document.signupform.phone.value;
 if(isNaN(a))
{
document.getElementById('errph').innerHTML="<div class='errph' style='color:red;'>Enter the valid Mobile Number(Like : 9566137117)</style>";
document.signupform.phone.focus();
return false;
}
else if((a.length < 10))
{
document.getElementById('errph').innerHTML="<div class='errph' style='color:red;'>Your Mobile Number should contain 10 Integers</style>";
document.signupform.phone.select();
return false;
}
else
{
   document.getElementById('errph').innerHTML="";
 
}
}

function validatedate(dob)
  {
  var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
  // Match the date format through regular expression
  if(dob.value.match(dateformat))
  {
  document.signupform.dob.focus();
  //Test which seperator is used '/' or '-'
  var opera1 = dob.value.split('/');
  var opera2 = dob.value.split('-');
  lopera1 = opera1.length;
  lopera2 = opera2.length;
  // Extract the string into month, date and year
  if (lopera1>1)
  {
  var pdate = dob.value.split('/');
  }
  else if (lopera2>1)
  {
  var pdate = dob.value.split('-');
  }
  var dd = parseInt(pdate[0]);
  var mm  = parseInt(pdate[1]);
  var yy = parseInt(pdate[2]);
  // Create list of days of a month [assume there is no leap year by default]
  var ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];
  var current_year=new Date().getFullYear();
  var limit_year=(current_year-100);
  var current_month=new Date().getMonth()+1;

  
  //var limit_month=(current_year-100); 
        if((yy < limit_year) || (yy > current_year))
            {
              document.getElementById('errd').innerHTML="<div class='errd' style='color:red;'>Invalid date format!!</style>"; 
            return false;
            }
            if((yy == current_year) && ( mm > current_month))
            {
              document.getElementById('errd').innerHTML="<div class='errd' style='color:red;'>Invalid date format!!</style>"; 
            return false;
            }
          
            
   
  if (mm==1 || mm>2)
  {
  if (dd>ListofDays[mm-1])
  {
  document.getElementById('errd').innerHTML="<div class='errd' style='color:red;'>Invalid date format!!</style>"; 

  return false;
  }
  }
  if (mm==2)
  {
  var lyear = false;
  if ( (!(yy % 4) && yy % 100) || !(yy % 400)) 
  {
  lyear = true;
  }
  if ((lyear==false) && (dd>=29))
  {
   document.getElementById('errd').innerHTML="<div class='errd' style='color:red;'>Invalid date format!!</style>"; 

  return false;
  }
  if ((lyear==true) && (dd>29))
  {
    document.getElementById('errd').innerHTML="<div class='errd' style='color:red;'>Invalid date format!!</style>"; 

  return false;
  }
  }
  document.getElementById('errd').innerHTML=""; 
  return true;
  }
  else
  {
    document.getElementById('errd').innerHTML="<div class='errd' style='color:red;'>Invalid date format!!</style>"; 
  document.signupform.dob.focus();
  return false;
  }
   
  }


</script>
    
<!--//password match-->
<script type="text/javascript">
function checkPasswordMatch() {
            var p= " ";

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
/*    .well{
        align:center;
        background:white;
        
        width:150%;
        height:120%;
    }*/
    .form-box{
        
        max-width:800px;
        position:relative;
        margin:4% auto;
    }
    
   
</style>

<!--validate form,if empty-->
<script language="javascript">
    
            function validateFamily() {
    if (document.forms["signupform"]["famname"].value== "" 
            ||document.forms["signupform"]["chname"].value== ""||
            document.forms["signupform"]["hofname"].value== ""||
            document.forms["signupform"]["username"].value== ""
            ||document.forms["signupform"]["password"].value== ""
            ||document.forms["signupform"]["confirmpassword"].value== ""
           ||document.forms["signupform"]["gender"].value== ""
            ||document.forms["signupform"]["dob"].value== ""
           ||document.forms["signupform"]["occupation"].value== ""
            ||document.forms["signupform"]["hofemail"].value== ""
            ||document.forms["signupform"]["phone"].value== ""
            ||document.forms["signupform"]["state"].value== ""
           ||document.forms["signupform"]["district"].value== ""
            ||document.forms["signupform"]["taluk"].value== ""
            ||document.forms["signupform"]["village"].value== ""
              ||document.forms["signupform"]["postoffice"].value== ""
              ||document.forms["signupform"]["post"].value== ""
              ||document.forms["signupform"]["userfile"].value== ""
             ) 
     
//       {
//        alert("Fill in all fields to register!!");
//    }
//    return false;
//    }
   
//}
//$(function() {
// $("#datepicker1").datepicker();
// $("#datepicker1").on('change', function(){
//
//         var date = Date.parse($(this).val());
//
//         if (date > Date.now()){
//             alert('Please select another date');
//             $(this).val('');
//         }
//
//    });
//});
        </script>
        <style type="text/css">
    .registrationFormAlert,.err,.errph,.errd,.errpass{
                     color:red;
                    font-family: "Times New Roman", Times, serif;
                     font-size: 14px;
    }
/*    .date {
	background: url(../images/date-icon.png) no-repeat 95.5% 45% #fff;
	cursor: pointer;
	padding: 8px 0;
}
input#datepicker ,input#datepicker1 ,input#datepicker2 {
  display: inline-block;
  width: 100%;
  border: 1px solid #EEE;
  margin-top: 5px;
  text-indent: 10px;
}
input[type="date"], input[type="time"], input[type="datetime-local"], input[type="month"] {
  line-height: 0px;
}*/

</style>
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script>
    $(function() {
      $( "#datepicker" ).datepicker({ minDate: -100, maxDate: "+0D" });
      $("#datepicker").datepicker("setDate",new Date());
      $( "#datepicker" ).datepicker( "option", "dateFormat", "dd/mm/yy");
    });
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
--><div class="w3-different-heading">
    <center><h3 style="color:black">FAMILY SIGN UP</h3></center>
                        <?php echo $this->session->flashdata('msg'); ?>

         <div class="wrapper">
    <div class="container">
      <div class="row">
                   
              <?php
                $attributes=array("id"=>"signupform","name"=>"signupform", "enctype"=>"multipart/form-data");
                echo form_open("FamilyController/verifyFamily",$attributes);?>
                <div class="form-box">
          <div class="panel">
            <div class="panel-heading text-center">
                <hr></hr><center><strong><b>Login details<b></strong></center><hr></hr></div>
                 <div class="panel-body">
              <div class="row">
                    <div class="col-md-12">
                              <div class="form-group">
                                                <div class="col-md-4">
                                                    <label for="famname">Family Name <span style="color:red;">*</span></label></div>
                                                   <div class="col-md-8"><input type="text" class="form-control" id="chname" name="famname" minlength="5" maxlength="30" placeholder="Family Name" 
                                   onkeypress="return ischar(event)"  required=""
                                   oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter family name'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">
                            <span class="text-danger"><?php echo form_error('famname'); ?></span><br></div></div>
                        
                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label" for="chname">Church<span style="color:red;">*</span></label>
                                                </div>
                       
                            <div class="col-md-8">
                                <select name="chname" class="form-control" id="chname"  required=""  >
                               <option value="">Choose church</option>
                              <?php foreach($churchdata as $ch){ ?>
                     <option value="<?php echo $ch->chid ?>"><?php echo $ch->chname ?></option>
                    <?php } ?> 
                              </select>
                             <span class="text-danger"><?php echo form_error('chname'); ?></span> 
                             <br></div></div>
                        
                           <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label" for="hofname">Family head<span style="color:red;">*</span> </label>
                                                </div>
                        
                             <div class="col-md-8">
                                 <input type="text" class="form-control" id="hofname" name="hofname" minlength="3" maxlength="25" onkeypress="return ischar(event)" 
 placeholder="Family Head Name" required=""
 oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Enter name of family head'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">
                                            <span class="text-danger"><?php echo form_error('hofname'); ?></span> 
                                            <br></div></div>
                       
                          <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label" for="username">Username<span style="color:red;">*</span></label>
                                                </div>
                         
                             <div class="col-md-8">
                                 <input type="text" class="form-control" id="username" name="username" maxlength="15" minlength="5" 
                                        onchange="checkname();" placeholder="Enter Username" required=""
                                        oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter username'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                                   onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">
                               <span class="text-danger"><?php echo form_error('username'); ?></span>
                                 <span id="status" style=" color:red;
                    font-family: 'Times New Roman', Times, serif;
                     font-size: 14px;" ></span><br></div></div>
                        
                           <div class="form-group">
                                                <div class="col-md-4"><label class="control-label" for="password">Password<span style="color:red;">*</span></label>
                                                </div>
                        
                            <div class="col-md-8"><input type="password" class="form-control" id="password" name="password" minlength="5" onchange="return CheckPassword(this)" 
                                                         maxlength=15   placeholder="Password" required=""oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your password'));  
                                      this.value=this.value.replace(/\s/g,''); this.focus=true;}"
                                      onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">
                            <div id="errpass"  class="errpass">   </div>    <span class="text-danger"><?php echo form_error('password'); ?></span>
                            <br></div></div>
                       
                          <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label" for="confirmpassword">Confirm Password<span style="color:red;">*</span></label>
                                                </div>
                        
                             <div class="col-md-8"><input type="password" class="form-control" minlength="5" id="confirmpassword" name="confirmpassword" 
                                                          placeholder="Confirm Password" onchange="checkPasswordMatch();" maxlength=15 required=""
                                                          oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your password'));  
                                      this.value=this.value.replace(/\s/g,''); this.focus=true;}"
                                      onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">
                                <div class="registrationFormAlert" id="divCheckPasswordMatch">
                            </div><span class="text-danger"><?php echo form_error('confirmpassword'); ?></span>
                            <br> </div></div>
                         
                      <div class="col-md-12">
                           <hr></hr><center><strong><b>Enter personal details<b></strong></center><hr></hr></div>
                     
                          
                             <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label" for="userfile">Upload photo<span style="color:red;" >*</span></label>
                                                </div>
                             
                                 <div class="col-md-8"><input type='file' class="form-control" name='userfile' accept="image/gif, image/jpeg, image/png, image/jpg"  size='20' id='file' required=""/><br></div></div>
		 
                            
<!--                         >-->
                             
                             
                       
                             <div class="form-group">
                                                <div class="col-md-4"> <label class="control-label" for="dob">Date of Birth<span style="color:red;">*</span></label>
                                                </div>
                            <!--<input class="date" id="datepicker1" name="datepicker1" type="date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">-->

                             <div class="col-md-8"><input type="text" class="form-control" id="dob" name="dob" onchange="return validatedate(this)" maxlength="14"  placeholder="dd-mm-yyyy" required=""
                                                          oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your date of birth'));  
                                      this.value=this.value.replace(/\s/g,''); this.focus=true;}"
                                      onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">
                                 <div id="errd">   </div> <span class="text-danger"><?php echo form_error('dob'); ?></span><br></div></div>
                         
                                 
                            <div class="form-group">
                                <div class="col-md-4"><label class="control-label" for="occupation">Occupation<span style="color:red;">*</span></label></div>
                        
                             <div class="col-md-8">
                                 <input type="text" class="form-control" id="occupation" placeholder="Occupation" name="occupation" list="occupationList" required=""
                                        oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your occupation'));  
                                      this.value=this.value.replace(/\s/g,''); this.focus=true;}"
                                      onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">
<datalist id="occupationList">
    <option value="Doctor">
    <option value="Engineer">
        <option value="Teacher">
            <option value="Government Employee">
                <option value="Farmer">
</datalist>
                                 <!--<input type="text" class="form-control" id="occupation" name="occupation" minlength="4" maxlength="25" onkeypress="return ischar(event)"  placeholder="Enter your occupation" required="">-->
                                 <span class="text-danger"><?php echo form_error('occupation'); ?></span> </div></div> 
                        
                            <div class="form-group">
                                <div class="col-md-4"><br><label class="control-label" for="hofemail">E-Mail id <span style="color:red;">*</span> </label>
                                                </div>
                            <div class="col-md-8"><br><input type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="hofemail" name="hofemail" maxlength="25" onchange="return ValidateEmail(this)"  
                                                             placeholder=" Enter a valid Email Id" required="" oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your email'));  
                                      this.value=this.value.replace(/\s/g,''); this.focus=true;}"
                                      onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">
                                <div id="err" class="err">   </div>           <span class="text-danger"><?php echo form_error('hofemail'); ?></span> <br></div></div>     
                        
                           <div class="form-group">
                                                <div class="col-md-4"><label class="control-label" for="phone">Phone<span style="color:red;">*</span></label>
                                                </div>
                            <div class="col-md-8"><input type="phone" class="form-control" id="phone" name="phone" minlength="10" maxlength="10" pattern="[789][0-9]{9}" onchange="return phoneValidation(this)" 
                                                         onkeypress="return isNumberKey(event)"  placeholder="Family head contact no." required=""
                                                         
                                      onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">
                                <div id="errph">   </div>    <span class="text-danger"><?php echo form_error('phone'); ?></span><br> </div></div> 
                        <div class="form-group">
                                                <div class="col-md-4"><label class="control-label" for="gender">Gender<span style="color:red;">*</span></label>
                                                </div>
                         
                             <div class="col-md-8"><input type="radio"  id="gender" name="gender" required="" value="Male" checked="">Male
                             <input type="radio"  id="gender" name="gender"  required="" value="Female">Female
                             <input type="radio"  id="gender" name="gender"  required="" value="Other">Other
                             <span class="text-danger"><?php echo form_error('gender'); ?></span></div></div>
                    <div class="col-md-12">
                           <hr></hr><center><strong><b>Enter address details<b></strong></center><hr></hr></div>
                    
                           <div class="form-group">
                                                <div class="col-md-4"><label class="control-label" for="state">State<span style="color:red;">*</span></label>
                                                </div>
                        
                            <div class="col-md-8"><select name="state" class="form-control" id="state" onchange="getDist();"  required=""  >
                               <option value="">Choose state</option>
                              <?php foreach($statedata as $s){ ?>
                     <option value="<?php echo $s->stateid ?>"><?php echo $s->state ?></option>
                    <?php } ?> 
                              </select>
                                <span class="text-danger"><?php echo form_error('state'); ?></span><br></div></div> 
                         
                           <div class="form-group">
                                                <div class="col-md-4"><label class="control-label" for="district">District</label>
                                                </div>
                        
                            <div class="col-md-8"><select name="district" class="form-control" id="district" onchange="getTal();"  required=""  >
                               <option value="">Choose district</option>
                              
                              </select>
                                <span class="text-danger"><?php echo form_error('district'); ?></span> <br></div></div>
                                                       
                             <div class="form-group">
                                                <div class="col-md-4"><label class="control-label" for="taluk">Taluk</label>
                                                </div>
                        
                         <div class="col-md-8"><select name="taluk" class="form-control" id="taluk" onchange="getVillage();" required="">
                               <option value="">Choose taluk</option>
                             
                         </select>
                             <span class="text-danger"><?php echo form_error('taluk'); ?></span>  </div></div><br>  
                        
                            <div class="form-group">
                                <div class="col-md-4"><br><label class="control-label" for="village">Village</label>
                                                </div>
                        
                           <div class="col-md-8"><br><select name="village" class="form-control" id="village" required="">
                          <option value="">Choose village</option>
                             
                         </select>
                               <span class="text-danger"><?php echo form_error('village'); ?></span> <br> </div></div>
                        
                            <div class="form-group">
                                                <div class="col-md-4"><label class="control-label" for="postoffice">Post office<span style="color:red;">*</span></label>
                                                </div>
                             <div class="col-md-8"><input type="text" class="form-control" onkeypress="return ischar(event)"  id="postoffice" name="postoffice" minlength="5" maxlength="20"  
                                                          oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter a valid postofficename'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}" placeholder="Enter post office" required="">
                                 <span class="text-danger"><?php echo form_error('postoffice'); ?></span><br></div></div> 
                         
                            <div class="form-group">
                                                <div class="col-md-4"><label class="control-label" for="post">Postal Code<span style="color:red;">*</span></label>
                                                </div>
                             <div class="col-md-8"><input type="text" class="form-control" id="post" name="post" minlength="6" maxlength="6" oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your postal code'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"
onchange="if( this.value.length < 6) { if(confirm('Enter 6 digit postal code'));  this.focus=true;}" onkeypress="return isNumberKey(event)" pattern="[6][0-9]{5}" placeholder="Enter postal code" required="">
                                 <span class="text-danger"><?php echo form_error('post'); ?></span><br> </div></div>
                         
                   
        <div class="col-md-12">             
                     
<center><button type="submit" name="btnsubmit" class="btn btn-warning" onclick ="return validateFamily()">SUBMIT</button>
    <br>
                       <center><h5>Already a member?<a href="http://localhost/BrethrenChurch/index.php/LoginController/index">LOGIN</a></h5>
                       </center>
                 
                </div> </div>
                 
             <?php echo form_close(); ?>
        </div>
           
          </div>
        </div>
      </div>
         </div>              </div>
           
          </div>
        </div>
      </div>
    <script src="<?php echo base_url();?>asset/js/jquery-1.11.1.min.js"></script>
 <!--ajax for district-->
 <script>
      
                    function getDist()
			{
				state=$('#state').val();
			
				$.ajax({
			    url:"<?php echo base_url(); ?>index.php/FamilyController/displays_district",
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
			    url:"<?php echo base_url(); ?>index.php/FamilyController/displays_taluk",
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
			    url:"<?php echo base_url(); ?>index.php/FamilyController/displays_village",
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
<!-- copyright -->
	 <?php
                include('footer.php');
                ?>
	<!-- //copyright -->
	<script src="<?php echo base_url(); ?>asset/js/jarallax.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- lightspeedBox -->
	<script src="<?php echo base_url(); ?>asset/js/lsb.js"> </script>
	<!-- //lightspeedBox -->
</body>	
</html>