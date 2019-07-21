<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class district_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
//adding district
    function getAllStates()
    {
        $this->db->select('*');
        $this->db->from('tbl_state');
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
//registration   
    function insert_district()
    {
        $data=array('district'=>trim($this->input->post('txt_district')),
                 'stateid'=>$this->input->post('state'),
            'status'=>1);
        return $this->db->insert('tbl_district',$data);
    }
        
//check duplicate entry
    function checkDistrict($district) 
    {
        $this->db->select('*');
        $this->db->from('tbl_district');
        $this->db->where('district',$district);
        $query = $this->db->get();
        $res=$query->num_rows();  
        return $res;
    }
//???   
    function getAllDistrict()
    {
        $this->db->select('*');
        $this->db->from('tbl_district');
        $query = $this->db->get();
        return $query->result();
    }
    function enable_district($id,$data)
    { 
        
        $this->db->where('distid',$id);
        $this->db->update('tbl_district',$data);  
        return true; 
    }
    function disable_district($id,$data)
    { 
         $this->db->where('distid',$id);
        $this->db->update('tbl_district',$data);  
        return true; 
    }
     // Function to Delete selected record from table name students.
    function delete_district($id)
    { 
         if ($this->db->delete("tbl_district", "distid = ".$id)) 
                 { 
            return true; 
         } 
       

    }
}
?>