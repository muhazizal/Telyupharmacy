<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  function __construct() {
    parent::__construct();
  }
  
  public function index() {
    if ($this->session->userdata('username')) {
      if ($this->session->userdata('status') == 1) {
        $this->session->set_flashdata('signOutFirst', 'Please sign out first!');
        redirect('Admin');
      } else {
        $this->session->set_flashdata('signOutFirst', 'Please sign out first!');
        redirect('Buyer');
      }
    }
    
    $this->load->view('V_Home');
  }

  public function load_AboutUs() {
    $this->load->view('V_AboutUs');
  }

  public function load_AboutUsLogin() {
    $this->load->view('V_AboutUsLogin');
  }
}

?>