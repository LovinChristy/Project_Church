<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class evangelist_signup_model extends CI_Model
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
public function check_username_availablity($username){
      
$this->db->select('*');
       $this->db->from('tbl_login');
       $this->db->where('username',$username);
        $query=$this->db->get();//executes this query with given variables
       return $query->num_rows();

     }
//registration
    public function insertlogin($login)
    {
        if ($this->db->insert("tbl_login", $login)) 
        {
            return $this->db->insert_id(); 
        } 
    }   
     
    public function insertEvangelist($evangelistreg)
    {
      if ($this->db->insert("tbl_evangelist", $evangelistreg)) { 
              redirect('EvangelistController/welcome');
             
         } 
    }  
//check dupe entry
    function checkUser($username,$passhash)
    {
       $this->db->select('*');
       $this->db->from('tbl_login');
       $this->db->where('username',$username);
       $this->db->where('password',$passhash);
       $q=$this->db->get();
       $res=$q->num_rows();  
        return $res;
    }  
    function checkEvangelist($ev_email,$ev_phone)
    { 
       $this->db->select('*');
       $this->db->from('tbl_evangelist');
       $this->db->where('ev_email',$ev_email);
       $this->db->where('ev_phone',$ev_phone);
       $q=$this->db->get();
       $res=$q->num_rows();  
       return $res;
    }  
 //ajax code in reg
    public function district_show($sid)
    {
       // $dlist = array();
        $this->db->select('*');
        $this->db->from('tbl_district');
        $this->db->where('stateid', $sid);
        $this->db->order_by('district');
        $query = $this->db->get();
	if($query->num_rows()>0)
        {
            return $query->result();
	}
    
    }
    
    public function taluk_show($did)
    {
        $this->db->select('*');
        $this->db->from('tbl_taluk');
        $this->db->where('distid', $did);
         $this->db->order_by('taluk');
        $query = $this->db->get();
	if($query->num_rows()>0)
        {
            return $query->result();
	}
    }
      
    public function village_show($tid)
    {
        $this->db->select('*');
        $this->db->from('tbl_village');
        $this->db->where('talukid', $tid);
         $this->db->order_by('village');
        $query = $this->db->get();
	if($query->num_rows()>0)
        {
            return $query->result();
	}
    }
    function displayVillage() 
    {
        $this->db->select('*');
        $this->db->from('tbl_village');
        $this->db->order_by('village','asc');
        $query = $this->db->get();
        $r=$query->result();
        return $r;
    }
  
    function displayTaluk()
    {
        $this -> db -> select('*');
        $this->db->from('tbl_taluk');
        $this->db->order_by('taluk','asc');
        $query = $this -> db -> get();
        return $query->result();
    }
 
    function displayDistrict() 
    {
        $this->db->select('*');
        $this->db->from('tbl_district');
        $this->db->order_by('district','asc');
        $query = $this->db->get();
        return $query->result();
    }
    
    function displayState() 
    {
        $this->db->select('*');
        $this->db->from('tbl_state');
        $this->db->order_by('state','asc');
        $query = $this->db->get();
        return $query->result();
    }
    
    function displayChurch() 
    {
        $this->db->select('*');
        $this->db->from('tbl_church');
        $this->db->order_by('chname','asc');
        $query = $this->db->get();
        return $query->result();
    }
       
   
//view by admin     
    function getAllEvangelist()
    {
        $this->db->select('*');
        $this->db->from('tbl_evangelist');
                  $this->db->where('status',0);

        $query = $this->db->get();
        return $query->result();
    }
    function getEvangelist($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_evangelist');
        $this->db->where('evangelistid',$id);
        $query = $this->db->get();
        return $query->result();
    }
    function getApprovedEvangelist()
    {
        $this->db->select('*');
        $this->db->from('tbl_evangelist');
         $this->db->where('status',1);

        $query = $this->db->get();
        return $query->result();
    }
    function getRejectedEvangelist()
    {
        $this->db->select('*');
        $this->db->from('tbl_evangelist');
                 $this->db->where('status',2);

        $query = $this->db->get();
        return $query->result();
    }
            

//view myprofile    
    public function getDetails($s)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_evangelist');
        $this->db->where("lid",$s);
        $query = $this->db->get();
        return $query->result();
    }
    //approve and reject by admin
   function getLogid($id)
   {
       $this->db->select('lid');
        $this->db->from('tbl_evangelist ');
        $this->db->where('evangelistid',$id);
        $q=$this->db->get();
       return $q->result();
   }
    function approve_evangelist($id,$data)
    { 
        
        $this->db->where('evangelistid',$id);
        $this->db->update('tbl_evangelist',$data);  
        return true; 
    }
    function reject_evangelist($id,$data)
    { 
         $this->db->where('evangelistid',$id);
        $this->db->update('tbl_evangelist',$data);  
        return true; 
    }
       //GET log type
    function getType($lid)
   {
       $this->db->select('type');
        $this->db->from('tbl_login ');
        $this->db->where('lid',$lid);
        $q=$this->db->get();
       return $q->result();
   }
       //get notification where type evg
  function viewEvangelistNotification($type)
   {
       $this->db->select('*');
        $this->db->from('tbl_notification ');
        $this->db->where('nto',$type);
        $q=$this->db->get();
       return $q->result();
   } 
   //view by user
    function viewAllnotification()
    {
        $this->db->select('*');
        $this->db->from('tbl_notification');
         $this->db->where('nto','all');
        $query = $this->db->get();
        return $query->result();
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
}
  
 
  
 
