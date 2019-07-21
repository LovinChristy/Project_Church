<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class postal_model extends CI_Model
{
    function __construct(){
        parent::__construct();
    }
    
     function insert_postoffice()
     {
            $data=array('postoffice'=>trim($this->input->post('txt_postoffice')),
                 'postalcode'=>trim($this->input->post('txt_postalcode')),
                 'talukid'=>$this->input->post('taluk'));
            //echo $data;
          return $this->db->insert('tbl_postoffice',$data);
       
        }
        //add dist in dd
        function getAllTaluk(){
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
       function checkPostoffice($postoffice,$postalcode) {
    $this->db->select('*');
    $this->db->from('tbl_postoffice');
  $this->db->where('postoffice',$postoffice);
    $this->db->where('postalcode',$postalcode);
    $query = $this->db->get();
    $res=$query->num_rows();  
    return $res;
}    



     }
    
    



