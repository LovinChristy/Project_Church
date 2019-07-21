 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChurchController extends CI_Controller {

  function __Construct()
    {
    parent::__Construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library(array('session', 'form_validation', 'email')); 
    $this->load->database('');
    $this->load->model('church_signup_model');
        $this->load->model('prayer_model');
        $this->load->model('sundayclass_model');
            $this->load->model('memReg_model');
                       $this->load->model('login_model');
                       $this->load->model('notification_model');


     if(! $this->getsession())
            {
                redirect('http://localhost/BrethrenChurch/index.php/LoginController/index','refresh');
            }
    
    } 
    //change password
    public function change_password()
  {
  $this->load->view('change_password_church');
  }
  public function checkoldpswd()
    {
       if ($this->input->post('oldpassword')) 
                          {
                              $oldpswd = $this->input->post("oldpassword");
                               $uname=$this->session->userdata['church'];
//                               echo $oldpswd,$uname;
                               $n=$this->church_signup_model->checkpswd($oldpswd,$uname);
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
                          
                       $this->church_signup_model->updatepswd($data,$id);
                //destroy session
                //redirec to login page
             
                   
                          } 
                        
              redirect('LoginController/logout');
    
}

//                          }
//                          
//                          }
                          
                          }

    //home page
     public function home()
  {
  $this->load->view('homechurch');
  }
  //view church profile
  public function viewChurchProfile()
        {
            $s=$this->session->userdata('id');
            //echo $s;
         $query=$this->church_signup_model->getDetails($s);
         $data['church']=null;
            if($query)
            {
                $data['church']=$query;
            }
         
          $this->load->view('viewChurchProfile',$data);
         
        }
//view family for approval
        public function view_family()
	{
            $this->load->model('memReg_model');
            $s=$this->session->userdata('id');
//            echo $s;
            $query=$this->church_signup_model->getDetails($s);
           foreach($query as $ch)
           {
//               echo $chid=$ch->chid;
               $data['family'] =$this->memReg_model->getChurchFamily($ch->chid);
               
           }
           
//         
         $this->load->view('churchFamilyApproval',$data);
	}
        //view single family details
         public function viewFamily()
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
          //approve family code
         function approve_family() 
        {
         
         $id = $this->uri->segment('3'); 
         $log=$this->memReg_model->getLogid($id); 
         foreach($log as $l)
         {
           $logid=$l->lid;
         $data=array('status'=>1);
          $this->login_model->log_approve_family($logid,$data);
         $this->memReg_model->approve_family($id,$data); 
         redirect('ChurchController/viewChurchFamily');
      }
        }
        public function view_approved_family()
	{
            $this->load->model('memReg_model');
            $s=$this->session->userdata('id');
//            echo $s;
            $query=$this->church_signup_model->getDetails($s);
           foreach($query as $ch)
           {
//               echo $chid=$ch->chid;
               $data['family'] =$this->memReg_model->getApprovedFamily($ch->chid);
               
           }
           
//         
         $this->load->view('churchFamilyApproval',$data);
	}
        function reject_family() 
        {
         $id = $this->uri->segment('3');
         $log=$this->memReg_model->getLogid($id); 
         foreach($log as $l)
         {
           $logid=$l->lid;
           $data=array('status'=>0);
           $this->login_model->log_reject_family($logid,$data); 
            $this->memReg_model->reject_family($id,$data); 
            redirect('ChurchController/view_family');
         }
        }
        public function church_account_add()
        {
            $s=$this->session->userdata('id');
            //echo $s;
            $c=$this->church_signup_model->getLoginid($s);
            foreach($c as $id)
            {
                            $chid= $id->chid;
//                            echo $chid;
           $this->session->set_flashdata('churchid',$chid);

            }
         $query=$this->church_signup_model->getAccountId($chid);
         if($query)
         {
             foreach($query as $st)
            {
                            $stid= $st->st_id;
//                            echo $stid;
                            $this->session->set_flashdata('st',$stid+1);
                            $bal= $st->balance;
//                            echo $bal,$stid;
                             $this->session->set_flashdata('bal',$bal);

            }
         }
         else
         {
             $i=1;
             $b=0;
                 $this->session->set_flashdata('st',$i);
                 $this->session->set_flashdata('bal',$b);


         }
         
          $this->load->view('church_account_add');

        }
        public function addAccount()
     {
    if( $this->input->post('stno')=='' && $this->input->post('chid')==''
            && $this->input->post('stdate')=='' && $this->input->post('cd')==''
            && $this->input->post('amt')==''&& $this->input->post('tsource')==''
            && $this->input->post('bal')=='')
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>All fields are required!</div>');
            redirect('ChurchController/church_account_add');   
    }
    
    else
        {
         $s=$this->input->post('stno');
         $chid=$this->input->post('chid');
         $d=$this->input->post('stdate');
         $cd=$this->input->post('cd');
                  $amt=$this->input->post('amt');
                           $tsource=$this->input->post('tsource');
         $b=$this->input->post('bal');

//         echo $chid."<br>".$d."<br>".$cd."<br>".$amt."<br>".$tsource."<br>".$b;
                     
                     
           }
      if($cd=="c")
      {
          $bal=$b+$amt;
      }
      else
      {
          if($b<0)
          {
              $b=0;
          }
 $bal=$b-$amt;
          
      }
        $data=array('st_id'=>$s,
            'chid'=>$chid,
            'date'=>$d,
            'type'=>$cd,
            'source'=>$tsource,
            'amount'=>$amt,
            'balance'=>$bal,
             
                );
