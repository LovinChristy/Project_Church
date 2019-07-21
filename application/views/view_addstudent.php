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
        function confirmGuardian()
{


	var selectedGuardian = guardian.options[guardian.selectedIndex].innerHTML;
       
        alert("Selected : " + selectedGuardian + " as guardian for this ward");
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
            <br><br><br>          
<div class="container" style="min-height:100%">
                
         <div class="col-lg-6 col-lg-offset-3">
     
          <div class="well" >
              <center><h3><b>Add Class Students</b></h3></center>
                   <br>
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "addtutor", "name" => "addtutor");
          echo form_open("SundaySchoolController/addSchoolStudent", $attributes);?>
                  <fieldset>
                   <center><table>
                           <tr><td><label for="class" class="control-label">Select Class</label>
                               <td><select class="form-control" id="class" name="class" required="" >
                                               <option value="">Select Class</option>
                                                <?php for($i=1;$i<=10;$i++) { ?>
                                <option value="<?=$i?>"><?=$i?></option>
                            <?php } ?>
                   
                       </select>
                 <?php echo $this->session->flashdata('classmsg'); ?>
            <tr><td><label for="student" class="control-label">Student name</label></td>
                <td><input class="form-control" type="text" required="" onkeypress="return ischar(this);" 
                           onkeypress="return ischar(event)" required="" oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Please enter student name'));  
                           this.value=this.value.replace(/\s/g,''); this.focus=true;}" onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"
                           name="student" id="student" placeholder="student" value="<?php echo set_value('student'); ?>" />
                             <span class="text-danger">  <?php echo $this->session->flashdata('studentmsg'); ?></span></td></tr>
           
           <tr><td><label for="guardian" class="control-label">Select Guardian</label>
               <td><select class="form-control" id="guardian" name="guardian" onchange="confirmGuardian(this);" required="
                           " >
                                               <option value="">Select guardian</option>
                     <?php foreach($fname as $row) { ?>
<option value="<?=$row->hofid?>"><?=$row->hofname?></option>
<?php } ?>
                       </select>
                 <?php echo $this->session->flashdata('guardianmsg'); ?>
              
           
             <tr><td colspan=2>
             <center><input id="btn_addtutor" name="btn_addtutor" type="submit" class="btn btn-warning" value="Add" /></center>
                       </table>
                            
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
          </div>
     </div>
</div></div></body></html>
             <?php
                include('footer.php');
                ?>
