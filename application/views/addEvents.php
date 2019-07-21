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

<!-- Style --> <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bookcss.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/jquery-ui.css" />
<!-- JavaScript --> <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>

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
<!--<h1 class="book">Auditorium Booking</h1>-->
<br><br>
<div class="reg">
    <br><h1></h1>
		<h1>Add Events</h1>

		<div class="wthree-form">
			<!--<h2>Check Availability here </h2>-->
                        <br>
		<div class="w3l-login form">
			<?php 
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("AssociationMainController/newEvent", $attributes);?>
				<div class="form-sub-w3">
                                    				<!--Date Picker-->
			
			<script src="<?php echo base_url(); ?>asset/js/jquery-ui.js"></script>
					  <script>
							  $(function() {
							    $( "#datepicker1 ").datepicker({
                                                                minDate:+2
                                                            });
                                                            $( "#datepicker2" ).datepicker({
                                                                minDate:+3
                                                            });
							  });
					  </script>
		<!--//Date 	Picker-->
				<div class="book-pag">
			                       <?php echo $this->session->flashdata('msg'); ?>

			<!--<div class="book-pag-frm1">-->
				<!--<label>Check In</label>-->
<!--				<input class="date" id="datepicker1" name="datepicker1" type="text" placeholder=" From date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
							<input class="date" id="datepicker2" name="datepicker2" type="text" placeholder=" To date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">-->

                                <!--</div>-->
			<!--Date Picker-->
			
					
		<!--//Date Picker-->			</div>
		<div class="members">
			<div class="adult">
				<h2>Event</h2>
					<div class="dropdown-button">           			
                                            <select class="dropdown" tabindex="10" name="event" id="event" data-settings='{"wrapperClass":"flat"}' required="">

                                                <option >Events</option>
                                                <option value="camp">Camp</option>
                                                <option value="vbs"> VBS</option>
                                                <option value="award">Achievement award</option>
                                                
								
							</select>
					</div>
			</div>

			<div class="child">
				<h2>Theme</h2>
					<div class="dropdown-button">         			
                                            <input class="text" id="theme" name="theme" type="text" placeholder="theme" value="<?php echo set_value('theme'); ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">

					</div>
			</div>
		<div class="clear"></div>
		</div>

		<div class="members">
			<div class="adult">
                            <?php $min= date("Y-m-d");?> 
				<h2>Select from Date </h2>
					<div class="dropdown-button">           			
                                            <input class="date" id="datepicker1" name="datepicker1" type="text" min="$min" placeholder="dd/mm/yyyy" value="<?php echo set_value('datepicker1'); ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">

					</div>
			</div>
                    
		<div class="child">
				<h2>To date</h2>
					<div class="dropdown-button">            			
                                            <input class="date" id="datepicker2" name="datepicker2" type="text" placeholder="dd/mm/yyyy" value="<?php echo set_value('datepicker2'); ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">

					</div>
			</div>
                   
			
		<div class="clear"></div>
		</div>
	
			

                        
                        
<div class="book-pag">
			<h2>Venue</h2>
			
                                <textarea class="text" id="venue" name="venue"  placeholder="venue" value="<?php echo set_value('venue'); ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""></textarea>

			
			<script src="js/jquery-ui.js"></script>
					  <script>
							  $(function() {
							    $( "#datepicker1,#datepicker2" ).datepicker();
							  });
					  </script>
		<!--//Date Picker-->

		

		

		<div class="submit">
				<input type="submit" class="book" value="Add Event ">
		</div>
					     <?php echo form_close(); ?>

</div>
 <div class="reg-footer">
			<p>© 2017 Bretheren Church. All rights reserved | Design by <a href="https://www.facebook.com/lovin.a.abraham">Lovin Ann Abraham</a></p>
		</div>
		
</body>

                   