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
  <script>
$(document).ready(function(){
    $("button").click(function(){
        $("table").show("slow");
//        $("table").hide();
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
                <p><a href="<?php echo base_url();?>index.php/ChurchController/viewAccount" class="BTN BTN-PRIMARY">VIEW ACCOUNT </a> </p>
<hr></hr>
                 </div>
                                  <?php echo $this->session->flashdata('msg'); ?>
 <?php
                $attributes=array("id"=>"account","name"=>"account");
                echo form_open("ChurchController/addAccount",$attributes);?>
            <div class="panel-body">
                
              <div class="row">
                    <div class="col-md-12">
                              <div class="form-group">
                                                <div class="col-md-1">
                                                    
                                                     <label class="form-label" for="chname">St ID</label></div>
                                                      <div class="col-md-1">
                                                     <label class="control-label" for="chname">Chid</label></div>
                                                      <div class="col-md-2">
                                                     <label class="control-label" for="chname">Date</label></div>
                                                      <div class="col-md-1">
                                                     <label class="control-label" for="chname">C/D</label></div>
                                                      <div class="col-md-2">
                                                     <label class="control-label" for="chname">Amount</label></div>
                                                      <div class="col-md-2">
                                                     <label class="control-label" for="chname">Source</label></div>
                                                      <div class="col-md-2">
                                                     <label class="control-label" for="chname">Balance</label></div>


                                              
              <div class="row">
                  <div class="col-md-12">
                      <div class="col-md-1">
                                                    
                          <input type="text" class="form-control" id="stno" name="stno" value="<?php echo $this->session->userdata('st'); ?>"readonly=""></div>
                                                    
                      <div class="col-md-1">
                          <input type="text" class="form-control" id="chid" readonly="" name="chid" value="<?php echo $this->session->userdata('churchid'); ?>"></div>
                                                 <?php
                                                 $d="date(dd-mm-yyyy)";
                                                 ?>
                      <div class="col-md-2">
                          <input type="date"  class="form-control" min="<?php echo $d;?>" id="stdate" name="stdate"  required=""
                                    onblur="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"></div>
                                                      
                      <div class="col-md-1">
                 <select name="cd" id="cd" required=""                                     
                         onblur="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}">
                             
                     <option >-</option>   <option value="c">Credit</option>        
                      <option value="d">Debit</option>
                 </select>
                        </div>
                      <div class="col-md-2">
                                                      <input type="text" class="form-control" id="amt" name="amt" onkeypress="return isNumberKey(event)" 
                                                             maxlength="10" placeholder="Rs" required=""
                                                              oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Enter amount'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"></div>
                                                      
                      <div class="col-md-2">
                                                      <input type="text" class="form-control" id="tsource" name="tsource"  
                                                             maxlength="30" placeholder="Source" required=""
                                                             oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Enter transaction info'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
                onkeyup="if (this.value =='') {this.style.border='2px solid red'; this.focus();}else{this.style.border=' #A8DF78';}"></div>
                                                      
                      <div class="col-md-2">
                          <input type="text" value="<?php echo $this->session->userdata('bal'); ?>" readonly="" class="form-control" id="bal" name="bal" onkeypress="return ischar(event)" 
 maxlength="30" oninput="if( this.value.match(/^[ \s]/)) { if(confirm('Balance in hand'));  this.value=this.value.replace(/\s/g,''); this.focus=true;}" 
placeholder="Balance" required="" 
                </div>
                  </div>
                  <div class="row">
                  <div class="col-md-12">
                      <br>              
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="submit" name="btnsubmit" class="btn btn-warning" >SUBMIT</button></div></div>
                    </div>  </div>  </div>
                
                           
                           
                           
                         
                              
                             
                    
                 
                </div>
                 
             <?php echo form_close(); ?>
        </div>
                  
          </div>
        </div>
      </div>
    </div>
           </div>
<center><div class="tbl-header" style="width:90%;" hidden="">           
			                       

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
   </div> </div> 
                     <?php
                include('footer.php');
                ?>
       
       
        