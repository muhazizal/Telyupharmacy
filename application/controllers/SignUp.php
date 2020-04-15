<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp extends CI_Controller {
  function __construct() {
    parent::__construct();

    // Load Model
    $this->load->model('M_SignUp');
  }
  
  public function index() {
    // Set form_validation required
    $this->form_validation->set_rules('fullname',     'FULLNAME',     'required');
    $this->form_validation->set_rules('email',        'EMAIL',        'required');
    $this->form_validation->set_rules('phonenumber',  'PHONENUMBER',  'required');
    $this->form_validation->set_rules('password',     'PASSWORD',     'required');
    
    // Check form input
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('V_SignUp');
    } else {
      $data['fullname'] =     $this->input->post('fullname');
      $data['email'] =        $this->input->post('email');
      $data['phonenumber'] =  $this->input->post('phonenumber');
      $data['password'] =     $this->input->post('password');

      $this->M_SignUp->signUp($data);
      $this->session->set_flashdata('flash_success', 'Sign Up Success!');
      redirect('Home/index');
    }
  }
}

?>