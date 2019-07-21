<?php

 class dorc_ctrl extends CI_Controller{
     public function index() {
           $this->load->helper('form');
          $this->load->helper('url');
         $this->load->view('advancepayment.php');
         
     }
//     public function payment1()
//  {
//          $r=$this->input->post("selector1");
//  if($r=="credit"){
//      //echo"hh";
//       $this->load->helper('form');
//          $this->load->helper('url');
//       $this->load->view('payment1.php');
//  }
//  else {  
//     
//       $this->load->helper('form');
//          $this->load->helper('url');
//      $this->load->view('payment.php');
//  }
//     }
//       public function payments(){
//             $this->load->model('dorc_model');
//        $cname=$this->input->post("card_name");
//         $cvv=$this->input->post("cvv");
//             $cno=$this->input->post("card_no");
//               $exp=$this->input->post("expiry_date");
//        //   session_start();
//   
//               $c=$this->dorc_model->check($cname,$cvv,$cno,$exp);
//               if($c==0){
//                   $this->session->set_flashdata('msg', '<div class="alert '
//                           . 'alert-danger text-center">Invalid Credentials...</div>');
//
//                  redirect('dorc_ctrl/index');
//               }
//               else{
//                   if( $_SESSION['myvar']=="Monthly")
//                  $c=$this->dorc_model->monthly($cno); 
//              else 
//                   $c=$this->dorc_model->yearly($cno);  
//              $this->session->set_flashdata('msg', '<div class="alert '
//                           . 'alert-danger text-center">Paid Successfully...</div>');
//
//                  redirect('dorc_ctrl/index');
//               }
//               
//               
//               
//                          }
                            public function payments_debit(){
                                $advance=trim($this->input->post("amount"));
                                $date=trim($this->input->post("datefrom"));
                                $payment_mode=trim($this->input->post("paymode"));
             $this->load->model('dorc_model');
                          $this->load->model('booking_model');

        $cname=trim($this->input->post("holder"));
        $email=trim($this->input->post("email"));
       $cvv=trim($this->input->post("cvv"));
             $cno=trim($this->input->post("cardno"));
               $exp1=trim($this->input->post("cardexp_month"));
               $exp2=trim($this->input->post("cardexp_year"));
        //   session_start();
                 $exp=trim($exp1."/".$exp2);
               echo $date."<br>".$payment_mode."<br>".$cname."<br>".$cvv."<br>".$cno."<br>".$exp;
 
//   
               $c=$this->dorc_model->check($cno,$cvv,$exp,$cname);
               echo "<br>".$c;
               if($c==0){
                   $this->session->set_flashdata('msg', '<div class="alert '
                           . 'alert-<div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>">Invalid Credentials...</div>');

                  redirect('dorc_ctrl/index');
               }
              
               else{
                   $b=$this->dorc_model->check_bal($cno);
                    foreach($b as $r)
      $b=$r->balance;
//      
////                   if( $_SESSION['myvar']=="Monthly"){
                       if($b<=$advance){
                     $this->session->set_flashdata('msg', '<div class="alert 
                           alert-success <div class="alert alert-danger alert-dismissable fade in text center">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>">No Balance...</div>');

                  redirect('dorc_ctrl/index');       
                       }
                       else{
                   $c=$this->dorc_model->pay($cno); 
                   $data=array('name'=>$cname,
                       'emailid'=>$email,
                       'date'=>$date,
                       'payment_mode'=>$payment_mode,
                       'amount_payed'=>$advance,
                       'balance'=>30000-$advance,
                       'status'=>'pending'
                       );
                   $this->booking_model->book($data); 
                       }
//                   }
//              else {
//                  
////                       if($b<=500){
////                     $this->session->set_flashdata('msg', '<div class="alert '
////                           . 'alert-danger text-center">No Balance...</div>');
//
////                  redirect('dorc_ctrl/index');       
////                       }
////                       else{
////                   $c=$this->dorc_model->yearly($cno); 
////                       }
//             
//              
////              } 
              $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable fade in text center">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Paid Successfully...</div>');

                  redirect('BookingController/index');
               }
               
               
               
                          }
                          //REFUND
                          
                          public function refund_deposit(){
                                
             $this->load->model('dorc_model');
                          $this->load->model('booking_model');

        $cname=trim($this->input->post("holder"));
        $email=trim($this->input->post("email"));
       $cvv=trim($this->input->post("cvv"));
             $cno=trim($this->input->post("cardno"));
               $exp1=trim($this->input->post("cardexp_month"));
               $exp2=trim($this->input->post("cardexp_year"));
        //   session_start();
                 $exp=trim($exp1."/".$exp2);
               echo $date."<br>".$payment_mode."<br>".$cname."<br>".$cvv."<br>".$cno."<br>".$exp;
 
//   
               $c=$this->dorc_model->check($cno,$cvv,$exp,$cname);
               echo "<br>".$c;
               if($c==0){
                   $this->session->set_flashdata('msg', '<div class="alert '
                           . 'alert-<div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>">Invalid Credentials...</div>');

                  redirect('dorc_ctrl/index');
               }
              
               else{
                   $b=$this->dorc_model->check_bal($cno);
                    foreach($b as $r)
      $b=$r->balance;
//      
////                   if( $_SESSION['myvar']=="Monthly"){
                       if($b<=$advance){
                     $this->session->set_flashdata('msg', '<div class="alert 
                           alert-success <div class="alert alert-danger alert-dismissable fade in text center">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>">No Balance...</div>');

                  redirect('dorc_ctrl/index');       
                       }
                       else{
                   $c=$this->dorc_model->pay($cno); 
                   $data=array('name'=>$cname,
                       'emailid'=>$email,
                       'date'=>$date,
                       'payment_mode'=>$payment_mode,
                       'amount_payed'=>$advance,
                       'balance'=>30000-$advance,
                       'status'=>'pending'
                       );
                   $this->booking_model->book($data); 
                       }
//                   }
//              else {
//                  
////                       if($b<=500){
////                     $this->session->set_flashdata('msg', '<div class="alert '
////                           . 'alert-danger text-center">No Balance...</div>');
//
////                  redirect('dorc_ctrl/index');       
////                       }
////                       else{
////                   $c=$this->dorc_model->yearly($cno); 
////                       }
//             
//              
////              } 
              $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable fade in text center">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Paid Successfully...</div>');

                  redirect('BookingController/index');
               }
               
               
               
                          }
                            public function netBanking(){
                                
             $this->load->model('dorc_model');
                          $this->load->model('booking_model');
$advance=trim($this->input->post("amount"));
                                $date=trim($this->input->post("datefrom"));
                                $payment_mode=trim($this->input->post("paymode"));
        $cname=trim($this->input->post("holder"));
        $email=trim($this->input->post("email"));
       $bank=trim($this->input->post("bank"));
           
                          if($bank=="IOB"){
//      //echo"hh";
       
          $this->load->helper('url');
                  redirect('https://www.iobnet.co.in/ibanking/login.do');
  }
  else if($bank=="SBI"){  
//     
       $this->load->helper('form');
          $this->load->helper('url');
       redirect('https://retail.onlinesbi.com/retail/login.htm');
  }
  else
      {  
  
//     
       $this->load->helper('form');
          $this->load->helper('url');
       redirect('https://www.fednetbank.com/');
  }
   }
}

