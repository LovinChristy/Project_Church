<html>
    <title>
        Brethren Church
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
width : 90%;
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
     
          <div class="well" >
              <center><h3><b>Send us Prayer Help</b></h3></center>
                   <br>
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "addPrayerRequest", "name" => "addPrayerRequest");
          echo form_open("PrayerController/verifyPrayerRequest", $attributes);?>
                  <fieldset>
                      <center><table>
                              <tr><td><label for="txt_subject" class="control-label">Subject</label>
                                  <td><input class="form-control" required="" id="txt_subject" list="subjectList" name="txt_subject" placeholder="" 
                                             oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Add a subject'));  
                                      this.value=this.value.replace(/\s/g,''); this.focus=true;}"
                                      onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"
                                      type="text" value="<?php echo set_value('txt_subject'); ?>" />
                                      <datalist id="subjectList">
    <option value="Exam">
    <option value="Sickness">
        <option value="Family">
            <option value="Job">
                <option value="Ministry">
                    <option value="Other">
</datalist>
                                      <span class="text-danger">  <?php echo $this->session->flashdata('submsg'); ?></span>
               
                              <tr><td><label for="txt_message" class="control-label">Prayer Message</label>
                                  <td><textarea rows="6" cols="8" class="form-control" id="txt_message" 
                                                oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your message'));  
                                      this.value=this.value.replace(/\s/g,''); this.focus=true;}"
                                      onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"
                                      name="txt_message" placeholder=""  value="<?php echo set_value('txt_message'); ?>" required="" /></textarea>
                     <?php echo $this->session->flashdata('prayermsg'); ?>
                                 
               
               <tr ><td colspan=2>
                    <center><input id="btn_prayerrequest" name="btn_prayerrequest" type="submit" class="btn btn-warning" value="Post" />
                    <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-warning" value="Cancel" /></table>
               
               
          </fieldset>
                   <?php echo $this->session->flashdata('msg'); ?>
                  
          <?php echo form_close(); ?>
               
               </div>
               </div>
                      
          </div>
     <?php
                include('footer.php');
                ?>