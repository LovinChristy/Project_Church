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
echo "<br><br><br><br><center>"."Welcome ".$this->session->userdata('family')."!!!";
?>
            <div class="container" style="min-height:100%">
                
            </div>
<!--<center>
            <table>
                 <tr style="line-height:50px; width:30%;">
                        <td>
                        </td>
                        <td>
                            <center><button type="submit" name="btnsubmit" class="btn btn-warning" >Edit</button>
                        </td>
                         <td>
                            <center><button type="submit" name="btnsubmit" class="btn btn-warning" >Add members</button>
                        </td>
                    </tr>
                    <tr style="line-height:50px; width:30%;">
                        <td>
                            <label class="control-label" for="famname">Family Name </label>
                        </td>
                        <td>
                            
                        </td>
                    </tr>
                     <tr style="line-height:50px; width:30%;">
                         <td>
                           <label class="control-label" for="chname">Church</label>
                        </td>
                         <td>
                            
                         </td>
                     </tr>
                     <tr style="line-height:50px; width:30%;">
                         <td>
                           <label class="control-label" for="hofname">Name of family head  </label>
                        </td>
                        <td>
                           
                        </td>
                        </tr>
                         <tr style="line-height:50px; width:30%;">
                         <td>
                          <label class="control-label" for="username">Username</label>
                         </td>
                         <td>
                              
                         </td>
                     </tr>   
                      <tr style="line-height:50px; width:30%;">
                         <td>
                           <label class="control-label" for="password">Password</label>
                        </td>
                        <td>
                            
                        </td>
                     </tr>  
                     
                          <tr style="line-height:50px; width:30%;">
                             <td><label class="control-label" for="userfile">Profile photo</label></td>
                             
		 
                             </td></tr>
                          <tr style="line-height:50px; width:30%;">
                         <td>
                         <label class="control-label" for="gender">Gender</label>
                         </td>
                         <td>
                            
                         </td>
                     </tr>
                         <tr style="line-height:50px; width:30%;">
                         <td>
                         <label class="control-label" for="dob">Date of Birth</label>
                         </td>
                         <td>
                             
                         </td>
                     </tr>
                    <tr style="line-height:50px; width:30%;">
                         <td>
                            <label class="control-label" for="occupation">Occupation</label>
                         </td>
                         <td>
                          
                         </td>
                     </tr>
                     <tr style="line-height:50px; width:30%;">
                         <td>
                            <label class="control-label" for="hofemail">E-Mail id  </label>
                        </td>
                        <td>
                           
                        </td>
                     </tr>
                      <tr style="line-height:50px; width:30%;">
                         <td>
                           <label class="control-label" for="phone">Contact number</label>
                        </td>
                        <td>
                            
                        </td>
                     </tr>  
                      </table>
                        <tr style="line-height:50px; width:30%;">
                         <td>
                            <label class="control-label" for="membercount">Number of family members</label>
                         </td>
                         <td>
                             
                         </td>
                     
              
                     </tr>
                     
                </table>-->
<div >
    <?php
include('footer.php');
?>
</div>