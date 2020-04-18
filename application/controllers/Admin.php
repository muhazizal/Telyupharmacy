<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    checkLoginAdmin();
  }
  
  public function index() {
    $data['admin'] = $this->db->get_where('admin', [
      'username' => $this->session->userdata('username'),
    ])->row_array();
    
    $this->load->view('V_AdminProduct', $data['admin']);
  }
  
}

?>