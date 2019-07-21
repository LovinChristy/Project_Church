<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class donation_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function donation_request($data)
    {
        return $this->db->insert('tbl_donation',$data);
    }
    //for admin view
     function getAllDonation()
    {
       $this->db->select('*');
       $this->db->from('tbl_donation');
       $this->db->where('status','Pending');
        $query = $this->db->get();
  return $query->result();
    }
    function viewDonationRequest()
    {
       $this->db->select('*');
       $this->db->from('tbl_donation');
       $this->db->where('status','Approved');
        $query = $this->db->get();
  return $query->result();
    }
    function approverequest($id,$data)
    { 
        
        $this->db->where('donation_id',$id);
        $this->db->update('tbl_donation',$data);  
        return true; 
    }
    function rejectrequest($id,$data)
    { 
        
        $this->db->where('donation_id',$id);
        $this->db->update('tbl_donation',$data);  
        return true; 
    }
    //view by all
    function approveddonation()
    { 
        
        $this->db->select('*');
       $this->db->from('tbl_donation');
              $this->db->where('status','Approved');

        $query = $this->db->get();
  return $query->result();
    }
    function rejecteddonation()
    { 
        
        $this->db->select('*');
       $this->db->from('tbl_donation');
              $this->db->where('status','Rejected');

        $query = $this->db->get();
  return $query->result();
    }
    function removerequest($id)
    { 
         $this->db->where('donation_id',$id);
        $this->db->delete('tbl_donation');  
        return true; 
    }
}
?>