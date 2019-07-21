<html>
    <title>
        Brethren Church | Donation
    </title>
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

<style type="text/css">
    .well{
        align:center;
        background:white;
        width:140%;
    }
    table{
        border-collapse:separate; 
border-spacing:1em;
    }
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo base_url(). "asset/js/submit.js" ?>"></script>
</head>
<body>
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
            <div class="jarallax about-banner">
			<div class="container">
	<!--phone validation-->
 
    <script type="text/javascript">
function phoneValidation()
{
var a = document.donationreq.ph.value;
if(isNaN(a))
{
alert("Enter the valid Mobile Number(Like : 9566137117)");
document.donationreq.ph.focus();
return false;
}
else if((a.length < 10))
{
alert("Your Mobile Number must be 1 to 10 Integers");
document.donationreq.ph.select();
return false;
}
else
{
   return true;
 
}
}

</script>			
<br><br><br>
 <div class="col-lg-6 col-lg-offset-2">
     
          <div class="well" >
              <center><h3><b>Donation Request</b></h3></center>
                   <br>               <?php echo $this->session->flashdata('msg'); ?>

          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "donationreq", "name" => "donationreq");
          echo form_open("DonationController/add", $attributes);?>
                  <fieldset>
                      <center><table><tr><td><label for="name" class="control-label">Name</label>
               <td><input class="form-control" id="name" name="name" placeholder="Your name" 
                          onkeypress="return ischar(event)" required="" oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your name'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"
                type="text" value="<?php echo set_value('name'); ?>" />
                   <span class="text-danger">  <?php echo $this->session->flashdata('namemsg'); ?></span>
               </td></tr>
                              
               <tr><td><label for="feedbackmsg" class="control-label">Message</label>
                   <td><textarea rows="4" cols="50" class="form-control" id="donationmsg" required=""oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Fill in your request(max 50 char)'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                             onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"  name="donationmsg" placeholder="Message" value="<?php echo set_value('donationmsg'); ?>" />
                   </textarea> <span class="text-danger">  <?php echo $this->session->flashdata('donationmsg'); ?></span>
               </td></tr>
               <tr><td><label for="name" class="control-label">Account Number</label>
                   <td><input class="form-control" id="accno" name="accno" placeholder="Your account number" type="text" maxlength="18" minlength="9"
                            onkeypress="return isNumberKey(event)"  oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please fill up your valid account number'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}" value="<?php echo set_value('accno'); ?>" />
                   <span class="text-danger">  <?php echo $this->session->flashdata('accnomsg'); ?></span>
               </td></tr>
                    <tr><td><label for="name" class="control-label">Contact Number</label>
                        <td><input class="form-control" id="ph" name="ph" placeholder="Your phone number"  maxlength="10" minlength="10"
                                  onchange="return phoneValidation(this)" onkeypress="return isNumberKey(event)" oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter contat details (if any)'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"onchange="return phoneValidation() " type="text" value="<?php echo set_value('ph'); ?>" required=""/>
                   <div class="errph"> </div> 
                   <span class="text-danger">  <?php echo $this->session->flashdata('phmsg'); ?></span>
               </td></tr> 
                     <tr><td><label for="name" class="control-label">Email</label>
                        <td><input class="form-control" id="email" name="email"  type="email" 
                                   onchange="return ValidateEmail(this)"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" 
                                   placeholder=" Enter a valid Email Id" required="" oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter email id'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"
                                   value="<?php echo set_value('email'); ?>" />
                   <!--<div class="errph"> </div>--> 
                   <span class="text-danger">  <?php echo $this->session->flashdata('emailmsg'); ?></span>
               </td></tr> 
                              <tr ><td colspan=2>
                    <center><input id="btn_districtadd" name="btn_feeback" type="submit" class="btn btn-warning" value="Send" />
                    <!--<input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-warning" value="Clear" />-->
                          </table>
               
               
          </fieldset>
                   <?php echo $this->session->flashdata('msg'); ?>
          <?php echo form_close(); ?>
               
               </div>
               </div>

                      
          </div>
    
     
           </div>   
        <?php
                include('footer.php');
                ?></div>              
         <script>
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
function ValidateEmailemail)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(ev_email.value.match(mailformat))  
{  
//            alert("Valid email id")

             return true;  
        }  
        else  
        {  
                    alert("Enter a valid email id!");

            return false;  
        }  
}
</script>

 <script type="text/javascript">
function phoneValidation()
{
var a = document.signupform.ph.value;
if(isNaN(a))
{
alert("Enter the valid Mobile Number(Like : 9566137117)");
document.signupform.ph.focus();
return false;
}
else if((a.length < 10))
{
alert("Your Mobile Number must be 1 to 10 Integers");
document.signupform.ph.select();
return false;
}
else
{
   return true;
 
}
}

</script>