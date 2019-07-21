<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forgot_Controller extends CI_Controller {

	
      function __construct() { 
         parent::__construct(); 
         $this->load->library('session'); 
         $this->load->model('login_model');
         $this->load->helper('form'); 
                  $this->load->library('email'); 

      } 
		
      public function index() { 
	
         $this->load->helper('form'); 
         $this->load->view('forgot_password'); 
      } 
  
      public function send_mail() { 
         $from_email = "bcm@ajce.ind.in";  //cpanel mail create mail and password
        echo $to_email = $this->input->post('email'); 
   
          $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
  echo $ps=implode($pass);
 $usr = $this->login_model->get_pass($to_email,$ps);
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'LOVIN ANN'); 
         $this->email->to($to_email);
         $this->email->subject('Password Request'); 
         $this->email->message("Use this One Time Password for Login and Reset your password."."Your password is $ps"); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
         $this->load->view('forgot_password'); 
      } 
}
