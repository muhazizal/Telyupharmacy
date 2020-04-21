<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

  public function checkAdmin($username, $password) {
    return $this->db->get_where('admin', [
      'username' => $username,
      'password' => $password,
    ])->row_array();
  }

  public function getAdmin($username) {
    return $this->db->get_where('admin', [
      'username' => $username,
    ])->row_array();
  } 
  
}

?>