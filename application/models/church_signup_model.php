<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class church_signup_model extends CI_Model
{
//    function getUser($userName){   
//  $whereCondition = $array = array('USER_NAME' => $userName);
//  $this->db->where($whereCondition); 
//  $query = $this->db->get('trn_user');   
//  return $query->result();  
// }
     public function check_username_availablity($username){
      
$this->db->select('*');
       $this->db->from('tbl_login');
       $this->db->where('username',$username);
        $query=$this->db->get();//executes this query with given variables
       return $query->num_rows();

     }
     public function getHeadFamily($hid){
      
$this->db->select('*');
       $this->db->from('tbl_family');
       $this->db->where('hofid',$hid);
        $query=$this->db->get();//executes this query with given variables
       return $query->result();

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
    public function insertChurch($chreg)
    {
      if ($this->db->insert("tbl_church", $chreg)) { 
              redirect('RegisterController/welcome');
             
         } 
    }  
    //UPDATE
    public function updateProfile($churchup,$chid)
    {
        $this->db->set($churchup);
        $this->db->where('chid',$chid);
        $this->db->update("tbl_church", $churchup);
        return ;
       
    }
    //ACCOUNT
    function getAccountId($id)
   {
       $this->db->select('*');
        $this->db->from('tbl_accounts ');
                $this->db->where('chid',$id);

        $this->db->order_by('st_id','desc');
        $this->db->limit(1);
        
        $q=$this->db->get();
       return $q->result();
   }
   public function addChurchAccount($acc)
    {
      $this->db->insert("tbl_accounts", $acc);
//              redirect('ChurchController/welcome');
    }
    function getAccounts($id)
   {
       $this->db->select('*');
        $this->db->from('tbl_accounts ');
        $this->db->where('chid',$id);
        
        $q=$this->db->get();
       return $q->result();
   }
    //ACCOUNT ENDS
    function getLoginid($chid)
   {
       $this->db->select('chid');
        $this->db->from('tbl_church ');
        $this->db->where('lid',$chid);
        $q=$this->db->get();
       return $q->result();
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
   //UPDATE OVER 
//view by admin
   function getAllChurch()
   {
       $this->db->select('*');
        $this->db->from('tbl_church ');//ch wer used for join
//       $this->db->join( 'tbl_churchname cn','ch.chnameid=cn.chnameid');
                $this->db->where('status',0);

        $q=$this->db->get();
       return $q->result();
   } 
   //approve and reject by admin
   function getLogid($id)
   {
       $this->db->select('lid');
        $this->db->from('tbl_church ');
        $this->db->where('chid',$id);
        $q=$this->db->get();
       return $q->result();
   }
    function approve_church($id,$data)
    { 
        
        $this->db->where('chid',$id);
        $this->db->update('tbl_church',$data);  
        return true; 
    }
    function reject_church($id,$data)
    { 
         $this->db->where('chid',$id);
        $this->db->update('tbl_church',$data);  
        return true; 
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
   
    function checkChurch($chname)
    {
       $this->db->select('*');
       $this->db->from('tbl_church');
       $this->db->where('chname',$chname);
       $q=$this->db->get();
       $res=$q->num_rows();  
       return $res;
    } 
 //update your evangelist
  function getAllEvangelist()
    {
        $this->db->select('*');
        $this->db->from('tbl_evangelist');
         $this->db->order_by('evname');
        $query = $this->db->get();
        return $query->result();
    } 
    //add   
    function updateEvangelist($chid)
    {
        $data=array('chid'=>$chid,
                 'evangelistid'=>$this->input->post('evangelist'),
            'year'=>trim($this->input->post('year')),
            'status'=>1);
        return $this->db->insert('tbl_church_evangelist',$data);
    }
    //viewevangelist histroy of church
  function viewChurchEvangelist($chid) {

    $this->db->select ( '*' ); 
    $this->db->from ( 'tbl_church_evangelist' );
    $this->db->join ( 'tbl_evangelist', 'tbl_evangelist.evangelistid = tbl_church_evangelist.evangelistid' , 'left' );
    $this->db->join ( 'tbl_church', 'tbl_church.chid = tbl_church_evangelist.chid','left' );
    $this->db->where('tbl_church.chid',$chid);
    $query = $this->db->get ();
    return $query->result ();
 }
  //view family list
  function viewChurchFamily($chid) {

    $this->db->select ( '*' ); 
    $this->db->from ( 'tbl_family' );
    $this->db->where('chid',$chid);
    $this->db->where('status',1);
    $query = $this->db->get ();
    return $query->result ();
 }
 //view family head name
 function getFamilyHead($u) {

    $this->db->select ( 'hofname,lid,hofemail' ); 
    $this->db->from ( 'tbl_family' );
    $this->db->where('hofid',$u);
    $query = $this->db->get ();
    return $query->result ();
 }
    //ajax code in reg
    public function district_show($sid)
    {
       // $dlist = array();
        $this->db->select('*');
        $this->db->from('tbl_district');       
        $this->db->order_by('district','asc');
        $this->db->where('stateid', $sid);
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
        $this->db->order_by('taluk','asc');
        $this->db->where('distid', $did);
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
        $this->db->order_by('village','asc');
         $this->db->where('talukid', $tid);
        $query = $this->db->get();
	if($query->num_rows()>0)
        {
            return $query->result();
	}
    }
      
    //view myprofile    
public function getDetails($s)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_church');
        $this->db->where("lid",$s);
        $query = $this->db->get();
        return $query->result();
    }
    
    function displayState() 
    {
        $this->db->select('*');
        $this->db->from('tbl_state');
        $this->db->order_by('state','asc');
        $query = $this->db->get();
        return $query;
    }
    //login for head of sunday school
      public function loginHead($login)
    {
       if ($this->db->insert("tbl_login", $login))
       {
           return $this->db->insert_id(); 
       }
     }   
    //registration
    public function addSchoolHead($school)
    {
      $this->db->insert("tbl_sundayclass", $school) ;
         
    }  
    //view head 
    function viewHead($chid)
   {
       $this->db->select('*');
        $this->db->from('tbl_sundayclass ');
        $this->db->where('chid',$chid);
        $q=$this->db->get();
       return $q->result();
   }
   //get notification where type church
  function viewChurchNotification($type)
   {
       $this->db->select('*');
        $this->db->from('tbl_notification ');
        $this->db->where('nto',$type);
        $q=$this->db->get();
       return $q->result();
   }   
    //view by all public notification 
    function viewAllnotification()
    {
        $this->db->select('*');
        $this->db->from('tbl_notification');
         $this->db->where('nto','all');
         
        $query = $this->db->get();
        return $query->result();
    } 
    
//    function getVillage($query) 
//    {
//        $this->db->select('*');
//        $this->db->from('tbl_village');
//        $this->db->where('villageid','$query');
//        $q = $this->db->get();
//        return $q;
//    }
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
//admin view according to chid
public function getChurch($s)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_church');
        $this->db->where("chid",$s);
        $query = $this->db->get();
        return $query->result();
    }
//admin view according to approved chid
public function getApprovedChurch()
    {
        $this->db->select('*'); 
        $this->db->from('tbl_church');
        $this->db->where("status",1);
        $query = $this->db->get();
        return $query->result();
    }
    //admin view according to rejected
public function getRejectedChurch()
    {
        $this->db->select('*'); 
        $this->db->from('tbl_church');
        $this->db->where("status",2);
        $query = $this->db->get();
        return $query->result();
    }

//get username for principal appointment
     function getUsername($id)
   {
       $this->db->select('*');
       $this->db->from('tbl_login');
       $this->db->where('lid',$id);
       
       $query = $this->db->get();
        return $query->result();
    }
    //SEARCH FAMILY
public function getSearchedFamily($name)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_family');
        $this->db->where("familyname like ",$name,"%");
        $this->db->where("status",1);
        $query = $this->db->get();
        return $query->result();
    }
    public function getAllFamily()
    {
        $this->db->select('*'); 
        $this->db->from('tbl_family');
//        $this->db->where("familyname like ",$name,"%");
        $this->db->where("status",1);
        $query = $this->db->get();
        return $query->result();
    }
    public function getSearchedChurch($name)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_church');
        $this->db->where("chname like ",$name,"%");
        $this->db->where("status",1);
        $query = $this->db->get();
        return $query->result();
    }
     public function getChurchAll()
    {
        $this->db->select('*'); 
        $this->db->from('tbl_church');
//        $this->db->where("familyname like ",$name,"%");
        $this->db->where("status",1);
        $query = $this->db->get();
        return $query->result();
    }
     //UPDATE
     public function update_prayer_view($s)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_chprayer');
        $this->db->where("chprayer_id",$s);
        $query = $this->db->get();
        return $query->result();
    }
    
  
    //UPDATE by church
    public function update_prayer_church($data,$chprayer_id)
    {
        $this->db->set($data);
          
        $this->db->where('chprayer_id',$chprayer_id);
        
        $this->db->update("tbl_chprayer", $data);
        return ;
       
    
}
//delete prayer by church
public function delete_prayer_church($chprayer_id)
    {
        
          
        $this->db->where('chprayer_id',$chprayer_id);
        
        $this->db->delete("tbl_chprayer");
        return ;
       
    
}

  
} 
  
 
