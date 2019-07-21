<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MatrimonyController extends CI_Controller {
function __Construct(){
    parent::__Construct();
	$this->load->helper(array('form', 'url'));
    $this->load->library(array('session', 'form_validation', 'email')); 
    $this->load->database('');
     $this->load->model('matrimony_model');
    
          $this->load->helper('html');
          
        
    }
        
	public function index()
	{
		$this->load->view('matrihome');
	}		
        public function reg()
	{

             $this->load->view('matrimonyRegister');

        
        }
        public function register()
	{
$config =  array(
                  'upload_path'     => "asset/uploads/matriprofile",
                  'allowed_types'   => "jpg|png|jpeg",
//                  'overwrite'       => TRUE,
//                  'max_size'        => "2048000",  // Can be set to particular file size
//                  'max_height'      => "768",
//                  'max_width'       => "1024"  
                );    
		 		$this->load->library('upload', $config);
				if($this->upload->do_upload('userfile'))
				{
                                   
					$data = array('upload_data' => $this->upload->data());
					$this->load->view('upload_success',$data);
				}
				else
				{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('matrimonyRegister', $error);
				}  
                                $data = array('upload_data'=>$this->upload->data());
                                $pic=$data['upload_data']['file_name'];
                                $path=$data['upload_data']['file_path'];
//                                echo $path,$pic;

     //$this->load->view('register_view');
     //$type='';
    //validate input value with form validation class of codeigniter
   $this->form_validation->set_rules('name', ' Name', 'trim|required');
    
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
       $this->form_validation->set_rules('mar_status', 'Status', 'trim|required');
         $this->form_validation->set_rules('dob', 'date of birth', 'trim|required');
          
           $this->form_validation->set_rules('hofemail', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('mobile_code', 'Code', 'trim|required');
            $this->form_validation->set_rules('mobile', 'Mobile number', 'trim|required');
        $this->form_validation->set_rules('country', 'Country living', 'required');
//         $mid=$this->matrimony_model->getId();
////echo $mid;
//     $i = "50001";
//     $id = $i++;
            $name = trim($this->input->post('name'));
           
          $password = trim($this->input->post('password'));
          
          $gender = trim($this->input->post('gender'));
           $dob = trim($this->input->post('dob'));
           $mar_status = trim($this->input->post('mar_status'));
          $email = trim($this->input->post('email'));
          $code = trim($this->input->post('mobile_code'));
          $mobile = trim($this->input->post('mobile'));
          $country = $this->input->post('country');
         
//               $photo = trim($this->input->post('userfile'));
//echo
//               $id."<br>".
//        $name."<br>".$password."<br>".$gender."<br>".$dob."<br>".$mar_status."<br>".$email."<br>".$code.$mobile."<br>".$country."<br>".$photo;
//       
      $matrireg = array(
      
          'name'=>$name,
          'password' => $password,
          'gender' => $gender,
          'age' => $dob,
          'mar_status' => $mar_status,
          'email' => $email,
          'phone' => $code.$mobile,
          'photo'=>$pic,
          'country'=>$country,
          'status'=>1
              );
     
    $this->matrimony_model->registerUser($matrireg);
//   $from_email = "bcm@ajce.ind.in";  //cpanel mail create mail and password
//         $to_email = $email; 
//
//         //Load email library 
//         $this->load->library('email'); 
//   
//         $this->email->from($from_email, 'LOVIN ANN'); 
//         $this->email->to($to_email);
//         $this->email->subject('Brethren Matrimony Registration Success '); 
//         $this->email->message("You have successfully registered in brethren matrimony. Use your email as username and the given password for Login."); 
//   
//         //Send mail 
//         if($this->email->send()) 
//         $this->session->set_flashdata("email_sent",'<div class="alert alert-success alert-dismissable fade in text center">
//            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Email sent successfully.</div>'); 
//         else 
//         $this->session->set_flashdata("email_sent",'<div class="alert alert-danger alert-dismissable fade in text center">
//            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Error in sending Email.</div>');    
    $this->session->set_flashdata("msg",'<div class="alert alert-success alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>You have Registered successfully</div>'); 
              redirect('MatrimonyController/reg'); 


    }
 
     
 
    
}
?>