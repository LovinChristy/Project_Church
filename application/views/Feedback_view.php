<html>
    <title>
        Brethren Church | Feedback
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
        background:white;
        width:90%;
    }
    table{
        border-collapse:separate; 
border-spacing:1em;
    }
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo base_url(). "asset/js/submit.js" ?>"></script>
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
            <div class="jarallax about-banner">
			<div class="container">
				
<br><br><br>
 <div class="col-lg-6 col-lg-offset-3">
     
          <div class="well" >
              <center><h3><b>Feedback & Complaints</b></h3></center>
                   <br>
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "feedback", "name" => "feedback");
          echo form_open("FeedbackController/feedback_process", $attributes);?>
                  <fieldset>
                      <center><table><tr><td><label for="name" class="control-label">Name</label>
               <td><input class="form-control" id="fname" name="name" placeholder="Your name" minlength="3"  maxlength="50" type="text"
                          onkeypress="return ischar(event)" required="" 
                          oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter your name'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}"
                          onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"
                          value="<?php echo set_value('name'); ?>" />
                   <span class="text-danger">  <?php echo $this->session->flashdata('namemsg'); ?></span>
               </td></tr>
                              
               <tr><td><label for="feedbackmsg" class="control-label">Message</label>
               <td><textarea rows="4" cols="50" class="form-control" id="feedbackmsg" name="feedbackmsg" minlength="3"  maxlength="50" placeholder="Feedback" 
                        required="" oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Write us your suggestions and comments'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                       onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"      
                             value="<?php echo set_value('feedbackmsg'); ?>" />
                   </textarea> <span class="text-danger">  <?php echo $this->session->flashdata('feedbackmsg'); ?></span>
               </td></tr>
               
                             
                              <tr ><td colspan=2>
                    <center><input id="btn_districtadd" name="btn_feeback" type="submit" class="btn btn-warning" value="Send" />
                    <!--<input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-warning" value="Clear" />-->
                          </table>
               
               
          </fieldset>
                   <?php echo $this->session->flashdata('msg'); ?>
          <?php echo form_close(); ?>
               
               </div>
               </div>

          <!--<br><br>-->            
          </div>
    
                <br><br>
          
        <?php
                include('footer.php');
                ?></div>   </div>               
         