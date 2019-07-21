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
        background:CORNSILK;
        width:90%;
    }
    table{
        border-collapse:separate; 
border-spacing:1em;
    }
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo base_url(). "js/submit.js" ?>"></script>
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
<br><br><br>
 <div class="col-lg-6 col-lg-offset-3">
     <?php 
echo "<center><font color='red'> Welcome Church " . $this->session->userdata('church')."!!!<br><br><br></font>";

?> 
          <div class="well" >
              <center><h3><b>Add church prayer</b></h3></center>
                   <br>                   <?php echo $this->session->flashdata('msg'); ?>

          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "addChurchPrayer", "name" => "addChurchPrayer");
          echo form_open("ChurchController/verifyChurchPrayer", $attributes);?>
                  <fieldset>
                      <center><table>
                              <tr><td><label for="txt_prayer" class="control-label">Prayer</label>
                                  <td><input class="form-control" id="txt_prayer" name="txt_prayer" placeholder="" type="text" value="<?php echo set_value('txt_prayer'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('prayermsg'); ?></span>
               
                              <tr><td><label for="txt_day" class="control-label">Day</label>
                                  <td><input class="form-control" id="txt_day" name="txt_day" placeholder="" type="text" value="<?php echo set_value('txt_day'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('daymsg'); ?></span>
               
                              <tr><td><label for="txt_time" class="control-label">Time</label>
                                  <td><input class="form-control" id="txt_time" name="txt_time" placeholder="" type="text" value="<?php echo set_value('txt_time'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('timemsg'); ?></span>
             <tr><td><label for="txt_title" class="control-label">Venue</label>
                                  <td><input class="form-control" id="txt_venue" name="txt_venue" placeholder="" type="text" value="<?php echo set_value('txt_venue'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('venuemsg'); ?></span>
               
                          
                              <tr><td><label for="txt_description" class="control-label">Details</label>
                   <td><textarea class="form-control" id="txt_description" name="txt_description" required="" placeholder=""  value="<?php echo set_value('txt_description'); ?>" >
                    
                                      </textarea><span class="text-danger">  <?php echo $this->session->flashdata('description'); ?></span>
               
               
                             
                              <tr ><td colspan=2>
                    <center><input id="btn_chprayeradd" name="btn_chprayeradd" type="submit" class="btn btn-warning" value="Post" />
                    <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-warning" value="Cancel" /></table>
               
               
          </fieldset>
                  
          <?php echo form_close(); ?>
               
               </div>
               </div>
                      
          </div>
         <?php
                include('footer.php');
                ?>
    