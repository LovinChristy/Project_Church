<html>
    <title>
        Brethren Church | Tutor
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

<!--<style type="text/css">
    .well{
        align:center;
        background:transparent;
        width:90%;
    }
    table{
        border-collapse:separate; 
border-spacing:1em;
    }
    </style>-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo base_url(). "js/submit.js" ?>"></script>


 		<script type="text/javascript" src="//www.easycalculation.com/jquery.js"> </script>
		<script language="javascript" src="//www.easycalculation.com/numeric.js"></script>
		<script language="javascript" src="//www.easycalculation.com/common.js"></script>
		<script>
function calculateValue()
{
    total=$('#total').val();
    avgstds=$('#avgstds').val();
//    if (total=='' || avgstds=='') {
//        alert('Enter all the values');
//        document.getElementById('result_answer1').value       ='';
//        document.getElementById('result_answer2').value       ='';
//        document.getElementById('result_answer3').value       ='';
//        return false;
//    }
//else 
//    if( total==0)
//{
//        alert('Total strength should be greater than zero');
//        document.getElementById('result_answer1').value       ='';
//        document.getElementById('result_answer2').value       ='';
//        document.getElementById('result_answer3').value       ='';
//        return false;
//}
//    else
//        if (parseFloat(total)<parseFloat(avgstds)) {
//        alert('Attending strength should be less than total strength');
//        document.getElementById('result_answer1').value       ='';
//        document.getElementById('result_answer2').value       ='';
//        document.getElementById('result_answer3').value       ='';
//        return false;
//    }
//    else
    {
        r1=total-avgstds;
        r2=Math.round((avgstds/total)*100);
        r3=Math.round(100-r2);
        document.getElementById('result_answer1').value       =r1;
        document.getElementById('result_answer2').value       =r2+' %';
//        document.getElementById('result_answer3').value       =r3+' %';
    }
}
</script>	
<link href="//www.easycalculation.com/css/style.css" rel="stylesheet" type="text/css">
<link href="//www.easycalculation.com/css/embedded.css" rel="stylesheet" type="text/css">
			</head>
                        <body style="background:#FFFFFF;">
	
            <br>
                         <a href="tutorindex" <button class="btn btn-primary">Home</button></a>
<!--<center>--><br><br>
    <!--<iframe src='https://www.easycalculation.com/other/embedded_attendance-percentage.php' width='90%' height='70%' frameborder='0' style='background:#F5F3F5;padding:20px;'></iframe>-->
                        <center>
                            <div class="ec_calculator_gen clearfix" style="position:relative; margin:10px !important; width:40%;height:70%;" >
			    <!--<div class="ec_frame_logo"><a href="https://www.easycalculation.com" target="_blank"><img src="//www.easycalculation.com/images/logo-iframe.png" width="236" height="23" alt="ec frame logo"></a></div>-->
			    <form name="first"><div id="dispCalcConts" style="opacity: 1;">
                                    <h2 >Attendance Percentage Calculator</h2><br>
 <div class="group clearfix">
     
<label>Select Student</label>
<select class="easypositive-integer" name="stud" id="stud" onchange="getDays();" >
   <option value="" >Select Student </option>
                     <?php foreach($student as $row) { ?>
<option value="<?=$row->studentid?>"><?=$row->studname?></option>
<?php } ?>
</select><br><br>
 
</div>
                                    <div class="errClass" id="dynErrDisp"></div>
<div id="calciScroll"></div><div class="errClass" id="dynErrDisp" style="display: none;"></div>
<div id="calciScroll"></div><div class="errClass" id="dynErrDisp" style="display: none;"></div>
<div id="calciScroll"></div><br><br>
<input type="button" value="Calculate" onclick="calculateValue()" style="visibility: visible;">
<input type="reset" value="Reset" style="visibility: visible;"><br><br>

</div>
 <div class="result">
Absent 
<input id="result_answer1" type="text" size="3" readonly="">
Present %
<input id="result_answer2" type="text" size="3" readonly=""><!--
Absent % 
<input id="result_answer3" type="text" size="3" readonly="">-->
 </div>	</div><br><br><br><br></div>
        <script type="text/javascript">onkeyupValidationClass();</script>			
			</div>
                                <script type="text/javascript">
				function alert(val)
				{
				    $("#dynErrDisp").show();
				    $("#dynErrDisp").html(val);
				}
			    </script>
                            <script src="<?php echo base_url();?>asset/js/jquery-1.11.1.min.js"></script>
 <!--ajax for district-->
 <script>
      
                    function getDays()
			{
                            
				stud=$('#stud').val();
			
				$.ajax({
			    url:"<?php echo base_url(); ?>index.php/SundaySchoolController/attend_totDays",
				type: "POST",
				data:{"stud":stud},
				success: function(data){
                                    alert(data);
					$("#total").html(data);
                                        $("#avgstds").html(data);
				}
				
				});
			
			}

      
//        $("#menu-toggle").click(function (e) {
//            e.preventDefault();
//            $("#wrapper").toggleClass("toggled");
//        });
    </script>
     <?php
                include('footer.php');
                ?>