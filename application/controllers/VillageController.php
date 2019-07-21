<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class VillageController extends CI_Controller
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
          $this->load->model('village_model');
           if(! $this->getsession())
            {
                redirect('http://localhost/BrethrenChurch/index.php/LoginController/index','refresh');
            }
     }

     public function index()
     {
        $data = array();
     $query = $this->village_model->getAllTaluk();
    if ($query){
        $data['records'] = $query;  
    }    
    $this->load->view('addVillage',$data);   
       
    }      
        public function verifyVillage()
     {
              if($this->input->post('taluk')=='' && $this->input->post('txt_village')==''  )
            {
                 $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter all fields!</div>');
 redirect('VillageController/index');
            }
            else if($this->input->post('taluk')=='')
            {
                 $this->session->set_flashdata('talukmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select taluk!</div>');
 redirect('VillageController/index');  
            }
            else if($this->input->post('txt_village')=='')
            {
               $this->session->set_flashdata('villagemsg', '<div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter village!</div>');
 redirect('VillageController/index');  
            }
            
             else   
            {
                $taluk=$this->input->post('taluk');
        //  echo $taluk;
       $village=trim($this->input->post('txt_village'));
        // echo $village;
           
            }
         
        $this->form_validation->set_rules("taluk", "taluk", "trim|required");
          $this->form_validation->set_rules("txt_village", "village", "trim|required");
         
         $chkvillage=$this->village_model->checkVillage($village);
        //echo $chkvillage;
         if ($chkvillage==0 )  //active user record is present
           {
              
              $this->village_model->insert_village();
              $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Village added successfully</div>');
 redirect('AdminController/view_village');
            }
            else
            {
                  $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Village already exist!</div>');
                         redirect('VillageController/index');
              
                
            }
    
}
//SET STATUS 1 BT NO REMOVAL FROM TABLE     
        function enable_village() 
        {
         
         $id = $this->uri->segment('3'); 
         $data=array('status'=>1);
         $this->village_model->enable_village($id,$data); 
         redirect('AdminController/view_village');
      
        }
        //status update to 0; NO PUBLIC VIEW
        function disable_village() 
        {
         $id = $this->uri->segment('3');
         $data=array('status'=>0);
         $this->village_model->disable_village($id,$data); 
         redirect('AdminController/view_village');
      
        }
        //DELETE BY ADMIN
        function delete_village() 
        {
         
         $id = $this->uri->segment('3'); 
         $this->village_model->delete_village($id); 
    
//$this->load->view('display_view',$data); 
         redirect('AdminController/view_village');
      
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


