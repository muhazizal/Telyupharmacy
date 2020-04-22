<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Buyer extends CI_Model {

  public function createBuyer($data) {
    $this->db->insert('buyer', $data);
  }

  public function checkBuyer($username) {
    return $this->db->get_where('buyer', [
      'username' => $username,
    ])->row_array();
  }
  
  public function editBuyer($id, $data) {
    $this->db->where('id', $id);
    return $this->db->update('buyer', $data);
  }

  public function changePassword($id, $newPassword) {
    $this->db->set('password', $newPassword);
    $this->db->where('id', $id);
    return $this->db->update('buyer');
  } 
}

?>