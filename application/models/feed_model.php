<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class feed_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function insert_feedback($data)
    {
        return $this->db->insert('tbl_feedback',$data);
    }
    //view by admin
    function getAllFeedback()
    {
        $this->db->select('*');
        $this->db->from('tbl_feedback');
        $query = $this->db->get();
        return $query->result();
    }

    //post in pubic home
     function PostFeedback()
    {
        $this->db->select('*');
        $this->db->from('tbl_feedback');
        $this->db->where('status',1);
        $query = $this->db->get();
        return $query->result();
    }
    function enable_feedback($id,$data)
    { 
        
        $this->db->where('feedid',$id);
        $this->db->update('tbl_feedback',$data);  
        return true; 
    }
    function remove_feedback($id,$data)
    { 
         $this->db->where('feedid',$id);
        $this->db->update('tbl_feedback',$data);  
        return true; 
    }
  
}
?>
      