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
<!--      <script lang="text/javascript">
                        function check()
                        {
                            
                       $('#checkall').change(function(){
    if($(this).prop('checked')){
        $(' tr td input[type="checkbox"]').each(function(){
            $(this).prop('checked', true);
        });
    }else{
        $(' tr td input[type="checkbox"]').each(function(){
            $(this).prop('checked', false);
        });
    }
});
}
                        </script>-->
             <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" >
       <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
       <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

       <script type="text/javascript">
        $(function() {
         $( "#datepicker" ).datepicker();
//         this.getDatePicker().setValue(new Date());
        });
       </script>
            <link rel="stylesheet" href="<?php echo base_url(); ?> asset/css/tablecss.css" >
            <script src="<?php echo base_url(); ?> asset/js/tablejs.js"></script>
            <center><h4><strong>Students Attendance</strong></h4>
           

    <!--<div style="width:80%;margin:20px; height:70%; overflow-x:auto;" class="tbl-header" >-->
    <div class="tbl-header" style="width:70%; " >   
        
			                       <?php echo $this->session->flashdata('msg'); ?>

    <center><table class="table table-responsive  table-hover" cellpadding="0" cellspacing="0" border="0">
            <!--<thead>-->
<!--   <th><strong>SNo</strong></th>        
   <th colspan="2"><strong>Name</strong></th></tr> </thead>
            <tr><td colspan="">-->
            <br>
                <?php 
          $attributes = array("class" => "form-horizontal", "id" => "addattendance", "name" => "addattendance");
          echo form_open("SundaySchoolController/attendanceAdd", $attributes);?>
            <br><br>     
            <tr>             <?php $d=date("Y-m-d");?>

                <td colspan="2">
            
                <label>Select date</label> 
                <input type="date" id="datepicker"  name="datepicker" required="" min="<?php echo $d; ?>" value="<?php echo $d; ?>" >
                <td>         <input type="submit" name="attendance" id="attendance" class="btn btn-success" >
</td>
                             <?php  foreach($student as $n){
                                 ?>                
                <tr>
                    <td> <?php echo $n['studname'] ;?>
                        <input type="hidden" id ="studentid[]"name="studentid[]" value="<?php echo $n['studentid']; ?>">
                     <td> 
                         <input type="radio" name="attend[<?php echo $n['studentid']; ?>]" checked=""  value="Present">Present</label> 
                        &emsp;
                     <td>
                         <input type="radio" name="attend[<?php echo  $n['studentid']; ?>]" value="Absent">Absent</label>

                    </td> 
                </tr>

                <?php } ?>
                      
 <tr>
  </tr>     

    </table> 
        <?php echo form_close(); ?>

<!--            Pagination 
            <nav class="my-4">
                <ul class="pagination pagination-circle pg-blue mb-0">

                    First
                    <li class="page-item disabled"><a class="page-link">First</a></li>

                    Arrow left
                    <li class="page-item disabled">
                        <a class="page-link" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                    </li>

                    Numbers
                    <li class="page-item active"><a class="page-link">1</a></li>
                    <li class="page-item"><a class="page-link">2</a></li>
                    <li class="page-item"><a class="page-link">3</a></li>
                    <li class="page-item"><a class="page-link">4</a></li>
                    <li class="page-item"><a class="page-link">5</a></li>

                    Arrow right
                    <li class="page-item">
                        <a class="page-link" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                    </li>

                    First
                    <li class="page-item"><a class="page-link">Last</a></li>

                </ul>
            </nav>-->
   </div> 
    <script src="<?php echo base_url(); ?>asset/js/jquery-ui.js"></script>
<script>
	$(function() {
	$( "#datepicker" ).datepicker({
//        maxDate:new Date();
//	})
    })
        ;
</script>
<!--<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bookcss.css" type="text/css" media="all" />-->
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/jquery-ui.css" />
<!-- JavaScript --> <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>
 <?php
                include('footer.php');
                ?>