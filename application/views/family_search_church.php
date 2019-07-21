<html>
    <title>
        Brethren Church | Family
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
		</div>
            <?php 
echo "<br><br><br><br><center>Welcome " . $this->session->userdata('family')."!!!";

?>
<div class="container" style="min-height:100%">
   <br>
    <a href="family_church_search">Church</a> | 
    
    <a href="family_search">Family</a>  
    <br><br>
   
<?php
                $attributes=array("id"=>"search","name"=>"search");
                echo form_open("FamilyMainController/view_searched_church",$attributes);?>
                <div class="col-lg-7 in-gp-tb">
							<div class="input-group">
                                                            <!--<input type="text" class="form-control" name="search" id="search" placeholder="Search for church">-->
							<select name="search" id="search" class="form-control">
                                                                    <option>Church</option>
                                                            <?php
                                                         foreach($church as $c){
                                                          ?>
                                                                <option value<?=$c->chid;?>>
                                                                <?php echo $c->chname;?></option>
                                                           
                                                        <?php
                                                        
                                                        
                                                        }
                                                        ?> 
                                                                 </select>
                                                            <span class="input-group-btn">
                                                                    <input type="submit"  class="btn btn-default" value="Go!"/>
								</span>
							</div> 						</div>
                
 
        
            </div> <?php echo form_close(); ?>
  <div >
    <?php
include('footer.php');
?>
</div>
</html> 