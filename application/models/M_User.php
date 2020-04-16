<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

  function createUser($data) {
    $this->db->insert('user', $data);
  }

  function checkUser($data) {
    return $this->db->get_where('user', ['username' => $data])->row_array();
  }
}

?>