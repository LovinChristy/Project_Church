<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AssociationMainController extends CI_Controller {

  function __Construct(){
    parent::__Construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library(array('session', 'form_validation', 'email')); 
    $this->load->database('');
   $this->load->model('association_signup');
    if(!$this->getsession())
            {
                redirect('http://localhost/BrethrenChurch/index.php/LoginController/index','refresh');
            }
     
    }
     public function change_password()
  {
  $this->load->view('change_password_association');
  }
  public function checkoldpswd()
    {
       if ($this->input->post('oldpassword')) 
                          {
                              $oldpswd = $this->input->post("oldpassword");
                               $uname=$this->session->userdata['association'];
//                               echo $oldpswd,$uname;
                               $n=$this->association_signup->checkpswd($oldpswd,$uname);
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
                          
                       $this->association_signup->updatepswd($data,$id);
                //destroy session
                //redirec to login page
             
                   
                          } 
                        
              redirect('LoginController/logout');
    
}

//                          }
//                          
//                          }
                          
                          }
    public function index()
  { 
     $this->load->view('home_association');
  }
  public function viewAssociation()
        {
            $s=$this->session->userdata('id');
            //echo $s;
         $query=$this->association_signup->getDetails($s);
         $data['asso']=null;
            if($query)
            {
                $data['asso']=$query;
            }
         
          $this->load->view('associationProfile',$data);
         
        }
        //EDIT Association VIEW
        public function editAssociationProfile()
        {
            $s=$this->session->userdata('id');
            //echo $s;
            $query=$this->association_signup->getDetails($s);
            $data['association']=null;
            if($query)
            {
                $data['association']=$query;
            }
//            $data['relation']=$this->relation_model->getRelation();
            $this->load->view('editAssociationProfile',$data);
         
        }
        //UPDATE PROFILE        
          public function updateProfile()
           {
                $lid=$this->session->userdata('id');
                $assoname = trim($this->input->post('asname'));
                $president = trim($this->input->post('president'));
                $secretary = trim($this->input->post('secretary'));
                $treasurer = trim($this->input->post('treasurer'));
                $aid=$this->association_signup->getLoginid($lid);
               // echo $aid;
                foreach($aid as $asid)
                {
                    $assoid=$asid->association_id;
                    echo $assoid;;
                    
               
                $assoup = array(
                    //photo edit pnding
          'assoname'=>$assoname,
          
          'president' => $president,
          
          'secretary' => $secretary,
          
          'treasurer' => $treasurer,
          
              );
                //echo $hofid;
//                print_r($assoup);
                  $this->association_signup->updateProfile($assoup,$assoid);
                  $this->session->set_flashdata('msg', ' <div class="alert alert-success alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Profile Updated!</div>');
            
            redirect('AssociationMainController/viewAssociation');
          }  }
           public function addEvents()
  { 
     $this->load->view('addEvents');
  }
    public function newEvent()
           {
                $lid=$this->session->userdata('id');
                echo $lid;
                $asid=$this->association_signup->getLoginid($lid);
                foreach($asid as $aid)
                {
                     $id=$aid->association_id;
                }
                echo $id;
               
                $event = trim($this->input->post('event'));
                $theme = trim($this->input->post('theme'));
                $date1 = trim($this->input->post('datepicker1'));
                $date2 = trim($this->input->post('datepicker2'));
                $venue= trim($this->input->post('venue'));
                echo $event,$theme,$date1,$date2,$venue;
//                
                $assoevent = array(
                   
          'eventname'=>$event,
          'assoid'=>$id,
          'datefrom' => $date1,
          
          'dateto' => $date2,
          
          'theme' => $theme,
          'venue' => $venue,
          
              );
//                //echo $hofid;
////                print_r($assoup);
                  $this->association_signup->eventAdd($assoevent);
                  $this->session->set_flashdata('msg', ' <div class="alert alert-success alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Event added!</div>');
            
            redirect('AssociationMainController/addEvents');
//          } 
          }
           public function asso_view_events()
     {
               $lid=$this->session->userdata('id');
//                echo $lid;
                $asid=$this->association_signup->getLoginid($lid);
                foreach($asid as $aid)
                {
                     $id=$aid->association_id;
                }
//                echo $id;
         $data['evt'] =$this->association_signup->viewEvent($id);
         $this->load->view('asso_event_added',$data);
         
     }
     // public notification viewed by asso
     public function associationNotification()
     {
         $data['notification'] =$this->association_signup->viewAllNotification();
         $this->load->view('viewNotificationChurch',$data);
         
     }
   //view asso notification ADDED frm admin
  public function viewAssociationNotification()
        {
           $s=$this->session->userdata('id');
//            echo $s;
           $query=$this->association_signup->getType($s);
           foreach($query as $t)
           {
               $type=$t->type;
           }
//           echo $type; 
//           
          $data['notif'] =$this->association_signup->viewAssociationNotification($type);
          $this->load->view('viewFamilyNotification',$data);
}
  public  function getsession()
        {
            if (($this->session->userdata('association')) &&($this->session->userdata('id') )  &&($this->session->userdata('loginuser') ))
            {
                return true;
            }
               else {
     
                return false;
                }
        }
        }