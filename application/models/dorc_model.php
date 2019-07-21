<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class dorc_model extends CI_Model
{
  public function insertuser($data)
  {
    
    //return $this->db->insert('signup', $data);
      
     return $this->db->insert('payment', $data);
     
      // $sql = "select * from tbl_usrs where username = '" . $usr . "' and password = '" . md5($pwd) . "' and status = '1'";
       
  }
 public function check($cno,$cvv,$exp,$cname){
        $this->db->select('*');
          $this->db->from('tbl_dummy_bank');
          $this->db->where('card_no',$cno);
          $this->db->where('cvv',$cvv);
          $this->db->where('expiry_date',$exp);
          $this->db->where('card_name',$cname);
          $this->db->limit(1);
          $query = $this->db->get(); 
          $res=$query->num_rows();
          return $res;
 }
//  public function yearly($cno){
//       $amt=500;
//        $this->db->select('*');
//          $this->db->from('tbl_dummy_bank');
//       
//          $this->db->where('card_no',$cno);
//          
//          $query = $this->db->get(); 
//          $res=$query->result();
//      foreach($res as $r){
//      $b=$r->balance;
//      $a=$r->id;
//      }
//      
//      $this->db->select('*');
//          $this->db->from('tbl_dummy_bank');
//       
//          $this->db->where('account_no',12345678920);
//          
//          $query1 = $this->db->get(); 
//          $res1=$query1->result();
//      foreach($res1 as $r){
//     echo $b1=$r->balance;
//      $a1=$r->id;
//      }
//      
//      $this->db->set('balance',$b-$amt);
//             
//              $this->db->where('id',$a);
//             $this->db-> update('tbl_dummy_bank');
//              
//      $this->db->set('balance',$b1+$amt);
//             
//              $this->db->where('id',$a1);
//             $this->db-> update('tbl_dummy_bank');
//              
// }
// public function monthly($cno){
//     $amt=25;
//        $this->db->select('*');
//          $this->db->from('tbl_dummy_bank');
//       
//          $this->db->where('card_no',$cno);
//          
//          $query = $this->db->get(); 
//          $res=$query->result();
//      foreach($res as $r){
//         $b=$r->balance;
//         $a=$r->id;
//      }
//      
//      $this->db->select('*');
//          $this->db->from('tbl_dummy_bank');
//       
//          $this->db->where('account_no',12345678920);
//          
//          $query1 = $this->db->get(); 
//          $res1=$query1->result();
//      foreach($res1 as $r){
//   $b1=$r->balance;
//      $a1=$r->id;
//      }
//     // echo $b-$amt;
//      $this->db->set('balance',$b-$amt);
//             
//              $this->db->where('id',$a);
//             $this->db-> update('tbl_dummy_bank');
//              
//      $this->db->set('balance',$b1+$amt);
//             
//              $this->db->where('id',$a1);
//             $this->db-> update('tbl_dummy_bank');
// }
 function check_bal($cno){
       $this->db->select('*');
          $this->db->from('tbl_dummy_bank');
       
          $this->db->where('card_no',$cno);
          
          $query = $this->db->get(); 
         return $res=$query->result();
     
 }
 public function pay($cno){
     $amt=10000;
        $this->db->select('*');
          $this->db->from('tbl_dummy_bank');
       
          $this->db->where('card_no',$cno);
          
          $query = $this->db->get(); 
          $res=$query->result();
      foreach($res as $r){
         $b=$r->balance;
         $a=$r->id;
      }
      
      $this->db->select('*');
          $this->db->from('tbl_dummy_bank');
       
          $this->db->where('account_no',12345678920);
          
          $query1 = $this->db->get(); 
          $res1=$query1->result();
      foreach($res1 as $r){
   $b1=$r->balance;
      $a1=$r->id;
      }
     // echo $b-$amt;
      $this->db->set('balance',$b-$amt);
             
              $this->db->where('id',$a);
             $this->db-> update('tbl_dummy_bank');
              
      $this->db->set('balance',$b1+$amt);
             
              $this->db->where('id',$a1);
             $this->db-> update('tbl_dummy_bank');
 }

 
 
}?>