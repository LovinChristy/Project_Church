<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function get_user($username, $password)
    {
        $sql = "select * from tbl_login where username = '" . $username . "' and password = '" . MD5($password) . "'and status = '1'";
        $query = $this->db->query($sql);
        $res=$query->result();
        return $res;
    }
     
    function checkUser($username,$passhash)
    {
       $this->db->select('*');
       $this->db->from('tbl_login');
       $this->db->where('username',$username);
       $this->db->where('password',$passhash);
       $q=$this->db->get();
       $res=$q->num_rows();  
       return $res;
    }  
      
    function getDetails($id)
    {
       $this->db->select('*');
       $this->db->from('tbl_login');
       $this->db->where('lid',$id);
       $q=$this->db->get();
       return $q->result();
    }  
    function reset_password($username,$data)
    {
        $this->db->where('username',$username);
        $this->db->update('tbl_login',$data);
        redirect('LoginController/index');
    }
    function log_reject_church($logid,$data)
    { 
        
        $this->db->where('lid',$logid);
        $this->db->update('tbl_login',$data);  
        return true; 
    }
    function log_approve_church($logid,$data)
    { 
        
        $this->db->where('lid',$logid);
        $this->db->update('tbl_login',$data);  
        return true; 
    }
    function log_reject_association($logid,$data)
    { 
        
        $this->db->where('lid',$logid);
        $this->db->update('tbl_login',$data);  
        return true; 
    }
    function log_approve_association($logid,$data)
    { 
        
        $this->db->where('lid',$logid);
        $this->db->update('tbl_login',$data);  
        return true; 
    }
    function log_reject_evangelist($logid,$data)
    { 
        
        $this->db->where('lid',$logid);
        $this->db->update('tbl_login',$data);  
        return true; 
    }
    function log_approve_evangelist($logid,$data)
    { 
        
        $this->db->where('lid',$logid);
        $this->db->update('tbl_login',$data);  
        return true; 
    }
    function log_reject_family($logid,$data)
    { 
        
        $this->db->where('lid',$logid);
        $this->db->update('tbl_login',$data);  
        return true; 
    }
    function log_approve_family($logid,$data)
    { 
        
        $this->db->where('lid',$logid);
        $this->db->update('tbl_login',$data);  
        return true; 
    }
    //forgot pass
    

function get_pass($email,$p)
            {
              $this->db->set('password',MD5($p));
             $this->db->where('username',$email);
             $this->db->update('tbl_login');
            }
    
}
?>