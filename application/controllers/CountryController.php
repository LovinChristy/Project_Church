<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class CountryController extends CI_Controller
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
          $this->load->model('country_model');
          if(! $this->getsession())
            {
                redirect('http://localhost/BrethrenChurch/index.php/LoginController/index','refresh');
            }
     }

     public function index()
     {
          $this->load->view('addCountry');
         
     }
    
     public function verifyCountry()
     {
         if($this->input->post('txt_country')=='')
         {
              $this->session->set_flashdata('countrymsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter country field!</div>');
            redirect('CountryController/index');  
         }
         else
         {
              $country=$this->input->post('txt_country');
         }
        
         //echo $country;
          //$this->form_validation->set_rules("txt_country", "country", "trim|required");
         $chkcountry=$this->country_model->checkCountry($country);
        // print_r($chkcountry);
         
         if ($chkcountry==0 )  //active user record is present
           {
             $data=array('country'=>$country,
                 'status'=>1);  
                $this->country_model->insert_country($data);
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Country added successfully</div>');
                redirect('AdminController/view_country');
            
            }
            else
            {
               
          $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Country already exist!</div>');
                         redirect('CountryController/index');
            }
            
        
//               //validation succeeds
//               else
//               {
//                   $this->state_model->insert_state($data);
//                   /* if ($dist_result > 0)
//                        //active user record is present
//                    {
//                        $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">District already exists!</div>');
//
//                         //redirect("http://localhost/project/home");
//                          $this->load->view('addDistrict');
//                    }
//                    else
//                    {
//                    
//                    */
//                           
//               }
//            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Added Successfully!</div>');
//            }
//             redirect(current_url()); 
//                      $this->load->view('addCountry');
//              $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Country added successfully!</div>');  

          }
          
          //SET STATUS 1 BT NO REMOVAL FROM TABLE     
        function enable_country() 
        {
         
         $id = $this->uri->segment('3'); 
         $data=array('status'=>1);
         $this->country_model->enable_country($id,$data); 
         redirect('AdminController/view_country');
      
        }
        //status update to 0; NO PUBLIC VIEW
        function disable_country() 
        {
         $id = $this->uri->segment('3');
         $data=array('status'=>0);
         $this->country_model->disable_country($id,$data); 
         redirect('AdminController/view_country');
      
        }
        //DELETE BY ADMIN
        function delete_country() 
        {
         
         $id = $this->uri->segment('3'); 
         $this->country_model->delete_country($id); 
    
//$this->load->view('display_view',$data); 
         redirect('AdminController/view_country');
      
        }
        
      public  function getsession()
        {
            if (($this->session->userdata('admin')) &&($this->session->userdata('id') )  &&($this->session->userdata('type') ) &&($this->session->userdata('loginuser') ))
            {
                return true;
            }
               else {
     
                return false;
                }
        }
          
     }
    

?>