<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EvangelistMainController extends CI_Controller {

  function __Construct(){
    parent::__Construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library(array('session', 'form_validation', 'email')); 
    $this->load->database('');
    $this->load->model('evangelist_signup_model');
     if(! $this->getsession())
            {
                redirect('http://localhost/BrethrenChurch/index.php/LoginController/index','refresh');
            }
    
    }  
    //change password
    public function change_password()
  {
  $this->load->view('change_password_evangelist');
  }
  public function checkoldpswd()
    {
       if ($this->input->post('oldpassword')) 
                          {
                              $oldpswd = $this->input->post("oldpassword");
                               $uname=$this->session->userdata['evangelist'];
//                               echo $oldpswd,$uname;
                               $n=$this->evangelist_signup_model->checkpswd($oldpswd,$uname);
                               //return $n;
                                echo $n;
                               if($n>0)
                               {
                                                 
   
//          if ($this->input->post('btn_forgot') == "Submit")
//                          {
//             
                            $password = $this->input->post('new_password');
//                             $uname=$this->session->userdata['username'];
//                             echo $password,$uname;
                             //getting  logid
//                             $id=$this->change_pswd_model->getid($uname);
                             
                          $id =$this->session->userdata('id');
//                          
//                          
                          $data = array( 
                       'password' => md5($password));
                          
                       $this->evangelist_signup_model->updatepswd($data,$id);
                //destroy session
                //redirec to login page
             
                   
                          } 
                        
              redirect('LoginController/logout');
    
}

//                          }
//                          
//                          }
                          
                          }
    public function home()
  { 
     $this->load->view('home_evangelist');
  }
  public function viewEvangelist()
        {
            $s=$this->session->userdata('id');
            //echo $s;
         $query=$this->evangelist_signup_model->getDetails($s);
         $data['evan']=null;
            if($query)
            {
                $data['evan']=$query;
            }
         
          $this->load->view('evangelistProfile',$data);
         
        }
       // public notification viewed by evg
     public function evangelistNotification()
     {
         $data['notification'] =$this->evangelist_signup_model->viewAllNotification();
         $this->load->view('evg_public_notif_view',$data);
         
     }
   //view evg notification ADDED frm admin
  public function viewEvangelistNotification()
        {
           $s=$this->session->userdata('id');
//            echo $s;
           $query=$this->evangelist_signup_model->getType($s);
           foreach($query as $t)
           {
               $type=$t->type;
           }
//           echo $type; 
//           
          $data['notif'] =$this->evangelist_signup_model->viewEvangelistNotification($type);
          $this->load->view('evg_admin_notif_view',$data);
} 
    //check in login controler userdata session set
        public  function getsession()
        {
            if (($this->session->userdata('evangelist')) &&($this->session->userdata('id') )&&($this->session->userdata('loginuser') ))
            {
                return true;
            }
               else {
     
                return false;
                }
        }
}