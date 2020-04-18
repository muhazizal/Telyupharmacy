<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembeli extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    checkLoginBuyer();
  }
  
  public function index() {
    $data['buyer'] = $this->db->get_where('buyer', [
      'username' => $this->session->userdata('username'),
    ])->row_array();
    
    $this->load->view('Home', $data['buyer']);
  }
  
}

?>