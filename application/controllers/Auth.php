<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  function __construct() {
    parent::__construct();

    $this->load->model('M_Admin');
    $this->load->model('M_Buyer');
  }

  // Load sign in by default
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

    $this->form_validation->set_rules('username', 'Username', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
    
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('V_Home');
    } else {
      $this->_do_signIn();
    }
  }

  private function _do_signIn() {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $admin = $this->M_Admin->checkAdmin($username, $password);
    $buyer = $this->M_Buyer->checkBuyer($username);

    if ($admin) {
      if ($admin['status'] == 1) {
        $data = [
          'username' => $admin['username'],
          'status'   => $admin['status'],
          'id'       => $admin['id'],
        ];

        $this->session->set_userdata($data);
        $this->session->set_flashdata('signIn_success', 'Welcome to Telyupharmacy, '.$admin['username']);
        redirect('Admin');
      } else {
        $this->session->set_flashdata('signIn_failed', 'Sign in failed!');
        redirect('Auth');
      }
    } else if ($buyer) {
      if ($buyer['status'] == 2) {
        if (password_verify($password, $buyer['password'])) {
          $data = [
            'username' => $buyer['username'],
            'name'     => $buyer['name'],
            'email'    => $buyer['email'],
            'status'   => $buyer['status'],
            'id'       => $buyer['id'],
            'password' => $buyer['password']
          ];

          $this->session->set_userdata($data);
          $this->session->set_flashdata('signIn_success', 'Welcome to Telyupharmacy, '.$buyer['username']);
          redirect('Buyer');
        } else {
          $this->session->set_flashdata('signIn_failed', 'Sign in failed!');
          redirect('Auth');
        }
      } else {
        $this->session->set_flashdata('signIn_failed', 'Sign in failed!');
        redirect('Auth');
      }
    } else {
      $this->session->set_flashdata('signIn_failed', 'Sign in failed!');
      redirect('Auth');
    }
  }

  public function do_signUp() {
    if ($this->session->userdata('username')) {
      if ($this->session->userdata('status') == 1) {
        $this->session->set_flashdata('signOutFirst', 'Please sign out first!');
        redirect('Admin');
      } else {
        $this->session->set_flashdata('signOutFirst', 'Please sign out first!');
        redirect('Buyer');
      }
    }

    $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[buyer.username]', [
      'is_unique' => 'This username already used!'
    ]);
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[buyer.email]', [
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
    
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('V_SignUp');
    } else {
      $data = [
        'username'  => htmlspecialchars($this->input->post('username', TRUE)),
        'password'  => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'email'     => htmlspecialchars($this->input->post('email', TRUE)),
        'name'      => htmlspecialchars($this->input->post('username', TRUE)),
        'image'     => 'default.jpg',
        'status'    => 2,
      ];

      $this->M_Buyer->createBuyer($data);
      $this->session->set_flashdata('signUp_success', 'Sign up success!');
      redirect('Home');
    }
  }

  public function do_logout() {
    if ($this->session->userdata('status') == 1) {
      $this->session->unset_userdata('username');
      $this->session->unset_userdata('status');
      $this->session->unset_userdata('id');
    }

    if ($this->session->userdata('status') == 2) {
      $this->session->unset_userdata('username');
      $this->session->unset_userdata('name');
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('status');
      $this->session->unset_userdata('id');
      $this->session->unset_userdata('password');
    }
    
    $this->session->set_flashdata('logout', 'Logout success!');
    redirect('Home');
  }
  
}

?>