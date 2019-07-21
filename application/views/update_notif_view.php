<div class="container" style="min-height:100%">
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
<link href="<?php echo base_url(); ?>asset/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="<?php  echo base_url(); ?>asset/css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="<?php echo base_url(); ?>asset/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Laila:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- //font -->
<script src="<?php echo base_url(); ?>asset/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/bootstrap.js"></script>
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
            <br><br>
    <?php 
          $attributes = array("class" => "form-horizontal", "id" => "updateNotification", "name" => "updateNotification");
          echo form_open("AdminController/verifyUpdateNotification", $attributes);
    ?>
    
<center><table class="table table-striped table-bordered" style="width:60%;height:50%;">
<?php
if($notification){
    foreach($notification as $row){?>
  <tr><td>
        <?php echo "Title:" ?><td><input type="text" name="title" readonly="" value="<?php  echo $row->title ?>"></td>
 
 <tr><td>
        <?php echo "Notification:"?><td><input type="textarea" name="notification" value="<?php echo $row->notification?>"></td>

    <tr><td colspan="2">
        <center><input type="submit" class="btn btn-warning" name="btnUpdate" id="btnUpdate" value="Update">
    </tr>
 <?php }
}
        else
        {
            echo "<tr><td>No result found!!";
        } ?>
    
</table>

    <?php echo form_close(); ?>
 <?php
                include('footer.php');
                ?>