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
echo "<br>Welcome " . $this->session->userdata('username')."!!!";

?>
            <link rel="stylesheet" href="<?php echo base_url(); ?> asset/css/tablecss.css" >
            <script src="<?php echo base_url(); ?> asset/js/tablejs.js"></script>
            <center><h4><strong>View Students</strong></h4></center>
                             <?php echo $this->session->flashdata('msg'); ?>



    <!--<div style="width:80%;margin:20px; height:70%; overflow-x:auto;" class="tbl-header" >-->
    <center><div class="tbl-header"  style="width:90%;">           
  <?php
                $attributes=array("id"=>"stud","name"=>"stud");
                echo form_open("ChurchController/view_students",$attributes);?>
            <br><br> <br><br>  <div class="col-lg-7 in-gp-tb">
                <center>     <select name="search" id="search" class="form-control">
                                                                    <option>Church</option>
                                                            <?php
                                                         foreach($churchall as $c){
                                                          ?>
                                                                <option value<?=$c->chid;?>>
                                                                <?php echo $c->chname;?></option>
                                                           
                                                        <?php
                                                        
                                                        
                                                        }
                                                        ?> 
                                                        </select><br>
                                                            <select name="classid" id="classid" class="form-control">
                                                                    <option>Class</option>
                                                            <?php
                                                         for($i=1;$i<=10;$i++){
                                                          ?>
                                                                <option value<?=$i;?>>
                                                                <?php echo $i;?></option>
                                                           
                                                        <?php
                                                        
                                                        
                                                        }
                                                        ?> 
                                                            </select><br>
							<div class="input-group">
                                                            <!--<input type="text" class="form-control" name="search" id="search" placeholder="Search for church">-->
							
                                                            <span class="input-group-btn">
                                                                    <input type="submit"  class="btn btn-default" value="Go!"/>
								</span>
							</div> 						</div>
                
 
        
            </div> <?php echo form_close(); ?><br>


            </div>
<center>     
<table class="table table-responsive  table-hover" width=50% cellpadding="0" cellspacing="0" border="0" >
            <thead>

            <tr><th><strong>ID</strong></th><th><strong>Name</strong></th>
                
          
            </tr> </thead>
       
     <?php
     if($d)
     {
         foreach($d as $n){?>
            <tr><td><?=$n->studentid;?></td><td> <?= $n->studname; ?></td>
<!--                <td><a href="<?php echo base_url()."index.php/SundaySchoolController/postpone_Exam/".$n->examid ?>">Postpone</a></td>
                <td><a href="<?php echo base_url()."index.php/SundaySchoolController/removeExam/".$n->examid ?>"                                       
          
          onclick="if(confirm
          ('Remove exam notification?')) return true; else return false;"><img src="<?php echo base_url();?>asset/images/garbage.png"></a></td>-->
</tr>     
        <?php } }
        else
        {
            echo "<tr><td colspan=5>No results found";
            }?>  
    </table>
   </div>
     <?php
                include('footer.php');
                ?>