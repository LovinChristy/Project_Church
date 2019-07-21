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
                </div></div>
            <br><br><br>
            <div class="col-lg-6 col-lg-offset-3">
               <?php echo $this->session->flashdata('msg'); ?>
 <?php echo $this->session->flashdata('email_sent'); ?>
          <div class="well" >
              <center><h3><b>Add Sunday School Principal</b></h3></center>
                   <br>
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "addPrincipal", "name" => "addPrincipal");
          echo form_open("AdminController/verifyPrincipal", $attributes);?>
                  <fieldset>
                   <center><table>
                           <tr><td><label for="year" class="control-label">Academic Year</label>
                               <td><select class="form-control" id="year" name="year"  required="">
                                               <option value="">Select Year</option>
                     <?php  
                 $starting_year  =date('Y');
 $ending_year = date('Y', strtotime('+10 year'));
 $current_year = date('Y');
 for($starting_year; $starting_year <= $ending_year; $starting_year++) {
     echo '<option value="'.$starting_year.'"';
     if( $starting_year ==  $current_year ) {
            echo ' selected="selected"';
     }
     echo ' >'.$starting_year.'</option>';
 }        ?>     
                       </select>
                 <?php echo $this->session->flashdata('yearmsg'); ?>
                                           <tr><td><label for="church" class="control-label">Church</label>
                                               <td><select class="form-control" id="church" name="church" required="" onchange="getFamily();">
                                               <option value="">Select Church</option>
                     <?php foreach($church as $row) { ?>
<option value="<?=$row->chid?>"><?=$row->chname?></option>
<?php } ?>
                       </select>
                 <?php echo $this->session->flashdata('churchmsg'); ?>
           <tr><td><label for="principal" class="control-label">Member</label>
               <td><select class="form-control" id="principal" name="principal" required="" >
                                               <option value="">Select Member</option>
                    
                       </select>
                 <?php echo $this->session->flashdata('pmsg'); ?>
           <tr><td colspan=2>
             <center> <i class="mega-octicon octicon-mail"></i> <input id="btn_addprincipal" name="btn_addprincipal" type="submit" class="btn btn-warning" value="Add" />
                    
                            
          <?php echo form_close(); ?>
          
 
</div></div>
            
        </div>

</body>
<?php
//echo "hi";
//include('footer.php');
?>
<script src="<?php echo base_url();?>asset/js/jquery-1.11.1.min.js"></script>
 <!--ajax for district-->
 <script>
      
                    function getFamily()
			{
				church=$('#church').val();
			
				$.ajax({
			    url:"<?php echo base_url(); ?>index.php/AdminController/displays_family",
				type: "POST",
				data:{"church":church},
				success: function(data){
                                   // alert(data);
					$("#principal").html(data);
				}
				
				});
			
			}

      
//        $("#menu-toggle").click(function (e) {
//            e.preventDefault();
//            $("#wrapper").toggleClass("toggled");
//        });
    </script>
