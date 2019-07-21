<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Bretheren Church | Home </title>

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
<style>
    .main {
    margin-top: 30px; /* Add a top margin to avoid content overlay */
}
</style>
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
<!--                                
							<!-- Brand and toggle get grouped for better mobile display -->
						<?php include('header.php'); ?>
						</div>
					  <div class="clearfix"></div>	
                                         
			</div>
		</div>
<!--	 welcome 
	<div class="welcome">
		<div class="container">
			<div class="agileits-heading">
				<h2>Welcome </h2>
			</div>
				<div class="bs-example bs-example-tabs welcome-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">1</a></li>
						<li role="presentation" class=""><a href="#Feature1" role="tab" id="Feature1-tab" data-toggle="tab" aria-controls="Feature1" aria-expanded="false">2</a></li>
						<li role="presentation" class=""><a href="#Feature2" role="tab" id="Feature2-tab" data-toggle="tab" aria-controls="Feature2" aria-expanded="false">3</a></li>
						<li role="presentation" class=""><a href="#Feature3" role="tab" id="Feature3-tab" data-toggle="tab" aria-controls="Feature3" aria-expanded="false">4</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
						<div class="w3agile_tabs">
								<div class="col-md-5 w3agile_tab_right w3agile_tab_right2">
									<img src="../../asset/images/jesus1.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="col-md-7 w3agile_tab_left">
									<h4></h4>
									<p>.. </p>
									
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="Feature1" aria-labelledby="Feature1-tab">
							<div class="w3agile_tabs">
								<div class="col-md-7 w3agile_tab_left">
									<h4>Evg.John P Thomas</h4>
									<p> ..</p>
								</div>
								<div class="col-md-5 w3agile_tab_right w3agile_tab_right1">
									<img src="../../asset/images/jcallyou.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="Feature2" aria-labelledby="Feature2-tab">
							<div class="w3agile_tabs">
								<div class="col-md-5 w3agile_tab_right w3agile_tab_right2">
									<img src="../../asset/images/5.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="col-md-7 w3agile_tab_left">
									<h4>Evg.John Kurien </h4>
									<p> ...</p>
									
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="Feature3" aria-labelledby="Feature3-tab"><div class="w3agile_tabs">
								<div class="col-md-7 w3agile_tab_left">
									<h4>Evg.Varughese Kurien</h4>
									<p> ...</p>
									
								</div>
								<div class="col-md-5 w3agile_tab_right w3agile_tab_right1">
									<img src="../../asset/images/4.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
	 //welcome-->
	
	<!-- welcome-bottom -->
        <div class="main" style="
    /*margin-top: 20px;*/
    margin-bottom: 30px; /* Add a top margin to avoid content overlay */
">
             <!--<div class="wthree_recent" >-->
   
                    <MARQUEE onmouseover="this.stop();" onmouseout="this.start();" width=100% height=10%  > RECENT POST || <?php foreach($notification as $n){?>
						<i class="fa fa-arrow-right" aria-hidden="true"></i> <?=$n->title;?> |  <?=$n->notification;?>
                                                <span> | posted on <?=$n->dateposted;?></span>
						   <?php }?>  
    </marquee>	
				<!--</div>-->
<div class="welcome-bottom">
    <div class="col-md-12 agile_banner_bottom1_right" >
			<h3>Welcome to Brethren Church</h3>
			<p>The Kerala Brethren are a significant subset of the Indian Brethren, who are connected with the Open Brethren movement internationally. In the South Indian State of Kerala, four men who came from traditional churches were baptised in 1898, and many of the Kerala Brethren consider this event to have been the start of their movement. Some 600 of the 2,200 Brethren assemblies (as their churches are generally called) in India are located in Kerala.
<span></span></p>
			<div class="details">
				<a href="about">Read More</a>
			</div>
		</div>
