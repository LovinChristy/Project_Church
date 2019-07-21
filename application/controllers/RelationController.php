<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class RelationController extends CI_Controller
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
          $this->load->model('relation_model');
          if(! $this->getsession())
            {
                redirect('http://localhost/BrethrenChurch/index.php/LoginController/index','refresh');
            }
     }

     public function index()
     {
          $this->load->view('addRelation');
         
     }
    
     public function verifyRelation()
     {
         if($this->input->post('txt_relation')=='')
         {
              $this->session->set_flashdata('relationmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter relation field!</div>');
            redirect('RelationController/index');  
         }
         else
         {
              $relation=$this->input->post('txt_relation');
         }
        
         //echo $relation;
          //$this->form_validation->set_rules("txt_relation", "relation", "trim|required");
         $chkrelation=$this->relation_model->checkRelation($relation);
        // print_r($chkrelation);
         
         if ($chkrelation==0 )  //active user record is present
           {
             $data=array('relation'=>$relation,
                 'status'=>1);  
                $this->relation_model->insert_relation($data);
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Relation added successfully</div>');
                redirect('AdminController/view_relation');
            
            }
            else
            {
               
          $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Relation already exist!</div>');
                         redirect('RelationController/index');
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
//                      $this->load->view('addRelation');
//              $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Relation added successfully!</div>');  

          }
          //SET STATUS 1 BT NO REMOVAL FROM TABLE     
        function enable_relation() 
        {
         
         $id = $this->uri->segment('3'); 
         $data=array('status'=>1);
         $this->relation_model->enable_relation($id,$data); 
         redirect('AdminController/view_relation');
      
        }
        //status update to 0; NO PUBLIC VIEW
        function disable_relation() 
        {
         $id = $this->uri->segment('3');
         $data=array('status'=>0);
         $this->relation_model->disable_relation($id,$data); 
         redirect('AdminController/view_relation');
      
        }
        //DELETE BY ADMIN
        function delete_relation() 
        {
         
         $id = $this->uri->segment('3'); 
         $this->relation_model->delete_relation($id); 
    
//$this->load->view('display_view',$data); 
         redirect('AdminController/view_relation');
      
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