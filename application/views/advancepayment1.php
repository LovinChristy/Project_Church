   <html>
    <title>
        Brethren Church
    </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Agro Seed Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="../../asset/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="../../asset/css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="../../asset/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Laila:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- //font -->
<script src="../../asset/js/jquery-1.11.1.min.js"></script>
<script src="../../asset/js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->

<!-- Style --> 
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bookhomecss.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/jquery-ui.css" />
<!-- JavaScript --> <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>
        <style>
              .form-box{
        
        max-width:900px;
        position:relative;
        margin:4% auto;
    }
    
   
</style>
</head>
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
      function ValidateEmail(email)  
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
                <?php echo $this->session->flashdata('datefrom');?>
                                      <?php echo $this->session->flashdata('paymode');?>
<!--<h1 class="book">Auditorium Booking</h1>-->
<br>
<div class="wrapper">
    <div class="container">
        <div class="reg" style="width:50%;" >
      
                   
  
                <?php
                $attributes=array("id"=>"signupform","name"=>"signupform");
                echo form_open("BookingController/viewBankDetail",$attributes);?>
                           <div class="form-box">
         
            <div class="panel-heading text-center">
                <hr></hr><center><strong><h1><b>Fill in your details<b></h1></strong></center><hr></hr>
                                    </div><br><br>
            <input  type="text"  id="datefrom" name="datefrom" value="<?php echo $this->session->flashdata('datefrom') ?>" > 
                    <input  type="text"  id="paymode" name="paymode" value="<?php echo $this->session->flashdata('paymode') ?>" > 

            <div class="panel-body">
              <div class="row">
                    <div class="col-md-12">
                              <div class="form-sub-w3">
                                 <div class="col-md-6">
                                     <label class="control-label" style="font-weight: bold;" for="username"><font size="2px">Full Name</label> </div>
                              <div class="col-md-2">
                                  
                                  <input type="text" id="holder" name="holder" placeholder="" class="input-xlarge"
                                         onkeypress="return ischar(event)" required="" 
                                         oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your name'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}"
                                         onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">
                                         </div></div><br><br>
                             <div class="form-sub-w3">
                                 <div class="col-md-6">
                                     <label class="control-label" style="font-weight: bold;" for="username"><font size="2px">Email id</label> </div>
                              <div class="col-md-2">
                                  
                                  <input type="text" id="email" name="email" placeholder="" class="input-xlarge" minlength="10" maxlength="30"
                                         onchange="return ValidateEmail(this)" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required="" 
                                         oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your email id'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}"
                                         onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">
                                         </div></div><br><br>
                                  <div class="form-group">
                                      <div class="col-md-6">
                                          <label class="control-label" style="font-weight: bold;" for="password">Select a bank</label></div>
                                                     <div class="col-md-5">
                                                         <select class="span3" name="bank" id="bank" required="">
                <option></option>
                <option value="IOB">Indian Overseas Bank</option>
                <option value="SBI">State Bank of India</option>
                <option value="FDB">Federal Bank</option>
              
              </select>
              
                                                         
                                                     </div></div><br><br>
                        
                                              
                                               
                          
                              <div class="col-md-12">
                <center> <div class="submit">
                        <center>	 <input id="book" name="book" type="submit"  value="SUBMIT"  /></center>
                  
                </div> </center> </div>
                    
                 
                </div>
                 
             <?php echo form_close(); ?>
        </div>
                  
          </div>
        </div>
      </div>
    </div>
           </div>
</div></div
