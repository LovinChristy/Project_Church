<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class sundayclass_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
   
    //head for each church getting chid frm session of church
    function getChurchId($s)
    {
     $this->db->select ( 'chid' ); 
     $this->db->from ( 'tbl_sundayclass' );
     $this->db->where('lid',$s);
     $query = $this->db->get ();
     return $query->result ();
    }
    
    //view tutors in dd based on church
    function getMembers($ch)
    {
     $this->db->select ('*'); 
     $this->db->from ( 'tbl_family' );
     
     $this->db->where('chid',$ch);
     $query = $this->db->get ();
     return $query->result ();
    }
    
    //add tutors refering church school
    function getId($s)
    {
     $this->db->select ( '*' ); 
     $this->db->from ( 'tbl_sundayclass' );
     $this->db->where('lid',$s);
     $query = $this->db->get ();
     return $query->result ();
    }
    //login for principal of sunday school
      public function loginPrincipal($login)
    {
       $this->db->set('status',0); 
         $this->db->where("type", 6); 
         $this->db->update("tbl_login", $data); 
         
          
       if ($this->db->insert("tbl_login", $login))
       {
           return $this->db->insert_id(); 
       }
     }  
     
    //registration of school principal
    public function addSchoolPrincipal($school)
    {
      $this->db->insert("tbl_principal", $school) ;
         
    }
    //login for head of sunday school
      public function loginHead($login)
    {
       if ($this->db->insert("tbl_login", $login))
       {
           return $this->db->insert_id(); 
       }
     }  
     
    //registration of school head
    public function addSchoolHead($school)
    {
      $this->db->insert("tbl_sundayclass", $school) ;
         
    } 
    
    //login data for tutor
    function loginTutor($login)
    {
        if($this->db->insert('tbl_login',$login))
        {
            return $this->db->insert_id();
        }
    }
    
    //tutor insertion to tbl_teacher
     function addTutor($tutor)
    {
        return $this->db->insert('tbl_teacher',$tutor);
    }
    
    //add syllabus
    function addSyllabus($up)
    {
        return $this->db->insert('tbl_syllabus',$up);
    }
    //check if syllabus exist for class
    function checkSyllabus($class) 
    {
        $this->db->select('*');
        $this->db->from('tbl_syllabus');
        $this->db->where('class',$class);
        $query = $this -> db -> get();
        $res= $query->num_rows();
        return $res;
    } 
    //view syllabus
    function viewSyllabus()
    {
        $this->db->select('*');
        $this->db->from('tbl_syllabus');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function updateSyllabus($data,$class)
{
  
         $this->db->set($data); 
         $this->db->where("class", $class); 
         $this->db->update("tbl_syllabus", $data); 
         $query = $this->db->get("tbl_syllabus"); 
         return true; 
    
}
     //view principal profile
    function viewPrincipal()
    {
        $this->db->select('*');
        $this->db->from('tbl_principal');
        $query = $this->db->get();
        return $query->result();
    }
    //view tutor of church
    function viewTeachers($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_teacher');
        $this->db->where('sundayclass_id',$id);
        $query = $this->db->get();
        $q="No record found";
        if($query!=false)
        {
           return $query->result();

        }
        else
        {
            return $q  ;
        }
    }
    
    //add exams by principal
    function addExam($exam)
    {
        return $this->db->insert('tbl_exam',$exam);
    }
    //add exams by principal,head,teacher,family
    function viewExam()
    {
         $this->db->select('*');
        $this->db->from('tbl_exam');
        $this->db->where('status',1);
        $query = $this->db->get();
        return $query->result();
    }
    function viewExamAll($d)
    {
//        echo $d;
         $this->db->select('*');
        $this->db->from('tbl_exam');
        $this->db->where('status',1);
        $this->db->where('date >=',$d);
        $query = $this->db->get();
        return $query->result();
    }
    //remove exam from view page set stat 0
    function removeExam($id,$data)
    { 
         $this->db->where('examid',$id);
        $this->db->update('tbl_exam',$data);  
        return true; 
    
    }
    //get exam name by id
     function getExamName($id)
    {
         $this->db->select('examname');
        $this->db->from('tbl_exam');
        $this->db->where('examid',$id);
        $query = $this->db->get();
        return $query->result();
    }
    //view school principal
    
    function viewSchoolPrincipal()
    {
        $this->db->select('tbl_principal.principal,tbl_principal.year');
        $this->db->from('tbl_principal');
//          $this->db->where('tbl_church.chid=tbl_sundayclass.chid');

        $query = $this->db->get();
        return $query->result();
    }
    //view school head
    
    function viewSchoolHead()
    {
        $this->db->select('tbl_sundayclass.head,tbl_sundayclass.year,tbl_sundayclass.chid,tbl_church.chname');
        $this->db->from('tbl_sundayclass,tbl_church');
          $this->db->where('tbl_church.chid=tbl_sundayclass.chid');

        $query = $this->db->get();
        return $query->result();
    }
    //view tutor by principal
    function viewTutor()
    {
        $this->db->select('tbl_teacher.tutor,tbl_teacher.class,
                tbl_teacher.sundayclass_id,tbl_sundayclass.chid,tbl_sundayclass.sundayclass_id,
                tbl_church.chid,tbl_church.chname');
        $this->db->from('tbl_teacher,tbl_sundayclass,tbl_church');
        $this->db->where('tbl_church.chid=tbl_sundayclass.chid');
          $this->db->where('tbl_sundayclass.sundayclass_id=tbl_teacher.sundayclass_id');
          

 $query = $this->db->get();
        return $query->result();
    }
     //student insertion to tbl_student
     function addStudent($student)
    {
        return $this->db->insert('tbl_student',$student);
    }
    
     //get hofname phone number to add student by head
    function getPhone($s)
    {
     $this->db->select ( 'phone' ); 
     $this->db->from ( 'tbl_family' );
     $this->db->where('hofid',$s);
     $query = $this->db->get ();
     return $query->result ();
    }
     //view student by head
    function viewStudents($s)
    {
     $this->db->select ( '*' ); 
     $this->db->from ( 'tbl_student' );
     $this->db->where('sundayclass_id',$s);
     $query = $this->db->get ();
     $norecord="No record found";
     if($query!=false)
        {
           return $query->result();

        }
        else
        {
            return $norecord;
        }
    }
    //get class number for view students by tutor
    function getClass($s)
    {
     $this->db->select ( '*' ); 
     $this->db->from ( 'tbl_teacher' );
     $this->db->where('lid',$s);
     $query = $this->db->get ();
     return $query->result ();
    }
     //view student by class tutor
    function viewClassStud($s)
    {
     $this->db->select ( '*' ); 
     $this->db->from ( 'tbl_student' );
     $this->db->where('class',$s);
     $query = $this->db->get ();
//          $norecord="No record found";

     if($query!=false)
        {
           return $query->result_array();

        }
        else
        {
            return $norecord->result();
        }
    }
     //view student by class tutor
    function viewClassStudents($s)
    {
     $this->db->select ( '*' ); 
     $this->db->from ( 'tbl_student' );
     $this->db->where('class',$s);
     $query = $this->db->get ();
//          $norecord="No record found";

     if($query!=false)
        {
           return $query->result();

        }
        else
        {
            return $norecord->result();
        }
    }
     //view student by id
    function getStudent($id)
    {
     $this->db->select ( 'studname' ); 
     $this->db->from ( 'tbl_student' );
     $this->db->where('studentid',$id);
     $query = $this->db->get ();
     return $query->result ();
    }
    //add student mark by tutor
     function addMark($mark)
    {
        return $this->db->insert('tbl_mark',$mark);
    }
    //check if mark entry dupes
    function checkMark($id,$exam) 
    {
        $this->db->select('*');
        $this->db->from('tbl_mark');
        $this->db->where('studentid',$id);
        $this->db->where('examid',$exam);
//        $this->db->where('status',$attend);
        $query = $this -> db -> get();
        $res= $query->num_rows();
        return $res;
    }
    //get Tutor id by lid
    function getTutorId($lid)
    {
     $this->db->select ( '*' ); 
     $this->db->from ( 'tbl_teacher' );
     $this->db->where('lid',$lid);
     $query = $this->db->get ();
     return $query->result ();
    }
    function getTutorLid($id)
    {
     $this->db->select ( '*' ); 
     $this->db->from ( 'tbl_teacher' );
     $this->db->where('tutorid',$id);
     $query = $this->db->get ();
     return $query->result ();
    }
    
    //remove tutor
    function remove_tutor($id)
    { 
         if ($this->db->delete("tbl_teacher", "tutorid = ".$id)) 
                 { 
            return true; 
         } 
       

    }
    function remove_tutor_login($id)
    { 
         if ($this->db->delete("tbl_login", "lid = ".$id)) 
                 { 
            return true; 
         } 
       

    }
    //view student mark by tutor
    function viewStudentMark($tutorid,$examid)
    {
     $this->db->select ( '*' ); 
     $this->db->from ( 'tbl_mark m' );
     $this->db->join('tbl_student s','m.studentid=s.studentid');
     $this->db->join('tbl_exam e','m.examid=e.examid');
     $this->db->where('tutorid',$tutorid);
     $this->db->where('e.examid',$examid);
     $query = $this->db->get ();
     $norecord="No record found";

     if($query!=false)
        {
           return $query->result();

        }
        else
        {
            return $norecord;
        }
    }
     //view student mark by head
    function viewMark()
    {
     $this->db->select ( '*' ); 
     $this->db->from ( 'tbl_mark m' );
     $this->db->join('tbl_student s','m.studentid=s.studentid');
     $this->db->join('tbl_exam e','m.examid=e.examid');
     
//     $this->db->where('tutorid',$tutorid);
     $query = $this->db->get ();
     $norecord="No record found";

     if($query!=false)
        {
           return $query->result();

        }
        else
        {
            return $norecord->result();
        }
    }
    //check if attendance entry dupes
    function checkAttend($name,$date) 
    {
        $this->db->select('*');
        $this->db->from('tbl_attendance');
        $this->db->where('studentid',$name);
        $this->db->where('date',$date);
//        $this->db->where('status',$attend);
        $query = $this -> db -> get();
        $res= $query->num_rows();
        return $res;
    } 
    //add student attendance by tutor
     function addAttendance($studattend)
    {
       return $this->db->insert('tbl_attendance',$studattend);
    }
    //view attend by teacher
    function viewStudentAttendance($s,$c,$date)
    {
     $this->db->select ( 'a.studentid,a.status,a.date,a.sundayclass_id,s.studname' ); 
     $this->db->from ( 'tbl_attendance a' );
     
     $this->db->where('a.sundayclass_id',$s);
     $this->db->where('a.class',$c);
     $this->db->where('a.date',$date);
     $this->db->join('tbl_student s','a.studentid=s.studentid');
     $query = $this->db->get ();
    return $query->result();

       

    }
    function viewStudentAttend($s,$c,$date1,$date2)
    {
     $this->db->select ( 'a.studentid,a.date,a.status,s.studname' ); 
     $this->db->from ( 'tbl_attendance a' );
     
     $this->db->where('a.sundayclass_id',$s);
     $this->db->where('a.class',$c);
     $this->db->where("a.date BETWEEN  '$date1' AND '$date2'");
     $this->db->join('tbl_student s','a.studentid=s.studentid');
     $query = $this->db->get ();
          $norecord="No record found";

      if($query!=false)
        {
           return $query->result();

        }
        else
        {
            return $norecord->result();
        }

    }
   function viewStudAttend($s,$c)
    {
     $this->db->select ( '*' ); 
     $this->db->from ( 'tbl_student' );
     $this->db->where('sundayclass_id',$s);
          $this->db->where('class',$c);
//     $this->db->join('tbl_student s','a.studentid=s.studentid');

     $query = $this->db->get ();
     
           return $query->result();

    }
    function totDays() 
    {
        $this->db->distinct();
        $this->db->select('date');
        $this->db->from('tbl_attendance');
//        $this->db->group_by('date');
//         $query1 =$this->db->distinct()->select('date')-> get('tbl_attendance');
//         $q2=$this->db->query($query1); 
        $q3 = $this->db->get();
//        return  $q3->result();
        return  $q3->num_rows();
        
    }
    function totDay($date1,$date2) 
    {
        $this->db->distinct();
        $this->db->select('date');
        $this->db->from('tbl_attendance');
//        $this->db->where('studentid',$id);
     $this->db->where("date BETWEEN  '$date1' AND '$date2'");
//        $this->db->where('status',$attend);
        $query = $this -> db -> get();
        $res= $query->num_rows();
        return $res;
    }
    function attendDays($id) 
    {
        
        $this->db->select('*');
        $this->db->from('tbl_attendance');
        $this->db->where('studentid',$id);
//        $this->db->where('date',$date);
        $this->db->where('status','Present');
        $query = $this -> db -> get();
        return $query->num_rows();
        
    }
    public function updatepswd($data,$id)
{
  
         $this->db->set($data); 
         $this->db->where("lid", $id); 
         $this->db->update("tbl_login", $data); 
         $query = $this->db->get("tbl_login"); 
         return true; 
    
}
public function checkpswd($oldpswd,$uname)
{
    
         $this->db->select('password');
         $this->db->from("tbl_login"); 
         $this->db->where("username",$uname);
         $this->db->where("password",MD5($oldpswd));
         $query = $this->db->get(); 
        // print_r($query);
         return $query->num_rows();
          
}
//EXAM POSTPONEMENT
  public function update_exam_view($s)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_exam');
        $this->db->where("examid",$s);
        $query = $this->db->get();
        return $query->result();
    }
    public function update_exam_principal($data,$examid)
    {
        $this->db->set($data);
          
        $this->db->where('examid',$examid);
        
        $this->db->update("tbl_exam", $data);
        return ;
       
    
}
 public function getSchoolId($s)
    {
     $this->db->select ( 'sundayclass_id' ); 
     $this->db->from ( 'tbl_sundayclass' );
     $this->db->where('chid',$s);
     $query = $this->db->get ();
     return $query->result ();
    }
  public function p_viewStudent($sid,$c)
    {
     $this->db->select ( '*' ); 
     $this->db->from ( 'tbl_student');
      $this->db->where('sundayclass_id',$sid);
     $this->db->where('class',$c);
     $query = $this->db->get ();
     return $query->result();

       

    }

}
?>

    