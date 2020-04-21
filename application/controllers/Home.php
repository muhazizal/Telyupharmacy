<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  function __construct() {
    parent::__construct();

    $this->load->model('M_Buyer');
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
    
<<<<<<< HEAD
    $data['products'] = $this->M_Product->get_AllProduct();
    $data['articles'] = $this->M_Article->get_AllArticle();
    $this->load->view('V_DetailArticle', $data);
=======
    $data['product'] = $this->M_Product->get_AllProduct();
    $data['article'] = $this->M_Article->get_AllArticle();
    $this->load->view('V_Home', $data);
>>>>>>> ef24d8618cc479c39fd0b0d6e674f1e437e93709
  }

  public function load_AboutUs() {
    $this->load->view('V_AboutUs');
  }

  public function load_AboutUsLogin() {
    $username = $this->session->userdata('username');
    $data['buyer'] = $this->M_Buyer->checkBuyer($username);
    $this->load->view('V_AboutUsLogin', $data);
  }
}

?>