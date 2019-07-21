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
              <center><h3><b>Add marriage record</b></h3></center>
                   <br>
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "addChurchBaptism", "name" => "addChurchBaptism");
          echo form_open("RecordsController/verifyChurchMarriage", $attributes);?>
                  <fieldset>
                      <center><table>
                              <tr><td><label for="txt_bride" class="control-label">Bride</label>
                                  <td><input class="form-control" id="txt_bride" name="txt_bride" placeholder="" type="text" value="<?php echo set_value('txt_bride'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('bridemsg'); ?></span>
                <td><label for="txt_groom" class="control-label">Groom</label>
                                  <td><input class="form-control" id="txt_groom" name="txt_groom" placeholder="" type="text" value="<?php echo set_value('txt_groom'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('groommsg'); ?></span>
                <tr><td><label for="b_dob" class="control-label">Date of Birth</label>
                                  <td><input class="form-control" id="b_dob" name="b_dob" placeholder="" type="text" value="<?php echo set_value('b_dob'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('bdobmsg'); ?></span>
                <td><label for="g_dob" class="control-label">Date of Birth</label>
                                  <td><input class="form-control" id="g_dob" name="g_dob" placeholder="" type="text" value="<?php echo set_value('g_dob'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('dobgmsg'); ?></span>
                <tr><td><label for="b_family" class="control-label">Family Name</label>
                                  <td><input class="form-control" id="b_family" name="b_family" placeholder="" type="text" value="<?php echo set_value('b_family'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('bfamilymsg'); ?></span>
                <td><label for="g_family" class="control-label">Family Name</label>
                                  <td><input class="form-control" id="g_family" name="g_family" placeholder="" type="text" value="<?php echo set_value('g_family'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('gfamilymsg'); ?></span>
                <tr><td><label for="txt_date" class="control-label">Date</label>
                                  <td><input class="form-control" id="txt_date" name="txt_date" placeholder="" type="text" value="<?php echo set_value('txt_date'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('datemsg'); ?></span>
                <tr><td><label for="txt_venue" class="control-label">Venue</label>
                                  <td><input class="form-control" id="txt_venue" name="txt_venue" placeholder="" type="text" value="<?php echo set_value('txt_venue'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('venuemsg'); ?></span>
               
                              <tr><td><label for="txt_officiant" class="control-label">Officiant</label>
                                  <td><input class="form-control" id="txt_officiant" name="txt_officiant" placeholder="" type="text" value="<?php echo set_value('txt_officiant'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('officiantmsg'); ?></span>
                <tr><td><label for="bwitness1" class="control-label">Witness 1</label>
                                  <td><input class="form-control" id="bwitness1" name="bwitness1" placeholder="" type="text" value="<?php echo set_value('bwitness1'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('bwit1msg'); ?></span>
                <td><label for="gwitness1" class="control-label">Witness 1</label>
                                  <td><input class="form-control" id="gwitness1" name="gwitness1" placeholder="" type="text" value="<?php echo set_value('gwitness1'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('gwit1msg'); ?></span>
                <tr><td><label for="bwitness2" class="control-label">Witness2</label>
                                  <td><input class="form-control" id="bwitness2" name="bwitness2" placeholder="" type="text" value="<?php echo set_value('bwitness2'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('bwit2msg'); ?></span>
                <td><label for="gwitness2" class="control-label">Witness2</label>
                                  <td><input class="form-control" id="gwitness2" name="gwitness2" placeholder="" type="text" value="<?php echo set_value('gwitness2'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('gwit2msg'); ?></span>
               
               <tr ><td colspan=4>
                    <center><input id="btn_chmarriageadd" name="btn_chmarriageadd" type="submit" class="btn btn-primary" value="Add" />
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
    