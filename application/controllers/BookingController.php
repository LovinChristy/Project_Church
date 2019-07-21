<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class BookingController extends CI_Controller
{
     public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
          //load the login model
          $this->load->model('booking_model');
         
     }

     public function index()
     {
          $this->load->view('book_auditorium');
         
     }
//     public function check()
//     {
//         $date=$this->input->post('datepicker1');
////         echo $date;
//         $chk=$this->booking_model->check($date);
//         if($chk>0)
//         {
//             $this->session->set_flashdata('msg', ' <div class="alert alert-danger alert-dismissable fade in text center">
//    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Date unavailable! Try another date!</div>');
//                         $this->load->view('book_auditorium');
//
////                                   redirect(current_url());
////             echo "Date unavailable! Check another date";
//         }
//         
//         else
//         {
//        $this->session->set_flashdata('msg', ' <div class="alert alert-success alert-dismissable fade in text center">
//    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Date available! Confirm booking!</div>');
////                         redirect(current_url());
//             redirect('BookingController/book');   
//
//         }
//     }
//    public function book()
//     {
//          $this->load->view('booking');
//         
//     }
   
       public function bookauditorium()
     {
           if( $this->input->post('datepicker1')=='' )
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter all fields!</div>');
            redirect('BookingController/index');   
    }
    else
    {
        $datefrom=$this->input->post('datepicker1');
                   

//         $dateto=$this->input->post('datepicker2');
//         $event=$this->input->post('event');
//         $nop=$this->input->post('people');
//         $rate=$this->input->post('rate');
//         echo $datefrom."<br>"; 
////         echo $dateto."<br>";
//         echo $event."<br>"; 
////          echo $nop."<br>";  
//          echo $rate."<br>"; 
         $chk=$this->booking_model->check($datefrom);
         if($chk>0)
         {
             $this->session->set_flashdata('msg', ' <div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'. $datefrom .' is unavailable! Try another date!</div>');
                         $this->load->view('book_auditorium');

                                 
         }
         
         else
         {
             
$this->session->set_flashdata('msg', ' <div class="alert alert-success alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'. $datefrom . ' is available.Proceed</div>');
                     $this->session->set_flashdata('datefrom', $datefrom);
             redirect('BookingController/book_auditorium_payment');
    }
 

     }
     
         }
         
         public function book_auditorium_payment()
     {
        $datefrom = $this->session->flashdata('datefrom');
//        echo $datefrom;
          $this->load->view('book_auditorium_payment',$datefrom);
         
     }
      public function book_auditorium_step1()
     {
                  $paymode=$this->input->post('paymode');
//echo $paymode;
        $datefrom = $this->input->post('datefrom');
//        echo $datefrom;
        
   $this->session->set_flashdata('datefrom', $datefrom);
        $this->session->set_flashdata('paymode', $paymode);      
  if($paymode=="card"){
//      //echo"hh";
//      
       $this->load->view('advancepayment');
//
  }
  else 
      {  
//    
//      
      $this->load->view('advancepayment1');
  }
          
         
     }
     public function viewCardDetail()
     {
        $paymode=$this->input->post('paymode');
//echo $paymode;
        $datefrom = $this->input->post('datefrom');
//        echo $datefrom;
        $holder=$this->input->post('holder');
//echo $holder;
        $email=$this->input->post('email');
//echo $holder;
        $cardno = $this->input->post('cardno');
//        echo $cardno;
        $cardexp_month=$this->input->post('cardexp_month');
//echo $cardexp_month;
        $cardexp_year = $this->input->post('cardexp_year');
//        echo $cardexp_year;
         $cvv=$this->input->post('cvv');
//echo $cvv;
        $this->session->set_flashdata('datefrom', $datefrom);
        $this->session->set_flashdata('paymode', $paymode);
        $this->session->set_flashdata('holder', $holder);
         $this->session->set_flashdata('email', $email);
         $this->session->set_flashdata('cardno', $cardno);
        $this->session->set_flashdata('cardexp_month', $cardexp_month);
        $this->session->set_flashdata('cardexp_year', $cardexp_year);
        $this->session->set_flashdata('cvv', $cvv);
          $this->load->view('viewCardHolderDetails');
         
     }
     public function viewBankDetail()
     {
        $paymode=$this->input->post('paymode');
//echo $paymode;
        $datefrom = $this->input->post('datefrom');
//        echo $datefrom;
            $bank=$this->input->post('bank');
//echo $bank;
        $holder=$this->input->post('holder');
//echo $holder;
        $email=$this->input->post('email');
//echo $email;

        $this->session->set_flashdata('bank', $bank);

        $this->session->set_flashdata('datefrom', $datefrom);
        $this->session->set_flashdata('paymode', $paymode);
        $this->session->set_flashdata('holder', $holder);
         $this->session->set_flashdata('email', $email); 
          $this->load->view('viewBankSelected');
         
     }
     
     
    
    //APPROVAL AND REJECT
        function approve_booking() 
        {
         
         $id = $this->uri->segment('3'); 
//         $log=$this->booking_model->getLogid($id); 
//         foreach($log as $l)
//         {
//           $logid=$l->lid;
         $data=array('status'=>'Booked');
//          $this->login_model->log_approve_church($logid,$data);
         $this->booking_model->approve_booking($id,$data); 
                 $this->session->set_flashdata('bookid', $id);

         redirect('BookingController/approve_send_mail');
      }
      
      public function approve_send_mail() { 
         $from_email = "career@ajce.ind.in";  //cpanel mail create mail and password
        $bid=$this->session->flashdata('bookid');
        $eid=$this->booking_model->getEmail($bid);        
//        print_r($eid)  ;
foreach($eid as $e){
     $to_email = $e->emailid;

//         
   
//          $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
//    $pass = array(); //remember to declare $pass as an array
//    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
//    for ($i = 0; $i < 8; $i++) {
//        $n = rand(0, $alphaLength);
//        $pass[] = $alphabet[$n];
//    }
//  echo $ps=implode($pass);
// $usr = $this->login_model->get_pass($to_email,$ps);
//         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'LOVIN ANN'); 
         $this->email->to($to_email);
         $this->email->subject('Booking Confirmed'); 
         $this->email->message("Your booking for auditorium have been confirmed.Contact Mr.Jacob John(Mobile no:9789678789)
                 for balance payment and contract signing"."Your reference id is $bid"); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
          redirect('AdminController/viewApprovedBooking');
      } 
        }
         public function cancel_send_mail() { 
         $from_email = "career@ajce.ind.in";  //cpanel mail create mail and password
        $bid=$this->session->flashdata('bookid');
        $eid=$this->booking_model->getEmail($bid);        
//        print_r($eid)  ;
foreach($eid as $e){
     $to_email = $e->emailid;

//         
   
//          $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
//    $pass = array(); //remember to declare $pass as an array
//    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
//    for ($i = 0; $i < 8; $i++) {
//        $n = rand(0, $alphaLength);
//        $pass[] = $alphabet[$n];
//    }
//  echo $ps=implode($pass);
// $usr = $this->login_model->get_pass($to_email,$ps);
//         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'LOVIN ANN'); 
         $this->email->to($to_email);
         $this->email->subject('Booking Confirmed'); 
         $this->email->message("Your booking of reference id $bid for auditorium have been cancelled as per request.
             Contact Mr.Jacob John(Mobile no:9789678789)
                 for further queries.Thank you!"); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
          redirect('AdminController/viewCancelledBooking');
      } 
        }
        function cancel_booking() 
        {
         $id = $this->uri->segment('3');
//         $log=$this->booking_model->getLogid($id); 
//         foreach($log as $l)
//         {
//           $logid=$l->lid;
           $data=array('status'=>'Cancel');
//           $this->login_model->log_reject_church($logid,$data); 
            $this->booking_model->cancel_booking($id,$data); 
            $this->session->set_flashdata('bookid', $id);

         redirect('BookingController/cancel_send_email');
         }
          function refund_deposit() 
        {
         $id = $this->uri->segment('3');
//         $log=$this->booking_model->getLogid($id); 
//         foreach($log as $l)
//         {
//           $logid=$l->lid;
//           $data=array('status'=>'Cancel');
//           $this->login_model->log_reject_church($logid,$data); 
//            $this->booking_model->cancel_booking($id,$data); 
            $this->session->set_flashdata('bookid', $id);

         redirect('dorc_ctrl/refund_deposit');
         }
}




//$book=array('date'=>$datefrom,
////              'rate'=>$rate,
////              'purpose'=>$event,
//              );
//          $this->booking_model->book($book);
//          $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
//  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Booked!! You will shortly recieve confrimation mail</div>');
//redirect('BookingController/index'); 
?>