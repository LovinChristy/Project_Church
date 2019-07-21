<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class postalController extends CI_Controller
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
          $this->load->model('postal_model');
          if(! $this->getsession())
            {
                redirect('http://localhost/BrethrenChurch/index.php/LoginController/index','refresh');
            }
          
     }

     public function index()
     {
        $data = array();
     $query = $this->postal_model->getAllTaluk();
    if ($query){
        $data['records'] = $query;  
    }    
    $this->load->view('addPostoffice',$data);   
         
    }      
        public function verifyPostoffice()
     {
            if($this->input->post('taluk')=='' && $this->input->post('txt_postoffice')=='' && $this->input->post('txt_postalcode')==0 )
            {
                 $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter all fields!</div>');
 redirect('postalController/index');
            }
            else if($this->input->post('taluk')=='')
            {
                $this->session->set_flashdata('talukmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select taluk!</div>');
 redirect('postalController/index');
            }
            else if( $this->input->post('txt_postoffice')=='')
            {
                $this->session->set_flashdata('postofficemsg', '<div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter postoffice!</div>');
 redirect('postalController/index');
            }
            else if($this->input->post('txt_postalcode')==0 )
            {
               $this->session->set_flashdata('postalcodemsg', '<div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter postalcode!</div>');
 redirect('postalController/index');  
            }
           else     
            {
         $taluk =$this->input->post('taluk');
         //echo $taluk;
       $postoffice=trim($this->input->post('txt_postoffice'));
        //echo $postoffice;
        $postalcode=trim($this->input->post('txt_postalcode'));
       // echo $postalcode;
          } 
        $this->form_validation->set_rules("taluk", "taluk", "trim|required");
          $this->form_validation->set_rules("txt_postoffice", "postoffice", "trim|required");
            $this->form_validation->set_rules("txt_postalcode", "postalcode", "trim|required");
            
         $chkpost=$this->postal_model->checkPostoffice($postoffice,$postalcode);
           
        //echo $chkpost;
         if ($chkpost==0)  //active user record is present
           {
              
              $this->postal_model->insert_postoffice();
              $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Post office added successfully</div>');
 redirect('postalController/index');
            }
            else
            {
                  $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Post office already exist!</div>');
                         redirect('postalController/index');
              
                
            }
    
}
public  function getsession()
        {
            if (($this->session->userdata('username')) &&($this->session->userdata('id') ) &&($this->session->userdata('loginuser') ))
            {
                return true;
            }
               else {
     
                return false;
                }
        }
}
?>


