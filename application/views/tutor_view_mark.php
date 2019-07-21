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
        </div> <br>    
<center><div class="well">
            <?php 
          $attributes = array("class" => "form-horizontal", "id" => "addChurchPrayer", "name" => "addChurchPrayer");
          echo form_open("SundaySchoolController/viewStudentMark", $attributes);?>
        <br> <label for="exam" class="control-label">Select Exam</label>
<td><select class="form-control" id="exam" name="exam" onchange="getMark();" >
                                               <option value="">Select Exam</option>
                    
                              <?php foreach($exam as $s){ ?>
                     <option value="<?php echo $s->examid ?>"><?php echo $s->examname ?></option>
                    <?php } ?> 
                              </select><br> 
                              <input type="submit" id="submit" name="submit" class="btn btn-primary">

          <?php echo form_close(); ?>
                       
                                 
        <br><br>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for rollnumber..">
     
        <table id="myTable" >
   
  <tr class="header">
    <th style="width:40%;">Roll</th>
    <th style="width:30%;">Name</th>
    <th style="width:30%;">Mark</th>
  </tr>
  <?php
  if($mark){
foreach($mark as $m)
{
    
    ?>
  <tr>
  <td name="id"  id="exam"><?php echo $m->studentid; ?></td>
    <td name="name"  id="name"><?php echo $m->studname; ?></td>
    <td name="mark"  id="mark"><?php echo $m->mark; ?></td>
    
    
  </tr>
 <?php 

    
}}
        else
        {
            echo "<tr><td>No result found!!";
        }
?> 
</table>

        </div>    
                      
<style>
    
    #myInput {
    background-image: url('/tablecss/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
    border-collapse: collapse; /* Collapse borders */
    width: 100%; /* Full-width */
    border: 1px solid #ddd; /* Add a grey border */
    font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
    text-align: left; /* Left-align text */
    padding: 12px; /* Add padding */
}

#myTable tr {
    /* Add a bottom border to all table rows */
    border-bottom: 1px solid #ddd; 
}

#myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #f1f1f1;
}
    </style>
   <script src="<?php echo base_url();?>asset/js/jquery-1.11.1.min.js"></script>
 <!--ajax for district-->
 <script>
      
                    function getExam()
			{
				exam=$('#exam').val();
			
				$.ajax({
			    url:"<?php echo base_url(); ?>index.php/SundaySchoolController/viewStudentMarks",
				type: "POST",
				data:{"exam":exam},
				success: function(data){
                                   // alert(data);
					$("#myTable").html(data);
                                        
                                        
				}
				
				});
			
			}

      
//        $("#menu-toggle").click(function (e) {
//            e.preventDefault();
//            $("#wrapper").toggleClass("toggled");
//        });
    </script> 
    <script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
 <?php
                include('footer.php');
                ?>