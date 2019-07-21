<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class memReg_model extends CI_Model
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
//REGISTRATION  
    public function insertlogin($login)
    {
        if ($this->db->insert("tbl_login", $login)) 
        {
            return $this->db->insert_id(); 
        } 
    }   
     
    public function insertFamily($famreg)
    {
        if ($this->db->insert("tbl_family", $famreg)) 
        { 
            redirect('FamilyController/welcome');
        } 
    }
    //ADD MEMBER
    public function addMember($data)
    {
        return $this->db->insert("tbl_memberprofile", $data);
       
    } 
    //UPDATE
    public function updateProfile($famup,$hofid)
    {
        $this->db->set($famup);
        $this->db->where('hofid',$hofid);
        $this->db->update("tbl_family", $famup);
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
    function getLoginid($hid)
   {
       $this->db->select('hofid');
        $this->db->from('tbl_family ');
        $this->db->where('lid',$hid);
        $q=$this->db->get();
       return $q->result();
   }
   //UPDATE OVER
   
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
    
    function checkFamily($hofname,$familyname)
    { 
        $this->db->select('*');
        $this->db->from('tbl_family');
        $this->db->where('hofname',$hofname);
        $this->db->where('familyname',$familyname);
        $q=$this->db->get();
        $res=$q->num_rows();  
        return $res;
    }  
 
   
    function displayState() 
    {
        $this->db->select('*');
        $this->db->from('tbl_state');
        $this->db->order_by('state','asc');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function displayChurch() 
    {
        $this->db->select('*');
        $this->db->from('tbl_church');
        $this->db->where('status',1);
       // $this->db->order_by('chname','asc');
        $query = $this->db->get();
        return $query->result();
    }
    //view on clicking family name
    public function getChurchFamilyDetails($s)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_family');
                $this->db->where("hofid",$s);

        $query = $this->db->get();
        return $query->result();
    }
//view myprofile    
public function getDetails($s)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_family');
        $this->db->where("lid",$s);
        $query = $this->db->get();
        return $query->result();
    }

//view by admin
    public function getAllFamily()
    {
        $this->db->select('*'); 
        $this->db->from('tbl_family');
        $query = $this->db->get();
        return $query->result();
    }
    //approve by church
    public function getChurchFamily($s)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_family');
                $this->db->where("chid",$s);
  $this->db->where("status",0);
        $query = $this->db->get();
        return $query->result();
    }
    //view approved family
    public function getApprovedFamily($s)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_family');
                $this->db->where("chid",$s);
                $this->db->where("status",1);

        $query = $this->db->get();
        return $query->result();
    }
//view family members
public function getFamilyDetails($s)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_memberprofile');
//         $this->db->join ( 'tbl_relation', 'tbl_relation.relationid = tbl_memberprofile.relation_hof' );
        $this->db->where("tbl_memberprofile.hofid",$s);
        $query = $this->db->get();
        return $query->result();
    }
    //view prayer schedule
      public function viewPrayerSchedule($id)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_family');
        $this->db->where('chid', $id);
        $query = $this->db->get();
        return $query->result();
    }
//ajax code for drop down
    public function district_show($sid)
    {
       // $dlist = array();
        $this->db->select('*');
        $this->db->from('tbl_district');
        $this->db->where('stateid', $sid);        
        $this->db->order_by('district','asc');

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
                $this->db->order_by('taluk','asc');

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
                $this->db->order_by('village','asc');

        $query = $this->db->get();
	if($query->num_rows()>0)
        {
            return $query->result();
	}
    }
    //add members to mp table
//    public function insertMember($mp)
//    {
//       return $this->db->insert("tbl_memberprofile", $mp);
//         
//    } 
     //approve and reject by admin
   function getLogid($id)
   {
       $this->db->select('lid');
        $this->db->from('tbl_family ');
        $this->db->where('hofid',$id);
        $q=$this->db->get();
       return $q->result();
   }
    function approve_family($id,$data)
    { 
        
        $this->db->where('hofid',$id);
        $this->db->update('tbl_family',$data);  
        return true; 
    }
    function reject_family($id,$data)
    { 
         $this->db->where('hofid',$id);
        $this->db->update('tbl_family',$data);  
        return true; 
    }
       //get notification where type church
  function viewFamilyNotification($type)
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
    //remove_family_member
     function remove_member($id)
    { 
         if ($this->db->delete("tbl_memberprofile", "mpid = ".$id)) 
                 { 
            return true; 
         } 
       

    }
    //vie data for update
    public function update_member_view($s)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_memberprofile');
        $this->db->where("mpid",$s);
        $query = $this->db->get();
        return $query->result();
    }
    //UPDATE by headfamily
    public function updateMemberData($data,$id)
    {
        $this->db->set($data);
          
        $this->db->where('mpid',$id);
        
        $this->db->update("tbl_memberprofile", $data);
        return ;
       
    
}
//update new pass
public function updatepswd($data,$id)
{
  
         $this->db->set($data); 
         $this->db->where("lid", $id); 
         $this->db->update("tbl_login", $data); 
         $query = $this->db->get("tbl_login"); 
         return true; 
    
}
//check password exist for pass change
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
  
 
  
 
