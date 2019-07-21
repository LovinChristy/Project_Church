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
							 <?php include('header.php');?>
						
					  <div class="clearfix"></div>	
			</div>
		</div>
		<!-- banner-slider -->
			<div class="banner-slider">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<li>
									<div class="jarallax agileits-banner-info">
										<div class="container">
											<div class="w3ls-banner-shadow">
												<h3>Psalms 16:8</h3>
												<p>I have set the Lord always before Me.Because he is my right hand ,I will not be shaken.</p>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="jarallax agileits-banner-info agileits-banner-info1">
										<div class="container">
											<div class="w3ls-banner-shadow">
												<h3>Psalms 103:4</h3>
												<p>He redeems me from death and crowns me with love and tender mercies</p>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="jarallax agileits-banner-info agileits-banner-info2">
										<div class="container">
											<div class="w3ls-banner-shadow">
												<h3>Numbers 6:26</h3>
												<p>May the Lord answer your prayers and give you peace</p>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
                                            <!-- copyright -->
	 <?php
                include('footer.php');
                ?>
	<!-- //copyright -->
						<div class="clearfix"> </div>
						<script src="asset/js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider4").responsiveSlides({
								auto: true,
								pager:true,
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
					</div>
			</div>
			<!-- //banner-slider -->
	</div>
	<!-- //banner -->
	<!-- welcome -->
	<!--<div class="welcome">
		<div class="container">
			<div class="agileits-heading">
				<h2>Welcome</h2>
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
									<img src="images/7.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="col-md-7 w3agile_tab_left">
									<h4>Evg.M E Cherian</h4>
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
									<img src="images/6.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="Feature2" aria-labelledby="Feature2-tab">
							<div class="w3agile_tabs">
								<div class="col-md-5 w3agile_tab_right w3agile_tab_right2">
									<img src="images/5.jpg" alt=" " class="img-responsive" />
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
									<img src="images/4.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
	<!-- //welcome-->
	
	<!-- welcome-bottom -->
	<!--<div class="welcome-bottom">
		<div class="col-md-6 agile_banner_bottom1_right">
			<h3>occaecat cupidatat non proident, sunt in culpa qui officia</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed ligula id felis porta laoreet. Nullam ut lacus dui. Pellentesque venenatis id justo nec rhoncus. Curabitur consectetur condimentum nibh, eu ornare odio imperdiet eu. Vivamus non interdum tortor. In vulputate vulputate tellus, sit amet varius dui vulputate ac. <span>Duis sed arcu vitae ex pretium ultricies vel eget metus. Pellentesque in dapibus neque. Aliquam sed tincidunt sapien, sed accumsan arcu.</span></p>
			<div class="details">
				<a href="single.html">Read More</a>
			</div>
		</div>
		<div class="col-md-6 agile_banner_bottom1_left">
			
		</div>
		<div class="clearfix"> </div>
	</div>-->
	<!-- welcome-bottom -->
	<!-- services -->
	<!--
	<div class="services">
		<div class="container">
			<div class="agileits-heading">
				<h3>Services</h3>
			</div>
			<div class="agileinfo-services-grids">
				<div class="services-grids">
					<div class="col-md-6 services-grid">
							<div class="services-grid-left">
								<h4>Ut efficitur faucibus</h4>
								<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem</p>
							</div>
							<div class="services-grid-right">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
							<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 services-grid">
							<div class="services-grid-right aliquam">
								<i class="fa fa-cog" aria-hidden="true"></i>
							</div>
							<div class="services-grid-left non">
								<h4>Duis sed mattis felis</h4>
								<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt 	ut labore et dolore magnam aliquam quaerat voluptatem</p>
							</div>
							<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>		
				<div class="services-grids w3layouts-agileinfo">
					<div class="col-md-6 services-grid">
							<div class="services-grid-left">
								<h4>Proin finibus ac dolor</h4>
								<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem</p>
							</div>
							<div class="services-grid-right">
								<i class="fa fa-thumbs-up" aria-hidden="true"></i>
							</div>
							<div class="clearfix"> </div>
						</div>
					<div class="col-md-6 services-grid">
							<div class="services-grid-right aliquam">
								<i class="fa fa-anchor" aria-hidden="true"></i>
							</div>
							<div class="services-grid-left non">
								<h4>Morbi enim nulla</h4>
								<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem</p>
							</div>
							<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- //services -->
	
	<!-- testimonial -->
	<!--<div class="jarallax testimonial">
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
										<img src="images/9.jpg" alt="" />
									</div>
									<div class="testimonial-img-info">
										<p>...</p>
										<h5>Evg.Charles John</h5>
										<h6>Zionkunnu Brethren Church</h6>
									</div>
								</li>
								<li>
									<div class="testimonial-img">
										<img src="images/10.jpg" alt="" />
									</div>
									<div class="testimonial-img-info">
										<p>...</p>
										<h5>Evg.K V Mathews</h5>
										<h6>Mannarathara Brethren Church</h6>
									</div>
								</li>
								<li>
									<div class="testimonial-img">
										<img src="images/11.jpg" alt="" />
									</div>
									<div class="testimonial-img-info">
										<p>...</p>
										<h5>Evg.C T George</h5>
										<h6>Aythala Bretheren Church</h6>
									</div>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
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
						</script>-->
						<!--banner Slider starts Here-->
					<!--</div>
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
	<!-- footer -->
	<!--<div class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="footer-grids">
					<div class="col-md-3 footer-grid">
						<div class="footer-logo">
							<h4><a href="index.html">Church<span></span></a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget egestas erat. In hac habitasse platea dictumst.</p>
						</div>
					</div>
					<div class="col-md-3 footer-grid">
						<h3>Navigation</h3>
						<ul>
							<li> <a href="about.html">About</a> </li>
							<li> <a href="gallery.html">Gallery</a> </li>
							<li> <a href="icons.html">Icons</a> </li>
							<li> <a href="codes.html">Short Codes</a> </li>
							<li> <a href="contact.html">Contact</a> </li>
						</ul>
					</div>
					<div class="col-md-3 footer-list">
						<h3>Associations</h3>
						<ul>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Prayer meets</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> BGF</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Evangelist Kids Meet</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Gents Evangelical Meeting</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> YMEF</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Ladies Prayer Meet</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Mauris eleifend aliquet</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Aliquam vitae tristique</li>
						</ul>
					</div>
					<div class="col-md-3 agile-footer-grid">
						<h3>Facebook Posts</h3>
						<ul class="w3agile_footer_grid_list">
							<li>New generation and Church <a href="#">http://facebook.com</a> 
								<span><i class="fa fa-twitter" aria-hidden="true"></i> 01 days ago</span></li>
							<li>Perfect Redemption <a href="#">http://facebook.com</a> 
							<span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- //footer -->
	
	<script src="<?php echo base_url();?>asset/js/jarallax.js"></script>
	<script src="<?php echo base_url();?>asset/js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script type="text/javascript" src="<?php echo base_url();?>asset/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>asset/js/easing.js"></script>
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
