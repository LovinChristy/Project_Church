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
                </div><br>
                <center> <h4>Feedbacks</h4>
            <center><div style="width:80%;margin:20px; height:70%; overflow-x:auto;">
   
    <table class="table table-striped table-bordered">
     <tr><td><strong>Feed Id</strong></td><td><strong>Feedback</strong></td><td><strong>Name</strong></td>
         <td><strong>Post </strong></td><td><strong>Remove </strong></td></tr> 
     <?php
     if($feedbackdata){
     $i=1; foreach($feedbackdata as $fb){?>
     <tr><td><?=$i?></td><td><?=$fb->feedback;?></td><td><?=$fb->fname;?></td>
         <td><a href="<?php echo base_url()."index.php/AdminController/enable_feedback/".$fb->feedid ?>"                                       
          class="btn btn-success"
          >Post</a></td>
     </td><td><a href="<?php echo base_url()."index.php/AdminController/remove_feedback/".$fb->feedid ?>"   class="btn btn-danger">Remove</a></td></tr>     
        <?php $i++; }
        }
        else
        {
            echo "<tr><td>No result found!!";
        }
        ?>  
    </table>
   </div> 
                 <?php
                include('footer.php');
                ?>