<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SundaySchoolController extends CI_Controller {
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
                    $this->load->model('login_model');

          $this->load->model('sundayclass_model');
          $this->load->model('church_signup_model');
            if(! $this->getsession())
            {
                redirect('http://localhost/BrethrenChurch/index.php/LoginController/index','refresh');
            }
         
     }
     public function attendCal()
	{
         $s=$this->session->userdata('id');
//            echo $s;
            $class=$this->sundayclass_model->getClass($s);
            foreach($class as $c)
            {
//                echo $c->class;
                $data['student'] =$this->sundayclass_model->viewClassStudents($c->class);
                
		$this->load->view('attendCal',$data);
	}
        
            }
            public function attend_totDays()
	{
          $sid=$this->input->post('stud');
//         echo $sid;
          $res2=$this->sundayclass_model->attendDays($sid);
          
//          print_r($res2);
           $res1=$this->sundayclass_model->totDays();
//           echo $res1,$res2;
           
//           print_r($res1);
//           $data=array();
//           if($res1){
//                $data['records_dist']=$res1;
//            foreach ($data['records_dist'] as $row)
//            {
//	     ?>
<center><table>
    <tr><td><label>Working days</label>
<td><input class="easypositive-integer" id="total" type="text" value="<?php echo $res1; ?>" readonly=""><br>
    <tr><td><label>Present </label>
<td><input class="easypositive-integer" id="avgstds" type="text" value="<?php echo $res2; ?>" readonly="">
    </table></center>

            <?php
//		 echo $res2;?>
<!--</option>-->
	
		<?php	
//            }
//	
//        }
//            $class=$this->sundayclass_model->getClass($s);
//            foreach($class as $c)
//            {
////                echo $c->class;
//                $data['student'] =$this->sundayclass_model->viewClassStudents($c->class);
//                
//		$this->load->view('attendCal',$data);
//	}
        
            }
     //principal home page
	public function index()
	{
		$this->load->view('view_schoolhome');
	}
      //head home page
        public function headindex()
	{
		$this->load->view('head_home');
	}
        //tutor home page
        public function tutorindex()
	{
		$this->load->view('tutor_home');
	}
      //add sunday school principal
        public function addPrincipal()
        {
//          
          $data['church']=$this->church_signup_model->getAllChurch();
          
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
		 echo $row->hofname;?></option>
	
		<?php	
            }
	
        }
    }
    //verify principal
 public function verifyPrincipal()
     {
    if( $this->input->post('year')=='' && $this->input->post('head')=='' && $this->input->post('username')==''
            && $this->input->post('password')=='')
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter all fields!</div>');
            redirect('ChurchController/addPrincipal');   
    }
    else if($this->input->post('year')=='')
    {
        $this->session->set_flashdata('yearmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select year!</div>');
            redirect('SundaySchoolController/addPrincipal'); 
    }
    else if($this->input->post('church')=='')
    {
        $this->session->set_flashdata('churchmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select church!</div>');
redirect('SundaySchoolController/addPrincipal'); 
}
    else if($this->input->post('principal')=='')
    {
        $this->session->set_flashdata('pmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select member as principal!</div>');
           redirect('SundaySchoolController/addPrincipal'); 
    }
    
    else
        {
         
           //echo $chid;
    
           $this->form_validation->set_rules("year", "Year", "required");
            $this->form_validation->set_rules("church", "Church", "trim|required");
         $this->form_validation->set_rules("principal", "Principal", "trim|required");
         $this->form_validation->set_rules("username", "Username", "trim|required");
         $this->form_validation->set_rules("password", "Password", "trim|required");
             
                      $year=trim($this->input->post('year'));
                     $church=trim($this->input->post('church'));
                     $principal=trim($this->input->post('principal'));
                     $username=trim($this->input->post('username'));
                     $password=trim($this->input->post('password'));
                      $passhash = trim(hash('md5', $password));
                    
                     echo $year."<br>".$church."<br>".$principal."<br>".$username."<br>".$password;
           }
      $query=$this->church_signup_model->getFamilyHead($principal);
     foreach($query as $u)
     {
         $user=$u->hofname;
     }
