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

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->

<!-- Style --> 
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bookhomecss.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/jquery-ui.css" />
<!-- JavaScript --> <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>

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
<!--<h1 class="book">Auditorium Booking</h1>-->
<br><br><br>
<div class="reg" style="width:40%;height:70%;">
    <br><h1 > Check Auditorium Availability here!</h1>
                <div class="span4 proj-div" data-toggle="modal" data-target="#GSCCModal" >
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;<button class="btn btn-primary" >Auditorium Details</button></h5></div>

<div id="GSCCModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
        <h4 class="modal-title" id="myModalLabel">Auditorium Details</h4>
      </div>
      <div class="modal-body">
          <p>Parking space is provided.</p>
          <p>Maximum intake will be 15000(seating capacity).</p><br>
         
          <p>Per day Rs.30000</p>
          <p>(Separate fee for using air-condition facility)</p>
           <p>The rate serve only as a guide and are not absolute. (Prices are subject to change.)</p><br>
                     <p>For blocking available dates an advance of Rs.10000 must be payed in advance as confirmation<p>
<br>
          <p><a>Download</a> contract form or contact Mr.Jacob John (Mob: 987656789) for more details</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
                  <?php // echo $this->session->flashdata('msg');?>

		<div class="wthree-form">
			<!--<h2>Check Availability here </h2>-->
                        <br>
		<div class="w3l-login form">
			<?php 
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("BookingController/bookauditorium", $attributes);?>
				<div class="form-sub-w3">
                                    				<!--Date Picker-->
			
			<script src="<?php echo base_url(); ?>asset/js/jquery-ui.js"></script>
					  <script>
							  $(function() {
							    $( "#datepicker1,#datepicker2" ).datepicker({
                                                                minDate:+1,
                                                                maxDate:"+1m"
                                                                
                                                            });
                                                   
							  });
					  </script>
		<!--//Date 	Picker-->
                <?php $d=date("Y-m-d");?>
				<div class="book-pag">
			                       <?php echo $this->session->flashdata('msg'); ?>

			<!--<div class="book-pag-frm1">-->
				<!--<label>Check In</label>-->
                                <input class="date" id="datepicker1"  name="datepicker1" type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';} else {alert(this.value);} " required="" >
			<!--</div>-->
			<!--Date Picker-->
			
					
		<!--//Date Picker-->			</div>
				
		
		


	
		</div>	


                <div class="submit">
                    <center>	 <input id="book" name="book" type="submit"  value="Check"  />
                  
				</div>
		</div>	

		
					     <?php echo form_close(); ?>
		</div>
</div>
	


        </div>
</body>
<!--<div class="reg-footer">
     <p>Copyright &copy; 2015 Hotel Booking Widget. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>-->
 
</html>
<center><div class="footer-agileits">
			<p>© 2017 Bretheren Church. All rights reserved | Design by <a href="https://www.facebook.com/lovin.a.abraham">Lovin Ann Abraham</a></p>
		</div>
    <script >
function dateAvailable()  
{  
var a = document.loginform("datepicker1").value;
alert($a);
}
</script>