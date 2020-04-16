<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    check_login();
  }
  
  public function index() {
    $data['user'] = $this->db->get_where('user', ['username' => 
    $this->session->userdata('username')])->row_array();
    
    $this->load->view('V_AdminProduct');
  }
  
}

?>