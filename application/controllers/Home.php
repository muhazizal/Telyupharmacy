<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  function __construct() {
    parent::__construct();
  }
  
  public function index() {
    $this->load->view('V_Home');
<<<<<<< HEAD
  }

  public function load_AboutUs() {
    $this->load->view('V_AboutUs');
  }

  public function load_AboutUsLogin() {
    $this->load->view('V_AboutUsLogin');
=======
>>>>>>> c89c97bf75c9e44cb0a5a2c8acad7f0957c036b5
  }
}

?>