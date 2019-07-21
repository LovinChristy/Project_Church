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
		</div>
            <br><br>
            <center> <h4>Evangelist Record</h4></center>
            <a href="<?php echo base_url()."index.php/AdminController/view_evangelist_approved"?>"class="BTN BTN-PRIMARY">APPROVED</a>
            <a href="<?php echo base_url()."index.php/AdminController/view_evangelist_rejected"?>"class="BTN BTN-PRIMARY">REJECTED</a>
            <center>
                <!--<div style="width:100%;margin:20px; height:7%0%; overflow-x:auto;">-->
                 <div class="tbl-header" style="width:90%;"> 
                <script lang="text/javascript">
                        function check()
                        {
                            
                       $('#checkall').change(function(){
    if($(this).prop('checked')){
        $(' tr td input[type="checkbox"]').each(function(){
            $(this).prop('checked', true);
        });
    }else{
        $(' tr td input[type="checkbox"]').each(function(){
            $(this).prop('checked', false);
        });
    }
});
}
                        </script> 
    
    <table class="table table-responsive table-hover" cellpadding="0" cellspacing="0" border="0">
     <tr>
         <!--<td><input type="checkbox" id="checkall" onclick="return check();" /></td>-->
         <td><strong>Evangelist Id</strong></td><td><strong>Evangelist</strong></td>
         </tr> 
     <?php
     if($evang){foreach($evang as $ev){?>
     <tr>
         <!--<td><input type="checkbox" id="checkItem"/></td>-->
         <td><?=$ev->evangelistid;?></td><td><a href="<?php echo base_url()."index.php/AdminController/view_evangelist_details/".$ev->evangelistid;?>"><?=$ev->evname;?></a></td><td><a href="<?php echo base_url()."index.php/AdminController/approve_evangelist/".$ev->evangelistid ?>" class="btn btn-success">Approve</a>
         </td><td><a href="<?php echo base_url()."index.php/AdminController/reject_evangelist/".$ev->evangelistid ?>" class="btn btn-danger">Reject</a>
</td></tr>     
        <?php }
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