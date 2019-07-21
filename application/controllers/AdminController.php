<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
function __construct(){
        parent::__construct();
        $this->load->model('church_signup_model');
        $this->load->model('evangelist_signup_model');
        $this->load->model('association_signup');
         $this->load->model('memReg_model');
        $this->load->model('country_model');
        $this->load->model('state_model');
        $this->load->model('district_model');
        $this->load->model('taluk_model');
        $this->load->model('village_model');
        $this->load->model('relation_model');
        $this->load->model('notification_model');
         $this->load->model('feed_model');
         $this->load->library('session'); 
         $this->load->model('login_model');
         $this->load->helper('form'); ;
                      $this->load->model('booking_model');
//        $this->load->library('form');
         $this->load->model('sundayclass_model');

                  $this->load->model('donation_model');

         if(! $this->getsession())
            {
                redirect('http://localhost/BrethrenChurch/index.php/LoginController/index','refresh');
            }
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		redirect('AdminController/viewProfile');
	}
        
        //ADMIN PROFILE VIEW
        public function viewProfile()
        {
          $s=$this->session->userdata('id');
          $query=$this->login_model->getDetails($s);
          $data['profile']=null;
          if($query)
            {
                $data['profile']=$query;
            }
         $this->load->view('viewProfile',$data);
        }
        //AUDITORIUM--BEGINS
        
      public function auditorium()
     {
        
          $this->load->view('auditoriumHome');
         
     }
     //add AUDITORIUM
     public function addAuditorium()
     {
         $query=$this->booking_model->getAuditoriumDetails();
          $data['id']=null;
          if($query)
            {
              foreach($query as $q)
    {
    $data['id']  =$q->auditorium_id + 1;
                          
} 
            }
//            print_r($data);
          $this->load->view('addAuditorium_admin',$data);
         
     }
     public function newAuditorium()
     {
         if($this->input->post('aud_id')=='' && $this->input->post('aud_addr')==''&& $this->input->post('aud_seat')==''
                 && $this->input->post('aud_price')==''&& $this->input->post('aud_detail')=='')
         {
              $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Fill all details!</div>');
            redirect('AdminController/addAuditorium');  
         }
         
    else if($this->input->post('aud_addr')=='')
    {
        $this->session->set_flashdata('address', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter auditorium address!</div>');
            redirect('AdminController/addAuditorium'); 
    } 
    else if($this->input->post('aud_seat')=='')
    {
        $this->session->set_flashdata('seat', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter seating capacity!</div>');
            redirect('AdminController/addAuditorium'); 
    } 
    else if($this->input->post('aud_price')=='')
    {
        $this->session->set_flashdata('price', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>You did not enter price !</div>');
            redirect('AdminController/addAuditorium'); 
    } 
    else if($this->input->post('aud_detail')=='')
    {
        $this->session->set_flashdata('detail', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter description!</div>');
            redirect('AdminController/addAuditorium'); 
    } 
         else
             
         {
             $config =  array(
                  'upload_path'     => "asset/auditoriumimages",
                  'allowed_types'   => "jpg|png|jpeg",
//                  'overwrite'       => TRUE,
//                  'max_size'        => "2048000",  // Can be set to particular file size
//                  'max_height'      => "768",
//                  'max_width'       => "1024"  
                );    
		 		$this->load->library('upload', $config);
				if($this->upload->do_upload('userfile'))
				{
//                                   echo "hi";
					$data = array('upload_data' => $this->upload->data());
//                                        echo $data;
//					$this->load->view('upload_success',$data);
				}
				else
				{
				$error = array('error' => $this->upload->display_errors());
//				$this->load->view('addAuditorium_admin', $error);
//                                echo $error;
				}  
                                $data = array('upload_data'=>$this->upload->data());
                                $pic=$data['upload_data']['file_name'];
                                $path=$data['upload_data']['file_path'];
                                echo $pic;
              $POST=$this->input->post();
              $id=$POST['aud_id'] ;
//              echo $id;
              $address=trim($this->input->post('aud_addr'));
              $seat=trim($this->input->post('aud_seat'));
               $price=trim($this->input->post('aud_price'));
               $detail=trim($this->input->post('aud_detail'));
//               $image=trim($this->input->post(''));

 $data=array('auditorium_id'=>$id,
                 'address'=>$address,
                  'seat'=>$seat,
                  'price'=>$price,
     'detail'=>$detail,
     'image'=>$pic,//current date adds
                 );  
                $this->booking_model->newAuditorium($data);
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>New Auditorium added</div>');
}
//////sendsms( '8113025358', 'test message' );
                    redirect('AdminController/addAuditorium');
         
         
        
   

          }
          
          //view booking audi
       public function viewBooking()
     {
          $data['booking']=$this->booking_model->viewBooking();
          
          $this->load->view('viewBooking',$data);
         
     }
      public function viewApprovedBooking()
     {
          $data['booking']=$this->booking_model->viewApprovedBooking();
          
          $this->load->view('viewApprovedBooking',$data);
         
     }
      public function viewCancelledBooking()
     {
          $data['booking']=$this->booking_model->viewCancelledBooking();
          
          $this->load->view('viewCancelledBooking',$data);
         
     }
          //AUDITORIUM--ENDS
          
        //NOTIFICATION--begins
        public function addNotification()
     {
          $this->load->view('addNotification');
         
     }  
          
     //admin added notif verification
      public function verifyNotification()
     {
         if(!strlen(trim($_POST['txt_notification'])) && $this->input->post('txt_title')=='')
         {
              $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter notification field!</div>');
            redirect('AdminController/addNotification');  
         }
         else if($this->input->post('txt_title')=='')
    {
        $this->session->set_flashdata('titlemsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter title!</div>');
            redirect('AdminController/addNotification'); 
    }
    else if($this->input->post('txt_notification')=='')
    {
        $this->session->set_flashdata('textarea', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter something!</div>');
            redirect('AdminController/addNotification'); 
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
                    redirect('AdminController/view_notification');
         
         }
        
         //echo $notification;
          //$this->form_validation->set_rules("txt_notification", "notification", "trim|required");
//         $chknotification=$this->notification_model->checkNotification($notification);
        // print_r($chknotification);
         
//         if ($chknotification==0 )  //active user record is present
//           {
             
            
//            }
//            else
//            {
//               
//          $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
//    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Notification already exist!</div>');
//                         redirect('NotificationController/index');
//            }
//            
        
//               //validation succeeds
//               else
//               {
//                   $this->state_model->insert_state($data);
//                   /* if ($dist_result > 0)
//                        //active user record is present
//                    {
//                        $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">District already exists!</div>');
//
//                         //redirect("http://localhost/project/home");
//                          $this->load->view('addDistrict');
//                    }
//                    else
//                    {
//                    
//                    */
//                           
//               }
//            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Added Successfully!</div>');
//            }
//             redirect(current_url()); 
//                      $this->load->view('addNotification');
//              $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Notification added successfully!</div>');  

          }
          
          //admin view
        public function view_notification()
	{
         $data['notification'] =$this->notification_model->getAllNotification();
         $this->load->view('viewNotification',$data);
	}
             //UPDATES 
        function update_notification() 
        {
            $id= $this->uri->segment('3');
//echo $id;
            $data['notification']=$this->notification_model->update_notification_view($id);
            $this->load->view('update_notif_view',$data);

        }
        
//UPDATE VERIFICATION FOR NOTIFICATION ADDD BY ADMIN
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
        
        //NOTIFICATION--ENDS
        
        
        //FEEDBACK--BEGIN 
        
        //SET STATUS 1 BT NO REMOVAL FROM TABLE     
        function enable_feedback() 
        {
         
         $id = $this->uri->segment('3'); 
         $data=array('status'=>1);
         $this->feed_model->enable_feedback($id,$data); 
         redirect('AdminController/view_feedback');
      
        }
        //status update to 0; NO PUBLIC VIEW
        function remove_feedback() 
        {
         $id = $this->uri->segment('3');
         $data=array('status'=>0);
         $this->feed_model->remove_feedback($id,$data); 
         redirect('AdminController/view_feedback');
      
        }
        public function view_feedback()
        {
         $data['feedbackdata']=$this->feed_model->getAllFeedback();
         $this->load->view('view_feedback',$data);
        }
        
        //FEEDBACK--ENDS
        
        //VIEWS BY ADMIN
        public function view_church()
	{
         $data['church'] =$this->church_signup_model->getAllChurch();
         
         $this->load->view('admin_viewChurch',$data);
	}
        public function view_church_details()
	{
                     $id = $this->uri->segment('3');

         $data['church'] =$this->church_signup_model->getChurch($id);
         
         $this->load->view('viewChurch',$data);
	}
        public function view_church_approved()
	{
                     $id = $this->uri->segment('3');

         $data['church'] =$this->church_signup_model->getApprovedChurch($id);
         
         $this->load->view('admin_viewApprovedChurch',$data);
	}
        public function view_church_rejected()
	{
                     $id = $this->uri->segment('3');

         $data['church'] =$this->church_signup_model->getRejectedChurch($id);
         
         $this->load->view('admin_viewRejectedChurch',$data);
	}
        
        public function view_evangelist()
	{
         $data['evang'] =$this->evangelist_signup_model->getAllEvangelist();
         $this->load->view('viewEvangelist',$data);
	}
        public function view_evangelist_details()
	{
                                 $id = $this->uri->segment('3');

         $data['evang'] =$this->evangelist_signup_model->getEvangelist($id);
         $this->load->view('admin_viewEvangelist',$data);
	}
         public function view_evangelist_approved()
	{
         $data['evang'] =$this->evangelist_signup_model->getApprovedEvangelist();
         $this->load->view('admin_viewApprovedEvangelist',$data);
	}
         public function view_evangelist_rejected()
	{
         $data['evang'] =$this->evangelist_signup_model->getRejectedEvangelist();
         $this->load->view('admin_viewRejectedEvangelist',$data);
	}
        
        
        public function view_association()
	{
         $data['asso'] =$this->association_signup->getAllAssociation();
         $this->load->view('viewAssociation',$data);
	}
        
        public function view_family()
	{
         $data['family'] =$this->memReg_model->getAllFamily();
         $this->load->view('viewFamily',$data);
	}
        
        public function view_Country()
        {
         $data['country']=$this->country_model->getAllCountry();
         $this->load->view('view_country',$data);
        }
        
         public function view_state()
        {
        $data['state']=$this->state_model->getAllState();
        $this->load->view('view_state',$data);
        }
        
        public function view_district()
        {
         $data['district']=$this->district_model->getAllDistrict();
         $this->load->view('view_district',$data);
         
        }
        public function view_taluk()
        {
         $data['taluk']=$this->taluk_model->getAllTaluk();
         $this->load->view('view_taluk',$data);
         
        }
        public function view_village()
        {
         $data['villagedata']=$this->village_model->getAllVillage();
         $this->load->view('view_village',$data);
        }
         public function view_relation()
        {
         $data['relationdata']=$this->relation_model->getAllRelation();
         $this->load->view('view_relation',$data);
        }
         
        //APPROVAL AND REJECT
        function approve_church() 
        {
         
         $id = $this->uri->segment('3'); 
         $log=$this->church_signup_model->getLogid($id); 
         foreach($log as $l)
         {
           $logid=$l->lid;
         $data=array('status'=>1);
          $this->login_model->log_approve_church($logid,$data);
         $this->church_signup_model->approve_church($id,$data); 
         redirect('AdminController/view_church');
      }
        }
        function reject_church() 
        {
         $id = $this->uri->segment('3');
         $log=$this->church_signup_model->getLogid($id); 
         foreach($log as $l)
         {
           $logid=$l->lid;
           $data=array('status'=>2);
           $this->login_model->log_reject_church($logid,$data); 
            $this->church_signup_model->reject_church($id,$data); 
            redirect('AdminController/view_church');
         }
        }
        function approve_association() 
        {
         
         $id = $this->uri->segment('3'); 
         $log=$this->association_signup->getLogid($id); 
         foreach($log as $l)
         {
           $logid=$l->lid;
         $data=array('status'=>1);
          $this->login_model->log_approve_association($logid,$data);
         $this->association_signup->approve_association($id,$data); 
         redirect('AdminController/view_association');
      }
        }
        function reject_association() 
        {
         $id = $this->uri->segment('3');
         $log=$this->association_signup->getLogid($id); 
         foreach($log as $l)
         {
           $logid=$l->lid;
           $data=array('status'=>0);
           $this->login_model->log_reject_association($logid,$data); 
            $this->association_signup->reject_association($id,$data); 
            redirect('AdminController/view_association');
         }
        }
        
         function approve_evangelist() 
        {
         
         $id = $this->uri->segment('3'); 
         $log=$this->evangelist_signup_model->getLogid($id); 
         foreach($log as $l)
         {
           $logid=$l->lid;
         $data=array('status'=>1);
          $this->login_model->log_approve_evangelist($logid,$data);
         $this->evangelist_signup_model->approve_evangelist($id,$data); 
         redirect('AdminController/view_evangelist_approved');
      }
        }
        function reject_evangelist() 
        {
         $id = $this->uri->segment('3');
         $log=$this->evangelist_signup_model->getLogid($id); 
         foreach($log as $l)
         {
           $logid=$l->lid;
           $data=array('status'=>2);
           $this->login_model->log_reject_evangelist($logid,$data); 
            $this->evangelist_signup_model->reject_evangelist($id,$data); 
            redirect('AdminController/view_evangelist_rejected');
         }
        }
//        
//         function approve_family() 
//        {
//         
//         $id = $this->uri->segment('3'); 
//         $log=$this->memReg_model->getLogid($id); 
//         foreach($log as $l)
//         {
//           $logid=$l->lid;
//         $data=array('status'=>1);
//          $this->login_model->log_approve_family($logid,$data);
//         $this->memReg_model->approve_family($id,$data); 
//         redirect('AdminController/view_family');
//      }
//        }
//        function reject_family() 
//        {
//         $id = $this->uri->segment('3');
//         $log=$this->memReg_model->getLogid($id); 
//         foreach($log as $l)
//         {
//           $logid=$l->lid;
//           $data=array('status'=>0);
//           $this->login_model->log_reject_family($logid,$data); 
//            $this->memReg_model->reject_family($id,$data); 
//            redirect('AdminController/view_family');
//         }
//        }
       //ADMIN ADD PRINCIPAL--BEGIN
        //add sunday school principal
        public function addPrincipal()
        {
//          
          $data['church']=$this->church_signup_model->getApprovedChurch();
          
//          $data['chfam'] =$this->church_signup_model->viewChurchFamily($chid);
          $this->load->view('addPrincipal',$data);
         // print_r($data);
}
//ajax display family
    public function displays_family() 
    {
        $sid=$this->input->post('church');
        // echo $sid;
           $res1=$this->church_signup_model->viewChurchFamily($sid);
           print_r($res1);
           $data=array();
           if($res1){
                $data['records_family']=$res1;
            foreach ($data['records_family'] as $row)
            {
	     ?>
            <option value="<?php echo $row->hofid;?>">
            <?php
		 echo $row->hofname ." ".$row->familyname;?></option>
	
		<?php	
            }
	
        }
    }
    //verify principal
 public function verifyPrincipal()
     {
    if( $this->input->post('year')=='' && $this->input->post('church')==''&& $this->input->post('principal')=='')
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter all fields!</div>');
            redirect('AdminController/addPrincipal');   
    }
    else if($this->input->post('year')=='')
    {
        $this->session->set_flashdata('yearmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select year!</div>');
            redirect('AdminController/addPrincipal');   
    }
    else if($this->input->post('church')=='')
    {
        $this->session->set_flashdata('churchmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select church!</div>');
            redirect('AdminController/addPrincipal');   
}
    else if($this->input->post('principal')=='')
    {
        $this->session->set_flashdata('pmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select member as principal!</div>');
            redirect('AdminController/addPrincipal');   
    }
     
    else
        {
         
           //echo $chid;
    
//           $this->form_validation->set_rules("year", "Year", "required");
//            $this->form_validation->set_rules("church", "Church", "required");
//         $this->form_validation->set_rules("principal", "Principal", "required");
         
             
                      $year=trim($this->input->post('year'));
                     $church=trim($this->input->post('church'));
                     $principal=trim($this->input->post('principal'));
//                     $username=trim($this->input->post('username'));
//                     $password=trim($this->input->post('password'));
                      
                    
//                     echo $year."<br>".$church."<br>".$principal;
           }
      $query=$this->church_signup_model->getFamilyHead($principal);
      
     foreach($query as $u)
     {
         $user=$u->hofname;
         $logid=$u->lid;
         $eid=$u->hofemail;
     }
     echo $user;
     echo $logid;
     echo $eid;
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
         $this->email->subject('Sunday School Principal '); 
         $this->email->message("You are appointed as principal. Use your username and the given password for Login."."Your password is $ps"); 
   
         //Send mail 
         if($this->email->send()) 
         {
         $this->session->set_flashdata("email_sent",'<div class="alert alert-success alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Email sent successfully.</div>'); 
         $this->sundayclass_model->addSchoolPrincipal($school);
      $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Principal added</div>');
            redirect('AdminController/addPrincipal'); 
            }
         else 
         {
         $this->session->set_flashdata("email_sent",'<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Error in sending Email.</div>'); 
         $this->sundayclass_model->addSchoolPrincipal($school);
      $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Principal cant be added due to mail error</div>');
            redirect('AdminController/addPrincipal'); 
            }
//         $passhash = hash('md5', $ps);
//         echo $passhash;
        $login=array('username'=>$username,
            'password'=>$ps,
            'type'=>6,
             'status'=>1,
                );
        $lid=$this->sundayclass_model->loginPrincipal($login);
        $school= array('principal'=>$user ,
            'year'=>$year,
            
            'lid'=>$lid,
                'status'=>1
                );
          
              
            
     }
    //end principal insertion
    //view principal by admin 
        public function viewSchoolPrincipal()
	{
            $data['principal'] =$this->sundayclass_model->viewSchoolPrincipal();
           
		$this->load->view('admin_viewPrincipal',$data);
	} 
    //DONATION--BEGIN
      //approve donation request
     function approverequest() 
        {
         
         $id = $this->uri->segment('3'); 
//         $log=$this->donation_model->getLogid($id); 
         
         $data=array('status'=>'Approved');
//          $this->login_model->log_approve_association($logid,$data);
         $this->donation_model->approverequest($id,$data); 
         redirect('AdminController/viewDonationRequest');
      
    
      }
       //reject donation request
     function rejectrequest() 
        {
         
         $id = $this->uri->segment('3'); 
//         $log=$this->donation_model->getLogid($id); 
         
         $data=array('status'=>'Rejected');
//          $this->login_model->log_approve_association($logid,$data);
         $this->donation_model->rejectrequest($id,$data); 
         redirect('AdminController/viewDonationRequest');
      
    
      }
      function removerequest() 
        {
         
         $id = $this->uri->segment('3'); 
//         $log=$this->donation_model->getLogid($id); 
         
//         $data=array('status'=>0);
//          $this->login_model->log_approve_association($logid,$data);
         $this->donation_model->removerequest($id); 
         redirect('AdminController/viewDonationRequest');
      
    
      }
         //view donation request by admin
     function viewDonationRequest() 
        {
         $data['donation']=$this->donation_model->getAllDonation();
         $this->load->view('viewDonationRequest',$data);
         
      }
      //view approved requests
      function viewApprovedRequest() 
        {
         $data['donation']=$this->donation_model->approveddonation();
         $this->load->view('viewApprovedDonationRequest',$data);
         
      }
      //view rejected requests
      function viewRejectedRequest() 
        {
         $data['donation']=$this->donation_model->rejecteddonation();
         $this->load->view('viewRejectedDonationRequest',$data);
         
      }
      
      //DONATION--ENDS
      
      
      
      
        //check in login controler userdata session set
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