//              $chkPrayer=$this->prayer_model->checkChurchPrayer($prayer,$chid);
//              echo $chkPrayer;
//              if($chkPrayer==0)
//              {
              $this->church_signup_model->addChurchAccount($data);
              $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Statement added</div>');
 redirect('ChurchController/church_account_add');
//              
    }
     public function viewAccount()
	{
            
            $s=$this->session->userdata('id');
//            echo $s;
            $query=$this->church_signup_model->getLoginid($s);
           foreach($query as $ch)
           {
               $chid=$ch->chid;
//               ECHO $chid;
               $data['account'] =$this->church_signup_model->getAccounts($chid);
               
           }
           
//         
         $this->load->view('church_account_view',$data);
	}
       
        //add church prayer
         public function addPrayer()
        {
            $s=$this->session->userdata('id');
            //echo $s;
            $c=$this->church_signup_model->getLoginid($s);
//         $this->church_signup_model->addChurchPrayer();
//         $data['church']=null;
//            if($query)
//            {
//                $data['church']=$query;
//            }
         
          $this->load->view('addChurchPrayer');
         
        }
        
         //add church prayer VERIFY
     public function verifyChurchPrayer()
     {
    if( $this->input->post('txt_prayer')=='' && $this->input->post('txt_day')==''
            && $this->input->post('txt_time')=='' && $this->input->post('txt_venue')==''
            && $this->input->post('txt_description')=='')
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter all fields!</div>');
            redirect('ChurchController/addPrayer');   
    }
    else if($this->input->post('txt_prayer')=='')
    {
        $this->session->set_flashdata('prayermsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Prayer name not entered!</div>');
            redirect('ChurchController/addPrayer'); 
    }
    else if($this->input->post('txt_day')=='')
    {
        $this->session->set_flashdata('daymsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter day!</div>');
            redirect('ChurchController/addPrayer'); 
    }
     else if($this->input->post('txt_time')=='')
    {
        $this->session->set_flashdata('timemsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter time!</div>');
            redirect('ChurchController/addPrayer'); 
    }
     else if($this->input->post('txt_venue')=='')
    {
        $this->session->set_flashdata('venuemsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter Venue of prayer!</div>');
            redirect('ChurchController/addPrayer'); 
    }
     else if($this->input->post('txt_description')=='')
    {
        $this->session->set_flashdata('descriptionmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter Details!</div>');
            redirect('ChurchController/addPrayer'); 
    }
    else
        {
         $s=$this->session->userdata('id');
          //  echo $s;
         $query=$this->church_signup_model->getDetails($s);
           foreach($query as $ch)
           {
               $chid=$ch->chid;
           }
           //echo $chid;
    
           $this->form_validation->set_rules("prayer", "Prayer", "required");
         $this->form_validation->set_rules("day", "Day", "trim|required");
             $this->form_validation->set_rules("time", "Time", "trim|required");
                 $this->form_validation->set_rules("Venue", "Venue", "trim|required");
                     $this->form_validation->set_rules("Description", "Description", "trim|required");
                     
                      $prayer=trim($this->input->post('txt_prayer'));
                     $day=trim($this->input->post('txt_day'));
                     $time=trim($this->input->post('txt_time'));
                     $venue=trim($this->input->post('txt_venue'));
                     $description=trim($this->input->post('txt_description'));
                   //  echo $prayer,$day,$time,$venue,$description;
           }
      
        $data=array('prayername'=>$prayer,
            'day'=>$day,
            'time'=>$time,
            'venue'=>$venue,
            'description'=>$description,
            'chid'=>$chid,
             'status'=>1,
                );
              $chkPrayer=$this->prayer_model->checkChurchPrayer($prayer,$chid);
