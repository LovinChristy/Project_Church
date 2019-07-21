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
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;<a href="<?php echo base_url();?>index.php/FamilyMainController/viewFamily" class="btn btn-warning">Back to Profile</a>
  <div class="container" style="min-height:100%">
      <?php echo $this->session->flashdata('msg'); ?>
      <center><table class="table table-striped table-bordered" style="width:80%;height:50%; overflow-x:auto;"  >
     <tr><td><strong>ID</strong></td><td><strong>Name</strong></td><td><strong>Job</strong></td><td><strong>Phone</strong></td><td><strong>Email</strong></td>
         <td colspan="2" ><strong>Manage family</strong></td>
        </tr> 
     <?php
     if($family)
     {
          foreach($family as $f){?>
     <!--<tr><td><?=$i;?></td>-->
         <td><?=$f->mpid;?></td>
         <td><?=$f->membername;?></td>
         <td><?=$f->occupation;?></td>
          <!--<td><?=$f->relation;?></td>-->
         <td><?=$f->mem_phone;?></td>
         <td><?=$f->member_email;?></td>
         <td > <a href="<?php echo base_url()."index.php/FamilyMainController/remove_member/".$f->mpid ?>"                                       
          
          onclick="return confirm
              ('Are you sure to Delete?')"><img src="<?php echo base_url();?>asset/images/garbage.png"></a>
         </td>
         <td><a href="<?php echo base_url()."index.php/FamilyMainController/update_member/".$f->mpid ?>"><center>
                     <img src="<?php echo base_url();?>asset/images/edit.png"></a>
         </td>
          
         
</tr>     
        <?php }
        }
        else
        {
            echo "<tr><td>No family added!!";
        }?>  
    </table>
        
   </div> 
 <?php
                include('footer.php');
                ?>