//     echo $user;
        $login=array('username'=>$username,
            'password'=>$passhash,
            'type'=>6,
             'status'=>1,
                );
        $lid=$this->sundayclass_model->loginPrincipal($login);
        $school= array('principal'=>$user ,
            'year'=>$year,
            
            'lid'=>$lid,
                'status'=>1
                );
        $this->sundayclass_model->addSchoolPrincipal($school);
      $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Principal added</div>');
redirect('SundaySchoolController/addPrincipal'); 
              
            
     }
     //end principal insertion
     
     //add tutors to each class
        public function addTeachers()
	{
            $s=$this->session->userdata('id');
            //echo $s;
             $chquery=$this->sundayclass_model->getChurchId($s);
             foreach($chquery as $ch)
             {
                 $chid=$ch->chid;
//                 echo $chid;
                 $query=$this->sundayclass_model->getMembers($chid);
                  $data['t']=$query;
                  $this->load->view('view_addteacher',$data);
             }
        }
        //verify added tutor
        public function verifyTeacher()
     {
    if( $this->input->post('class')=='' && $this->input->post('tutor')=='' )
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter all fields!</div>');
            redirect('SundaySchoolController/addTeachers');   
    }
    else if($this->input->post('class')=='')
    {
        $this->session->set_flashdata('classmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select class!</div>');
            redirect('SundaySchoolController/addTeachers'); 
    }
    else if($this->input->post('tutor')=='')
    {
        $this->session->set_flashdata('tutormsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select member as tutor!</div>');
            redirect('SundaySchoolController/addTeachers'); 
    }
     
    else
        {
         $s=$this->session->userdata('id');
          //  echo $s;
         $query=$this->sundayclass_model->getId($s);
           foreach($query as $sh)
           {
               $chid=$sh->sundayclass_id;
           
           //echo $chid;
    
           $this->form_validation->set_rules("class", "Class", "required");
         $this->form_validation->set_rules("tutor", "Tutor", "trim|required");
   
             
                      $class=trim($this->input->post('class'));
                     $tutor=trim($this->input->post('tutor'));
                    
                    
                     echo $tutor;
           
      $query=$this->church_signup_model->getFamilyHead($tutor);
     foreach($query as $u)
     {
         $user=$u->hofname;
//         echo $user;
     $logid=$u->lid;
     $eid=$u->hofemail;
//         echo $logid;
         $query1=$this->church_signup_model->getUsername($logid);
     foreach($query1 as $n)
     {
         $username=$n->username;
         
     }
     echo $username;
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
         $this->email->subject('Sunday School Tutor '); 
         $this->email->message("You are appointed as tutor for class $class. Use your username and the given password for Login."."Your password is $ps"); 
   
         //Send mail 
         if($this->email->send()) 
         {
             
             $this->session->set_flashdata("email_sent",'<div class="alert alert-success alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Email sent successfully.</div>');
             $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Tutor added</div>');
 redirect('SundaySchoolController/addTeachers');
             
         }
        
         else
         {
               $this->session->set_flashdata("email_sent",'<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Error in sending Email.</div>'); 
               $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Tutor cant be appointed due to mail error</div>');
 redirect('SundaySchoolController/addTeachers');
         }
       
        $login=array('username'=>$username,
            'password'=>$ps,
            'type'=>8,
             'status'=>1,
                );
        $lid=$this->sundayclass_model->loginTutor($login);
        $tutor= array('tutor'=>$user ,
            'class'=>$class,
            'sundayclass_id'=>$chid,
            'lid'=>$lid,
                'status'=>1
                );
        }
        }
      
           } 
            
     }
     