//              echo $chkPrayer;
              if($chkPrayer==0)
              {
              $this->prayer_model->addChurchPrayer($data);
              $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Church Prayer successfully added</div>');
 redirect('ChurchController/addPrayer');
              }
              else
              {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Church Prayer exists for this church</div>');
 redirect('ChurchController/addPrayer');  
              }
             
            
     }
      public function addChurchEvent()
        {
            $s=$this->session->userdata('id');
            //echo $s;
            $c=$this->church_signup_model->getLoginid($s);
//         $this->church_signup_model->addChurchPrayer();
//         $data['church']=null;
//            if($query)
//            {
//                $data['church']=$query;
//            }
         
          $this->load->view('addChurchEvents');
         
        }
      public function verifyChurchEvents()
     {
    if( $this->input->post('txt_prayer')=='' && $this->input->post('txt_date')==''
            && $this->input->post('txt_venue')==''
            && $this->input->post('txt_description')=='')
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter all fields!</div>');
            redirect('ChurchController/addChurchEvent');   
    }
    else if($this->input->post('txt_prayer')=='')
    {
        $this->session->set_flashdata('prayermsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Prayer name not entered!</div>');
            redirect('ChurchController/addChurchEvent'); 
    }
    else if($this->input->post('txt_day')=='')
    {
        $this->session->set_flashdata('daymsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter day!</div>');
            redirect('ChurchController/addChurchEvent'); 
    }
     
     else if($this->input->post('txt_venue')=='')
    {
        $this->session->set_flashdata('venuemsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter Venue of prayer!</div>');
            redirect('ChurchController/addChurchEvent'); 
    }
     else if($this->input->post('txt_description')=='')
    {
        $this->session->set_flashdata('descriptionmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter Details!</div>');
            redirect('ChurchController/addChurchEvent'); 
    }
    else
        {
         $s=$this->session->userdata('id');
          //  echo $s;
         $query=$this->church_signup_model->getDetails($s);
           foreach($query as $ch)
           {
               $chid=$ch->chid;
           }
           //echo $chid;
    
           $this->form_validation->set_rules("prayer", "Prayer", "required");
         $this->form_validation->set_rules("day", "Day", "trim|required");
             $this->form_validation->set_rules("time", "Time", "trim|required");
                 $this->form_validation->set_rules("Venue", "Venue", "trim|required");
                     $this->form_validation->set_rules("Description", "Description", "trim|required");
                     
                      $prayer=trim($this->input->post('txt_prayer'));
                     $day=trim($this->input->post('txt_day'));
                     $time=trim($this->input->post('txt_time'));
                     $venue=trim($this->input->post('txt_venue'));
                     $description=trim($this->input->post('txt_description'));
                   //  echo $prayer,$day,$time,$venue,$description;
           }
      
        $data=array('prayername'=>$prayer,
            'day'=>$day,
            'time'=>$time,
            'venue'=>$venue,
            'description'=>$description,
            'chid'=>$chid,
             'status'=>1,
                );
//              $chkPrayer=$this->prayer_model->checkChurchPrayer($prayer,$chid);
//              echo $chkPrayer;
//              if($chkPrayer==0)
//              {
              $this->prayer_model->addChurchPrayer($data);
              $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Event successfully posted</div>');
 redirect('ChurchController/addChurchEvent');
//              }
//              else
//              {
               
