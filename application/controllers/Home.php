<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  function __construct() {
    parent::__construct();

    $this->load->model('M_Product');
    $this->load->model('M_Article');
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
    
    $data['product'] = $this->M_Product->get_AllProduct();
    $data['article'] = $this->M_Article->get_AllArticle();
    $this->load->view('V_Home', $data);
  }

  public function load_AboutUs() {
    $this->load->view('V_AboutUs');
  }

  public function load_AboutUsLogin() {
    $this->load->view('V_AboutUsLogin');
  }
}

?>