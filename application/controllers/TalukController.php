<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class TalukController extends CI_Controller
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
          $this->load->model('taluk_model');
           if(! $this->getsession())
            {
                redirect('http://localhost/BrethrenChurch/index.php/LoginController/index','refresh');
            }
     }

     public function index()
     {
      $data = array();
     $query = $this->taluk_model->getAllDistrict();
    if ($query){
        $data['records'] = $query;  
    }    
        $this->load->view('addTaluk',$data);   
    }
public function verifyTaluk()
     {
    if($this->input->post('district')=='' && $this->input->post('txt_taluk')=='')
        {
             $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter all fields!</div>');
            redirect('TalukController/index');
        }
    else if($this->input->post('district')=='')
    {
         $this->session->set_flashdata('districtmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select district!</div>');
            redirect('TalukController/index');
    }
    else if($this->input->post('txt_taluk')=='')
    {
         $this->session->set_flashdata('talukmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter taluk !</div>');
 redirect('TalukController/index');
    }
    
        else
        {
          $district=$this->input->post('district');
          echo $district;
       $taluk=trim($this->input->post('txt_taluk'));
         echo $taluk;   
        }
        
          $this->form_validation->set_rules("district", "district", "required");
         $this->form_validation->set_rules("txt_taluk", "taluk", "trim|required");
         
         $chktaluk=$this->taluk_model->checkTaluk($taluk);
        echo $chktaluk;
         if ($chktaluk==0 )  //active user record is present
           {
              
              $this->taluk_model->insert_taluk();
              $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Taluk added successfully</div>');
 redirect('AdminController/view_taluk');
            }
            else
            {
                  $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Taluk already exist!</div>');
                         redirect('TalukController/index');
//              
//                
            }
//    
}
//SET STATUS 1 BT NO REMOVAL FROM TABLE     
        function enable_taluk() 
        {
         
         $id = $this->uri->segment('3'); 
         $data=array('status'=>1);
         $this->taluk_model->enable_taluk($id,$data); 
         redirect('AdminController/view_taluk');
      
        }
        //status update to 0; NO PUBLIC VIEW
        function disable_taluk() 
        {
         $id = $this->uri->segment('3');
         $data=array('status'=>0);
         $this->taluk_model->disable_taluk($id,$data); 
         redirect('AdminController/view_taluk');
      
        }
        //DELETE BY ADMIN
        function delete_taluk() 
        {
         
         $id = $this->uri->segment('3'); 
         $this->taluk_model->delete_taluk($id); 
    
//$this->load->view('display_view',$data); 
         redirect('AdminController/view_taluk');
      
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


