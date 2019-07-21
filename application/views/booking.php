<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Brethren Church | Booking</title>

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
<!--<link href="<?php echo base_url();?>asset/css/logincss.css" rel="stylesheet" type="text/css" media="all" />-->
<link href="<?php echo base_url();?>asset/css/bookcss.css" rel="stylesheet" type="text/css" media="all" />

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
 
  

<body>
	<h1></h1>
        <script src="<?php echo base_url();?>asset/js/jquery-ui.js"></script>
					  <script>
							  $(function() {
							    $( "#datepicker1,#datepicker2" ).datepicker();
							  });
					  </script>
		<!--//Date Picker-->	
 <?php 
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("BookingController/bookauditorium", $attributes);?>
		 <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- JavaScript --> <script type="text/javascript" src="js/jquery.min.js"></script>

</head>
<body>

<!--<h1 class="book">AUDITORIUM BOOKING </h1>-->

<div class="reg">

		<h1>AUDITORIUM BOOKING!</h1>
                <br>
         <?php echo $this->session->flashdata('msg'); ?>
		<div class="members">
			<div class="adult">
				<h2>Event</h2>
					<div class="dropdown-button">           			
                                            <select class="dropdown" tabindex="10" name="event" id="event" data-settings='{"wrapperClass":"flat"}' required="">

                                                <option value="event">Events</option>
                                                <option value="marriage">Marriage</option>
                                                <option value="meeting"> Meeting</option>
                                                <option value="competition">Competition</option>
                                                <option value="seminar">Seminar</option>
								
							</select>
					</div>
			</div>

			<div class="child">
				<h2>No. of people</h2>
					<div class="dropdown-button">         			
                                            <select class="dropdown"  name="people" id="people" tabindex="10" data-settings='{"wrapperClass":"flat"}' required="">
							<option>Persons</option>
                                                        <option value="250">250 Person</option>
								<option value="500">500 People</option>
								<option value="1000">1000 People</option>
								<option value="1500">1500 People</option>
								<option value="2000">2000 People</option>
								<option value="More">More</option>
						</select>
					</div>
			</div>
		<div class="clear"></div>
		</div>

		<div class="suite">
			<div class="dropdown-button">
				<h2>Rate</h2>           			
                                <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"flat"}' required="" name="rate" id="rate">
					<option value="">-</option>
					<option value="upto5000">below 5000</option>
					<option value="5000-10000">Between 5000-10000</option>
					
				</select>
			</div>
		</div>

<!--		<div class="book-pag">
			<h2>Select Date</h2>
			<div class="book-pag-frm1">
				<label> From</label>
                                <input class="date" id="datepicker1" type="text" value="<?php echo set_value('txt_relation'); ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                        </div><br>
			<div class="book-pag-frm2">
				<label>To</label>
				<input class="date" id="datepicker2" type="text" value="<?php echo set_value('txt_relation'); ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
			</div>-->
		<div class="clear"></div>
		</div>	

		<!--Date Picker-->
			
			<script src="js/jquery-ui.js"></script>
					  <script>
							  $(function() {
							    $( "#datepicker1,#datepicker2" ).datepicker();
							  });
					  </script>
		<!--//Date Picker-->

		

		

		<div class="submit">
				<input type="submit" class="book" value="BOOK NOW">
		</div>
					     <?php echo form_close(); ?>

</div>
 <div class="reg-footer">
			<p>© 2017 Bretheren Church. All rights reserved | Design by <a href="https://www.facebook.com/lovin.a.abraham">Lovin Ann Abraham</a></p>
		</div>
		
</body>

                   