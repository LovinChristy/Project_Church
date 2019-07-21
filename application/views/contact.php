
<!DOCTYPE html>
<html lang="en">
<head>
<title>Brethren Church | Contact </title>
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
		<!-- banner-slider -->
		<div class="jarallax about-banner">
			<div class="container">
				<div class="agileits-heading about-heading">
					<h2>Contact</h2>
				</div>
			</div>
		</div>	
		<!-- //banner-slider -->
	</div>
	<!-- //banner -->
	<!-- contact -->
       
	<div class="contact">
		<div class="container">
                    
<!--			<div class="map-grid">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen></iframe>
			</div>-->
			<div class="address">
				<div class="col-sm-4 address-grids">
					<h4>Hospital Ministry :</h4>
					<p>Post Box No.21<br>
						<span>Pazhavangadi P O Ranny</span>
						Kerala-India
					<span>9447278012</span>
					</p>	
				</div>
				<div class="col-sm-4 address-grids">
					<h4>Prayer Cell :</h4>
					<p>9978689890</p>
					<p>7554567899</p>
				</div>
				<div class="col-sm-4 address-grids">
					<h4>Email us :</h4>
					<p><a href="mailto:example@email.com">brethrenchurch@org.com</a></p>
				</div>
                            
				<div class="clearfix"> </div>
			</div>
                    
			<!--<div class="contact-form">-->
				<!--<h4>Feedbacks</h4>-->
<!--<div class="contact-form-grid">-->
					<!--<form action="#" method="post">
						<div class="fields-grid">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Full Name" required="">
								<label>Full Name</label>
								<span></span>
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Phone" required=""> 
								<label>Phone</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text" name="Subject" required="">
								<label>Subject</label>
								<span></span>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="styled-input textarea-grid">
							<textarea name="Message" required=""></textarea>
							<label>Message</label>
							<span></span>
						</div>	 
						<input type="submit" value="SEND">
					</form>-->
                                      <div class="wthree_recent">
					
					<ul>
<!--                                            <?php foreach($feeddata as $fd){?>
						<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i><?=$fd->feedback;?>  </a><span><?=$fd->fname;?></span></li>
						   <?php }?>  -->
					</ul>
				</div>  
				</div>
			</div>
		</div>
	</div>
	<!-- //contact -->
	
	<!-- copyright -->
	 <?php
                include('footer.php');
                ?>
	<!-- //copyright -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
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
	
</body>	
</html>