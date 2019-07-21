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
<div class="tbl-header" style="width:100%;">           
    <a href="<?php echo base_url()."index.php/AdminController/viewDonationRequest"?>">View Donation Requests</a> ||
<a href="<?php echo base_url()."index.php/AdminController/viewApprovedRequest"?>">View Approved Requests</a> ||
    <a href="<?php echo base_url()."index.php/AdminController/viewRejectedRequest"?>">View Rejected Requests</a>
    
    <br>  <br> <table class="table table-responsive  table-hover" cellpadding="0" cellspacing="0" border="0" >
        <tr ><td><strong> #</strong></td><td><strong>Name</strong></td><td><strong>Message</strong></td><td><strong>Account number</strong></td>
            <td><strong>Contact</strong></td><td><strong>Email</strong></td>
            <td colspan="2"><strong>Approve/Reject</strong></td>
            <!--<td><input type="checkbox" id="checkall" onclick="return check();" /></td>-->
        </tr> 
     <?php
     if($donation){
         { foreach($donation as $ch){
     }
         ?>
     <tr><td><?=$ch->donation_id?></td><td><?=$ch->name;?></td><td><?=$ch->msg;?></td><td><?=$ch->accountno;?></td><td><?=$ch->contact;?></td><td><?=$ch->email;?>
</td><td><a href="<?php echo base_url()."index.php/AdminController/approverequest/".$ch->donation_id ?>"class="btn btn-success">Approve</a>
</td>
<td><a href="<?php echo base_url()."index.php/AdminController/rejectrequest/".$ch->donation_id ?>"class="btn btn-danger">Remove</a>
</td>
<!--<td><input type="checkbox" id="checkItem"/></td>-->
     </tr>     
        <?php  }
         }
        else
        {
            echo "<tr><td colspan=5>No results found";
            }?>  
    </table>
   </div>
                 <?php
                include('footer.php');
                ?>