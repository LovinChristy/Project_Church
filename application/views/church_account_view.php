<html>
    <title>
        Brethren Church | Church
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
        function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
	  function ischar(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
        
                   if ((charCode < 33)||(charCode > 64 && charCode < 91) ||( charCode > 96 && charCode <123))
                    return true;

         return false;
      }
      </script>


<style type="text/css">
    .well{
        align:center;
        background:white;
        
        width:150%;
        height:120%;
    }
   .form-box{
        
        max-width:1500px;
        position:relative;
        margin:4% auto;
    }
    
   
</style>
 
</head>
<body>
    <div class="container">
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
    <div class="wrapper">
    <div class="container">
      <div class="row">
                   
              
                <?php
                $attributes=array("id"=>"account","name"=>"account");
                echo form_open("ChurchController/addAccount",$attributes);?>
                           <div class="form-box">
          <div class="panel">
            <div class="panel-heading text-center">
                           <hr></hr><center><strong><b>Church Accounts<b></strong></center>              
                <p><a href="<?php echo base_url();?>index.php/ChurchController/viewAccount" class="BTN BTN-warning">VIEW ACCOUNT </a>
                <a href="<?php echo base_url();?>index.php/ChurchController/church_account_add" class="BTN BTN-PRIMARY">ADD NEW STATEMENT </a> </p>
<hr></hr>
                 </div>

<center><div class="tbl-header" style="width:90%;" >           
			                       

   <table class="table table-responsive  table-hover" cellpadding="0" cellspacing="0" border="0" >
        <tr ><td><strong> St ID</strong></td><td><strong>Date</strong></td><td><strong>C/D</strong></td><td><strong> Amount(in Rs)</strong></td>
            <td><strong>Source</strong></td><td><strong>Balance</strong></td>
            <!--<td><input type="checkbox" id="checkall" onclick="return check();" /></td>-->
        </tr> 
     <?php 
     if($account){
          foreach($account as $ch){
         ?>
     <tr><td><?=$ch->st_id;?></td><td><?=$ch->date;?></td><td><?=$ch->type;?></td><td><?=$ch->amount;?></td><td><?=$ch->source;?></td><td><?=$ch->balance;?></td>
       
</td>
<!--<td><input type="checkbox" id="checkItem"/></td>-->
     </tr>     
        <?php }
        }
        else
        {
            echo "<tr><td>No accounts found!!";
        }?>  
    </table>
    </div> </div> </div></div></div></div></div></body>
                     <?php
                include('footer.php');
                ?>
  
       
       
        