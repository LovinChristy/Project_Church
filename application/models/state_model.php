<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class state_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
//admin insert 
    function insert_state()
    {
        $data=array('state'=>$this->input->post('txt_state'),
                 'countryid'=>$this->input->post('country'),
            'status'=>1);
        return $this->db->insert('tbl_state',$data);
    }
//check if state exist
    function checkState($state) 
    {
        $this->db->select('*');
        $this->db->from('tbl_state');
        $this->db->where('state',$state);
        $query = $this->db->get();
        $res=$query->num_rows();
        return $res;
    } 
//add by admin
    function getAllCountries()
    {
        $this->db->select('*');
        $this->db->from('tbl_country');
        $q = $this->db->get();
        if ($q->num_rows()> 0)
        {
            foreach($q->result() as $row) 
            {
                $data[] = $row;
            }
            return $data;
        }
    }
//view by admin
    function getAllState()
    {
        $this->db->select('*');
        $this->db->from('tbl_state');
        $query = $this->db->get();
        return $query->result();
    }
     function enable_state($id,$data)
    { 
        
        $this->db->where('stateid',$id);
        $this->db->update('tbl_state',$data);  
        return true; 
    }
    function disable_state($id,$data)
    { 
         $this->db->where('stateid',$id);
        $this->db->update('tbl_state',$data);  
        return true; 
    }
     // Function to Delete selected record from table name students.
    function delete_state($id)
    { 
         if ($this->db->delete("tbl_state", "stateid = ".$id)) 
                 { 
            return true; 
         } 
       

    }
}
     

?>