//view teachers by head
    public function viewTeachers()
	{
            $s=$this->session->userdata('id');
//            echo $s;
            $sid=$this->sundayclass_model->getId($s);
            foreach($sid as $i)
            {
//                echo $i->sundayclass_id;
               
                            $tutor=$this->sundayclass_model->viewTeachers($i->sundayclass_id);
 if ($tutor != false) {
$data['tutor'] = $tutor;
} else {
$data['tutor'] = "No record found !";
}
            }
            		$this->load->view('viewClassTeachers',$data);

	}
        
        //remove class tutor
        function remove_tutor() 
        {
         
         $id = $this->uri->segment('3'); 
         $q=$this->sundayclass_model->getTutorLid($id); 
         foreach($q as $a)
         {
             $lid=$a->lid;
         }
         echo $lid;
         $this->sundayclass_model->remove_tutor($id);
         $this->sundayclass_model->remove_tutor_login($lid);
   
         $query = $this->db->get("tbl_teacher"); 
         $data['tutor'] = $query->result(); 
//$this->load->view('display_view',$data); 
//         redirect('SundaySchoolController/viewTeachers');
      
        }
    //add student by head
        public function addStudents()
	{
             $s=$this->session->userdata('id');
//            echo $s;
            $cid=$this->sundayclass_model->getChurchId($s);  
            foreach($cid as $i)
            {
//                echo $i->chid;
                  $fid=$this->church_signup_model->viewChurchFamily($i->chid);
                foreach($fid as $i)
            {
//                echo $i->hofname."<br>";
//                 $data['chfam'] =$this->church_signup_model->viewChurchFamily($chid);

            }
            $data['fname']=$fid;
		$this->load->view('view_addstudent',$data);
	}
        }
        
         //add sunday school students
        public function addSchoolStudent()
        {
             if( $this->input->post('class')=='' && $this->input->post('student')=='' && $this->input->post('guardian')=='')
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter all fields!</div>');
            redirect('SundaySchoolController/addStudents');   
    }
    else
    {
           $s=$this->session->userdata('id');
//            echo $s;
            $sid=$this->sundayclass_model->getId($s);
            $class=$this->input->post('class');
             $student=$this->input->post('student');
              $guardian=$this->input->post('guardian');
//            
            foreach($sid as $i)
            {
                
               $ph=$this->sundayclass_model->getPhone($guardian); 
               foreach($ph as $p)
               {
//                    echo $i->sundayclass_id."<br>";
//                echo $i->chid."<br>";
// echo $class."<br>";
// echo $student."<br>";
// echo $guardian."<br>";
//                   echo $p->phone;
                   $student=array('studname'=>$student,
                       'class'=>$class,
                       'guardian_name'=>$guardian,
                       'ph'=>$p->phone,
                       'sundayclass_id'=>$i->sundayclass_id,
                       'status'=>1);
                   
                 
               } 
               
            }

        $this->sundayclass_model->addStudent($student); 
//        $studattend=array('studentid'=>$stid,
//                       'class'=>$class,
//                       'sundayclass_id'=>$i->sundayclass_id,
//                       'status'=>1);
//                    $this->sundayclass_model->addAttendance($studattend); 

      $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Student added</div>');
 redirect('SundaySchoolController/addStudents');
//          $this->load->view('view_addstudent',$data);
         // print_r($data);
}
}
//add sunday school attendance
//view page
public function addAttendance()
	{
            $s=$this->session->userdata('id');
//            echo $s;
            $class=$this->sundayclass_model->getClass($s);
            foreach($class as $c)
            {
//                echo $c->class;
                $data['student'] =$this->sundayclass_model->viewClassStud($c->class);
//                foreach($stud as $s)
//                {
////                    echo $s->studname;
//                }
		$this->load->view('addAttendance',$data);
	}}
        //get date and view stud
        public function attendanceAdd()
        {
                        $date=$this->input->post('datepicker');
                        $post   =   $this->input->post(); 
   $data['name'] = $post['studentid'];
$data['attend']    =   $post['attend'];

//$data['name'] =$this->input->post('stud');
//$data['attend'] =$this->input->post('attend');
            $ses=$this->session->userdata('id');
//print_r( $data['name']);
//print_r( $data['attend']);
$count_stud = sizeof($data['name']);
       
//    echo $count_stud;
$c=$this->sundayclass_model->getClass($ses);
foreach($c as $ind)
            {
//                echo $i->class;
//               echo $i->sundayclass_id; 
       for($i=0;$i<($count_stud);$i++)
              {
        
        
        $j = $data['name'][$i];
       
        $status =  $data['attend'][$j];
//        echo $j."<br>".$status."<br>".$date."<br>". $ind->class."<br>". $ind->sundayclass_id."<br>"; 

            
//            
          $checkentry=$this->sundayclass_model->checkAttend($j,$date);
if($checkentry==0)
{
      
              
                   $studattend=array('studentid'=>$j,
                       'date'=>$date,
                       'sundayclass_id'=>$ind->sundayclass_id,
                       'class'=>$ind->class,
                       'status'=>$status);
                      $this->sundayclass_model->addAttendance($studattend); 
////
              
//            
}
else
{
 $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Attendance already marked for this date</div>');
   redirect('SundaySchoolController/addAttendance');
}

 }   
   $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Attendance marked</div>');
   redirect('SundaySchoolController/addAttendance');
}
}
//view attend by tutor

        public function viewAttendance()
	{
//             $s=$this->session->userdata('id');
////            echo $s;
//            $sid=$this->sundayclass_model->getId($s);
//            foreach($sid as $s)
//            {
////                echo $s->sundayclass_id;
//                $data['student'] =$this->sundayclass_model->viewStudents($s->sundayclass_id);
//
//            }
//            
           $this->load->view('viewAttendanceTutor');
	}
 public function viewStudentAttend()
	{
     
             $s=$this->session->userdata('id');
//            echo $s;
         $date=$this->input->post('datepicker');
//echo $date;
            $sid=$this->sundayclass_model->getClass($s);
            foreach($sid as $s)
            {
//                echo $s->sundayclass_id;
//                                echo $s->class;
             $data['attend']=$this->sundayclass_model->viewStudentAttendance($s->sundayclass_id,$s->class,$date);
               
//  print_r($data);
 } $this->session->set_flashdata('msg', $date);
            $this->load->view('viewAttendTutor',$data);

           
	}
        
        public function tutor_attendGenerate()
	{
     
            $this->load->view('tutor_attendGenerate'

                    );

           
	}
        public function tutor_attendGenerate1()
	{
     
             $s=$this->session->userdata('id');
//            echo $s;
//         $date=$this->input->post('datepicker');
//         $date=date('y-m-d');
//         echo $date;
//          $date1=$this->input->post('datepicker1');
////echo $date,$date1;
            $sid=$this->sundayclass_model->getClass($s);
             $this->session->set_flashdata('table','<br><br><br><center><table ><thead><th>Name</th><th>Present</th><th>Percent</th>');
            foreach($sid as $s)
            {
//                echo $s->sundayclass_id;
                $classid= $s->sundayclass_id;
//                                echo $s->class;
                                $class= $s->class;
             $q =$this->sundayclass_model->viewStudAttend($classid,$class);
//              $data['attend'] =$q;
                           $totdays =$this->sundayclass_model->totDays();

              foreach($q as $sid)
              {
                  $studid= $sid->studentid;
                 $totpresent =$this->sundayclass_model->attendDays($studid);

//                 echo $totpresent."<br>"; 
                 $percent=($totpresent/$totdays)*100;
//                                           
                                   $this->session->set_flashdata('tr ','<tr><td>'. $sid->studentid.  '<td>' .$totpresent.'<td>'.$percent );



//                  echo $sid->studentid;
//                  echo $sid->studname;
              }

              }
//              echo $totdays;
//                  print_R($totdays);
//                  foreach($totdays as $t){
//                      echo $t->date."<br>";
//                  }
//                            $this->load->view('tutor_attendGenerate1',$data);
//
//              $count_stud = sizeof($data['attend']);
////echo $count_stud;
////  print_r($data);
// }
// $data['totalday']=$this->sundayclass_model->totDay($date,$date1);
// $data['absent']=$this->sundayclass_model->totDay($date,$date1);
// print_r($total);
                                         $this->load->view('tutor_attendGenerate1');
 
	}
      
        //view attend by head
        public function head_viewStudAttend()
	{
             
            $this->load->view('viewAttendanceHead');
}
        public function head_viewStudAttendance()
	{
             $s=$this->session->userdata('id');
//            echo $s;
             $cls=$this->input->post('cls');
         $date=$this->input->post('datepicker');
//echo $date;
//echo $cls;
$sid=$this->sundayclass_model->getId($s);
            foreach($sid as $s)
            {
               $data['attend']=$this->sundayclass_model->viewStudentAttendance($s->sundayclass_id,$cls,$date);
            
//   print_r($data);

                $this->load->view('viewAttendHead',$data);


}

}
     //view students by head 
        public function viewStudents()
	{
             $s=$this->session->userdata('id');
//            echo $s;
            $sid=$this->sundayclass_model->getId($s);
            foreach($sid as $s)
            {
//                echo $s->sundayclass_id;
                $data['student'] =$this->sundayclass_model->viewStudents($s->sundayclass_id);

            }
            
           
		$this->load->view('viewStudents',$data);
	}
        
        //view students by tutor of class 
        public function viewClassStudents()
	{
             $s=$this->session->userdata('id');
//            echo $s;
            $class=$this->sundayclass_model->getClass($s);
            foreach($class as $c)
            {
//                echo $c->class;
                $data['student'] =$this->sundayclass_model->viewClassStudents($c->class);
//                foreach($stud as $s)
//                {
////                    echo $s->studname;
//                }
               		$this->load->view('viewClassStudents',$data);
// 
            }
//           
	} 
    //add syllabus by principal
        public function addSyllabus()
	{
		$this->load->view('view_addsyllabus',array('error' => ' ' ));
	}
    //upload syllabus by principal
     public function do_upload(){
         if($this->input->post('class')=='')
    {
        $this->session->set_flashdata('classmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select class!</div>');
          redirect('SundaySchoolController/addSyllabus');  
    }
    
     
    else
        {
     $config =  array(
                  'upload_path'     => "asset/uploads/syllabus",
                  'allowed_types'   => "pdf",

                );    
		                $this->load->library('upload', $config);
                                if($this->upload->do_upload('userfile'))
				{
                                $data = array('upload_data'=>$this->upload->data());
                                $file=$data['upload_data']['file_name'];
                                $path=$data['upload_data']['file_path'];
                                $class=$this->input->post('class');
//                                echo $path."<br>".$file."<br>".$class;
                                
                                    $up=array('file'=>$file,
                                    'class'=>$class,
                                        
                                    'dateadded'=>date("Y-m-d H:i:s") //current date adds
                                    );
                                    
                                     $chksyllabus=$this->sundayclass_model->checkSyllabus($class);
                                     if ($chksyllabus==0 )  //active user record is present
                                {
				$this->sundayclass_model->addSyllabus($up);	
                                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Syllabus added </div>');
                                redirect('SundaySchoolController/viewSyllabus');
                               }
                               else
                               {
                                    $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Syllabus already added for this class!</div>');
                         redirect('SundaySchoolController/addSyllabus');
                               }
                                
                                
				}
				else
				{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('view_addsyllabus', $error);
				}  
				
}}

