<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class LoginController extends CI_Controller
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
          $this->load->model('login_model');
          
     }
     
     function get_session() {//if a user closes window without logout,and after tries to login  
    //display home page,not login page,
         //no need to login again
        if ($this->session->userdata('username')  && $this->session->userdata('$type') 
                && $this->session->userdata('id') && $this->session->userdata('loginuser')) {
            return true;
        } else {
            return false;
        }
    }


     public function index()
     {
         //IS IT REQUIRED TO LOGIN WHEN A SESSION IS ALREADY SET
//         if(isset($_SESSION['username'])) {
//          redirect('HomeController/index');}
    //IS IT REQUIRED TO LOGIN WHEN A SESSION IS ALREADY SET
//    
          //get the posted values
          $username = $this->input->post("txt_username");
          $password = $this->input->post("txt_password");

          //set validations
          $this->form_validation->set_rules("txt_username", "Username", "trim|required");
          $this->form_validation->set_rules("txt_password", "Password", "trim|required");

          if ($this->form_validation->run() == FALSE)
          {
               //validation fails
               $this->load->view('login_view');
               
               
          }
          else
          {
               //validation succeeds
               if ($this->input->post('btn_login') == "Login" && $this->input->post('txt_username')!= '' && $this->input->post('txt_password')!= '' )
               {
                    //check if username and password is correct
                    $usr_result = $this->login_model->get_user($username, $password);
                    print_r($usr_result);
                    $n=sizeof($usr_result);
                    if ($n==1)
                        //active user record is present
                    {
                        foreach($usr_result as $res)
                        //set the session variables
                        {
                            $name=$res->username;
                            $id=$res->lid;
                            $type=$res->type;
                            
                        }
                        if($type==1)
                        {
                          $sessiondata = array(
                              'admin' => $username,
                              'id' => $id,
                              'type' => $type,
                              'loginuser' => TRUE
                         );
                         $this->session->set_userdata($sessiondata);
                         //redirect("http://localhost/project/home");
                          redirect("http://localhost/BrethrenChurch/index.php/AdminController/index");  
                        }
                        else if($type==2)
                          {
                          $sessiondata = array(
//                              'username' => $username,
                              'church' => $username,
                              'id' => $id,
                              'type' => $type,
                              'loginuser' => TRUE
                         );
                         $this->session->set_userdata($sessiondata);
                         //redirect("http://localhost/project/home");
                          redirect("http://localhost/BrethrenChurch/index.php/ChurchController/home");  
                        }
                    
                    else if($type==3)
                          {
                          $sessiondata = array(
                              'family' => $username,
                              'id' => $id,
                              'type' => $type,
                              'loginuser' => TRUE
                         );
                         $this->session->set_userdata($sessiondata);
                         //redirect("http://localhost/project/home");
                          redirect("http://localhost/BrethrenChurch/index.php/FamilyMainController/home");  
                        }
                        else if($type==4)
                          {
                          $sessiondata = array(
                              'evangelist' => $username,
                              'id' => $id,
                              'type' => $type,
                              'loginuser' => TRUE
                         );
                         $this->session->set_userdata($sessiondata);
                         //redirect("http://localhost/project/home");
                          redirect("http://localhost/BrethrenChurch/index.php/EvangelistMainController/home");  
                        }
                        else if($type==5)
                          {
                          $sessiondata = array(
                              'association' => $username,
                              'id' => $id,
                              'type' => $type,
                              'loginuser' => TRUE
                         );
                         $this->session->set_userdata($sessiondata);
                         //redirect("http://localhost/project/home");
                          redirect("http://localhost/BrethrenChurch/index.php/AssociationMainController/index");  
                        }
                        else if($type==6)
                          {
                          $sessiondata = array(
                              'username' => $username,
                              'id' => $id,
                              'type' => $type,
                              'loginuser' => TRUE
                         );
                         $this->session->set_userdata($sessiondata);
                         //redirect("http://localhost/project/home");
                          redirect("http://localhost/BrethrenChurch/index.php/SundaySchoolController/index");  
                        }
                         else if($type==7)
                          {
                          $sessiondata = array(
                              'username' => $username,
                              'id' => $id,
                              'type' => $type,
                              'loginuser' => TRUE
                         );
                         $this->session->set_userdata($sessiondata);
                         //redirect("http://localhost/project/home");
                          redirect("http://localhost/BrethrenChurch/index.php/SundaySchoolController/headindex");  
                        }
                        else if($type==8)
                          {
                          $sessiondata = array(
                              'username' => $username,
                              'id' => $id,
                              'type' => $type,
                              'loginuser' => TRUE
                         );
                         $this->session->set_userdata($sessiondata);
                         //redirect("http://localhost/project/home");
                          redirect("http://localhost/BrethrenChurch/index.php/SundaySchoolController/tutorindex");  
                        }
                    }
                    else
                    {
                         $this->session->set_flashdata('msg', ' <div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Invalid username and password! Check approval with admin</div>');
                         redirect(current_url());
                         
                    }
                 }   
               
               else
               {
                    //redirect('');
                    $this->load->view('login_view');
               }
               }
          
     }
      public function choose()  
     {  
       $this->load->view('choose_register') ; 
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
        
        
        redirect('http://localhost/BrethrenChurch/index.php/LoginController/index');  
     }  
    
}
?>