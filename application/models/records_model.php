<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class records_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    //add church baptism record
    public function addChurchBaptism($data)
    {
        return $this->db->insert('tbl_baptism',$data);
    }
    //check dupe entry
   function checkChurchBaptism($prayer,$chid)
   {
       $this->db->select('prayername');
       $this->db->from('tbl_baptism');
       $this->db->where('chid',$chid);
       $this->db->where('prayername',$prayer);
       $q=$this->db->get();
       $res=$q->num_rows();  
       return $res;
    }  
    //add church marriage records
     public function addChurchMarriage($data)
    {
         if ($this->db->insert('tbl_marriage',$data)) 
        { 
           return $this->db->insert_id(); 
        } 
    }
    public function addMarriageWitness($witdata)
    {
         return $this->db->insert('tbl_marriage_witness',$witdata) ;
         
    }
    
    //check dupe entry
   function checkChurchMarriage($bridename,$groomname,$chid)
   {
       $this->db->select('bridename','groomname');
       $this->db->from('tbl_marriage');
       $this->db->where('chid',$chid);
       $this->db->where('bridename',$bridename);
       $this->db->where('groomname',$groomname);
       $q=$this->db->get();
       $res=$q->num_rows();  
       return $res;
    } 
    //add church death records
     public function addChurchDeath($data)
    {
        return $this->db->insert('tbl_death',$data);
    }
    //check dupe entry
   function checkChurchDeath($data,$chid)
   {
       $this->db->select('prayername');
       $this->db->from('tbl_death');
       $this->db->where('chid',$chid);
       $this->db->where('prayername',$prayer);
       $q=$this->db->get();
       $res=$q->num_rows();  
       return $res;
    } 
    //views
      function churchBaptismRecord($chid)
   {
       $this->db->select('*');
       $this->db->from('tbl_baptism');
       $this->db->where('chid',$chid);
       $q=$this->db->get();
       return $q->result();
 
    }
       function churchMarriageRecord($chid)
   {
       $this->db->select('*');
       $this->db->from('tbl_marriage');
       $this->db->where('chid',$chid);
       $q=$this->db->get();
       return $q->result();
 
    }
    function churchDeathRecord($chid)
   {
       $this->db->select('*');
       $this->db->from('tbl_death');
       $this->db->where('chid',$chid);
       $q=$this->db->get();
       return $q->result();
 
    }
    }
    
    ?>