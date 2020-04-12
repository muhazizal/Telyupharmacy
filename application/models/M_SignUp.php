<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_SignUp extends CI_Model {
  function signUp($data) {
    $this->db->insert('pembeli', $data);
  }
}

?>