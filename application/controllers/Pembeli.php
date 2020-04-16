<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembeli extends CI_Controller {

  public function __construct()
  {
    // parent::__construct();

    // if (!$this->session->userdata('username')) {
    //   redirect('Home');
    // }
  }
  
  public function index() {
    $data['user'] = $this->db->get_where('user', ['username' => 
    $this->session->userdata('username')])->row_array();
    
    $this->load->view('Home', $data);
  }
  
}

?>