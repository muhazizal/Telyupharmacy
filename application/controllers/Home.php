<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  function __construct() {
    parent::__construct();

    // Load Model
  }
  
  public function index() {
    $this->load->view('V_Home');
  }
}

?>