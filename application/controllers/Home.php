<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  function __construct() {
    parent::__construct();
  }
  
  public function index() {
    $this->load->view('V_Home');
<<<<<<< HEAD
=======
  }

  public function load_aboutUs(){
    $this->load->view("V_AboutUs");
>>>>>>> 90da2416db07050ff49beb96974db544946ed0d3
  }
}

?>