<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FamilyMainController extends CI_Controller 
{

  function __Construct()
    {
    parent::__Construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library(array('session', 'form_validation', 'email')); 
    $this->load->database('');
    $this->load->model('memReg_model');
     $this->load->model('relation_model');
                         $this->load->model('church_signup_model');

          $this->load->model('prayer_model');
          
                    $this->load->model('sundayclass_model');

if(! $this->getsession())
            {
                redirect('http://localhost/BrethrenChurch/index.php/LoginController/index','refresh');
            }
    }
//HOME VIEW
    public function home()
    { 
//      $sid=$this->session->userdata('username');
//      $data['result']=$this->memReg_model->getAll($sid);
     $this->load->view('userhome'//,$data
     );
    }
 //VIEW FAMILY PROFILE
    public function viewFamily()
        {
            $s=$this->session->userdata('id');
            //echo $s;
            $query=$this->memReg_model->getDetails($s);
            $data['family']=null;
            if($query)
            {
                $data['family']=$query;
            }
            $data['relation']=$this->relation_model->getRelation();
            $this->load->view('myprofile',$data);
         
        }
         //view single family details
         public function viewFamilyDetails()
	{
                      $id = $this->uri->segment('3'); 

            $this->load->model('memReg_model');
            $s=$this->session->userdata('id');
//            echo $s;
            $query=$this->memReg_model->getLogId($id);
           foreach($query as $ch)
           {
               $hofid=$ch->lid;
               $data['family'] =$this->memReg_model->getChurchFamilyDetails($id);
               $data['member'] =$this->memReg_model->getFamilyDetails($hofid);
           }
           
//         
         $this->load->view('viewFamilyDetails',$data);
	}
//EDIT FAMILY VIEW
        public function editFamilyProfile()
        {
            $s=$this->session->userdata('id');
            //echo $s;
            $query=$this->memReg_model->getDetails($s);
            $data['family']=null;
            if($query)
            {
                $data['family']=$query;
            }
            $data['relation']=$this->relation_model->getRelation();
            $this->load->view('editFamilyProfile',$data);
         
        }
        
        public function verifyMember()
        {
    
    //validate input value with form validation class of codeigniter
   $this->form_validation->set_rules('name', 'Member Name', 'trim|required|min_length[6]|max_length[20]');
    $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
      $this->form_validation->set_rules('dob', 'date of birth', 'trim|required');
       $this->form_validation->set_rules('job', 'Occupation', 'trim|required|min_length[6]|max_length[20]');
         $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[20]');
          $this->form_validation->set_rules('phone', 'Contact No', 'trim|required|min_length[10]|max_length[20]');
            $this->form_validation->set_rules('relation', 'Relation', 'trim|required|min_length[10]|max_length[20]');
      
//          if ($this->form_validation->run() == FALSE)
//        {
//          // $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something Wrong. Please try again ...</div>');
//            redirect('http://BrethrenChurch/index.php/memeberRegistration/index');
//        }
//        else
//        {
            $lid=$this->session->userdata('id');
            $membername = trim($this->input->post('name'));
            $gender = trim($this->input->post('gender'));
            $dob = trim($this->input->post('dob'));
            $occupation = trim($this->input->post('job'));
            $email = trim($this->input->post('email'));
            $phone = trim($this->input->post('phone'));
          
            echo $membername,$gender,$dob,$occupation,
                $email,$phone ,$lid;
       
       
//      $memreg = array(
//          'membername'=>$membername,
//        'dob' => $dob,
//          'gender' => $gender,
//          'occupation' => $occupation,
//          'member_email' => $email,
//          'mem_phone' => $phone,
//          'relation_hof' => $relation,
//          'hofid'=>$hofid,
//          'status'=>1
//              );
//     
//    $this->memReg_model->insertMember($memreg);
    }
       
//  

 //UPDATE PROFILE        
          public function updateProfile()
           {
                $hid=$this->session->userdata('id');
                $famname = trim($this->input->post('famname'));
                $hofname = trim($this->input->post('hofname'));
                $occupation = trim($this->input->post('job'));
                $phone = trim($this->input->post('phone'));
                $h=$this->memReg_model->getLoginid($hid);
                foreach($h as $head)
                {
                    $hofid=$head->hofid;
                    
                }
                $famup = array(
                    //photo edit pnding
          'familyname'=>$famname,
          
          'hofname' => $hofname,
          
          'occupation' => $occupation,
          
          'phone' => $phone,
          
              );
                //echo $hofid;
               // print_r($famup);
                  $this->memReg_model->updateProfile($famup,$hofid);
                  $this->session->set_flashdata('msg', ' <div class="alert alert-success alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Profile Updated!</div>');
            
            redirect('FamilyMainController/viewFamily');
          } 
          
//ADD FAMILY MEMBER-MULTIPLE ENTRY     
          public function add_member() 
          {
            $hid = $this->session->userdata('id');
            $data = array('membername' => trim($this->input->post('mname')),
            'dob' => trim($this->input->post('dob')),
            'occupation' => trim($this->input->post('job')),
            'mem_phone' => trim($this->input->post('contact')),
            'relation_hof' => trim($this->input->post('relation')),
            'member_email' => trim($this->input->post('email')),
            'hofid' => $hid,
            'status' => 1
            );

            $this->memReg_model->addMember($data);
            $this->session->set_flashdata('msg', ' <div class="alert alert-success alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Member Added successfully!</div>');
            redirect('FamilyMainController/viewFamily');
        }
        //VIEW FAMILY MEMBERS
        public function viewMemberFamily()
        {
            $s=$this->session->userdata('id');
//           echo $s;
            $query=$this->memReg_model->getFamilyDetails($s);
//            print_r($query);
//            foreach($query as $q)
//            {
////                echo $q->membername;
//        }
            $data['family']=null;
            if($query)
            {
                $data['family']=$query;
            }
//            $data['relation']=$this->relation_model->getRelation();
            $this->load->view('viewMemberFamily',$data);
         
        }
       //VIEW PRAYER SCHEDULE OF CHURCH
     public function viewChurchPrayers()
        {
            $s=$this->session->userdata('id');
           //echo $s;
            $query=$this->memReg_model->getDetails($s);
            foreach($query as $q)
            {
//            echo $q->chid;
               $prayer=$this->prayer_model->viewPrayerMember($q->chid);
               $data['prayer']=null;
            if($prayer)
            {
                $data['prayer']=$prayer;
            }
//            $data['relation']=$this->relation_model->getRelation();
            $this->load->view('viewPrayerMember',$data);
        }
        
//         
//            

        }
          //view exams by all
        public function viewExamNotifications()
	{
             $d=date("Y-m-d");
            $data['exam']=$this->sundayclass_model->viewExamAll($d);
		$this->load->view('viewExamNotifications',$data);
	}
         // public notification viewed by family
     public function familyNotification()
     {
         $data['notification'] =$this->memReg_model->viewAllNotification();
         $this->load->view('family_public_notif_view',$data);
         
     }
   //view family notification ADDED by admin
  public function viewFamilyNotification()
        {
           $s=$this->session->userdata('id');
//            echo $s;
           $query=$this->memReg_model->getType($s);
           foreach($query as $t)
           {
               $type=$t->type;
           }
//           echo $type; 
//           
          $data['notif'] =$this->memReg_model->viewFamilyNotification($type);
          $this->load->view('viewFamilyNotification',$data);
}
//remove family member
    function remove_member() 
        {
         
         $id = $this->uri->segment('3'); 
         echo $id;
         $this->memReg_model->remove_member($id); 
   
         $query = $this->db->get("tbl_memberprofile"); 
         $data['mp'] = $query->result(); 
//$this->load->view('display_view',$data); 
         redirect('FamilyMainController/viewMemberFamily');
      
        }
        //UPDATES 
        function update_member() 
        {
            $id= $this->uri->segment('3');
//echo $id;
            $data['mp']=$this->memReg_model->update_member_view($id);
//            print_r($data);
            $this->load->view('update_member_view',$data);

        }
         public function updateMemberData()
           {
                $post=$this->input->post();
                
                $id=$post['mpid'];
                echo $id;
              $hid = $this->session->userdata('id');
            $data = array('membername' => trim($this->input->post('mname')),
           
            'occupation' => trim($this->input->post('job')),
            'mem_phone' => trim($this->input->post('phone')),
            
            'member_email' => trim($this->input->post('email')),
            
            );
//print_r($data);
                              $this->memReg_model->updateMemberData($data,$id);

            $this->session->set_flashdata('msg', ' <div class="alert alert-success alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Member Added successfully!</div>');
            redirect('FamilyMainController/viewFamily');
//              
               
          } 
        //change password
    public function change_password()
  {
  $this->load->view('change_password_family');
  }
  public function checkoldpswd()
    {
       if ($this->input->post('oldpassword')) 
                          {
                              $oldpswd = $this->input->post("oldpassword");
                               $uname=$this->session->userdata['family'];
//                               echo $oldpswd,$uname;
                               $n=$this->memReg_model->checkpswd($oldpswd,$uname);
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
                          
                       $this->memReg_model->updatepswd($data,$id);
                //destroy session
                //redirec to login page
             
                   
                          } 
                        
              redirect('LoginController/logout');
    
}

//                          }
//                          
//                          }
                          
                          }
                          //SEARCH
        public function search()
	{
            $this->load->view('family_search_main');
            }
         public function family_search()
	{
                        $data['familyall']  =$this->church_signup_model->getAllFamily();

                        $this->load->view('family_search',$data);

           }
           public function family_church_search()
	{
                        $data['church']  =$this->church_signup_model->getChurchAll();

                        $this->load->view('family_search_church',$data);

           }
           //view through search
