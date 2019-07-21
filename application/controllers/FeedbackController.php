<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FeedbackController extends CI_Controller 
{
        function __Construct()
        {
            parent::__Construct();
            $this->load->helper(array('form', 'url'));
            $this->load->library(array('session', 'form_validation', 'email')); 
            $this->load->database();
         $this->load->model('feed_model');
          if(! $this->getsession())
            {
              echo "<script>alert('Login to send feedback!!!! ');</script>";
                redirect('http://localhost/BrethrenChurch/index.php/LoginController/index','refresh');
            }
            
        }  
	
	public function index()
	{
               //$this->load->model('feedback');
		$this->load->view('feedback_view');
	}
        
        public function feedback_process()
	{
            if(!$this->input->post('name')=='' && !$this->input->post('feedbackmsg') ==''){
                
            $id=$this->session->userdata('id');
//            echo $id;
            $fname=trim($this->input->post('name'));
            $feedback=trim($this->input->post('feedbackmsg'));
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>'); // Displaying Errors in Div
            $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]|max_length[15]');
        $this->form_validation->set_rules('feedback', 'Feedback', 'trim|required|max_length[25]');
          if($this->form_validation==FALSE )  
          {
              redirect('FeedbackController/index','refresh');
          }
          else
          {
              
              $data=array('fname'=>trim($this->input->post('name')),
                  'feedback'=>trim($this->input->post('feedbackmsg')),
                  );
//              $this->feed_model->insert_feedback($data);
             
          }
	}
        else
        {
             echo "<script>alert('Write a feedback....!!!! ');</script>";
//             redirect('FeedbackController/index','refresh');
	}
        
        
          echo "<script>alert('Feedback sent Successfully....!!!! ');</script>";
//             redirect('FeedbackController/index','refresh');
          
        }
             //check in login controler userdata session set
        public  function getsession()
        {
            if (($this->session->userdata('id') )&&($this->session->userdata('loginuser') ))
            {
                return true;
            }
               else {
     
                return false;
                }
        }
	
        
}