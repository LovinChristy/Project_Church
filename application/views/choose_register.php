<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Brethren Church </title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Agro Seed Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="<?php echo base_url();?>asset/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="<?php echo base_url();?>asset/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Laila:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- //font -->
<script src="<?php echo base_url();?>asset/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url();?>asset/js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<script type="text/javascript" language="javascript">
<!-- //
function ClearForm(){
    document.loginform.reset();
}
// -->
</script>
</head>
<style type="text/css">
    .well{
        align:center;
        background:transparent;
        width:90%;
    }
    .table{
        border-spacing: 10px 50px;
    }
</style>
<body onload="ClearForm()" >
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
    </div>
 
<div class="jarallax about-banner" >
   <div class="jarallax different">
       
	<div class="wthree-different-dot">
		<div class="container" >
		<div class="w3-different-heading">
			<h3>Sign Up</h3>
               
                  <center>
                     
    <br><br>
                      
   <a href="http://localhost/BrethrenChurch/index.php/RegisterController/index"><span style="color:white; ">
           <button style=" width:700px;height:70px;"value="Church" class="btn btn-warning">
               <font size="3px" face="Lobster">  <b>Church </b></font></button> </span></a>    
<br>
                          <a href="http://localhost/BrethrenChurch/index.php/FamilyController/index"><span style="color:white;">
                                  <button value="Family" style=" width:700px;height:70px;" class="btn btn-warning">
                                      <font size="3px" face="Lobster">  <b>Family</b></font> </button></span></a>    
<br>
             <a href="http://localhost/BrethrenChurch/index.php/EvangelistController/index">
                 <span style="color:white;"><button value="Evangelist" style=" width:700px;height:70px;" class="btn btn-warning">
                         <font size="3px" face="Lobster">  <b>Evangelist</b></font> </button> </span></a>    
 <br>
             <a href="http://localhost/BrethrenChurch/index.php/AssociationController/index"><span style="color:white;">
                     <button value="Association" style=" width:700px;height:70px;" class="btn btn-warning">
                         <font size="3px" face="Lobster">  <b>Association </b></font> </button></span></a>    
             
                  </center>
                  
             <!--</fieldset>--> 
             <br><br><br> <br> 
         
          </div>
    
                    </div>
                   </div>
                </div>    
            </div>
</body>               

         <?php
                include('footer.php');
                ?>