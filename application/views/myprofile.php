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
        </div>
        <script>
$(document).ready(function(){
    $("button").click(function(){
        $("table").show("slow");
//        $("table").hide();
    });
    
});
</script>
<!--BUTON CLICK ROW COUNT INCEREMNT  -->
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
        
<br>
 
              			                       <?php echo $this->session->flashdata('msg'); ?>

      <div class="card">
      <center>
          <!--<table class="table table-striped table-bordered" style="width:50%;height:50%;">-->
  <?php foreach($family as $row){?>
<!--              <input type='button' value='Add Button' id='addButton'>
<input type='button' value='Remove Button' id='removeButton'>-->
              <!--<tr><td>-->
          <p> <a href="editFamilyProfile" class="btn btn-warning" name="btnEdit" id="btnEdit">Edit Profile</a>
                      <button class="fadeToggle btn btn-warning" name="btnAdd" id="btnAdd">Add Family Member</button>
                      <a href="<?php echo base_url(); ?>index.php/FamilyMainController/viewMemberFamily" class="btn btn-warning" >View Family</a></tr>
          <!--<tr><td>-->
      <p> <img src="<?php echo base_url();?>asset/uploads/familyhead/<?php echo $row->hofphoto ;?>"  style="width:104px;height:142px;" />
 <!--<tr><td>-->
              <p>  <?php echo $row->hofname ?></p>
             <!--<tr><td>-->
              <p> <?php echo $row->familyname ?><p>
        <!--<tr><td>-->
              <p> <?php echo $row->gender?></p>
                <!--<tr><td>-->
              <p>Born on <?php echo $row->dob?></p>
                        <!--<tr><td>-->
              <p>Working as <?php echo $row->occupation?></p>
<!--<tr><td>-->
              <p>Email me <?php echo $row->hofemail?></p>
        <!--<tr><td>-->
              <p>Contact me <?php echo $row->phone?></p>

 <?php } ?>
<!--</table>-->
      </div>
 <div class="container" style="min-height:100%">
      
 <!--ADD MEMBER ON BUTTON CLICK -->      
          <center><table class="table table-striped table-bordered" id="add" style="width:100%;height:30%; overflow:auto;" hidden="true">
                  <tr>
                      <th>Name</th><th style="width:14%;">Gender</th><th>Dob</th><th>Job</th><th>Contact no</th><th> Email</th><th>Relation</th><th>Add/Remove</th>
                  </tr>
                  <!--ROW ONE -->
                  <tr>
                      <?php 
          $attributes = array("class" => "form-horizontal", "id" => "addmember", "name" => "addmember");
          echo form_open("FamilyMainController/add_Member", $attributes);?>
                    <td><input class="form-control" type="text" name="mname" id="mname"  onkeypress="return ischar(event)" required onblur="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}" placeholder="Your name" required=""  value="<?php echo set_value('mname'); ?>"></td>
                    
                    <td > <input type="radio"  id="gender" name="gender" required="" value="Male">Male
                             <input type="radio"  id="gender" name="gender"  required="" value="Female">Female
                                                   <input type="radio"  id="gender" name="gender"  required="" value="Other">Other</td><td><input class="form-control" type="text" name="dob" id="dob" onchange="return validatedate(this)" maxlength="14" onblur="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"  placeholder="dd-mm-yyyy" required="" value="<?php echo set_value('dob'); ?>">
                    <div id="errd"> </div> </td>
                    <td><input class="form-control" type="text" name="job" id="job" maxlength="25" onkeypress="return ischar(event)" onblur="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"  placeholder="Your occupation" required="" value="<?php echo set_value('job'); ?>"></td>
                   <td><input class="form-control" type="text" name="contact" id="contact" maxlength=10 onkeyup="return phoneValidation()" onblur="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}" placeholder="Your contact no." required="" value="<?php echo set_value('contact'); ?>">
                    <div id="errph">   </div></td>
                   <td><input class="form-control" type="text" name="email" id="email" onkeyup="return ValidateEmail(this)" onblur="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}" placeholder=" Valid Email Id" required="" value="<?php echo set_value('email'); ?>">
                    <div id="err">   </div> </td>

                    <td>
                        <select id="relation" name="relation">
                            <option value="">Select</option>
                             <?php foreach($relation as $rel) {
                        ?>
                    <option value="<?=$rel->relationid?>"><?php echo $rel->relation;?></option>
                    <?php
                    }
                    ?>
                        </select>
                    </td>
                    <td>
                    <input type="submit" name="add" id="add" class="btn btn-success" value="Add">
                    </td>
                    <?php echo form_close(); ?>
                  </tr>
                     <!--ROW TWO -->