//              }
             
            
     }
        //EDIT view church profile
        public function editChurchProfile()
        {
            $s=$this->session->userdata('id');
            //echo $s;
            $query=$this->church_signup_model->getDetails($s);
            $data['church']=null;
            if($query)
            {
                $data['church']=$query;
            }
//            $data['relation']=$this->relation_model->getRelation();
            $this->load->view('editChurchProfile',$data);
         
        }
        //UPDATE  EDITED PROFILE        
          public function updateProfile()
           {
                $chid=$this->session->userdata('id');
                $chname = $this->input->post('chname');
                $postoffice = trim($this->input->post('postoffice'));
                $postalcode = trim($this->input->post('postalcode'));
                $chemail = trim($this->input->post('chemail'));
                $secretary = trim($this->input->post('secretary'));
                $c=$this->church_signup_model->getLoginid($chid);
                foreach($c as $ch)
                {
                    $chid=$ch->chid;
                    
                }
                $churchup = array(
                    //photo edit pnding
          'chname'=>$chname,
          
          'postoffice' => $postoffice,
          
          'postalcode' => $postalcode,
          
          'chemail' => $chemail,
                    'secretaryname' => $secretary,
          
              );
                //echo $hofid;
               // print_r($famup);
                  $this->church_signup_model->updateProfile($churchup,$chid);
                  $this->session->set_flashdata('msg', ' <div class="alert alert-success alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Profile Updated!</div>');
            
            redirect('ChurchController/viewChurchProfile');
          } 
          
        
 //update your evangelist RECORDS
        public function EvgAdd()
        {
           $data = array();
            $evquery=$this->church_signup_model->getAllevangelist();
           if ($evquery)
           {
                $data['evrecords'] = $evquery;  
            } 
           
            $this->load->view('chooseEvangelist',$data);
         
        }
        
        //verify evangelist update
        
        public function verifyEvgAdd()
     {
    if( $this->input->post('evangelist')=='' && $this->input->post('year')=='' )
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter all fields!</div>');
            redirect('ChurchController/EvgAdd');   
    }
    else if($this->input->post('evangelist')=='')
    {
        $this->session->set_flashdata('evangelistmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select evangelist!</div>');
            redirect('ChurchController/EvgAdd'); 
    }
    else if($this->input->post('year')=='')
    {
        $this->session->set_flashdata('districtmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>enter year!</div>');
            redirect('ChurchController/EvgAdd'); 
    }  
    else
        {
         $s=$this->session->userdata('id');
            echo $s;
         $query=$this->church_signup_model->getDetails($s);
           foreach($query as $ch)
           {
               $chid=$ch->chid;
           }
           echo $chid;
    }
        
          $this->form_validation->set_rules("evangelist", "Evangelist", "required");
         $this->form_validation->set_rules("year", "Year", "trim|required");
         
        
              
              $this->church_signup_model->updateEvangelist($chid);
              $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Evangelist updated successfully</div>');
 redirect('ChurchController/EvgAdd');
            
            
     }
        // church view notification ADDED frm admin 
  public function viewChurchNotification()
        {
           $s=$this->session->userdata('id');
//            echo $s;
           $query=$this->church_signup_model->getType($s);
           foreach($query as $t)
           {
               $type=$t->type;
           }
//           echo $type; 
//           
          $data['notif'] =$this->church_signup_model->viewChurchNotification($type);
          $this->load->view('viewChurchNotification',$data);
}
    
     //view church evangelist ADDED
  public function viewChurchEvangelist()
        {
           $s=$this->session->userdata('id');
           // echo $s;
           $query=$this->church_signup_model->getDetails($s);
           foreach($query as $ch)
           {
               $chid=$ch->chid;
           }
           //echo $chid; 
           
          $data['evgid'] =$this->church_signup_model->viewChurchEvangelist($chid);
          $this->load->view('viewChurchEvangelist',$data);
}

   //view church FAMILY
  public function viewChurchFamily()
        {
           $s=$this->session->userdata('id');
           // echo $s;
           $query=$this->church_signup_model->getDetails($s);
           foreach($query as $ch)
           {
               $chid=$ch->chid;
           }
           //echo $chid; 
           
          $data['chfam'] =$this->church_signup_model->viewChurchFamily($chid);
          $this->load->view('viewChurchFamily',$data);
         // print_r($data);
}
//view through search
public function viewChFamily()
        {
          $id=$this->uri->segment('3');

//           echo $id; 
           
          $data['chfam'] =$this->church_signup_model->viewChurchFamily($id);
          $this->load->view('viewChFamily',$data);
         // print_r($data);
}

