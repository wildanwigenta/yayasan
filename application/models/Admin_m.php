<?php 

class Admin_m extends CI_model{

  function login($username,$password){
      $where = array(
          "username" => $username,
          "password" => $password,
      );
      $this->db->select('*');
      $this->db->from('admin');
      $this->db->where($where);

      return $this->db->get()->row();
  }

}

?>