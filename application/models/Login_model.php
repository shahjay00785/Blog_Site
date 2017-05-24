<?php

class Login_model extends CI_Model{
  public function login_valid($username,$password){

    /*    $q=$this->db->query("select * from users");
    $result=$q->result_array();
    */
    /* $q= $this->db->where(['uname'=>$username,'pword'=>$password])
    ->get('users');
    */
    $q=$this->db->query("select * from users where uname='".$username."' and pword='".$password."'");
    $result=$q->result_array();


    if($q->num_rows()){
      //   return true;
          //  print_r($q->result()); exit;
            return $q->row()->id;
    }
    else{
      return false;
    }



  }
}

?>
