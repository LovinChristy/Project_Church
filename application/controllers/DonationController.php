<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DonationController extends CI_Controller {

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
          $this->load->model('donation_model');
          
         
     }
	public function request()
	{
		$this->load->view('donation_request');
	}
        public function add()
	{
		$name=trim($this->input->post('name'));
                $msg=trim($this->input->post('donationmsg'));
                $account=trim($this->input->post('accno'));
                $contact=trim($this->input->post('ph'));
                $email=trim($this->input->post('email'));
                echo "<br>".$name."<br>".$msg."<br>".$account;

        $donation= array('name'=>$name ,
            'msg'=>$msg,
            'accountno'=>$account,
           'contact'=>$contact,
            'email'=>$email,
            'status'=>'Pending'
                );
        
        
        $this->donation_model->donation_request($donation);
      $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Request sent</div>');
 redirect('DonationController/request');
            
	}
         //view donation request
     function viewDonationReq() 
        {
         $data['donation']=$this->donation_model->viewDonationRequest();
         $this->load->view('viewDonationReq',$data);
         
      }
      function donate() 
        {
         $data['donation']=$this->donation_model->viewDonationRequest();
         $this->load->view('donate_step1',$data);
         
      }
}