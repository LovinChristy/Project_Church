<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MatrimonyLoginController extends CI_Controller {
function __Construct(){
    parent::__Construct();
	$this->load->helper(array('form', 'url'));
    $this->load->library(array('session', 'form_validation', 'email')); 
    $this->load->database('');
     $this->load->model('matrimony_model');
    
          $this->load->helper('html');
          
        
    }
//        function get_session() {//if a user closes window without logout,and after tries to login  
//    //display home page,not login page,
//         //no need to login again
//        if ($this->session->userdata('username')  && $this->session->userdata('$type') 
//                && $this->session->userdata('id') && $this->session->userdata('loginuser')) {
//            return true;
//        } else {
//            return false;
//        }
//    }
	
 
         public function login()
	{
//	$this->load->view('matri_login');
             	$this->load->view('matrimonyLogin');

        
        }
        
 public function loginProcess()
     {
   
//         if(isset($_SESSION['username'])) 
//             {
//    redirect('MatrimonyController/index');
//    
//         }
          //get the posted values
          $username = $this->input->post("txt_username");
          $password = $this->input->post("txt_password");

          //set validations
          $this->form_validation->set_rules("txt_username", "Username", "trim|required");
          $this->form_validation->set_rules("txt_password", "Password", "trim|required");

//          if ($this->form_validation->run() == FALSE)
//          {
//               //validation fails
//               $this->load->view('matrimonyLogin');
//               
//               
//          }
//          else
//          {
               //validation succeeds
               if ( $this->input->post('txt_username')!= '' && $this->input->post('txt_password')!= '' )
               {
//                   echo $username,$password;
                    //check if username and password is correct
                    $usr_result = $this->matrimony_model->get_user($username, $password);
//                    print_r($usr_result);
                    $n=sizeof($usr_result);
                    if ($n==1)
                        //active user record is present
                    {
                        foreach($usr_result as $res)
                        //set the session variables
                        {
                            $name=$res->email;
                            $id=$res->matr_id;
                          
                          $sessiondata = array(
                              'username' => $username,
                              'id' => $id,
                              
//                              'loginuser' => TRUE
                         );
                         $this->session->set_userdata($sessiondata);
                         //redirect("http://localhost/project/home");
                          redirect("http://localhost/BrethrenChurch/index.php/matrimonyHomeController/matrimonyHome");  
                        }
                    }
                    else
                    {
                         $this->session->set_flashdata('msg', ' <div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Invalid username and password! Check approval with admin</div>');
//                         redirect(current_url());
                                             $this->load->view('matrimonyLogin');

                    }
                 }   
//               
               else
               {
                    //redirect('');
                    $this->load->view('matrimonyLogin');
                    $this->session->set_flashdata('msg', ' <div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Invalid username and password! Check approval with admin</div>');
//                         redirect(current_url());
               }
//               }
          
     }
      
      public function forgot()  
     {  
       $this->load->view('forgot_password') ; 
     } 
      
     
     
     public function logout()  
     {  
                
        $sessiondata = array(
                        'username'  =>'',
                        'id'  =>'',
                        'loginuser' => FALSE,
                                );
        $this->session->unset_userdata($sessiondata);
        $this->session->sess_destroy(); 
        
        
        redirect('http://localhost/BrethrenChurch/index.php/MatrimonyLoginController/login');  
     }  
    
}
?>