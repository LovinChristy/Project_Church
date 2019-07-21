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
        function viewFamily()
{
// var name=document.getElementById( "head" ).value;
 var selectedYear = year.options[year.selectedIndex].innerHTML;
         var selectedYearId = year.value;

	var selectedHead = head.options[head.selectedIndex].innerHTML;
        var selectedId = head.value;
        alert("Selected : " + selectedHead + " as head "+ " for year: " + selectedYear);
// if(selectedValue)
// {
//     alert(head);
//  $.ajax({
//      
//  type: "POST",
//  url: "<?php echo base_url()?>index.php/ChurchController/viewHeadFamily",
//   data: {"hofid":selectedValue},
//  success: function (response) {
//    
//   $( '#status' ).html(response);
//   if(response=="OK")	
//   {
//      
//    return true;	
//   }
//   else
//   {
//    return false;	
//   }
//  }
//  });
// }
// else
// {
//  $( '#status' ).html("");
//  return false;
// }
}
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
         
            <div class="col-lg-6 col-lg-offset-3">
     <br><br><br><?php 
echo "<center><font color='red'> Welcome Church " . $this->session->userdata('church')."!!!<br><br><br></font>";

?> 
          <div class="well" >
              <center><h3><b>Add Sunday School Head</b></h3></center>
                        <?php echo $this->session->flashdata('msg'); ?>
          <?php echo $this->session->flashdata('email_sent'); ?>

                   <br>
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "addHead", "name" => "addHead");
          echo form_open("ChurchController/verifyHead", $attributes);?>
                  <fieldset>
                   <center><table>
                           <tr><td><label for="year" class="control-label">Select Academic Year</label>
                                       <td><select class="form-control" id="year" name="year" >
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
           <tr><td><label for="head" class="control-label">Select Member</label>
               <td><select class="form-control" id="head" name="head" onchange="viewFamily(this);" >
                                               <option value="">Select Member</option>
                     <?php foreach($chfam as $row) { ?>
<option value="<?=$row->hofid?>"><?=$row->hofname?> <?=$row->familyname?></option>
<?php } ?>
                       </select>   <span id="status" style=" color:green;
                    font-family: 'Times New Roman', Times, serif;
                     font-size: 14px;" ></span>
                 <?php echo $this->session->flashdata('headmsg'); ?>
    <!--         <tr><td><label for="username" class="control-label">Username</label></td>
             <td><input class="form-control" type="text" name="username" id="username" placeholder="username" value="<?php echo set_value('txt_relation'); ?>" />
                             <span class="text-danger">  <?php echo $this->session->flashdata('usernamemsg'); ?></span></td></tr>
           <tr><td><label for="password" class="control-label">Password</label></td>
               <td><input class="form-control" type="text" name="password" id="password" placeholder="password" value="<?php echo set_value('password'); ?>" />
                             <span class="text-danger">  <?php echo $this->session->flashdata('passwordmsg'); ?></span></td></tr>-->
             <tr><td colspan=2>
                    <center><input id="btn_addhead" name="btn_addhead" type="submit" class="btn btn-warning" value="Add" />
                    
                            
          <?php echo form_close(); ?>
          </div>
     </div>
</div>
         <?php
//                include('footer.php');
                ?>
