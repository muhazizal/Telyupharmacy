<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Buyer extends CI_Model {

  function createBuyer($data) {
    $this->db->insert('buyer', $data);
  }

  public function checkBuyer($username) {
    return $this->db->get_where('buyer', [
      'username' => $username,
    ])->row_array();
  }
  
}

?>