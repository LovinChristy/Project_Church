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
                <?php echo $this->session->flashdata('msg'); ?>

    <div class="card">
        <center><br><br>
  <?php
  if($evt){
      ?>
          <!--<p><a href="editAssociationProfile"><input type="button" class="btn btn-warning" name="btnEdit" id="btnEdit" value="Edit Profile"/></a>-->
<!--<a href="AssociationMainController/addAssociationMembers"><input type="button" class="btn btn-warning" name="btnAdd" id="btnAdd" value="Add Members"/></a>--></tr>
         
            <table width="80%" class="table table-responsive"><thead><tr><th></th><th>Event</th><th >Date</th><th>Theme</th><th>Venue</th></thead><br>
              <?php
              
              foreach($evt as $row){
              ?>
              <tr><td>*</td>
                  <td><?php echo $row->eventname; ?></td>
           <td><?php echo $row->datefrom ." to ". $row->dateto ?>
        <td><?php echo $row->theme ?>
               
                       <td><?php   echo $row->venue ?>
 
 <?php } 
 }
        else
        {
            echo "<tr><td>No result found!!";
        }?>
                       </td></tr></table></center></div>
  </div>
       <?php
                include('footer.php');
                ?>
</body>
</html>
