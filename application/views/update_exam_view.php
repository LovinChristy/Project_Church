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
<link href="<?php echo base_url(); ?>asset/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="<?php echo base_url(); ?>asset/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Laila:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- //font -->
<script src="<?php echo base_url(); ?>asset/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/bootstrap.js"></script>
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
		</div>
            <?php 
echo "Welcome " . $this->session->userdata('username')."!!!";

?>
            <br>          
<div class="container" style="min-height:100%">
                
         <div class="col-lg-7 col-lg-offset-2">
      <center><h3><b>Updated exam Date</b></h3></center>
      <br><br><div class="well" >
                           <?php echo $this->session->flashdata('msg'); ?>

              
    <?php 
          $attributes = array("class" => "form-horizontal", "id" => "updateExam", "name" => "updateExam");
          echo form_open("SundaySchoolController/verifyUpdateExam", $attributes);
    ?>

<center><table class="table  table-responsive" style="width:60%;height:50%;">
<?php
if($exam){
    foreach($exam as $row){?>
        <input type="text" hidden="" id="eid" class="control-label"  name="eid" value="<?php echo $row->examid;  ?>">
<tr><td><label for="class" class="control-label">Select Class</label>
                                       <td> <select class="form-control" id="class" name="class" >
                                               <option value="<?php echo $row->class ?>"><?php echo $row->class ?></option>
                                               
                   
                       </select>
                 
           <tr><td><label for="exam" class="control-label">Select Exam</label>
                                       <td><select class="form-control" id="exam" name="exam" >
                                               <option value="<?php echo $row->examname ?>"><?php echo $row->examname ?></option>
                    
                       </select>
                                           
                
           <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" >
       <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
       <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

       <script type="text/javascript">
        $(function() {
         $( "#datepicker" ).datepicker();
        });
       </script>
           <tr><td><label for="date" class="control-label">Date</label> <td><input type="text" required="" id="datepicker" class="control-label"  name="datepicker" ></td>
                 <?php echo $this->session->flashdata('datemsg'); ?>

                
    <tr><td colspan="2">
        <center><input type="submit" class="btn btn-warning" name="btnUpdate" id="btnUpdate" value="Update">
    </tr>
 <?php }
}
   ?>
    
</table>

          <?php echo form_close(); ?>

          </div>
     </div>
    
</div>
        </div>
             <?php
                include('footer.php');
                ?>
