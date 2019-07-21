
        <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MatrimonyHomeController extends CI_Controller {
function __Construct(){
    parent::__Construct();
	$this->load->helper(array('form', 'url'));
    $this->load->library(array('session', 'form_validation', 'email')); 
    $this->load->database('');
     $this->load->model('matrimony_model');
    
          $this->load->helper('html');
          
         if(! $this->getsession())
            {
                redirect('http://localhost/BrethrenChurch/index.php/MatrimonyLoginController/login','refresh');
            }
    }
      
  public function matrimonyHome()
	{
//	$this->load->view('matri_login');
             	$this->load->view('matrimonyHomePage');

        
        }
     public function search()
	{
//	$this->load->view('matri_login');
             	$this->load->view('searchProfile');

        
        }
        public function matriProfile()
	{
            $id=$this->session->userdata('id');
                $data['profile'] = $this->matrimony_model->profileView($id);
             	$this->load->view('matriProfile',$data);

        
        }
         public function groomProfileView()
	{
              $id=$this->session->userdata('id');
             	$data['groom'] = $this->matrimony_model->groomProfileView($id);
             $this->load->view('groomProfile',$data);

        }
         public function brideProfileView()
	{
                         $id=$this->session->userdata('id');
                         

                $data['bride'] = $this->matrimony_model->brideProfileView($id);
             	$this->load->view('brideProfile',$data);

        
        }
         public function send_mail() { 
         $from_email = "bcm@ajce.ind.in";  //cpanel mail create mail and password
        echo $to_email = $this->input->post('email'); 
  
// $usr = $this->login_model->get_pass($to_email,$ps);
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'LOVIN ANN'); 
         $this->email->to($to_email);
         $this->email->subject('Profile Interest'); 
         $this->email->message("ID number $id is interested in your profile.Send interest back if are too interested."); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
         $this->load->view('searchProfile'); 
      } 

        //SESSION
        public  function getsession()
        {
            if (($this->session->userdata('username')) &&($this->session->userdata('id')  ))
            {
                return true;
            }
               else {
     
                return false;
                }
        }
      
     
     
      
    
}
?>