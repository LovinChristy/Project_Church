<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class village_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function insert_village()
    {
        $data=array('village'=>trim($this->input->post('txt_village')),
                 'talukid'=>$this->input->post('taluk'),
            'status'=>1);
        return $this->db->insert('tbl_village',$data);
    }
//add village
    function getAllTaluk()
    {
    $this->db->select('*');
    $this->db->from('tbl_taluk');
    $this->db->order_by('taluk','asc');
    $q = $this->db->get();

    if ($q->num_rows() > 0){
        foreach($q->result() as $row) {
            $data[] = $row;
        }
        return $data;
    }
    }
   //check duplicate entry
       function checkVillage($village) {
    $this->db->select('*');
    $this->db->from('tbl_village');
    $this->db->where('village',$village);
    $query = $this->db->get();
    $res=$query->num_rows();  
    return $res;
} 
//view by admin
function getAllVillage()
 {
  $this->db->select('*');
  $this->db->from('tbl_village');
  $query = $this->db->get();
  return $query->result();
 }
 function enable_village($id,$data)
    { 
        
        $this->db->where('villageid',$id);
        $this->db->update('tbl_village',$data);  
        return true; 
    }
    function disable_village($id,$data)
    { 
         $this->db->where('villageid',$id);
        $this->db->update('tbl_village',$data);  
        return true; 
    }
     // Function to Delete selected record from table name students.
    function delete_village($id)
    { 
         if ($this->db->delete("tbl_village", "villageid = ".$id)) 
                 { 
            return true; 
         } 
       

    }

}
    
    



