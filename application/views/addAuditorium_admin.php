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
                </div><br> <div class="well" >
              <center><h3><b>New Auditorium</b></h3></center>
                   <br>                   <?php echo $this->session->flashdata('msg'); ?>

          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "addChurchPrayer", "name" => "addChurchPrayer","enctype"=>"multipart/form-data");
          echo form_open("AdminController/newAuditorium", $attributes);?>
                  <fieldset>
                      <center><table>
                              <tr><td><label for="aud_id" class="control-label">Auditorium ID</label>
                                  <td><br><input class="form-control" id="aud_id" name="aud_id"  placeholder="" type="text" value="<?php echo $id ?>" readonly="" />
    <span > <font color=green;
                    face= "Times New Roman"
                    size= 2px">ID auto generated</font></span>
               
                              <tr><td><label for="aud_addr" class="control-label">Address</label>
                                  <td><input class="form-control" id="aud_addr" name="aud_addr" placeholder="" required="" type="text" value="<?php echo set_value('aud_addr'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('address'); ?></span>
               
                              <tr><td><label for="aud_seat" class="control-label">Seats</label>
                                  <td><input class="form-control" id="aud_seat" name="aud_seat" placeholder="" required="" type="text" value="<?php echo set_value('aud_seat'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('seat'); ?></span>
             <tr><td><label for="aud_price" class="control-label">Price</label>
                 <td><input class="form-control" id="aud_price" name="aud_price" placeholder="" required="" type="text" value="<?php echo set_value('aud_price'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('price'); ?></span>
               
                          
                              <tr><td><label for="aud_detail" class="control-label">Details</label>
                                  <td><textarea class="form-control" id="aud_detail" name="aud_detail" minlength="5" required="" placeholder="" value="<?php echo set_value('aud_detail'); ?>" >
                    
                                      </textarea><span class="text-danger">  <?php echo $this->session->flashdata('detail'); ?></span>
               
           <tr><td><label for="aud_image" class="control-label">Image</label>
                                  <td>      
 <input type='file' class="form-control" name='userfile' accept="image/jpeg, image/png, image/jpg"  size='20' id='userfile' required=""/>

                              <tr ><td colspan=2>
                    <center><input id="btn_chprayeradd" name="btn_chprayeradd" type="submit" class="btn btn-warning" value="ADD" />
                    <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-warning" value="Cancel" /></table>
               
               
          </fieldset>
                  
          <?php echo form_close(); ?>
               
               </div>
                
                  <?php
                include('footer.php');
                ?>