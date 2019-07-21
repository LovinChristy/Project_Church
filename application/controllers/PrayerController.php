<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrayerController extends CI_Controller {
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
          $this->load->model('prayer_model');
         
     }
	public function index()
	{
		$this->load->view('addPrayerRequest');
	}
        public function view_prayer_request()
	{
            $data['prayer']=$this->prayer_model->viewPrayerRequest() ;
		$this->load->view('view_prayer_request',$data);
	}
         public function verifyPrayerRequest()
	{
           if( $this->input->post('txt_subject')=='' && $this->input->post('txt_message')=='' )
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter all fields!</div>');
            redirect('PrayerController/index');   
    }
      else
        {
         $subject=$this->input->post('txt_subject');
         // echo $state;
       $message=$this->input->post('txt_message');
        // echo $district;
    }
        
          $this->form_validation->set_rules("txt_subject", "subject", "required");
         $this->form_validation->set_rules("txt_message", "message", "trim|required");
        
         $data = array('prmessage'=>$message,
            'subject'=>subject);
        
        
              $this->prayer_model->addPrayerRequest($data);
              $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Prayer request sent</div>');
 redirect('PrayerController/index');
           
	}
}
