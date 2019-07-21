<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class StateController extends CI_Controller
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
          $this->load->model('state_model');
          if(! $this->getsession())
            {
                redirect('http://localhost/BrethrenChurch/index.php/LoginController/index','refresh');
            }
     }

     public function index()
     {
    $data = array();
    
    $query = $this->state_model->getAllCountries();
    if ($query){
        $data['records'] = $query;  
    }    
    $this->load->view('addState',$data);   
 }
     public function verifyState()
     {
         if($this->input->post('country')=='' && $this->input->post('txt_state')=='')
         { 
             $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter all fields!</div>');
            redirect('StateController/index');   
         }
         else if($this->input->post('country')=='')
         {
             $this->session->set_flashdata('countrymsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select country!</div>');
            redirect('StateController/index'); 
         }
         else if($this->input->post('txt_state')=='')
         {
             $this->session->set_flashdata('statemsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter state!</div>');
            redirect('StateController/index'); 
         }
         else
         {
              $country=$this->input->post('country');
         // echo $country;
       $state=$this->input->post('txt_state');
       //  echo $state;
         }
        
          $this->form_validation->set_rules("country", "country", "required");
         $this->form_validation->set_rules("txt_state", "state", "trim|required");
         
         $chkstate=$this->state_model->checkState($state);
        //echo $chkstate;
         if ($chkstate==0 )  //active user record is present
           {
              
              $this->state_model->insert_state();
              $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>State added successfully</div>');
 redirect('AdminController/view_state');
            }
            else
            {
                  $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>State already exist!</div>');
                         redirect('StateController/index');
              
                
            }
            
       
          }
          //SET STATUS 1 BT NO REMOVAL FROM TABLE     
        function enable_state() 
        {
         
         $id = $this->uri->segment('3'); 
         $data=array('status'=>1);
         $this->state_model->enable_state($id,$data); 
         redirect('AdminController/view_state');
      
        }
        //status update to 0; NO PUBLIC VIEW
        function disable_state() 
        {
         $id = $this->uri->segment('3');
         $data=array('status'=>0);
         $this->state_model->disable_state($id,$data); 
         redirect('AdminController/view_state');
      
        }
        //DELETE BY ADMIN
        function delete_state() 
        {
         
         $id = $this->uri->segment('3'); 
         $this->state_model->delete_state($id); 
    
//$this->load->view('display_view',$data); 
         redirect('AdminController/view_state');
      
        }
       public  function getsession()
        {
            if (($this->session->userdata('admin')) &&($this->session->userdata('id') ) &&($this->session->userdata('loginuser') ))
            {
                return true;
            }
               else {
     
                return false;
                }
        }
     }
      

?>