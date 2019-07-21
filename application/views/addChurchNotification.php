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
                        <?php echo $this->session->flashdata('msg'); ?>

          <div class="well" >
              <center><h3><b>Add Notification</b></h3></center>
                   <br>
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "addNotification", "name" => "addNotification");
          echo form_open("ChurchController/verifyNotificationfromChurch", $attributes);?>
                  <fieldset>
                      <center><table>
                              <tr><td><label for="txt_title" class="control-label">Title</label>
                                  <td><input class="form-control" id="txt_title" name="txt_title" oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Enter notification title'));  
                                             this.value=this.value.replace(/\s/g,''); this.focus=true;}" required=""
                                      onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}" placeholder="Title of Notification" type="text" value="<?php echo set_value('txt_title'); ?>" />
                    <span class="text-danger">  <?php echo $this->session->flashdata('titlemsg'); ?></span>
                    
               <tr><td><label for="txt_notification" class="control-label">Notification</label>
               <td><textarea class="form-control" id="txt_notification" name="txt_notification" oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Enter notification'));  
                                      this.value=this.value.replace(/\s/g,''); this.focus=true;}"
                                      onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}" required="" placeholder="Notificationship in Cap Locks"  value="<?php echo set_value('txt_notification'); ?>" >
                    
                                      </textarea><span class="text-danger">  <?php echo $this->session->flashdata('textarea'); ?></span>
               
                <tr><td><label for="to" class="control-label">Send to</label>
                    <td><select class="form-control" id="to" name="to[] " multiple="multiple" required="" >
                           <option value="all">All</option>
                        <option value="2">Church</option>
                         <option value="3">Family</option>
    <option value="4">Evangelist</option>
                               <option value="5">Association</option>
                             <option value="6">Principal</option>
                           <option value="7">Head</option>
                           <option value="8">Tutors</option>
 </select>
                                      <span class="text-danger">  <?php echo $this->session->flashdata('to'); ?></span>
                <tr ><td colspan=2>
                    <center><input id="btn_districtadd" name="btn_notificationadd" type="submit" class="btn btn-warning" value="Send" />
                    <!--<input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-warning" value="Cancel" />-->
                    </table>
               
               
          </fieldset>
                  
          <?php echo form_close(); ?>
               
               </div>
               </div>
                      
          </div>
         <?php
                include('footer.php');
                ?>
    
     
                
         