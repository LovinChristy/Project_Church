<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class relation_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
//admin add relation
    function insert_relation($data)
    {
        return $this->db->insert('tbl_relation',$data);
    }
//check if relation exist
   function checkRelation($relation) 
   {
        $this->db->select('relationid','relation');
        $this->db->from('tbl_relation');
        $this->db->where('relation',$relation);
        $query = $this -> db -> get();
        $res= $query->num_rows();
        return $res;
    }
//view by admin
    function getAllrelation()
    {
        $this->db->select('*');
        $this->db->from('tbl_relation');
        $query = $this->db->get();
        return $query->result();
    } 
    function enable_relation($id,$data)
    { 
        
        $this->db->where('relationid',$id);
        $this->db->update('tbl_relation',$data);  
        return true; 
    }
    function disable_relation($id,$data)
    { 
         $this->db->where('relationid',$id);
        $this->db->update('tbl_relation',$data);  
        return true; 
    }
     // Function to Delete selected record from table name students.
    function delete_relation($id)
    { 
         if ($this->db->delete("tbl_relation", "relationid = ".$id)) 
                 { 
            return true; 
         } 
    }
    function getRelation()
    {
        $this->db->select('*');
        $this->db->from('tbl_relation');
        $this->db->where('status',1);
        $query = $this->db->get();
        return $query->result();
    } 
  
}
?>