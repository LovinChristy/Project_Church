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
<br><br><br>
   <div class="col-lg-6 col-lg-offset-3">
     <div class="well" >
              <center><h3><b>Add New Village</b></h3></center>
                   <br>
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "villageAdd", "name" => "villageAdd");
          echo form_open("VillageController/verifyVillage", $attributes);?>
                  <center><table>
                           <tr><td><label for="txt_taluk" class="control-label">Taluk</label>
                                       <td><select class="form-control" name="taluk" id="taluk" >
                                               <option value="" >SELECT TALUK</option>
                     <?php foreach($records as $row) { ?>
<option value="<?=$row->talukid?>"><?=$row->taluk?></option>
<?php } ?>
                       </select>
                <?php echo $this->session->flashdata('talukmsg'); ?>
                    <tr><td><label for="txt_village" class="control-label">Village</label>
             
                    <td><input class="form-control" id="txt_village" name="txt_village" placeholder="Village" type="text" value="<?php echo set_value('txt_village'); ?>" />
                    <span class="text-danger">    <?php echo $this->session->flashdata('villagemsg'); ?></span>
                    <tr ><td colspan=2>
                             <center> <input id="btn_login" name="btn_villageadd" type="submit" class="btn btn-warning" value="Add" />
                    <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-warning" value="Clear" />
                             </center></table>
          </fieldset>
           <?php echo $this->session->flashdata('msg'); ?>
          <?php echo form_close(); ?>
          
          </div>
     </div>
</div>
         <?php
                include('footer.php');
                ?>
