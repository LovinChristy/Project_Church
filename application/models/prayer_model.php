<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class prayer_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function addChurchPrayer($data)
    {
        return $this->db->insert('tbl_chprayer',$data);
    }
    //check dupe entry
   function checkChurchPrayer($prayer,$chid)
   {
       $this->db->select('prayername');
       $this->db->from('tbl_chprayer');
       $this->db->where('chid',$chid);
       $this->db->where('prayername',$prayer);
       $q=$this->db->get();
       $res=$q->num_rows();  
       return $res;
    }
    //secretary view
     function viewChurchPrayer($chid)
   {
       $this->db->select('*');
       $this->db->from('tbl_chprayer');
       $this->db->where('chid',$chid);
       
       $q=$this->db->get();
       
       return $q->result();
    }
    //member view
     function viewPrayerMember($s)
   {
       $this->db->select('*');
       $this->db->from('tbl_chprayer');
       $this->db->where('chid',$s);
       $q=$this->db->get();
       
       return $q->result();
    }
    //add prayer request
     public function addPrayerRequest($data)
    {
        return $this->db->insert('tbl_prayer_request',$data);
    }
      function viewPrayerRequest()
   {
       $this->db->select('*');
       $this->db->from('tbl_prayer_request');
       $q=$this->db->get();
       return $q->result();
    }
    }
    
    ?>