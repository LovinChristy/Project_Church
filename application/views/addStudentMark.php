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
        </div>           
        <br><br><br>          
<div class="container" style="min-height:100% ">
    <center> <div class="panel panel-default" style="width:40em;" >
        <div class="panel-heading" >
            <center><strong>Add Student Marks</strong></center>
          </div>
                <?php echo $this->session->flashdata('msg'); ?>

              <div class="panel-body">
                  <?php
                $attributes=array("id"=>"addmark","name"=>"addmark");
                echo form_open("SundaySchoolController/verifyMark",$attributes);?>
                  <br>
                                  <div class="form-group">
                                            <label>Select exam</label>
                                            <select name="exam" id="exam"class="form-control" required="">
                                              <option value="" >Select Exam</option>
                     <?php foreach($exam as $row) { ?>
<option value="<?=$row->examid?>"><?=$row->examname?></option>
<?php } ?>
                       </select>
                                            <span class="text-danger"><?php echo form_error('exammsg'); ?></span> </div>
                                            <table width=80% class="table table-responsive"><tr><thead><th>Roll</th><th>Name</th><th>Mark</th>
                                       <?php foreach($student as $n) { ?>

    <tr><td>
        <?php echo $n['studentid'] ?><td><?php echo $n['studname'] ;
        ?>                          <input type="hidden" id ="studentid[]"name="studentid[]" value="<?php echo $n['studentid']; ?>">
  
        <td><input name="mark[<?php echo  $n['studentid']; ?>]" id="mark[<?php echo  $n['studentid']; ?>]" type="number" class="form-control" maxlength="5" placeholder="Enter mark"  min="0" max="100" required="">

<?php } ?>
    
</table>
                                      
             

                      <center> <input  id="btn_addmark" name="btn_addmark" type="submit" class="btn btn-success" value="ADD"/></center>
            <?php echo form_close(); ?>
       </div> 
              </div>
   
                            </div>
                        </div>
</body></html>
                 <?php
                include('footer.php');
                ?>
          