<!--		<div class="col-md-6 agile_banner_bottom1_left">
			
		</div>-->
		<div class="clearfix"> </div>
	</div>
	<!-- welcome-bottom -->
	<!-- services -->
	
	<div class="services">
		<div class="container">
			<div class="agileits-heading">
				<h3>Our Services</h3>
			</div>
			<div class="agileinfo-services-grids">
				<div class="services-grids">
					<div class="col-md-6 services-grid">
							<div class="services-grid-left">
								<h4>Hospitals</h4>
                                                                <p><a href="http://tmmhospital.org/">TMM Hospital College of Nursing, Thiruvalla</></p>
							</div>
							<div class="services-grid-right">
								<i class="fa fa-hospital-o" aria-hidden="true"></i>
							</div>
							<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 services-grid">
							<div class="services-grid-right aliquam">
								<i class="fa fa-trophy" aria-hidden="true"></i>
							</div>
							<div class="services-grid-left non">
								<h4>Schools</h4>
                                                                <p><a href="http://www.clarencehighschool.in/">Clarence High School, Bangalore</a></p>
                                                                <p>Ebenezer Higher Secondary School,Gwalior</p>
                                                                <p>Noel Memorial School</p>
							</div>
							<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>		
				<div class="services-grids w3layouts-agileinfo">
					<div class="col-md-6 services-grid">
							<div class="services-grid-left">
								<h4>Theology college</h4>
                                                                <p><a href="http://www.clarencehighschool.in/">Brethren Bible Institute, Pathanamthitta</a></p>
                                                                <p>Hope Academy of Theology and Sciences(HATS), Bhopal.</p>
                                                                <p><a href="http://www.clarencehighschool.in/">Madurai Bible School & College, Madurai</a>
							</div></p>
							<div class="services-grid-right">
								<i class="fa fa-plus" aria-hidden="true"></i>
							</div>
							<div class="clearfix"> </div>
						</div>
					<div class="col-md-6 services-grid">
							<div class="services-grid-right aliquam">
								<i class="fa fa-home" aria-hidden="true"></i>
							</div>
							<div class="services-grid-left non">
								<h4>Old age & Orphanages</h4>
                                                                <p>Brethren Mercy Trust, Kumbanad</p>
                                                            <p>Rehoboth Old Age Home, Nellikkunnu</p>
							</div>
							<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->
        
			<div class="clearfix"> </div>
            </div>
	
	<!-- testimonial -->
<!--	<div class="jarallax testimonial">
		<div class="testimonial-dot">
			<div class="container">
				<div class="agileits-heading wthree-testimonial">
					<h3>Testimonial</h3>
				</div>
				<div class="w3-agile-testimonial">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider3">
								<li>
									<div class="testimonial-img">
										<img src="../../asset/images/9.jpg" alt="" />
									</div>
									<div class="testimonial-img-info">
										<p>...</p>
										<h5>Evg.Charles John</h5>
										<h6>Zionkunnu Brethren Church</h6>
									</div>
								</li>
								<li>
									<div class="testimonial-img">
										<img src="../../asset/images/10.jpg" alt="" />
									</div>
									<div class="testimonial-img-info">
										<p>...</p>
										<h5>Evg.K V Mathews</h5>
										<h6>Mannarathara Brethren Church</h6>
									</div>
								</li>
								<li>
									<div class="testimonial-img">
										<img src="../../asset/images/11.jpg" alt="" />
									</div>
									<div class="testimonial-img-info">
										<p>...</p>
										<h5>Evg.C T George</h5>
										<h6>Aythala Bretheren Church</h6>
									</div>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>-->
						<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									  // Slideshow 4
									  $("#slider3").responsiveSlides({
										auto: true,
										pager:false,
										nav:false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $('.events').append("<li>before event fired.</li>");
										},
										after: function () {
										  $('.events').append("<li>after event fired.</li>");
										}
									  });
								
									});
						</script>
						<!--banner Slider starts Here-->
<!--					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- //testimonial -->
	<!-- newsletter -->
	<!--<div class="newsletter">
		<div class="container">
			<div class="agileits-heading">
				<h3>Subscribe</h3>
			</div>
		</div>
		<div class="w3-agileits-newsletter">
			<div class="subscribe-grid">
				<form action="#" method="post">
					<input type="email" placeholder="Subscribe" name="Subscribe" required="">
					<button class="btn1"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
				</form>
				<h5>or</h5>
				<div class="agileinfo-social-grids">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-rss"></i></a></li>
						<li><a href="#"><i class="fa fa-vk"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>-->
	<!-- //newsletter -->
	<!-- copyright -->
     <?php
     include('footer.php');?>
	<!-- //copyright -->
	<script src="<?php base_url();?>asset/js/jarallax.js"></script>
	<script src="<?php base_url();?>asset/js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script type="text/javascript" src="<?php base_url();?>asset/js/move-top.js"></script>
	<script type="text/javascript" src="<?php base_url();?>asset/js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*\\
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
	<script src="<?php base_url();?>asset/js/lsb.js"> </script>
	<!-- //lightspeedBox -->

</body>	
</html>