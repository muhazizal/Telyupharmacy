<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    checkLoginAdmin();
    $this->load->model('M_Admin');
  }
  
  public function index() {
    $username = $this->session->userdata('username');
    $data['admin'] = $this->M_Admin->getAdmin($username);

    $this->load->view('V_AdminHome', $data);
  }
  
}

?>