//view syllabus admin
        public function viewSyllabus()
	{
            $data['syllabus']=$this->sundayclass_model->viewSyllabus();
		$this->load->view('viewSyllabus',$data);
	}
        
        //add syllabus by principal
        public function updateSyllabus()
	{
		$this->load->view('viewEditsyllabus',array('error' => ' ' ));
	}
    //upload syllabus by principal
     public function do_upload1(){
         if($this->input->post('class')=='')
    {
        $this->session->set_flashdata('classmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select class!</div>');
          redirect('SundaySchoolController/addSyllabus');  
    }
    
     
    else
        {
     $config =  array(
                  'upload_path'     => "asset/uploads/syllabus",
                  'allowed_types'   => "pdf",

                );    
		                $this->load->library('upload', $config);
                                if($this->upload->do_upload('userfile'))
				{
                                $data = array('upload_data'=>$this->upload->data());
                                $file=$data['upload_data']['file_name'];
                                $path=$data['upload_data']['file_path'];
                                $class=$this->input->post('class');
//                                echo $path."<br>".$file."<br>".$class;
                                
                                    $up=array('file'=>$file,
                                    
                                        
                                    'dateadded'=>date("Y-m-d H:i:s") //current date adds
                                    );
                                     $chksyllabus=$this->sundayclass_model->checkSyllabus($class);
                                     if ($chksyllabus >= 1 )  //active user record is present
                                {
				$this->sundayclass_model->updateSyllabus($up,$class);	
                                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Syllabus updated </div>');
                                redirect('SundaySchoolController/viewSyllabus');
                               }
                               else
                               {
                                    $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Syllabus not added for this class!</div>');
                         redirect('SundaySchoolController/addSyllabus');
                               }
                                
                                
				}
				else
				{
				$error = array('error' => $this->upload->display_errors());
		
                                $this->load->view('viewEditSyllabus', $error);
				}  
				
}}
        //view syllabus all
        public function viewSyllabusAll()
	{
            $data['syllabus']=$this->sundayclass_model->viewSyllabus();
		$this->load->view('viewSyllabusAll',$data);
	}
