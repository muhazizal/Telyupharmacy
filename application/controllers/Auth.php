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

    $admin = $this->M_Admin->checkAdmin($username, $password);
    $buyer = $this->M_Buyer->checkBuyer($username);

    // if admin avail
    if ($admin) {
      // if admin true
      if ($admin['status'] == 1) {
        $data = [
          'username' => $admin['username'],
          'status'   => $admin['status'],
        ];
        $this->session->set_userdata($data);
        $this->session->set_flashdata('signIn_success', 'Welcome to Telyupharmacy, '.$admin['username']);
        redirect('Admin');
      } else {
        $this->session->set_flashdata('signIn_failed', 'Sign in Failed!');
        redirect('Auth');
      }
    // if buyer avail
    } else if ($buyer) {
      // if buyer active
      if ($buyer['active'] == 1) {
        // if password true
        if (password_verify($password, $buyer['password'])) {
          $data = [
            'username' => $buyer['username'],
            'email' => $buyer['email'],
            'name' => $buyer['name'],
            'image' => $buyer['image'],
            'status' => $buyer['status'],
          ];
          $this->session->set_userdata($data);
          $this->session->set_flashdata('signIn_success', 'Welcome to Telyupharmacy, '.$buyer['username']);
          redirect('Home');
        } else {
          $this->session->set_flashdata('signIn_failed', 'Sign in Failed!');
          redirect('Auth');
        }
      } else {
        $this->session->set_flashdata('signIn_failed', 'Sign in Failed!');
        redirect('Auth');
      }
    // if admin & buyer not avail
    } else {
      $this->session->set_flashdata('signIn_failed', 'Sign in Failed!');
      redirect('Auth');
    }
  }

  // Function sign up
  public function do_signUp() {
    // Set form_validation required
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
    
    // Check form input
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
      $this->session->set_flashdata('signUp_success', 'Sign Up Success, Check Your Email for Verification!');
      redirect('Home');
    }
  }

  public function do_logout() {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('status');
    $this->session->set_flashdata('logout', 'Logout Success!');
    redirect('Home');
  }
  
}

?>