//notification btwn church and family
  public function view_churchnotification()
        {
           $s=$this->session->userdata('id');
           // echo $s;
           $query=$this->church_signup_model->getDetails($s);
           foreach($query as $ch)
           {
               $chid=$ch->chid;
           }
           //echo $chid; 
           
          $data['chfam'] =$this->church_signup_model->viewChurchFamily($chid);
          $this->load->view('viewChurchFamily',$data);
         // print_r($data);
}

//view church prayers ADDED
 public function view_church_prayer()
        {
           $s=$this->session->userdata('id');
           // echo $s;
           $query=$this->church_signup_model->getDetails($s);
           foreach($query as $ch)
           {
               $chid=$ch->chid;
           }
           //echo $chid; 
           
          $data['chprayer'] =$this->prayer_model->viewChurchPrayer($chid);
          $this->load->view('viewChurchPrayer',$data);
         // print_r($data);
}
          //UPDATES 
        function update_prayer() 
        {
            $id= $this->uri->segment('3');
echo $id;
            $data['prayer']=$this->church_signup_model->update_prayer_view($id);
            $this->load->view('update_prayer_view',$data);

        }
         public function verifyUpdatePrayer()
     {
//       
        
         $s=$this->session->userdata('id');
//            echo $s;
         $query=$this->church_signup_model->getDetails($s);
           foreach($query as $ch)
           {
               $chid=$ch->chid;
           }
           //echo $chid;
    
           $this->form_validation->set_rules("prayer", "Prayer", "required");
         $this->form_validation->set_rules("day", "Day", "trim|required");
             $this->form_validation->set_rules("time", "Time", "trim|required");
                 $this->form_validation->set_rules("Venue", "Venue", "trim|required");
                     $this->form_validation->set_rules("Description", "Description", "trim|required");
                     $chprayer_id=trim($this->input->post('id'));
                      $prayer=trim($this->input->post('txt_prayer'));
                     $day=trim($this->input->post('txt_day'));
                     $time=trim($this->input->post('txt_time'));
                     $venue=trim($this->input->post('txt_venue'));
                     $description=trim($this->input->post('txt_description'));
//                     echo $chprayer_id,$prayer,$day,$time,$venue,$description;
           
      
        $data=array('prayername'=>$prayer,
            'day'=>$day,
            'time'=>$time,
            'venue'=>$venue,
            'description'=>$description,
           
                );
//             
              
              
                $this->church_signup_model->update_prayer_church($data,$chprayer_id);
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Event successfully updated</div>');
 redirect('ChurchController/view_church_prayer');
              
//        
     }
     function delete_prayer() 
        {
         
         $id = $this->uri->segment('3'); 
         $this->church_signup_model->delete_prayer_church($id); 
   
         $query = $this->db->get("tbl_chprayer"); 
         $data['prayer'] = $query->result(); 
//$this->load->view('display_view',$data); 
          $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Event deleted</div>');
 
         redirect('ChurchController/view_church_prayer');
      
        }
