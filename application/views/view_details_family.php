 
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
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
								 <div class="navbar-brand logo ">
									<h1 class="animated wow pulse" data-wow-delay=".5s">
									<a href="#">Brethren<span>Church</span></a></h1>
								</div>

							</div>

							<?php include('church_header.php'); ?>
						</div>
					  <div class="clearfix"></div>	
			</div>
		</div>
<?php
echo "<br><br><br><br><center>"."Welcome ".$this->session->userdata('username')."!!!";
?>
<center><div style="width:600px;margin:50px;">
    <hr>Personal Details</hr>
    <table class="table table-striped table-bordered">
             <tr><td><strong>Id</strong></td><td><strong>Family</strong></td></tr> 

        <?php
        if($res){
        foreach($res as $fd){?>
             <tr><td><?=$fd->hofid;?></td><td><?=$fd->familyname;?></td></tr>

<!--     <tr><td><strong>Family Name </strong></td>  <td><?//=$fd->familyname;?></td></tr>
     <tr><td><strong> Church </strong></td>  <td><?//=$fd->chname;?></td></tr>
      <tr><td><strong>Family head </strong></td>  <td><?//=$fd->hofname;?></td></tr>
     <tr><td><strong>Gender </strong></td>  <td><?//=$fd->gender;?></td></tr>
     <tr><td><strong>Date of birth </strong></td>  <td><?//=$fd->dob;?></td></tr>
     <hr>Job</hr>
     <tr><td><strong>Occupation </strong></td>  <td><?//=$fd->occupation;?></td></tr>
     <hr>Contact Details</hr>
     <tr><td><strong>Email id </strong></td>  <td><?//=$fd->hofemail;?></td></tr>
     <tr><td><strong>Contact no</strong></td>  <td><?//=$fd->phone;?></td></tr>-->
     <?php }
     }
        else
        {
            echo "<tr><td>No result found!!";
        }?> 
<tr><td><input id="btn_editfamily" name="btn_editfamily" type="submit" class="btn btn-warning" value="Update" />
<tr><td><input id="btn_addmembers" name="btn_addmembers" type="submit" class="btn btn-warning" value="Add Member" /></td></tr>     
         
    </table>
   </div> 
     <?php
                include('footer.php');
                ?>

