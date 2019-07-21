    <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class DistrictController extends CI_Controller
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
          $this->load->model('district_model');
           if(! $this->getsession())
            {
                redirect('http://localhost/BrethrenChurch/index.php/LoginController/index','refresh');
            }
     }

     public function index()
     {
      $data = array();
     $query = $this->district_model->getAllStates();
    if ($query){
        $data['records'] = $query;  
    }    
    $this->load->view('addDistrict',$data);   
         
        
    
}
public function verifyDistrict()
     {
    if( $this->input->post('state')=='' && $this->input->post('txt_district')=='' )
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter all fields!</div>');
            redirect('DistrictController/index');   
    }
    else if($this->input->post('state')=='')
    {
        $this->session->set_flashdata('statemsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select state!</div>');
            redirect('DistrictController/index'); 
    }
    else if($this->input->post('txt_district')=='')
    {
        $this->session->set_flashdata('districtmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select state!</div>');
            redirect('DistrictController/index'); 
    }  
    else
        {
         $state=$this->input->post('state');
         // echo $state;
       $district=$this->input->post('txt_district');
        // echo $district;
    }
        
          $this->form_validation->set_rules("state", "state", "required");
         $this->form_validation->set_rules("txt_district", "district", "trim|required");
         
         $chkdistrict=$this->district_model->checkDistrict($district);
        echo $chkdistrict;
         if ($chkdistrict==0 )  //active user record is not present
           {
              
              $this->district_model->insert_district();
              $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>District added successfully</div>');
 redirect('AdminController/view_district');
            }
            else
            {
                  $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>District already exist!</div>');
                         redirect('DistrictController/index');
              
                
            }
     }
     //SET STATUS 1 BT NO REMOVAL FROM TABLE     
        function enable_district() 
        {
         
         $id = $this->uri->segment('3'); 
         $data=array('status'=>1);
         $this->district_model->enable_district($id,$data); 
         redirect('AdminController/view_district');
      
        }
        //status update to 0; NO PUBLIC VIEW
        function disable_district() 
        {
         $id = $this->uri->segment('3');
         $data=array('status'=>0);
         $this->district_model->disable_district($id,$data); 
         redirect('AdminController/view_district');
      
        }
        //DELETE BY ADMIN
        function delete_district() 
        {
         
         $id = $this->uri->segment('3'); 
         $this->district_model->delete_district($id); 
    
//$this->load->view('display_view',$data); 
         redirect('AdminController/view_district');
      
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
     