<!--                    <tr>

                           <?php 
          $attributes = array("class" => "form-horizontal", "id" => "addmember", "name" => "addmember");
          echo form_open("FamilyMainController/add_Member", $attributes);?>
                    <td><input class="form-control" type="text" name="mname" id="mname"  onkeypress="return ischar(event)" required onblur="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}" placeholder="Your name" required=""  value="<?php echo set_value('mname'); ?>"></td>
                    
                    <td > <input type="radio"  id="gender" name="gender" required="" value="Male">Male
                             <input type="radio"  id="gender" name="gender"  required="" value="Female">Female
                                                   <input type="radio"  id="gender" name="gender"  required="" value="Other">Other</td><td><input class="form-control" type="text" name="dob" id="dob" onchange="return validatedate(this)" maxlength="14" onblur="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"  placeholder="dd-mm-yyyy" required="" value="<?php echo set_value('dob'); ?>">
                    <div id="errd"> </div> </td>
                    <td><input class="form-control" type="text" name="job" id="job" maxlength="25" onkeypress="return ischar(event)" onblur="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"  placeholder="Your occupation" required="" value="<?php echo set_value('job'); ?>"></td>
                   <td><input class="form-control" type="text" name="contact" id="contact" maxlength=10 onkeyup="return phoneValidation()" onblur="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}" placeholder="Your contact no." required="" value="<?php echo set_value('contact'); ?>">
                    <div id="errph">   </div></td>
                   <td><input class="form-control" type="text" name="email" id="email" onkeyup="return ValidateEmail(this)" onblur="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}" placeholder=" Valid Email Id" required="" value="<?php echo set_value('email'); ?>">
                    <div id="err">   </div> </td>

                    <td>
                        <select id="relation" name="relation">
                            <option value="">Select</option>
                             <?php foreach($relation as $rel) {
                        ?>
                    <option value="<?=$rel->relationid?>"><?php echo $rel->relation;?></option>
                    <?php
                    }
                    ?>
                        </select>
                    </td>
                     <td>
                    <input type="submit" name="add" id="add" class="btn btn-success" value="Add">
                    </td>
                    <?php echo form_close(); ?>  
                    </tr>-->
                     <!--ROW THREE -->
<!--                    <tr>
                          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "addmember", "name" => "addmember");
          echo form_open("FamilyMainController/add_Member", $attributes);?>
                    <td><input class="form-control" type="text" name="mname" id="mname"  onkeypress="return ischar(event)" required onblur="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}" placeholder="Your name" required=""  value="<?php echo set_value('mname'); ?>"></td>
                    
                    <td > <input type="radio"  id="gender" name="gender" required="" value="Male">Male
                             <input type="radio"  id="gender" name="gender"  required="" value="Female">Female
                                                   <input type="radio"  id="gender" name="gender"  required="" value="Other">Other</td><td><input class="form-control" type="text" name="dob" id="dob" onchange="return validatedate(this)" maxlength="14" onblur="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"  placeholder="dd-mm-yyyy" required="" value="<?php echo set_value('dob'); ?>">
                    <div id="errd"> </div> </td>
                    <td><input class="form-control" type="text" name="job" id="job" maxlength="25" onkeypress="return ischar(event)" onblur="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"  placeholder="Your occupation" required="" value="<?php echo set_value('job'); ?>"></td>
                   <td><input class="form-control" type="text" name="contact" id="contact" maxlength=10 onkeyup="return phoneValidation()" onblur="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}" placeholder="Your contact no." required="" value="<?php echo set_value('contact'); ?>">
                    <div id="errph">   </div></td>
                   <td><input class="form-control" type="text" name="email" id="email" onkeyup="return ValidateEmail(this)" onblur="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}" placeholder=" Valid Email Id" required="" value="<?php echo set_value('email'); ?>">
                    <div id="err">   </div> </td>

                    <td>
                        <select id="relation" name="relation">
                            <option value="">Select</option>
                             <?php foreach($relation as $rel) {
                        ?>
                    <option value="<?=$rel->relationid?>"><?php echo $rel->relation;?></option>
                    <?php
                    }
                    ?>
                        </select>
                    </td>
                     <td>
                    <input type="submit" name="add" id="add" class="btn btn-success" value="Add">
                    </td>
                    <?php echo form_close(); ?>  
                    </tr>
                 -->
              </table>
