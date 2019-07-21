<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EvangelistController extends CI_Controller {

  function __Construct()
    {
    parent::__Construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library(array('session', 'form_validation', 'email')); 
    $this->load->database('');
    $this->load->model('evangelist_signup_model');
    }
    public function check_username(){

if(isset($_POST['username']))
{
        $username = trim($this->input->post('username')); 
//        echo $username;
//      $this->load->model('church_signup_model');
      $response=$this->evangelist_signup_model->check_username_availablity($username);
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
      
  public function index()
  {
     
     //$data['churchdata']=$this->evangelist_signup_model->displayChurch();
     $data['statedata']=$this->evangelist_signup_model->displayState();
     $data['districtdata']=$this->evangelist_signup_model->displayDistrict();
     $data['talukdata']=$this->evangelist_signup_model->displayTaluk();
     $data['villagedata']=$this->evangelist_signup_model->displayVillage(); 
        $this->load->view('evangelistRegister',$data,array('error' => ' ' ));
  }


public function verifyEvangelist()
     {
    $config =  array(
                  'upload_path'     => "asset/uploads/evangelist",
                  'allowed_types'   => "jpg|png|jpeg",
//                  'overwrite'       => TRUE,
//                  'max_size'        => "2048000",  // Can be set to particular file size
//                  'max_height'      => "768",
//                  'max_width'       => "1024"  
                );    
		 		$this->load->library('upload', $config);
				if($this->upload->do_upload('userfile'))
				{
                                   
					$data = array('upload_data' => $this->upload->data());
					$this->load->view('upload_success',$data);
				}
				else
				{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('evangelistRegister', $error);
				}  
                                $data = array('upload_data'=>$this->upload->data());
                                $pic=$data['upload_data']['file_name'];
                                $path=$data['upload_data']['full_path'];
                                //echo $path;

     
    //validate input value with form validation class of codeigniter
   
   // $this->form_validation->set_rules('chname', 'Church Name', 'trim|required');
     $this->form_validation->set_rules('evname', 'Evangelist Name', 'trim|required|min_length[3]|max_length[15]');
     $this->form_validation->set_rules('housename', 'House Name', 'trim|required|max_length[25]');
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[8]|max_length[14]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[10]');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
        $this->form_validation->set_rules('confirmpassword', 'trim|Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('ev_email', 'Email', 'trim|required|valid_email|max_length[20]');
            $this->form_validation->set_rules('ev_phone', 'Contact No', 'trim|required|min_length[10]|max_length[20]');
        $this->form_validation->set_rules('state', 'state', 'required');
      $this->form_validation->set_rules('district', 'district', 'required');
            $this->form_validation->set_rules('taluk', 'taluk', 'required');
                  $this->form_validation->set_rules('village', 'village', 'required');
                  $this->form_validation->set_rules('postoffice', 'postoffice', 'trim|required|min_length[5]');
                        $this->form_validation->set_rules('post', 'postal code', 'trim|required|min_length[6]|max_length[6]');
         //                 $this->form_validation->set_rules('userfile', 'hofphoto', 'trim|required');
      
//          if ($this->form_validation->run() == FALSE)
//        {
//          // $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something Wrong. Please try again ...</div>');
//            redirect('http://BrethrenChurch/index.php/memeberRegistration/index');
//        }
//        else
//        {
            $evname = trim($this->input->post('evname'));
           //$chname = $this->input->post('chname');
        $housename = trim($this->input->post('housename'));
         $username=trim($this->input->post('username'));
          $password = trim($this->input->post('password'));
          $passhash = trim(hash('md5', $password));
          $gender = trim($this->input->post('gender'));
//           $dob = trim($this->input->post('dob'));
//           $occupation = trim($this->input->post('occupation'));
          $ev_email = trim($this->input->post('ev_email'));
          $ev_phone = trim($this->input->post('ev_phone'));
          $stateid = $this->input->post('state');
          $districtid = $this->input->post('district');
           $talukid = $this->input->post('taluk');
            $villageid = $this->input->post('village');
             $postalcode = trim($this->input->post('post'));
              $postoffice = trim($this->input->post('postoffice'));
               $ev_photo = trim($this->input->post('pic'));
             //   $membercount = trim($this->input->post('membercount'));
//         echo $evname,$housename,$username,$password,$passhash,$gender,
//                $ev_email,$ev_phone,$stateid,$districtid,$talukid,$villageid,$postalcode,$postoffice ;
         
          //md5 hashing algorithm to decode and encode input password
          //$salt       = uniqid(rand(10,10000000),true);
      //$saltid     = md5($chemail);
  //echo $state;
 

// 
         $login=array(
    'username'=>trim($this->input->post('username')),
    'password'=>trim(md5($this->input->post('password'))),
         'status'=>0,
          'type'=>4
              );
     $logid= $this->evangelist_signup_model->insertlogin($login); 
     //echo $logid;
     
//   
//     
      $evangelistreg = array(
          'evname'=>$evname,
          'villageid' => $villageid,
          'postoffice' => $postoffice,
          'postalcode' => $postalcode,
          'housename' => $housename,
          'gender' => $gender,
            'ev_email' => $ev_email,
          'ev_phone' => $ev_phone,
//          'chnameid'=>$chname,
          'ev_photo'=>$pic,
           'lid'=>$logid,
          'status'=>0
              );
     
    $this->evangelist_signup_model->insertEvangelist($evangelistreg);
      
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
  
    //ajax display district
    public function displays_district() 
    {
        $sid=$this->input->post('state');
        // echo $sid;
           $res1=$this->evangelist_signup_model->district_show($sid);
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
           $res1=$this->evangelist_signup_model->taluk_show($did);
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
           $res1=$this->evangelist_signup_model->village_show($tid);
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
     
//Loading View

     $redirectUrl = '../HomeController/index';
        echo '<script type="application/javascript">alert("Successfully Registered! Login after admin approval"); window.location.href = "'.$redirectUrl.'";</script>';
        redirect('EvangelistController/index',refresh);
            
}

}
