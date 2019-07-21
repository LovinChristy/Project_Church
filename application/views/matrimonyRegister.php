<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url();?>asset/matrimonycss/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url();?>asset/matrimonyjs/jquery.min.js"></script>
<script src="<?php echo base_url();?>asset/matrimonyjs/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>asset/matrimonycss/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="<?php echo base_url();?>asset/matrimonycss/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner navbar-inner_1">
        <div class="container">
           <div class="navigation">
             <nav id="colorNav">
			   <ul>
				<li class="green">
				  <a href="#" class="icon-home"></a>
				  <ul>
					<li><a href="<?php echo base_url();?>index.php/MatrimonyController/login">Login</a></li>
					<li><a href="<?php echo base_url();?>index.php/MatrimonyController/reg">Register</a></li>
					<!--<li><a href="<?php echo base_url();?>index.php/MatrimonyController/logout">Logout</a></li>-->
				  
				  </ul>
				</li>
			   </ul>
             </nav>
           </div>
           <a class="brand" href="<?php echo base_url();?>index.php/MatrimonyController/index"><img src="<?php echo base_url();?>asset/matrimonyimages/logo.png" alt="logo"></a>
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
 
		 <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"></a>
		   </div> 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            <li><a href="<?php echo base_url();?>index.php/MatrimonyController/index">Home</a></li><!--
		            <li><a href="about.html">About</a></li>
		    		<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Matches<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="matches.html">New Matches</a></li>
		                <li><a href="viewed-profile.html">Who Viewed my Profile</a></li>
		                <li><a href="viewed-not_contacted.html">Viewed & not Contacted</a></li>
		                <li><a href="members.html">Premium Members</a></li>
		                <li><a href="shortlisted.html">Shortlisted Profile</a></li>
		              </ul>
		            </li>
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="search.html">Regular Search</a></li>
		                <li><a href="profile.html">Recently Viewed Profiles</a></li>
		                <li><a href="search-id.html">Search By Profile ID</a></li>
		                <li><a href="faq.html">Faq</a></li>
		                <li><a href="shortcodes.html">Shortcodes</a></li>
		              </ul>
		            </li>
		            <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Messages<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="inbox.html">Inbox</a></li>
		                <li><a href="inbox.html">New</a></li>
		                <li><a href="inbox.html">Accepted</a></li>
		                <li><a href="sent.html">Sent</a></li>
		                <li><a href="upgrade.html">Upgrade</a></li>
		              </ul>
		            </li>
		            <li class="last"><a href="contact.html">Contacts</a></li>
-->		        </ul>
		     </div><!-- /.navbar-collapse 
-->		    </nav>
		   </div> <!-- end pull-right 
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->
<div class="banner">
<div class="grid_3">
  <div class="container">
  <div class="breadcrumb1">
     <ul>
        <a href="<?php echo base_url();?>index.php/MatrimonyController/index"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Register</li>
     </ul>
   </div><?php echo $this->session->flashdata('data'); ?>
        <?php echo $this->session->flashdata('msg'); ?>
 <?php // echo $this->session->flashdata('email_sent'); ?>
       <?php echo $this->session->flashdata('error'); ?>
    <?php
                $attributes=array("id"=>"signupform","name"=>"signupform", "enctype"=>"multipart/form-data");
                echo form_open("MatrimonyController/register",$attributes);?>
      <div class="services" style="background:transparent; width:90%;">
   	  <div class="col-sm-6 login_left">
	     <form>
               
	  	    <div class="form-group">
		      <label for="name">Name<span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="name" name="name" value="" size="60" maxlength="60" class="form-text required">
		    </div>
                 <div class="form-group form-group1">
                <label class="col-sm-12 control-lable" for="sex">Sex<span class="form-required" title="This field is required.">*</span> : </label>
                <div class="col-sm-5">
                    <div class="radios">&nbsp;&nbsp;&nbsp;
				        <label for="groom" class="label_radio">
                                            <input type="radio" name="gender" id="gender" value="groom" checked=""><font color="#000000"><strong>Male</strong> </font>
				        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				        <label for="bride" class="label_radio">
                                            <input type="radio" name="gender" id="gender" value="bride" > <font color="#000000"><strong>Female</strong></font>
				        </label>
	                </div>
                </div>
                <div class="clearfix"> </div>
             </div>
                 <div class="age_select"> 
		        <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div class="select-block1">
 <?php
//                    $d=date("Y-m-d");
//                   
 $end = date('Y-m-d', strtotime('-20 year'));
 $start = date('Y-m-d', strtotime('-30 year'));?>
		      <label for="edit-pass">Date of birth <span class="form-required" title="This field is required.">*</span></label>
                      <input type="date" id="dob" name="dob" value="" max="<?php echo $end; ?>" min="<?php echo $start; ?>" size="60" maxlength="60" class="form-text required">

                   <!--   <select name="date" id="date" required="">
	                    <option value="">Date</option>
                            <?php  for ($i=1;$i<=31;$i++){?>
	                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
	                   
                            <?php    
                            } $i++;?> 
                    </select>
