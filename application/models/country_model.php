<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class country_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function insert_country($data)
    {
        return $this->db->insert('tbl_country',$data);
    }
//check if country exist
    function checkCountry($country) 
    {
        $this->db->select('countryid','country');
        $this->db->from('tbl_country');
        $this->db->where('country',$country);
        $query = $this -> db -> get();
        $res= $query->num_rows();
        return $res;
    } 
//view by admin
    function getAllCountry()
    {
        $this->db->select('*');
        $this->db->from('tbl_country');
        $query = $this->db->get();
        return $query->result();
    }
    function enable_country($id,$data)
    { 
        
        $this->db->where('countryid',$id);
        $this->db->update('tbl_country',$data);  
        return true; 
    }
    function disable_country($id,$data)
    { 
         $this->db->where('countryid',$id);
        $this->db->update('tbl_country',$data);  
        return true; 
    }
     // Function to Delete selected record from table name students.
    function delete_country($id)
    { 
         if ($this->db->delete("tbl_country", "countryid = ".$id)) 
                 { 
            return true; 
         } 
       

    }
}
     

?>