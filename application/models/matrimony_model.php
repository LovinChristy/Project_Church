<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class matrimony_model extends CI_Model
{
function get_user($username, $password)
    {
        $sql = "select * from tbl_matrimony where email = '" . $username . "' and password = '" . $password . "'and status = '1'";
        $query = $this->db->query($sql);
        $res=$query->result();
        return $res;
    }
   public function registerUser($reg)
    {
      $this->db->insert("tbl_matrimony", $reg);
//              redirect('MatrimonyController/reg');
    }
    public function getId()
    {
      $this->db->select ( 'id' ); 
     $this->db->from ( 'tbl_matrimony' );
     $this->db->order_by('id','desc');
     $query = $this->db->get ();
     return $query->result ();
    }
    //search except logged in user profile
    
    public function profileView($id)
    {
      $this->db->select ( '*' ); 
     $this->db->from ( 'tbl_matrimony' );
     
      $this->db->where('matr_id',$id);
    $query = $this->db->get ();
     return $query->result ();
    }
     public function brideProfileView($id)
    {
      $this->db->select ( '*' ); 
     $this->db->from ( 'tbl_matrimony' );
     $this->db->order_by('name','asc');
      $this->db->where('gender','bride');
      $this->db->where('matr_id !=',$id);
    $query = $this->db->get ();
     return $query->result ();
    }
     public function groomProfileView($id)
    {
      $this->db->select ( '*' ); 
     $this->db->from ( 'tbl_matrimony' );
$this->db->order_by('name','asc');
    $this->db->where('gender','groom');
               $this->db->where('matr_id !=',$id);

     $query = $this->db->get ();
     return $query->result ();
    }
    }