-->                  </div>
            </div><!--
            <div class="col-sm-4 form_box2">
                   <div class="select-block1">
                       <select name="month" >
	                    <option value="">Month</option>
	                    <option value="">January</option>
	                    <option value="">February</option>
	                    <option value="">March</option>
	                    <option value="">April</option>
	                    <option value="">May</option>
	                    <option value="">June</option>
	                    <option value="">July</option>
	                    <option value="">August</option>
	                    <option value="">September</option>
	                    <option value="">October</option>
	                    <option value="">November</option>
	                    <option value="">December</option>
                    </select>
                  </div>
                 </div>
                 <div class="col-sm-4 form_box1">
                   <div class="select-block1">
                    <select>
	                    <option value="">Year</option>
	                    <?php  
                 $ending_year  =date('Y');
 $starting_year = date('Y', strtotime('-35 year'));
 $current_year = date('Y');
 for($starting_year; $starting_year <= $ending_year; $starting_year++) {
     echo '<option value="'.$starting_year.'"';
     if( $starting_year ==  $current_year ) {
            echo ' selected="selected"';
     }
     echo ' >'.$starting_year.'</option>';
 }        ?>     
                    </select>
                   </div>-->
                  </div>
                  <div class="clearfix"> </div>
                 </div>
                 <div class="form-group">
		      <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="email" id="email" name="email" value="" size="60" maxlength="60" class="form-text required">
		    </div>
		    <div class="form-group">
		      <label for="edit-pass">Login Password <span class="form-required" title="This field is required.">*</span></label>
		      <input type="password" id="password" name="password" size="60" maxlength="128" class="form-text required">
		    </div>
		    <div class="form-group">
		      <label for="mar_status">Marital Status <span class="form-required" title="This field is required.">*</span></label>
                      <select  id="mar_status" style="width:40%;" name="mar_status" class="form-text required">
                          <option value="Unmarried">Unmarried</option>
                          <option value="Divorced">Divorced</option>
                          <option value="Widow/Widower">Widow/Widower</option>
                          
                      </select>
		    </div>
                 <div class="form-group">
		      <label for="country">Country living in <span class="form-required" title="This field is required.">*</span></label>
                      <select  id="country" name="country" style="width:40%;" class="form-text required">
                          <option value="india">India</option>
                          <option value="usa">USA</option>
                          <option value="uae">UAE</option>
                          <option value="aus">Australia</option>
                          <option value="uk">UK</option>
                      </select>
		    </div>
                 <div class="form-group" >
		      <label for="edit-name">Mobile no<span class="form-required" title="This field is required.">*</span></label>
                      <select  id="mobile_code" name="mobile_code" class="form-text required" style="width:20%;" >
                          <option value="+91">India(+91)</option>
                          <option value="+1">USA(+1)</option>
                           <option value="+971">UAE(+971)</option>
                            <option value="+44">UK(+44)</option>
                             <option value="+61">Australia(+61)</option>
                      </select>
		      <input type="text" style="width:40%;" id="mobile" name="mobile" value="" size="60" maxlength="60" class="form-text required">
		    </div>
                 <div class="form-group" >
		      <label for="edit-name">Photo<span class="form-required" title="This field is required.">*</span></label>
                      
		      <input type="file" style="width:40%;" id="userfile" name="userfile" value="" size="60" class="form-text required">
		    </div>
		    
             
              
<!--			  <div class="form-group">
			     <label for="edit-name">Subject <span class="form-required" title="This field is required.">*</span></label>
						      <input type="password" id="password" name="password" size="60" maxlength="128" class="form-text required">

			  </div>-->
			  <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
			  </div>
		 </form>
	  </div>
	 <!-- <div class="col-sm-6">
	     <ul class="sharing">
			<li><a href="#" class="facebook" title="Facebook"><i class="fa fa-boxed fa-fw fa-facebook"></i> Share on Facebook</a></li>
		  	<li><a href="#" class="twitter" title="Twitter"><i class="fa fa-boxed fa-fw fa-twitter"></i> Tweet</a></li>
		  	<li><a href="#" class="google" title="Google"><i class="fa fa-boxed fa-fw fa-google-plus"></i> Share on Google+</a></li>
		  	<li><a href="#" class="linkedin" title="Linkedin"><i class="fa fa-boxed fa-fw fa-linkedin"></i> Share on LinkedIn</a></li>
		  	<li><a href="#" class="mail" title="Email"><i class="fa fa-boxed fa-fw fa-envelope-o"></i> E-mail</a></li>
		 </ul>
	  </div>-->
	  <div class="clearfix"> </div>
   </div> </div>
  </div>
</div>
             <?php echo form_close(); ?>

<!--<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
</div>
<div class="footer">
    	<div class="container">
    		<div class="col-md-4 col_2">
    			<h4>About Us</h4>
    			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Help & Support</h4>
    			<ul class="footer_links">
    				<li><a href="#">24x7 Live help</a></li>
    				<li><a href="contact.html">Contact us</a></li>
    				<li><a href="#">Feedback</a></li>
    				<li><a href="faq.html">FAQs</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Quick Links</h4>
    			<ul class="footer_links">
    				<li><a href="privacy.html">Privacy Policy</a></li>
    				<li><a href="terms.html">Terms and Conditions</a></li>
    				<li><a href="services.html">Services</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Social</h4>
    			<ul class="footer_social">
				  <li><a href="#"><i class="fa fa-facebook fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-google-plus fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
			    </ul>
    		</div>
    		<div class="clearfix"> </div>
    		<div class="copy">
		       <p>Copyright © 2015 Marital . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	        </div>
      </div>
</div>
</body>
</html>	