//add sunday school head
public function addHead()
        {
           $s=$this->session->userdata('id');
           // echo $s;
           $query=$this->church_signup_model->getDetails($s);
           foreach($query as $ch)
           {
               $chid=$ch->chid;
           }
           //echo $chid; 
           
          $data['chfam'] =$this->church_signup_model->viewChurchFamily($chid);
          $this->load->view('addSundaySchoolHead',$data);
         // print_r($data);
}
//VERIFY ADDED SCHOOL HEAD
 public function verifyHead()
     {
    if( $this->input->post('year')=='' && $this->input->post('head')=='')
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter all fields!</div>');
            redirect('ChurchController/addHead');   
    }
    else if($this->input->post('year')=='')
    {
        $this->session->set_flashdata('yearmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select year!</div>');
            redirect('ChurchController/addHead'); 
    }
    else if($this->input->post('head')=='')
    {
        $this->session->set_flashdata('headmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select member as head!</div>');
            redirect('ChurchController/addHead'); 
    }
     
    else
        {
         $s=$this->session->userdata('id');
          //  echo $s;
         $query=$this->church_signup_model->getDetails($s);
           foreach($query as $ch)
           {
               $chid=$ch->chid;
           }
           //echo $chid;
    
           $this->form_validation->set_rules("year", "Year", "required");
         $this->form_validation->set_rules("head", "Head", "trim|required");
      
                      $year=trim($this->input->post('year'));
                     $head=trim($this->input->post('head'));
                     
                    
                   //  echo $prayer,$day,$time,$venue,$description;
           }
      $query=$this->church_signup_model->getFamilyHead($head);
     foreach($query as $u)
     {
         $user=$u->hofname;
         $logid=$u->lid;
         $eid=$u->hofemail;
     }
     $query1=$this->church_signup_model->getUsername($logid);
     foreach($query1 as $n)
     {
         $username=$n->username;
         
     }
     echo $username;
     //    sending email to $username
     
     $from_email = "bcm@ajce.ind.in";  //cpanel mail create mail and password
         $to_email = $eid; 
   
          $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
  echo $ps=implode($pass);
 $usr = $this->login_model->get_pass($to_email,$ps);
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'LOVIN ANN'); 
         $this->email->to($to_email);
         $this->email->subject('Sunday School Head '); 
         $this->email->message("You are appointed as head. Use your username and the given password for Login."."Your password is $ps"); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
         $passhash = hash('md5', $ps);
