<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    checkLoginBuyer();
    $this->load->model('M_Buyer');
  }
  
  public function index() {
    $username = $this->session->userdata('username');
    $data['buyer'] = $this->M_Buyer->checkBuyer($username);
    
    $this->load->view('V_HomeLogin', $data['buyer']);
  }

  // show filename
  // $('.custom-file-input').on('change', () => {
  //   let filename = $(this).val().split('\\').pop();
  //   $(this).next('.custom-file-label').addClass("selected").html(filename);
  // });

  public function do_editProfile() {
    $username = $this->session->userdata('username');
    $data['buyer'] = $this->M_Buyer->checkBuyer($username);
  }
  
}

?>