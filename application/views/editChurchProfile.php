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
</script> 


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
        </div>
        
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("table").show();
    });
});
</script>

<script>
//var countBox =1;
//var boxName = 0;
//function tableView()
//{
//    $("#btnAdd").click(function(){
//    $("add").show();
//});
//     var boxName="textBox"+countBox; 
//document.getElementById('name').innerHTML+='<br/><input type="text" id="'+boxName+'" value="'+boxName+'" "  /><br/>';
//document.getElementById('dob').innerHTML+='<br/><input type="text" id="'+boxName+'" value="'+boxName+'" "  /><br/>';
//document.getElementById('job').innerHTML+='<br/><input type="text" id="'+boxName+'" value="'+boxName+'" "  /><br/>';
//document.getElementById('email').innerHTML+='<br/><input type="email" id="'+boxName+'" value="'+boxName+'" "  /><br/>';
//document.getElementById('phone').innerHTML+='<br/><input type="number" id="'+boxName+'" value="'+boxName+'" "  /><br/>';
//document.getElementById('relation').innerHTML+='<br/><input type="text" id="'+boxName+'" value="'+boxName+'" "  /><br/>';
//    countBox += 1;
}
</script>

<br><br>
<div class="container" style="min-height:100%">

    <?php 
          $attributes = array("class" => "form-horizontal", "id" => "updateProfile", "name" => "updateProfile");
          echo form_open("ChurchController/updateProfile", $attributes);
    ?>
    
<center><table class="table table-striped table-bordered" style="width:60%;height:50%;">
<?php
if($church){
    foreach($church as $row){?>
      <tr><td>
        <?php echo "Church Name:" ?><td><input type="text" name="chname" readonly="" value="<?php  echo $row->chname ?>"></td>
   <tr><td>
        <?php echo "Postoffice:"?><td><input type="text" name="postoffice" value="<?php echo $row->postoffice?>" readonly=""></td>
    <tr><td>
        <?php echo "Postal code:"?><td><input type="text" name="postalcode" readonly="" value="<?php echo $row->postalcode?>"></td>
    <tr><td>
        <?php echo "Email id:"?><td><input type="email" name="chemail" value="<?php echo $row->chemail?>" readonly=""></td>
    <tr><td>
        <?php echo "Secretary name:"?><td><input type="text" name="secretary" value="<?php echo $row->secretaryname ?>"></td>
    <tr><td colspan="2">
        <input type="submit" class="btn btn-warning" name="btnEdit" id="btnEdit" value="Update Profile">
    </tr>
 <?php } 
 }
        else
        {
            echo "<tr><td>No result found!!";
        }?>
    
</table>

    <?php echo form_close(); ?>
 <?php
                include('footer.php');
                ?>
