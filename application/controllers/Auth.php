<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  function __construct() {
    parent::__construct();

    $this->load->library('form_validation');
    $this->load->model('M_Auth');
  }

  public function do_signUp() {
    // Set form_validation required
    $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[pembeli.username]', [
      'is_unique' => 'This username already used!'
    ]);
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pembeli.email]', [
      'is_unique' => 'This Email already used!'
    ]);
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
      'matches' => 'Password does not matches, enter correctly!',
      'min_length' => 'Password minimal 8 characters!'
    ]);
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
      'matches' => 'Password does not matches, enter correctly!',
      'min_length' => 'Password minimal 8 characters!'
    ]);
    
    // Check form input
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('V_SignUp');
    } else {
      $data = [
        'username'  => $this->input->post('username'),
        'email'     => $this->input->post('email'),
        'password'  => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'active'    => 1,
        'image'     => 'default.jpg',
      ];

      $this->M_Auth->signUp($data);
      $this->session->set_flashdata('flash_success', 'Sign Up Success!');
      redirect('Home');
    }
  }
  
}

?>