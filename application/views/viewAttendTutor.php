  <html>
    <title>
        Brethren Church | Tutor
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
                </div><br>
                  <script>
$(document).ready(function(){
    $("button").click(function(){
        $("table").show();
    });
});
</script>
          <br>
                
<center>  <div class="well" style="background:#FFFFFF;width:80%;">
        <h4><strong>Student Attendance</strong></h4>
                <div style="width:80%;margin:20px; height:70%; overflow-x:auto;">
                       <?php
             $attributes = array("class" => "form-horizontal", "id" => "viewattendance", "name" => "viewattendance");
          echo form_open("SundaySchoolController/viewStudentAttend", $attributes);?>       
                
                    <input type="date" id="datepicker"  name="datepicker" value="<?php echo $this->session->flashdata('msg'); ?>" > 
                    <input type="submit" id="date"  name="date" value="Check Attendance
                           " class="btn btn-success"> 
        					     <?php echo form_close(); ?>

                  
                <script src="<?php echo base_url(); ?>asset/js/jquery-ui.js"></script>
					  <script>
							  $(function() {
							    $( "#datepicker" ).datepicker();
							  });
					  </script>
                                          <!--<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bookcss.css" type="text/css" media="all" />-->
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/jquery-ui.css" />
<!-- JavaScript --> <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>
                    <table class="table table-hover table-responsive" >
        <tr ><td><strong>Roll</strong></td><td><strong>Name</strong></td><td><strong>Status</strong></td><td><strong>Date</strong></td></tr> 
     <?php
     if($attend){
//         $i=1;
         foreach($attend as $a){
         
         ?>
     <tr>
         <!--<td><?=$i;?></td>-->
         <td><?=$a->studentid;?></td><td><?=$a->studname;?></td>
         <td><?=$a->status;?></td> <td><?=$a->date;?></td>
         
        </tr>     
        <?php
//        $i++; 
        
         }
        }
        else
        {
            echo "<tr><td>No result found!!";
        }?>  
    </table>
                </div> </center></div></div> 
                    <?php
                include('footer.php');
                ?>
                