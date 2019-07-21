<html>
    <title>
        Brethren Church | Church
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
            <br>
            <link rel="stylesheet" href="<?php echo base_url(); ?> asset/css/tablecss.css" >
            <script src="<?php echo base_url(); ?> asset/js/tablejs.js"></script>
             <div class="tbl-header" >  
                <center><h3><b>View Sunday School Records</b></h3></center><br>
                <center><table class="table table-responsive  table-hover" cellpadding="0" cellspacing="0" border="0" style="width:80em;">
                           <thead>
                               <tr><th>Principal
                                   <th>School head
                                   <th>Year</tr>
                           </thead>
                                <?php
                                if($p)
                                    {foreach($p as $pr ){?>
     
         <tr><td><?=$pr->principal;?>
         <?php } 
         
         ?>
          <?php foreach($h as $hd){?>
     
         <td><?=$hd->head;?><td><?=$hd->year;?>
         <?php } 
         
          }
        else
        {
            echo "<tr><td>No result found!!";
        }?>
                           </thead>               
      </table>
          </div>
     </div>
 <?php
                include('footer.php');
                ?>
