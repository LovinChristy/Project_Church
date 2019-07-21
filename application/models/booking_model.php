<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class booking_model extends CI_Model
{
//     public function check_username_availablity(){
//      
//        $username = strtolower(trim($this->input->post('username'))); 
//
//        $query = $this->db->query("SELECT * FROM tbl_login WHERE username='$username'");
//        if($query->num_rows() > 0)
//            return false;
//        else
//            return true;
//        
//     }
       function getAuditoriumDetails()
   { 
       $this->db->select('auditorium_id');
       $this->db->from('tbl_auditorium');
//       $this->db->where('status',0);
        $query=$this->db->get();
//       $res=$q->num_rows();  
       return $query->result();
   }
    public function newAuditorium($audi)
    {
      $this->db->insert("tbl_auditorium", $audi) ;
         
    }
//check dupe booking
  function check($date)
   { 
       $this->db->select('*');
       $this->db->from('tbl_booking');
       $this->db->where('date',$date);
       $this->db->where('status','Booked');
        $q=$this->db->get();
       $res=$q->num_rows();  
    return $res;
   }  
   //make bookings
  public function book($book)
    {
      $this->db->insert("tbl_booking", $book) ;
         
    } 
    function viewBooking()
   { 
       $this->db->select('*');
       $this->db->from('tbl_booking');
       $this->db->where('status','Pending');
        $query=$this->db->get();
//       $res=$q->num_rows();  
       return $query->result();
   }
   function viewApprovedBooking()
   { 
       $this->db->select('*');
       $this->db->from('tbl_booking');
       $this->db->where('status','Booked');
        $query=$this->db->get();
//       $res=$q->num_rows();  
       return $query->result();
   }
   function viewCancelledBooking()
   { 
       $this->db->select('*');
       $this->db->from('tbl_booking');
       $this->db->where('status','Cancel');
        $query=$this->db->get();
//       $res=$q->num_rows();  
       return $query->result();
   }
   function approve_booking($id,$data)
    { 
        
        $this->db->where('bookid',$id);
        $this->db->update('tbl_booking',$data);  
        return true; 
    }
     function getEmail($id)
   { 
       $this->db->select('emailid');
       $this->db->from('tbl_booking');
       $this->db->where('bookid',$id);
        $query=$this->db->get();
//       $res=$q->num_rows();  
       return $query->result();
   }
   
    function cancel_booking($id,$data)
    { 
         $this->db->where('bookid',$id);
        $this->db->update('tbl_booking',$data);  
        return true; 
    }
    } 