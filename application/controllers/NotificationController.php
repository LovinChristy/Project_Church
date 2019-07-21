<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class NotificationController extends CI_Controller
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
          $this->load->model('notification_model');
          if(! $this->getsession())
            {
                redirect('http://localhost/BrethrenChurch/index.php/LoginController/index','refresh');
            }
     }
//by church not working due to session
     public function index()
     {
          $this->load->view('addNotification');
         
     }
     
     public function verifyNotification()
     {
         if(!strlen(trim($_POST['textarea'])) && $this->input->post('txt_title')=='')
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
              $title=$this->input->post('txt_title');
              $notification=$this->input->post('txt_notification');
              $data=array('title'=>$title,
                 'notification'=>$notification,
                  'status'=>1);  
                $this->notification_model->insert_notification($data);
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Notification posted successfully</div>');
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
          
         
          public function verifyChurchNotification()
     {
         if(!strlen(trim($_POST['textarea'])) && $this->input->post('txt_title')=='')
         {
              $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter notification field!</div>');
            redirect('NotificationController/index');  
         }
         else if($this->input->post('txt_title')=='')
    {
        $this->session->set_flashdata('titlemsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter title!</div>');
            redirect('NotificationController/index'); 
    }
    else if($this->input->post('txt_notification')=='')
    {
        $this->session->set_flashdata('textarea', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter something!</div>');
            redirect('NotificationController/index'); 
    }  
         else
         {
              $title=$this->input->post('txt_title');
              $notification=$this->input->post('txt_notification');
              $data=array('title'=>$title,
                 'notification'=>$notification,
                  'status'=>1);  
                $this->notification_model->insert_notification($data);
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Notification posted successfully</div>');
                redirect('AdminChurchController/view_churchnotification');
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
//           public function verifyUpdateNotification()
//     {
////         if(!strlen(trim($_POST['textarea'])))
////         {
////              $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
////            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter notification field!</div>');
////            redirect('AdminController/update_notification');  
////         }
////         
////    else if($this->input->post('notification')=='')
////    {
////        $this->session->set_flashdata('notification', '<div class="alert alert-danger alert-dismissable fade in text center">
////            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter something!</div>');
////            redirect('NotificationController/update_notification'); 
////    }  
////         else
////         {
//              $title=$this->input->post('title');
//              $notification=$this->input->post('notification');
//              $data=array(
//                 'notification'=>$notification
//                  );  
//                $this->notification_model->update_notification_admin($data,$title);
//                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
//  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Notification updated successfully</div>');
//                redirect('AdminController/view_notification');
////         }
//         
//     }
     
     // notification viewed by church from admin
     public function churchNotification()
     {
         $data['notification'] =$this->notification_model->viewAllNotification();
         $this->load->view('viewNotificationChurch',$data);
         
     }
     //common notif
     public function Notification()
     {
         $data['notification'] =$this->notification_model->getAllNotification();
         $this->load->view('notifications',$data);
         
     }
     public function open_notification()
     {
         $nid =$this->uri->segment('3');
//         echo $nid;
         $data['notification'] =$this->notification_model->openNotification($nid);
//         print_r($data);
         $this->load->view('notification_details',$data);
         
     }
       public  function getsession()
        {
            if  (($this->session->userdata('id') ) &&($this->session->userdata('loginuser') ))
            {
                return true;
            }
               else {
     
                return false;
                }
        }
          
     }
    

?>