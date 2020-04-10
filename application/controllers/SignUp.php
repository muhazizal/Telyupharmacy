<?php

class SignUp extends CI_Controller {
  public function index() {
    $this->load->helper('url');
    $this->load->view('V_SignUp');
  }
}

?>