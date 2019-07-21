<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class notification_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
//admin add notification
    function insert_notification($data)
    {
        return $this->db->insert('tbl_notification',$data);
    }
//check if notification exist
//   function checkRelation($notification) 
//   {
//        $this->db->select('notificationid','notification');
//        $this->db->from('tbl_notification');
//        $this->db->where('notification',$notification);
//        $query = $this -> db -> get();
//        $res= $query->num_rows();
//        return $res;
//    }

//view by admin
    function getAllnotification()
    {
        $this->db->select('*');
        $this->db->from('tbl_notification n');
         $this->db->order_by('dateposted','desc');
         $this->db->join('tbl_user u','n.nto=u.utypeid');
//         $this->db->order_by('dateposted','desc');
            $query = $this->db->get();
        return $query->result();
    } 
      function openNotification($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_notification n');
        $this->db->where('nid',$id);
                 $this->db->join('tbl_user u','n.nto=u.utypeid');

        $query = $this->db->get();
        return $query->result();
    }
    //view by user
    function viewChurchnotification($id)
    {
        
        $this->db->select('*');
        $this->db->from('tbl_notification n');
         $this->db->join('tbl_user u','n.nto=u.utypeid');
        $this->db->where('n.senderid',$id);
//         $this->db->limit('5');
        $query = $this->db->get();
        return $query->result();
    } 
     //view by user
    function viewNotification_fromChurch()
    {
        
        $this->db->select('*');
        $this->db->from('tbl_notification n');
         $this->db->join('tbl_user u','n.nto=u.utypeid');
        $this->db->where('n.nfrom','2');
//         $this->db->limit('5');
        $query = $this->db->get();
        return $query->result();
    } 
  
    // Function to Delete selected record from table name students.
    function delete_notification($id)
    { 
         if ($this->db->delete("tbl_notification", "nid = ".$id)) 
                 { 
            return true; 
         } 
       

    }
        //post in pubic home
     function PostNotification()
    {
        $this->db->select('*');
        $this->db->from('tbl_notification');
        $this->db->where('status',1);
        $query = $this->db->get();
        return $query->result();
    }
    //enable
    function enable_notification($id,$data)
    { 
        
        $this->db->where('nid',$id);
        $this->db->update('tbl_notification',$data);  
        return true; 
    }
    //disable
    function hide_notification($id,$data)
    { 
         $this->db->where('nid',$id);
        $this->db->update('tbl_notification',$data);  
        return true; 
    }
    //update
    public function update_notification_view($s)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_notification');
        $this->db->where("nid",$s);
        $query = $this->db->get();
        return $query->result();
    }
    //UPDATE by admin
    public function update_notification_admin($data,$title)
    {
        $this->db->set($data);
          
        $this->db->where('title',$title);
        
        $this->db->update("tbl_notification", $data);
        return ;
       
    
}}
?>