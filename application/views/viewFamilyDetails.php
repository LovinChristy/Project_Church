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
<link href="<?php echo base_url(); ?>asset/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="<?php echo base_url(); ?>asset/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Laila:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- //font -->
<script src="<?php echo base_url(); ?>asset/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/bootstrap.js"></script>
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
         <script>
$(document).ready(function(){
    $("button").click(function(){
        $("table").show();
    });
});
</script>
<br><br>
  <div class="container" style="min-height:100%">
      <div class="card">
      <center>
          <!--<table class="table table-striped table-bordered" style="width:50%;height:50%;">-->
  <?php foreach($family as $row){?>
<!--              <input type='button' value='Add Button' id='addButton'>
<input type='button' value='Remove Button' id='removeButton'>-->
              <!--<tr><td>-->
          <p>
              <button class="btn btn-warning" value="View Family">View Family</button>
          <!--<tr><td>-->
      <p> <img src="<?php echo base_url();?>asset/uploads/familyhead/<?php echo $row->hofphoto ;?>"  style="width:104px;height:142px;" />
 <!--<tr><td>-->
              <p>  <?php echo $row->hofname ?></p>
             <!--<tr><td>-->
              <p> <?php echo $row->familyname ?><p>
        <!--<tr><td>-->
              <p> <?php echo $row->gender?></p>
                <!--<tr><td>-->
              <p>Born on <?php echo $row->dob?></p>
                        <!--<tr><td>-->
              <p>Working as <?php echo $row->occupation?></p>
<!--<tr><td>-->
              <p>Email me <?php echo $row->hofemail?></p>
        <!--<tr><td>-->
              <p>Contact me <?php echo $row->phone?></p>

 <?php } ?>
<!--</table>-->
      </div>
      <center><table class="table  table-bordered table-responsive" hidden="" >
     <tr><td><strong>#</strong></td><td><strong>Name</strong></td><td><strong>Job</strong></td><td><strong>Phone</strong></td><td><strong>Email</strong></td>
         
        </tr> 
     <?php
     if($member)
     {
         $i=1; foreach($member as $f){?>
     <tr><td><?=$i;?></td>
         <!--<td><?=$f->mpid;?></td>-->
         <td><?=$f->membername;?></td>
         <td><?=$f->occupation;?></td>
          <!--<td><?=$f->relation;?></td>-->
         <td><?=$f->mem_phone;?></td>
         <td><?=$f->member_email;?></td>
         
          
         
</tr>     
        <?php $i++; }
        }
        else
        {
            echo "<tr><td colspan=5>No result found!!";
        }?>  
    </table>
  </div>

        <?php
                include('footer.php');
                ?>
</body>
</html>
