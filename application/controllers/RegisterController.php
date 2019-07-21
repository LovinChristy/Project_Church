<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

  function __Construct()
    {
    parent::__Construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library(array('session', 'form_validation', 'email')); 
    $this->load->database('');
    $this->load->model('church_signup_model');

    
    }  
  public function index()
  {
    $data['records']=$this->church_signup_model->displayState();
    $this->load->view('register_view',$data);
  }
   
public function verifyChurch()
     {

//   if($this->input->post('btnsubmit'))
//{
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    $this->form_validation->set_rules('chname', 'Church Name', 'trim|required|min_length[5]|max_length[40]');
    $this->form_validation->set_rules('sname', 'State', 'required');
     $this->form_validation->set_rules('district', 'District', 'required');
      $this->form_validation->set_rules('taluk', 'Taluk', 'required');
       $this->form_validation->set_rules('village', 'Village', 'required');
        $this->form_validation->set_rules('post', 'Postal code', 'trim|required|min_length[6]');
         $this->form_validation->set_rules('postoffice', 'Post office', 'trim|required|min_length[5]');
     $this->form_validation->set_rules('secname', 'Secretary Name', 'trim|required|min_length[3]|max_length[20]');
    $this->form_validation->set_rules('chemail', 'Email', 'trim|required|valid_email|max_length[30]');
    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[8]|max_length[15]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[15]');
        $this->form_validation->set_rules('confirmpassword', 'trim|Password Confirmation', 'required|matches[password]');
//}   
        //$this->form_validation->set_message('is_unique', 'This %s is already exits');*/
          if ($this->form_validation->run() == FALSE)
        {
//             echo "error";
             echo validation_errors(); 
             echo "<a href='../RegisterController/index'>Return to registration page</a>";

//            redirect('RegisterController/index');
        }
        else
        {
         
          $chname = trim($this->input->post('chname'));
         $stateid = $this->input->post('sname');
          $districtid = $this->input->post('district');
           $talukid = $this->input->post('taluk');
            $villageid = $this->input->post('village');
             $postalcode = trim($this->input->post('post'));
              $postoffice = trim($this->input->post('postoffice'));
          $sname = trim($this->input->post('secname'));
          $chemail = trim($this->input->post('chemail'));
          $username=trim($this->input->post('username'));
          $password = trim($this->input->post('password'));
          $passhash = hash('md5', $password);
          
          
//         echo $chname."<br>".$stateid."<br>".$districtid."<br>".$talukid."<br>".$villageid."<br>".
//                 $postalcode."<br>".$postoffice."<br>".$sname."<br>".$chemail."<br>".$username."<br>".$password."<br>".$passhash;
         
          //md5 hashing algorithm to decode and encode input password
          //$salt       = uniqid(rand(10,10000000),true);
      //$saltid     = md5($chemail);
  //echo $state;
 
//$query = $this->church_signup_model->getUser($username);  
//                $status ="true";  
//                if($query){
//   $status = "false";
//  }                
//                echo $status; 
          
  $chkuser=$this->church_signup_model->checkUser($username,$passhash);

  $chkchurch=$this->church_signup_model->checkChurch($chname);
////  echo $chkuser;
////  echo $chkchname;//  echo $chkchurch;
 if ($chkuser== 0 && $chkchurch == 0)  //active user record is not present
           {
              
         $login=array(
    'username'=>trim($this->input->post('username')),
    'password'=>trim(md5($this->input->post('password'))),
         'status'=>0,
          'type'=>2
              );
     $logid= $this->church_signup_model->insertlogin($login); 
//     //echo $logid;
//    
//     
      $chreg = array(
          
          'chname'=>$chname,
              'villageid' => $villageid,
          'postoffice'=> $postoffice,
          'postalcode'=> $postalcode,
           'chemail' => $chemail,
           'secretaryname' => $sname,
             'lid'=>$logid,
          'status'=>0
          );
     
        $this->church_signup_model->insertChurch($chreg);
    }
    else
    {
        //redirect('RegisterController/index');
     $redirectUrl = 'index';
     echo '<script type="application/javascript">alert("Already Registered! Login with your username and password"); window.location.href = "'.$redirectUrl.'";</script>';   redirect('RegisterController/index',refresh);
        
    }
      
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
      if($this->church_signup_model->verifyemail($key))
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
     // }
    
 
}
    }
     public function check_username(){

if(isset($_POST['username']))
{
        $username = trim($this->input->post('username')); 
//        echo $username;
//      $this->load->model('church_signup_model');
      $response=$this->church_signup_model->check_username_availablity($username);
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
    //ajax display district
    public function displays_district() 
    {
        $sid=$this->input->post('sname');
        // echo $sid;
           $res1=$this->church_signup_model->district_show($sid);
           print_r($res1);
           $data=array();
           if($res1){
                $data['records_dist']=$res1;
            foreach ($data['records_dist'] as $row)
            {
	     ?>
            <option value="<?php echo $row->distid;?>">
            <?php
		 echo $row->district;?></option>
	
		<?php	
            }
	
        }
    }
     public function displays_taluk() 
    {
        $did=$this->input->post('district');
        // echo $sid;
           $res1=$this->church_signup_model->taluk_show($did);
           print_r($res1);
           $data=array();
           if($res1){
                $data['records_tal']=$res1;
            foreach ($data['records_tal'] as $row)
            {
	     ?>
            <option value="<?php echo $row->talukid;?>">
            <?php
		 echo $row->taluk;?></option>
	
		<?php	
            }
	
        }
    }
    
    public function displays_village() 
    {
        $tid=$this->input->post('taluk');
        // echo $sid;
           $res1=$this->church_signup_model->village_show($tid);
           print_r($res1);
           $data=array();
           if($res1){
                $data['records_vil']=$res1;
            foreach ($data['records_vil'] as $row)
            {
	     ?>
            <option value="<?php echo $row->villageid;?>">
            <?php
		 echo $row->village;?></option>
	
		<?php	
            }
	
        }
    }
  
     public function welcome()
    {
        $redirectUrl = '../HomeController/index';
        echo '<script type="application/javascript">alert("Successfully Registered! Login after admin approval"); window.location.href = "'.$redirectUrl.'";</script>';   redirect('RegisterController/index',refresh);
        
     //redirect('LoginController/index'); 
    // $this->session->set_flashdata($data,'<div class="alert alert-success text-center">successfully registered.Login!!</div>');
           
    }

}