<script>
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
<!--     //email validation-->
<script>
function ValidateEmail(hofemail)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(hofemail.value.match(mailformat))  
{  
document.getElementById('err').innerHTML="Valid email id!"; 
return true;  
}  
else  
{  
document.getElementById('err').innerHTML="Enter a valid email id!";  
 
return false;  
}  
}
</script>

<!--phone validation-->
 
<script type="text/javascript">
function phoneValidation()
{
var a = document.signupform.phone.value;
 if(isNaN(a))
{
document.getElementById('errph').innerHTML="Enter the valid Mobile Number(Like : 9566137117)";
document.signupform.phone.focus();
return false;
}
else if((a.length < 1) || (a.length > 10))
{
document.getElementById('errph').innerHTML="Your Mobile Number must be 1 to 10 Integers";
document.signupform.phone.select();
return false;
}
else
{
   document.getElementById('errph').innerHTML="Your Mobile Number valid";
 
}
}

function validatedate(dob)
  {
  var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
  // Match the date format through regular expression
  if(dob.value.match(dateformat))
  {
  document.signupform.dob.focus();
  //Test which seperator is used '/' or '-'
  var opera1 = dob.value.split('/');
  var opera2 = dob.value.split('-');
  lopera1 = opera1.length;
  lopera2 = opera2.length;
  // Extract the string into month, date and year
  if (lopera1>1)
  {
  var pdate = dob.value.split('/');
  }
  else if (lopera2>1)
  {
  var pdate = dob.value.split('-');
  }
  var dd = parseInt(pdate[0]);
  var mm  = parseInt(pdate[1]);
  var yy = parseInt(pdate[2]);
  // Create list of days of a month [assume there is no leap year by default]
  var ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];
  if (mm==1 || mm>2)
  {
  if (dd>ListofDays[mm-1])
  {
  document.getElementById('errd').innerHTML="Invalid date format!!"; 

  return false;
  }
  }
  if (mm==2)
  {
  var lyear = false;
  if ( (!(yy % 4) && yy % 100) || !(yy % 400)) 
  {
  lyear = true;
  }
  if ((lyear==false) && (dd>=29))
  {
   document.getElementById('errd').innerHTML="Invalid date format!!"; 

  return false;
  }
  if ((lyear==true) && (dd>29))
  {
    document.getElementById('errd').innerHTML="Invalid date format!!"; 

  return false;
  }
  }
  document.getElementById('errd').innerHTML="Valid date format!!"; 
  return true;
  }
  else
  {
    document.getElementById('errd').innerHTML="Invalid date format!!"; 
  document.signupform.dob.focus();
  return false;
  }
  }


</script>

 <?php 
//          $attributes = array( "id" => "addMember", "name" => "addMember");    
//          echo form_open("FamilyMainController/verifyMember", $attributes);?>
<!--    <center><table class="table table-striped table-bordered" style="width:50%;height:20%;">
            
            <tr><td>Name<td>Dob<td>Job<td>Email<td>Contact<td>Relation<td>Add/Remove</tr>
            <tr><td><span id="name"></span><td> <span id="dob"></span><td> <span id="job"></span>
              <td> <span id="email"></span><td> <span id="phone"></span> <td> <span id="relation"></span> 
              <td><input type="submit" class="btn btn-warning" name="btnAdd" id="btnAdd" value="Add" /></tr>
             </table>-->
         
          
  </div>
        <?php
                include('footer.php');
                ?>
</body>
</html>