//         echo $passhash;
        $login=array('username'=>$username,
            'password'=>$ps,
            'type'=>7,
             'status'=>1,
                );
        $lid=$this->church_signup_model->loginHead($login);
        $school= array('head'=>$user ,
            'year'=>$year,
            'chid'=>$chid,
            'lid'=>$lid,
                'status'=>1
                );
        $this->church_signup_model->addSchoolHead($school);
      $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>User added</div>');
 redirect('ChurchController/addHead');
              
            
     }
      public function viewHeadFamily(){

if(isset($_POST['head']))
{
        $hofid = $this->input->post('head'); 
//        echo $hofid;
//      $this->load->model('church_signup_model');
      $response=$this->church_signup_model->getHeadFamily($hofid);
if($response)
 {
    foreach($response as $r){
          echo  $r->familyname."fff";

    }
 }
 else
 {
 // echo "OK";
 }  
    }
    
}
     //view sunday school records-PRINCIPAL & HEAD & YEAR
    
     public function viewSchoolRecords()
        {
            $s=$this->session->userdata('id');
//            echo $s;
         $query=$this->sundayclass_model->viewPrincipal();
         $data['p']=null;
            if($query)
            {
                $data['p']=$query;
            }
            $chid=$this->church_signup_model->getLoginid($s);
            foreach($chid as $c)
            {
//                echo $c->chid;
                $chead=$this->church_signup_model->viewHead($c->chid);
                foreach($chead as $ch)
                {
//                        echo $ch->head;
                }
//                    
                   $data['h']=null;
//
                      if($chead)
            {
                $data['h']=$chead;
            }
//         
          $this->load->view('viewSchoolRecord',$data);
               
//         
            }
         
         
        }
         // public notification view by church
     public function churchNotification()
     {
         $data['notification'] =$this->church_signup_model->viewAllNotification();
         $this->load->view('viewNotificationChurch',$data);
         
     }
     //NOTIFICATION CHURCH ADDS
     public function addChurchNotification()
     {
          $this->load->view('addChurchNotification');
         
     } 
     
     //CHURCH added notif verification
      public function verifyNotificationfromChurch()
     {
         if(!strlen(trim($_POST['txt_notification'])) && $this->input->post('txt_title')=='')
         {
              $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter notification field!</div>');
            redirect('ChurchController/addChurchNotification');  
         }
         else if($this->input->post('txt_title')=='')
    {
        $this->session->set_flashdata('titlemsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter title!</div>');
            redirect('ChurchController/addChurchNotification'); 
    }
    else if($this->input->post('txt_notification')=='')
    {
        $this->session->set_flashdata('textarea', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter something!</div>');
            redirect('ChurchController/addChurchNotification'); 
    }  
         else
         {
              $sestype=$this->session->userdata('type');
//              echo $sestype;
              $title=trim($this->input->post('txt_title'));
              $notification=trim($this->input->post('txt_notification'));
              $res['to'] =$this->input->post('to');
//              print_r($res);
              $count_res = sizeof($res['to']);
    echo $count_res;
for($i=0;$i<($count_res);$i++)
              {
            $to = $res['to'][$i];
 $data=array('title'=>$title,
                 'notification'=>$notification,
                  'nfrom'=>$sestype,
                  'nto'=>$to,
        'dateposted'=>date("Y-m-d"), //current date adds
                  'status'=>1);  
                $this->notification_model->insert_notification($data);
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Notification posted successfully</div>');
}
sendsms( '8113025358', 'test message' );
                    redirect('ChurchController/addChurchNotification');
         
         }
       }
       
           // church notification view by church
     public function view_notif_church_sent()
     {
         $id =$this->session->userdata('id');
         $data['notification'] =$this->notification_model->viewChurchnotification($id);
         $this->load->view('view_notif_church_sent',$data);
         
     }
     // church notification view by any church
     public function view_notif_church_posted()
     {
         $data['notification'] =$this->notification_model->viewNotification_fromChurch();
         $this->load->view('view_notif_church_posted',$data);
         
     }
     
     
                  //UPDATES 
        function update_notification() 
        {
            $id= $this->uri->segment('3');
//echo $id;
            $data['notification']=$this->notification_model->update_notification_view($id);
            $this->load->view('update_notif_view',$data);

        }
        
//UPDATE VERIFICATION FOR NOTIFICATION ADD BY ADMIN
 public function verifyUpdateNotification()
     {
//         if(!strlen(trim($_POST['textarea'])))
//         {
//              $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
//            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter notification field!</div>');
//            redirect('AdminController/update_notification');  
//         }
//         
//    else if($this->input->post('notification')=='')
//    {
//        $this->session->set_flashdata('notification', '<div class="alert alert-danger alert-dismissable fade in text center">
//            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter something!</div>');
//            redirect('NotificationController/update_notification'); 
//    }  
//         else
//         {
              $title=trim($this->input->post('title'));
              $notification=trim($this->input->post('notification'));
              $data=array(
                 'notification'=>$notification,
                  'dateposted'=>date("Y-m-d"), //current date adds
                  );  
                $this->notification_model->update_notification_admin($data,$title);
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Notification updated successfully</div>');
                redirect('AdminController/view_notification');
//         }
         
     }
     //DELETE BY ADMIN
        function delete_notification() 
        {
         
         $id = $this->uri->segment('3'); 
         $this->notification_model->delete_notification($id); 
   
         $query = $this->db->get("tbl_notification"); 
         $data['notification'] = $query->result(); 
//$this->load->view('display_view',$data); 
         redirect('AdminController/view_notification');
      
        }
       
        
         //SET STATUS 1 BT NO REMOVAL FROM TABLE     
        function enable_notification() 
        {
         
         $id = $this->uri->segment('3'); 
         $data=array('status'=>1);
         $this->notification_model->enable_notification($id,$data); 
         redirect('AdminController/view_notification');
      
        }
        //status update to 0; NO PUBLIC VIEW
        function hide_notification() 
        {
         $id = $this->uri->segment('3');
         $data=array('status'=>0);
         $this->notification_model->hide_notification($id,$data); 
         redirect('AdminController/view_notification');
      
        }
        //
        //SEARCH
        public function church_search_main()
	{
            $this->load->view('church_search_main');
            }
         public function church_family_search()
	{
                        $data['familyall']  =$this->church_signup_model->getAllFamily();

                        $this->load->view('church_search',$data);

           }
           public function church_search()
	{
                        $data['church']  =$this->church_signup_model->getChurchAll();

                        $this->load->view('church_search_church',$data);

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
                        $this->load->view('search_result',$data);

           }
        //
        //SESSION
  public  function getsession()
        {
            if (($this->session->userdata('church')) &&($this->session->userdata('id') ) &&($this->session->userdata('type') ) &&($this->session->userdata('loginuser') ))
            {
                return true;
            }
               else {
     
                return false;
                }
        
                }
               }
        