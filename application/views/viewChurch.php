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
                </div><br>
            <center>
                <h4>Church Registered</h4>
                <!--<div style="width:80%;margin:20px; height:70%; overflow-x:auto;">-->
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
        <div class="tbl-header" style="width:90%;">           

    <table class="table table-responsive  table-hover" cellpadding="0" cellspacing="0" border="0" >
        <tr ><td><strong>Church Id</strong></td><td><strong>Church</strong></td><td><strong>Secretary</strong></td><td><strong>Email ID</strong></td>
            <td><strong></strong></td><td><strong></strong></td>
            <!--<td><input type="checkbox" id="checkall" onclick="return check();" /></td>-->
        </tr> 
     <?php
     if($church){
         foreach($church as $ch){
         ?>
     <tr><td><?=$ch->chid;?></td><td><?=$ch->chname;?></td><td><?=$ch->secretaryname;?></td><td><?=$ch->chemail;?></td><td><a href="<?php echo base_url()."index.php/AdminController/approve_church/".$ch->chid ?>" class="btn btn-success" >Approve</a>
</td><td><a href="<?php echo base_url()."index.php/AdminController/reject_church/".$ch->chid ?>"class="btn btn-danger">Reject</a>
</td>
<!--<td><input type="checkbox" id="checkItem"/></td></tr>-->     
        <?php  }
        }
        else
        {
            echo "<tr><td>No result found!!";
        }?>  
    </table>
   </div> 
                         <?php
                include('footer.php');
                ?>