<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Brethren Church | Our institution</title>

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
	
		<div class="a-grid">
		<div class="container">
			<!--<div class="agileits-a-about-grids">-->
			
                               
                                 <center>    <a href="http://localhost/BrethrenChurch/index.php/DownloadController/downloadschoolapp" class="btn btn-warning" style=" width:170px;height:50px;"> <font size="3px" face="Lobster"> Schools </a>
            
				
                               <a href="<?=base_url ()?>index.php/DownloadController/downloadcollegeapp" class="btn btn-warning" style=" width:170px;height:50px;"><font size="3px" face="Lobster"> Colleges </a>
                                
                             <a href="<?=base_url ()?>index.php/DownloadController/oldage" class="btn btn-warning" style=" width:170px;height:50px;" ><font size="3px" face="Lobster"> Old age homes <i class="fa fa-home" aria-hidden="true"></i>
</a>
                                 <a href="<?=base_url ()?>index.php/DownloadController/hospital" class="btn btn-warning" style=" width:170px;height:50px;" ><font size="3px" face="Lobster"> Hospitals <i class="fa fa-hospital-o" aria-hidden="true"></i></a>
                                 </center>
<div class="col-md-12 agile_banner_bottom1_right" style="background:#FFFFFF;">
                               
        
                        <span style="color:red;">* </span> Brethren Mercy Trust<br>
                                &nbsp;&nbsp;&nbsp;Kumbanad P O <br>
                                &nbsp;&nbsp;&nbsp;Thiruvalla<br>
                                &nbsp;&nbsp;&nbsp;689 622<br>
                                &nbsp;&nbsp;&nbsp;Phone number: 0457 373567 							
                                <i class="fa fa-phone-square" aria-hidden="true"></i>
<br>
                                &nbsp;&nbsp;&nbsp;Fax : 9877 9876 9876<br>
                                &nbsp;&nbsp;&nbsp;Email : bmt@gmail.com<br>
                                	&nbsp;&nbsp;&nbsp;<a href="<?=base_url ()?>index.php/DonationController" class="btn btn-primary"> Donate </a>

                                <!--&nbsp;&nbsp;&nbsp;Our Website : <a href="http://tmmhospital.org/">tmmhospital.org</a><br>-->
                                <br><br>
                                <!--Our Branch:<br>-->
                                <span style="color:red;">* </span> Rehoboth Old Age Home<br>
                                &nbsp;&nbsp;&nbsp;Nellikunnu P O <br>
                                &nbsp;&nbsp;&nbsp;Nellikunnu<br>
                                &nbsp;&nbsp;&nbsp;689 642<br>
                                &nbsp;&nbsp;&nbsp;Phone number: 0457 223567
                                                                <i class="fa fa-phone-square" aria-hidden="true"></i>
<br>
                                &nbsp;&nbsp;&nbsp;Fax : 8977 9876 9876<br>
                                &nbsp;&nbsp;&nbsp;Email : rehoboth@gmail.com<br>
                                                                	&nbsp;&nbsp;&nbsp;<a href="<?=base_url ()?>index.php/DonationController" class="btn btn-primary"> Donate </a>

                                <!--&nbsp;&nbsp;&nbsp;Our Website : <a href="http://tmmhospital.org/">tmmhospital.org</a><br>-->
                               
                            </div></div>
                        </div>	
                                 

                <br><br>
		</div>	
		<!-- //banner-slider -->
	</div><?php
        include('footer.php');
        ?>