//principal profile view
        public function principalProfile()
	{
            $data['principal']=$this->sundayclass_model->viewPrincipal();
//            $data['fam']=$this->sundayclass_model->viewPrincipal();
		$this->load->view('principal_profile',$data);
	}
        
//add exams view
        public function addExams()
	{
		$this->load->view('view_addexam');
	}
//verify added exam
        public function verifyExam()
     {
    if( $this->input->post('class')=='' && $this->input->post('exam')=='' && $this->input->post('datepicker')=='')
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter all fields!</div>');
            redirect('SundaySchoolController/addExams');   
    }
    else if($this->input->post('class')=='')
    {
        $this->session->set_flashdata('classmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select class!</div>');
            redirect('SundaySchoolController/addExams');  
    }
    else if($this->input->post('exam')=='')
    {
        $this->session->set_flashdata('exammsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select exam!</div>');
           redirect('SundaySchoolController/addExams'); 
    }
     else if($this->input->post('datepicker')=='')
    {
        $this->session->set_flashdata('datemsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select date!</div>');
            redirect('SundaySchoolController/addExams'); 
    }
     
    else
        {
         
           $this->form_validation->set_rules("class", "Class", "required");
         $this->form_validation->set_rules("exam", "Exam", "trim|required");
         $this->form_validation->set_rules("datepicker", "Date", "trim|required");
             
                      $class=trim($this->input->post('class'));
                     $exam=trim($this->input->post('exam'));
                     $date=trim($this->input->post('datepicker'));
//echo $class ;
//echo $exam ;
//echo $date;
        $exam=array('examname'=>$exam,
            'class'=>$class,
            'date'=>$date,
           'posteddate'=>date("Y-m-d"), //current date adds
             'status'=>1,
                );

        
        
        }
        $this->sundayclass_model->addExam($exam);
      $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Exam added and notified</div>');
