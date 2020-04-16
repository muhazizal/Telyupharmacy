<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  function __construct() {
    parent::__construct();

    $this->load->model('M_User');
  }

  // Load sign in by default
  public function index() {
    $this->form_validation->set_rules('username', 'Username', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
    
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('V_Home');
    } else {
      $this->_do_signIn();
    }
  }

  // Function sign in
  private function _do_signIn() {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $user = $this->M_User->checkUser($username);

    // if user avail
    if ($user) {
      // if user active
      if ($user['active'] == 1) {
        // if password true
        if (password_verify($password, $user['password'])) {
          $data = [
            'username' => $user['username'],
            'role_id'  => $user['role_id']
          ];
          // Role Admin = 1, Role Pembeli = 2
          if ($user['role_id'] == 1) {
            $this->session->set_userdata($data);
            $this->session->set_flashdata('signIn_success', 'Sign in Success!');
            redirect('Admin');
          } else {
            $this->session->set_userdata($data);
            $this->session->set_flashdata('signIn_success', 'Sign in Success!');
            redirect('Pembeli');
          }
        } else {
          $this->session->set_flashdata('signIn_failed', 'Sign in Failed!');
          redirect('Home');
        }
      } else {
        $this->session->set_flashdata('signIn_failed', 'Sign in Failed!');
        redirect('Home');
      }
    } else {
      $this->session->set_flashdata('signIn_failed', 'Sign in Failed!');
      redirect('Home');
    }
  }

  // function sign up
  public function do_signUp() {
    // Set form_validation required
    $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
      'is_unique' => 'This username already used!'
    ]);
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
      'is_unique' => 'This Email already used!'
    ]);
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
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
        'username'  => htmlspecialchars($this->input->post('username', true)),
        'email'     => htmlspecialchars($this->input->post('email', true)),
        'password'  => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'image'     => 'default.jpg',
        'active'    => 1,
        'role_id'   => 1,
      ];

      $this->M_User->createUser($data);
      $this->session->set_flashdata('signUp_success', 'Sign Up Success!');
      redirect('Home');
    }
  }

  public function do_logout() {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('role_id');
    $this->session->set_flashdata('logout', 'Logout Success!');
    redirect('Home');
  }
  
}

?>