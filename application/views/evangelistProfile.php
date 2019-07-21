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
        </div>
        <br><br>
  <div class="container" style="min-height:100%">
      <center>
           <div class="card">
               <!--<table class="table table-striped table-bordered" style="width:50%;height:50%;">-->
  <?php
  if($evan){
      foreach($evan as $row){?>
               <p><a href="EvangelistMainController/editProfile"><input type="button" class="btn btn-warning" name="btnEdit" id="btnEdit" value="Edit Profile"/></a>
              
               <p>
            <img src="<?php echo base_url();?>asset/images/evangelist/<?php echo $row->ev_photo ;?>"  style="width:104px;height:142px;" />
<p><?php   echo $row->evname ?>
             <p><?php echo $row->housename ?>
                   <p><?php echo $row->postoffice ?>
                                 <p><?php echo $row->postalcode ?>
                                 <p><?php echo "Gender:" .$row->gender?>
           <p><?php echo "Email id:" .$row->ev_email?>
      <p><?php echo "Contact Number:" .$row->ev_phone?>

 <?php }
}
        else
        {
            echo "<tr><td>No result found!!";
        } ?>
</table>
  </div>
  </div>    
</body>
 <?php
                include('footer.php');
                ?>
</html>
