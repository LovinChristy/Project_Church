<html>
    <title>
        Brethren Church | Family
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
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("table").show();
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
<!--                <a href="<?php echo base_url();?>index.php/ChurchController/churchNotification" class="btn btn-success">Public Notifications </a>||
                                     <a href="<?php echo base_url();?>index.php/ChurchController/viewChurchNotification" class="btn btn-success">Admin Notification</a>||
                                        <a href="<?php echo base_url();?>index.php/ChurchController/view_notif_church_posted" class="btn btn-success">Church Notification</a>||
                                        <a href="<?php echo base_url();?>index.php/ChurchController/view_notif_church_posted" class="btn btn-success">Family Notification</a>
                                                                    -->
                                       
                 <center><h4> Notice from admin</h4>
            <!--<div style="width:80%;margin:20px; height:70%; overflow-x:auto;">-->
           <div class="tbl-header" style="width:90%; overflow-x:auto;">     
    <?php echo $this->session->flashdata('msg'); ?>
               <center><table class="table table-responsive  table-hover" cellpadding="0" cellspacing="0" border="0" s>
     <tr><td><strong>#</strong></td><td><strong>Title</strong></td><td><strong>Notification</strong></td><td><strong>Posted Date </strong></td>
         </tr> 
     <?php 
     if($notif){
         $i=1;foreach($notif as $n){?>
     <tr><td><?=$i;?></td><td><?=$n->title;?></td><td><?=$n->notification;?></td><td><?=$n->dateposted;?></td>
        
</tr>     
        <?php $i++; }}
        else
        {
            echo "<tr><td>No result found!!";
        }?>  
    </table>
                      
   </div> 
             <?php
                include('footer.php');
                ?>