redirect('SundaySchoolController/addExams'); 
           }
           
           public function principal_report_view()
	{
//            
		$this->load->view('principal_report_view');
	}
           //view exams by all
        public function viewExamNotifications()
	{
             $d=date("Y-m-d");
//             echo $d;
            $data['exam']=$this->sundayclass_model->viewExamAll($d);
		$this->load->view('viewExamNotifications',$data);
	}   
 //view exams by principal 
        public function viewExams()
	{
            $data['exam']=$this->sundayclass_model->viewExam();
		$this->load->view('viewExam',$data);
	}   
         
         //UPDATES 
        function postpone_Exam() 
        {
            $id= $this->uri->segment('3');
//echo $id;
            $data['exam']=$this->sundayclass_model->update_exam_view($id);
            $this->load->view('update_exam_view',$data);

        }
        public function verifyUpdateExam()
     {
$eid=trim($this->input->post('eid'));
              $eclass=trim($this->input->post('class'));
              $ename=trim($this->input->post('exam'));
              $edate=trim($this->input->post('datepicker'));
//              echo $eid;
              $data=array(
                 'date'=>$edate,
                  'posteddate'=>date("Y-m-d"), //current date adds
                  );  
//              print_r($data);
                $this->sundayclass_model->update_exam_principal($data,$eid);
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Exam date updated </div>');
                redirect('SundaySchoolController/viewExams');
//         }
         
     }
  //EXAM UPDATE ENDS
        //hide exams notification
        public function removeExam()
	{
          $id = $this->uri->segment('3');
         $data=array('status'=>0);
         $this->sundayclass_model->removeExam($id,$data); 
         redirect('SundaySchoolController/viewExams');
		
	}
        
        //view head by principal 
        public function viewSchoolHead()
	{
            $data['head'] =$this->sundayclass_model->viewSchoolHead();
           
		$this->load->view('viewSchoolHead',$data);
	} 
         //view tutor by principal 
        public function viewSchoolTutor()
	{
            $data['tutor'] =$this->sundayclass_model->viewTutor();
           
		$this->load->view('viewSchoolTutor',$data);
	} 
         public function principal_viewStudent()
	{
             
            $data['churchall']  =$this->church_signup_model->getApprovedChurch();
           $this->load->view('principal_view_stud_by_church',$data);
	} 
         public function view_students()
	{
             $ch=$this->input->post('church');
             $cls=$this->input->post('classid');
//             echo $ch,$cls;
             $sch =$this->sundayclass_model->getSchoolId($ch);
             if($sch)
             {
                 foreach($sch as $id)
             {
                 $sid=$id->sundayclass_id;
                 
//                 echo $sid;
                 $data['d']=$this->sundayclass_model->p_viewStudent($sid,$cls);
            $data['churchall']  =$this->church_signup_model->getApprovedChurch();
           
		$this->load->view('principal_view_students',$data);
             }
//                          print_r($sch);

//             print_r($data);
             }
             else
             {
                 $data['churchall']  =$this->church_signup_model->getChurchAll();
           
//		$this->load->view('principal_view_students',$data);
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>No records found </div>');
                redirect('SundaySchoolController/principal_viewStudent');
             }
             
            
	} 
       //by tutor 
        public function viewMarks()
	{
            $s=$this->session->userdata('id');
//            echo $s;
            $tid=$this->sundayclass_model->getTutorId($s);
            $data['exam'] =$this->sundayclass_model->viewExam();
            $data['mark'] = '';
//foreach($q as $qr)
//{
//    echo $qr->studentid,$qr->examid,$qr->mark."<br>";
//    $s=$this->sundayclass_model->getStudent($qr->studentid);
//    foreach($s as $st)
//    {
//         echo $st->studname."<br>";
//   
//    
//     $e=$this->sundayclass_model->getExamName($qr->examid);
//    foreach($e as $ex)
//    {
//         echo $ex->examname."<br>";
//   
//    }
//}}
//            }
	
        $this->load->view('viewStudentMark',$data);

            }
            //by head 
        public function viewStudentMark()
	{
            $s=$this->session->userdata('id');
//            echo $s;
//            $tid=$this->sundayclass_model->getTutorId($s);
//            foreach($tid as $t)
//            {   
            $exam=$this->input->post('exam');
            $tid=$this->sundayclass_model->getTutorId($s);
            $data['exam'] =$this->sundayclass_model->viewExam();

            foreach($tid as $t)
            {          
$data['mark'] =$this->sundayclass_model->viewStudentMark($t->tutorid,$exam);

//foreach($q as $qr)
//{
//    echo $qr->studentid,$qr->examid,$qr->mark."<br>";
//    $s=$this->sundayclass_model->getStudent($qr->studentid);
//    foreach($s as $st)
//    {
//         echo $st->studname."<br>";
//   
//    
//     $e=$this->sundayclass_model->getExamName($qr->examid);
//    foreach($e as $ex)
//    {
//         echo $ex->examname."<br>";
//   
//    }
//}}
//            }
	}
        $this->load->view('tutor_view_mark',$data);

            }
         public function addMarks()
	{
                $data['exam']=$this->sundayclass_model->viewExam();
$s=$this->session->userdata('id');
//            echo $s;
            $class=$this->sundayclass_model->getClass($s);
            foreach($class as $c)
            {
//                echo $c->class;
                $data['student'] =$this->sundayclass_model->viewClassStud($c->class);
//                foreach($stud as $s)
//                {
////                    echo $s->studname;
//                }
                }
		$this->load->view('addStudentMark',$data);
	}
        //verify mark adding
 public function verifyMark()
     {
    if( $this->input->post('exam')=='' 
//            && $this->input->post('student')=='' && $this->input->post('mark')==''
            )
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter all fields!</div>');
            redirect('SundaySchoolController/addMarks');   
    }
    else if($this->input->post('exam')=='')
    {
        $this->session->set_flashdata('exammsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select year!</div>');
            redirect('SundaySchoolController/addMarks'); 
    }