public function viewChFamily()
        {
          $id=$this->uri->segment('3');

//           echo $id; 
           
          $data['chfam'] =$this->church_signup_model->viewChurchFamily($id);
          $this->load->view('viewChFamilyDetails',$data);
         // print_r($data);
}
           public function view_searched_church()
	{
            $this->load->model('church_signup_model');
            $s=$this->input->post('search');
//            echo $s;
            $data['churchall']  =$this->church_signup_model->getChurchAll();

            $data['church']  =$this->church_signup_model->getSearchedChurch($s);
//            print_r($data);
             $this->load->view('search_result_church',$data);

           }
        public function view_searched_family()
	{
            $this->load->model('memReg_model');
            $s=$this->input->post('search');
//            echo $s;
                                    $data['familyall']  =$this->church_signup_model->getAllFamily();

            $data['family']  =$this->church_signup_model->getSearchedFamily($s);
//            print_r($data);
                        $this->load->view('family_search_result',$data);

           }
        //
//SESSION
     //check in login controler userdata session set
        public  function getsession()
        {
            if (($this->session->userdata('family')) &&($this->session->userdata('id') )  &&($this->session->userdata('type') )  &&($this->session->userdata('loginuser') ))
            {
                return true;
            }
               else {
     
                return false;
                }
        }
}