<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Brethren Church | About</title>

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
					<h2>Downloads</h2>
				</div>
			</div>
		</div>	
		<!-- //banner-slider -->
	</div>
	<!-- //banner -->
	<!-- about -->
	<!-- a-about -->
	<div class="a-grid">
		<div class="container">
			<div class="agileits-a-about-grids">
					<br>&nbsp;&nbsp;&nbsp;<a href="<?=base_url ()?>index.php/DownloadController/downloadindex" class="btn btn-primary"> Back </a>

                            <div class="col-md-12 agile_banner_bottom1_right" style="background:#FFFFFF;">
                               
                                &nbsp;&nbsp;&nbsp;<span style="color:red;">* </span> <a href="<?=base_url ()?>index.php/DownloadController/downloadschoolapp" > Schools </a>
                                <bR><br>
                                &nbsp;&nbsp;&nbsp;<span style="color:red;">* </span> <a href="<?=base_url ()?>index.php/DownloadController/downloadcollegeapp"> College 
</a>
         

<!--                                <span style="color:red;">* </span> File Picture  
                                &nbsp;&nbsp;&nbsp;<a href="<?=base_url ()?>index.php/DownloadController/download/parents.png" class="btn btn-primary"> Download imp.zip</a>
            
				<br><br><span style="color:red;">* </span>File MP3 
                                &nbsp;&nbsp;&nbsp;<a href="<?=base_url ()?>index.php/DownloadController/download/Sneham_Cherum_Neram-StarMusiQ.Com.mp3" class="btn btn-primary"> Download imp.zip</a>
       
                               <br> <br><span style="color:red;">* </span> File MP4
                               &nbsp;&nbsp;&nbsp;<a href="<?=base_url ()?>index.php/DownloadController/download/daivathemarannukunje.mp4" class="btn btn-primary"> Download imp.zip</a>
            
                                <br><br><span style="color:red;">* </span> File PDF
                                &nbsp;&nbsp;&nbsp;<a href="<?=base_url ()?>index.php/DownloadController/download/MCA404OOMD_QP.pdf" class="btn btn-primary"> Download imp.zip</a>
      -->     
</div>
        </div></div></div>
				<!--</div>-->
<!--				<div class="clearfix"> </div>
			</div>
		</div>
	</div>-->
	<!-- //a-about -->
	<!-- different -->
	<!--
	<div class="jarallax different">
		<div class="wthree-different-dot">
			<div class="container">
				<div class="w3-different-heading">
					<h3>Why we are different</h3>
				</div>
				<div class="w3agile-different-info">
					<p>Cras vehicula massa id ipsum venenatis, non convallis libero pellentesque. Sed tristique massa et mattis mattis. Nunc euismod consequat ex, eu tincidunt justo malesuada vitae. Sed auctor diam quis nulla hendrerit porta. Quisque venenatis, tortor quis tristique congue, lorem lectus elementum augue, in laoreet lorem justo lacinia velit. Phasellus tempus luctus velit, eu fermentum arcu porttitor sit amet. Suspendisse id efficitur sem. Donec laoreet ante at facilisis dictum. Donec sodales porta orci sed porta. Vivamus est enim, pharetra sit amet placerat ut, eleifend quis purus. Sed elementum tortor erat, placerat rutrum augue facilisis vel. Morbi feugiat tortor erat, nec gravida mauris egestas tincidunt. Sed vitae dignissim sapien.</p>
					<div class="w3agile-button">
						<a href="single.html">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- //different -->
	<!-- team -->
	<!--
	<div class="team">
		<div class="container">
			<div class="agileinfo-team-heading">
				<h3>Our Team</h3>
			</div>
			<div class="team-grids">
				<div class="col-md-3 agileinfo-team-grid">
					<img src="images/9.jpg" alt="" />
					<div class="captn">
						<h4>Mary Jane</h4>
						<p>Vestibulum </p>
						<div class="w3l-social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo-team-grid">
					<img src="images/10.jpg" alt="" />
					<div class="captn">
						<h4>Peter Parker</h4>
						<p>Aliquam non</p>
						<div class="w3l-social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo-team-grid">
					<img src="images/11.jpg" alt="" />
					<div class="captn">
						<h4>Johan Botha</h4>
						<p>Nulla molestie</p>
						<div class="w3l-social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo-team-grid">
					<img src="images/12.jpg" alt="" />
					<div class="captn">
						<h4>Steven Wilson</h4>
						<p>Quisque vitae</p>
						<div class="w3l-social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>-->
	<!-- //team -->
	<!-- //about -->
	<?php
        include('footer.php');
        ?>