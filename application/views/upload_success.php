<html>
    <title>
        Brethren Church | Admin
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

<style type="text/css">
    .well{
        align:center;
        background:transparent;
        width:90%;
    }
    table{
        border-collapse:separate; 
border-spacing:1em;
    }
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo base_url(). "js/submit.js" ?>"></script>
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
<div id="content1">
<h3>Your file was successfully uploaded!</h3><br>
<div id="message1"><!-- Uploaded file specification will show up here -->
<!--<h4><u>Details</u> :-</h4>
	<ul>
	<?php //foreach ($upload_data as $item => $value):?>
	<li><b><?php //echo $item;?></b> : <?php //echo $value;?></li><br/>
	<?php //endforeach; ?>
	</ul></div>-->
	
<hr><hr id="line1"> 
	<div id="selectImage1">
	<p ><?php echo anchor('SundaySchoolController/addSyllabus', 'Upload Another File!',array('id'=>'uploadagain')); ?></p>
	</div>
</div>
 <?php
                include('footer.php');
                ?>
</body>
</html>


