<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class association_signup extends CI_Model
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
    
//registration 
    public function insertAssociation($associationreg)
    {
        if ($this->db->insert("tbl_association", $associationreg)) 
        {
            redirect('AssociationController/welcome');
        } 
    }
    
//view by admin
   function getAllAssociation()
   {
       $this->db->select('*');
        $this->db->from('tbl_association ');//ch wer used for join
//       $this->db->join( 'tbl_churchname cn','ch.chnameid=cn.chnameid');
        $q=$this->db->get();
       return $q->result();
   } 
     //approve and reject by admin
   function getLogid($id)
   {
       $this->db->select('lid');
        $this->db->from('tbl_association ');
        $this->db->where('association_id',$id);
        $q=$this->db->get();
       return $q->result();
   }
    function approve_association($id,$data)
    { 
        
        $this->db->where('association_id',$id);
        $this->db->update('tbl_association',$data);  
        return true; 
    }
    function reject_association($id,$data)
    { 
         $this->db->where('association_id',$id);
        $this->db->update('tbl_association',$data);  
        return true; 
    }
//dupe entry check   
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
   function checkAssociation($asname)
   { 
       $this->db->select('*');
       $this->db->from('tbl_association');
       $this->db->where('assoname',$asname);
        $q=$this->db->get();
       $res=$q->num_rows();  
    return $res;
   }  
 
 function displayVillage() {
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
 
 function displayDistrict() {
    $this->db->select('*');
    $this->db->from('tbl_district');
     $this->db->order_by('district','asc');
    $query = $this->db->get();
//    if($query->num_rows()>0)
//        {
            return $query->result();
//	}
    }
    
    function displayState() 
      {
     
        $this->db->select('*');
        $this->db->from('tbl_state');
         $this->db->order_by('state','asc');
        $query = $this->db->get();
         return $query->result();
	/*if($query->num_rows()>0){
    foreach($query->result() as $row){
        $data[]=$row;
    }
    return $data;*/
	}
        function displayChurch() 
      {
        $this->db->select('*');
        $this->db->from('tbl_churchname');
         $this->db->order_by('chname','asc');
        $query = $this->db->get();
         return $query->result();
	/*if($query->num_rows()>0){
    foreach($query->result() as $row){
        $data[]=$row;
    }
    return $data;*/
	}
       public function taluk_show($districtid)
      {
       $this->db->select('*');
        $this->db->from('tbl_taluk');
        $this->db->where('distid',$districtid);
      $query = $this->db->get();
	if($query->num_rows()>0){
    
    return $query->result();  
     }
    }
   
     public function district_show($stateid)
      {
       // $dlist = array();
        $this->db->select('*');
        $this->db->from('tbl_district');
        $this->db->where('stateid', $sid);
        $query = $this->db->get();
	if($query->num_rows()>0){
    
    return $query->result();
	}
    
      }
//view myprofile    
    public function getDetails($s)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_association');
        $this->db->where("lid",$s);
        $query = $this->db->get();
        return $query->result();
    }
    //update profile get aid from logid
    function getLoginid($id)
   {
       $this->db->select('association_id');
        $this->db->from('tbl_association ');
        $this->db->where('lid',$id);
        $q=$this->db->get();
       return $q->result();
   }
    //UPDATE
    public function updateProfile($assoup,$assoid)
    {
        $this->db->set($assoup);
        $this->db->where('association_id',$assoid);
        $this->db->update("tbl_association", $assoup);
        return ;
       
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
       //get notification where type church
  function viewAssociationNotification($type)
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
public function eventAdd($assoevent)
    {
       $this->db->insert("tbl_event_association", $assoevent);
        
            return; 
        
    } 
    public function viewEvent($s)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_event_association');
        $this->db->where("assoid",$s);
        $query = $this->db->get();
        return $query->result();
    }
}
  
 
  
 
