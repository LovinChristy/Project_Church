<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class taluk_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
//add taluk
    function insert_taluk()
    {
        $data=array('taluk'=>trim($this->input->post('txt_taluk')),
                 'distid'=>$this->input->post('district'),
            'status'=>1);
        return $this->db->insert('tbl_taluk',$data);
    }
//add dist in dd
    function getAllDistrict()
    {
        $this->db->select('*');
        $this->db->from('tbl_district');
        $this->db->order_by('district','asc');
        $q = $this->db->get();
        if ($q->num_rows() > 0)
        {
            foreach($q->result() as $row) 
            {
                $data[] = $row;
            }
            return $data;
        }
    }
//check duplicate entry
    function checkTaluk($taluk) 
    {
        $this->db->select('*');
        $this->db->from('tbl_taluk');
        $this->db->where('taluk',$taluk);
        $query = $this->db->get();
        $res=$query->num_rows();  
        return $res;
    }
//view by admin    
    function getAllTaluk()
    {
        $this->db->select('*');
        $this->db->from('tbl_taluk');
        $query = $this->db->get();
        return $query->result();
    }
    function enable_taluk($id,$data)
    { 
        
        $this->db->where('talukid',$id);
        $this->db->update('tbl_taluk',$data);  
        return true; 
    }
    function disable_taluk($id,$data)
    { 
         $this->db->where('talukid',$id);
        $this->db->update('tbl_taluk',$data);  
        return true; 
    }
     // Function to Delete selected record from table name students.
    function delete_taluk($id)
    { 
         if ($this->db->delete("tbl_taluk", "talukid = ".$id)) 
                 { 
            return true; 
         } 
       

    }
}
    
    



