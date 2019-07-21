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
     <script>
        function confirmTutor()
{
// var name=document.getElementById( "head" ).value;
// var selectedClass = grade.options[grade.selectedIndex].innerHTML;
//         var selectedYearId = year.value;

	var selectedTutor = tutor.options[tutor.selectedIndex].innerHTML;
        var selectedId = tutor.value;
        alert("Selected : " + selectedTutor + " as tutor ");
        }
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
                </div></div>
            <?php 
echo "Welcome " . $this->session->userdata('username')."!!!";

?>
            <br><br><br>          
<div class="container" style="min-height:100%">
                
         <div class="col-lg-7 col-lg-offset-3">
      <center><h3><b>Add Class Teachers</b></h3></center>
                <?php echo $this->session->flashdata('msg'); ?>

                <?php echo $this->session->flashdata('email_sent'); ?>

      <br><br><div class="well" >
             
                   
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "addtutor", "name" => "addtutor");
          echo form_open("SundaySchoolController/verifyTeacher", $attributes);?>
                  <fieldset>
                   <center><table cellpadding="10px" cellspacing="5px" >
                           <tr><td><label for="class" class="control-label">Select Class</label>
                               <td> <select class="form-control" id="class" name="class" required="">
                                               <option value="">Select Class</option>
                                                <?php for($i=1;$i<=10;$i++) { ?>
                                <option value="<?=$i?>"><?=$i?></option>
                            <?php } ?>
                   
                       </select>
                 <?php echo $this->session->flashdata('classmsg'); ?>
           <tr><td><label for="head" class="control-label">Select Teacher</label>
               <td><select class="form-control" id="tutor" name="tutor" onchange="confirmTutor(this);" required="" >
                                               <option value="">Select Teacher</option>
                     <?php foreach($t as $row) { ?>
<option value="<?=$row->hofid?>"><?=$row->hofname?> <?=$row->familyname?></option>
<?php } ?>
                       </select>
                 <?php echo $this->session->flashdata('tutormsg'); ?>
          
             <tr><td colspan=2>
                    <center><input id="btn_addtutor" name="btn_addtutor" type="submit" class="btn btn-warning" value="Add" />
                    </center></table>
                            
          <?php echo form_close(); ?>
          </div>
     </div>
     
</div>
<?php
                include('footer.php');
                ?>            
