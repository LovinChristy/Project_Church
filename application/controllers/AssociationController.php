<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AssociationController extends CI_Controller {

  function __Construct(){
    parent::__Construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library(array('session', 'form_validation', 'email')); 
    $this->load->database('');
   $this->load->model('association_signup');
    
     
    }  
  public function index()
  {
     $this->load->view('associationRegister');
  }
 
public function check_username(){

if(isset($_POST['username']))
{
        $username = trim($this->input->post('username')); 
//        echo $username;
//      $this->load->model('church_signup_model');
      $response=$this->association_signup->check_username_availablity($username);
if($response>0)
 {
  echo  $username." is used ! Try another";
 }
 else
 {
 // echo "OK";
 }  
    }
    
}
public function verifyAssociation()
     {
     
    //validate input value with form validation class of codeigniter
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>'); // Displaying Errors in Div
        $this->form_validation->set_rules('asname', 'Association Name', 'trim|required|min_length[3]|max_length[15]');
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[8]|max_length[14]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[10]');
        $this->form_validation->set_rules('confirmpassword', 'trim|Password Confirmation', 'required|matches[password]');
    
      
//          if ($this->form_validation->run() == FALSE)
//        {
//          // $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something Wrong. Please try again ...</div>');
//            redirect('http://BrethrenChurch/index.php/memeberRegistration/index');
//        }
//        else
//        {
            $asname = trim($this->input->post('asname'));
           $username=trim($this->input->post('username'));
          $password = trim($this->input->post('password'));
          $passhash = trim(hash('md5', $password));
          
//               $hofphoto = trim($this->input->post('hofphoto'));
             //   $membercount = trim($this->input->post('membercount'));
         echo  $asname,$username,$password,$passhash;
         
          //md5 hashing algorithm to decode and encode input password
          //$salt       = uniqid(rand(10,10000000),true);
      //$saltid     = md5($chemail);
  //echo $state;
 

         $login=array(
    'username'=>trim($this->input->post('username')),
    'password'=>trim(md5($this->input->post('password'))),
         'status'=>0,
          'type'=>5
              );
     $logid= $this->association_signup->insertlogin($login); 
//     //echo $logid;
    
      $associationreg = array(
          'lid'=>$logid,
          'assoname'=>$asname,
           'status'=>0
              );
     
    $this->association_signup->insertAssociation($associationreg);
        echo "<script>alert(' Successfully Registered! Wait for admin approval to login ');</script>";

      
      /*{
        if($this->sendemail($chemail, $saltid))
        {
          // successfully sent mail to user email
                    $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Please confirm the mail sent to your email id to complete the registration.</div>');
                    redirect("IndexController/index");
                   // $this->load->view('login_view');
        }
        else
        {
          $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Please try again ...</div>');
                    redirect("IndexController/index");
          //$this->load->view('signup');
                }
      }
      else
      {
        $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something Wrong. Please try again ...</div>');
                    redirect("IndexController/index");
       //$this->load->view('signup');
      }
        }
      
  }
  function sendemail($chemail,$saltid){
    // configure the email setting
    $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name
        $config['smtp_port'] = '465'; //smtp port number
        $config['smtp_user'] = 'codesquery@gmail.com';
        $config['smtp_pass'] = '********'; //$from_email password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; //use double quotes
        $this->email->initialize($config);
        $url = Signup_Controller/index."signup/confirmation/".$saltid;
     $this->email->from('codesquery@gmail.com', 'CodesQuery');
    $this->email->to($email);  
    $this->email->subject('Please Verify Your Email Address');
    $message = "<html><head><head></head><body><p>Hi,</p><p>Thanks for registration with CodesQuery.</p><p>Please click below link to verify your email.</p>".$url."<br/><p>Sincerely,</p><p>CodesQuery Team</p></body></html>";
    $this->email->message($message);
    return $this->email->send();
    }
    public function confirmation($key)
    {
      if($this->signup_model->verifyemail($key))
      {
        $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your Email Address is successfully verified!</div>');
            redirect("IndexController/index");
         //$this->load->view('home');
      }
      else
      {
        $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Your Email Address Verification Failed. Please try again later...</div>');
           // redirect(base_url());
        //$this->load->view('signup');
        redirect("IndexController/index");*/
      //}
    }
 
// public function check_username_availablity(){
//      $this->load->model('memreg_model');
//      $get_result = $this->memreg_model->check_username_availablity();
//
//        if(!$get_result )
//            echo '<span style="color:#f00">Username already in use. </span>';
//        else
//            echo '<span style="color:#00c">Username Available</span>';
//    }
  
     public function welcome()
    {
     
//Loading View
   $redirectUrl = '../HomeController/index';
        echo '<script type="application/javascript">alert("Successfully Registered! Login after admin approval"); window.location.href = "'.$redirectUrl.'";</script>';   redirect('RegisterController/index',refresh);
        
    // $this->session->set_flashdata($data,'<div class="alert alert-success text-center">successfully registered.Login!!</div>');
           
}

}
