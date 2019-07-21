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
        width:120%;
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
<br><br>
 <div class="col-lg-6 col-lg-offset-3">
     <?php 
echo "<center><font color='red'> Welcome Church " . $this->session->userdata('church')."!!!<br><br><br></font>";

?> 
          <div class="well" >
              <center><h3><b>Add death record</b></h3></center>
                   <br>
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "addChurchDeath", "name" => "addChurchDeath");
          echo form_open("RecordsController/verifyChurchDeath", $attributes);?>
                  <fieldset>
                      <center><table>
                              <tr><td><label for="txt_name" class="control-label">Name</label>
                                  <td><input class="form-control" id="txt_name" name="txt_name" placeholder="" type="text" value="<?php echo set_value('txt_name'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('namemsg'); ?></span>
                <tr><td><label for="txt_dob" class="control-label">Date of Birth</label>
                                  <td><input class="form-control" id="txt_dob" name="txt_dob" placeholder="" type="text" value="<?php echo set_value('txt_dob'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('dobmsg'); ?></span>
                <td><label for="txt_dod" class="control-label">Date of Death</label>
                                  <td><input class="form-control" id="txt_dod" name="txt_dod" placeholder="" type="text" value="<?php echo set_value('txt_dod'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('dodmsg'); ?></span>
                <tr><td><label for="txt_family" class="control-label">Family Name</label>
                                  <td><input class="form-control" id="txt_family" name="txt_family" placeholder="" type="text" value="<?php echo set_value('txt_family'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('familymsg'); ?></span>
                <tr><td><label for="txt_cemetry" class="control-label">Cemetry name</label>
                                  <td><input class="form-control" id="txt_cemetry" name="txt_cemetry" placeholder="" type="text" value="<?php echo set_value('txt_cemetry'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('cemetrymsg'); ?></span>
                <tr><td><label for="txt_officiant" class="control-label">Officiant</label>
                                  <td><input class="form-control" id="txt_officiant" name="txt_officiant" placeholder="" type="text" value="<?php echo set_value('txt_officiant'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('officiantmsg'); ?></span>
               
               <tr ><td colspan=4>
                    <center><input id="btn_chdeathadd" name="btn_chdeathadd" type="submit" class="btn btn-primary" value="Add" />
</table>
               
               
          </fieldset>
                   <?php echo $this->session->flashdata('msg'); ?>
                  
          <?php echo form_close(); ?>
               
               </div>
               </div>
                      
          </div>
         <?php
                include('footer.php');
                ?>
    