//    else if($this->input->post('student')=='')
//    {
//        $this->session->set_flashdata('studentmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
//            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select church!</div>');
//redirect('SundaySchoolController/addMarks'); 
//}
//    else if($this->input->post('mark')=='')
//    {
//        $this->session->set_flashdata('markmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
//            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select member as principal!</div>');
//           redirect('SundaySchoolController/addMarks'); 
//    }
    else
    {
        $exam=$this->input->post('exam');
//        $student=$this->input->post('student');
//        $mark=$this->input->post('mark');
          $post   =   $this->input->post(); 
   $data['student'] = $post['studentid'];
   
$data['mark']    =   $post['mark'];
//print_R($data);
               $c=$this->session->userdata('id');
        $class=$this->sundayclass_model->getClass($c);

        
//        echo $c."<br>";
//        echo $mark."<br>";
//        $e=$this->sundayclass_model->getExamName($exam);
//         foreach($e as $exam)
//        {
////                    echo $exam->examname."<br>";
//
//        }
//         $stud=$this->sundayclass_model->getStudent($student);
//         foreach($stud as $s)
//        {
////                    echo $s->studname."<br>";
//
//        }
        $count_stud = sizeof($data['student']);
       
//    echo $count_stud;
//$c=$this->sundayclass_model->getClass($ses);
foreach($class as $ind)
            {
////                echo $i->class;
////               echo $i->sundayclass_id; 
       for($i=0;$i<($count_stud);$i++)
              {
//        
//        
        $j = $data['student'][$i];
//       
        $m =  $data['mark'][$j];
         echo $m;
        
//        echo $j;
       
        }
        foreach($class as $c)
        {
            echo $c->tutorid;
             $checkentry=$this->sundayclass_model->checkMark($j,$exam);
if($checkentry==0)
{
      
              $mark=array('studentid'=>$j,
            'examid'=>$exam,
            'mark'=>$m,
            'classid'=>$c->class,
                  'tutorid'=>$c->tutorid);
                  $this->sundayclass_model->addMark($mark);
             
}
else
{
 $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Mark already entered for this rollno</div>');
   redirect('SundaySchoolController/addMarks');
}

        }
      $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Mark added</div>');
redirect('SundaySchoolController/addMarks'); 
        }
    }
   }    
   
   //change password
    public function change_password()
  {
  $this->load->view('change_password_sunday');
  }
  public function checkoldpswd()
    {
       if ($this->input->post('oldpassword')) 
                          {
                              $oldpswd = $this->input->post("oldpassword");
                               $uname=$this->session->userdata['username'];
//                               echo $oldpswd,$uname;
                               $n=$this->sundayclass_model->checkpswd($oldpswd,$uname);
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
                          
                       $this->sundayclass_model->updatepswd($data,$id);
                //destroy session
                //redirec to login page
             
                   
                          } 
                        
              redirect('LoginController/logout');
    
}

//                          }
//                          
//                          }
                          
                          }
//SESSION
        public  function getsession()
        {
            if (($this->session->userdata('username')) &&($this->session->userdata('id') ) &&($this->session->userdata('loginuser') ))
            {
                return true;
            }
               else {
     
                return false;
                }
        }
}
