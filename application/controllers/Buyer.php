<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    checkLoginBuyer();
    $this->load->model('M_Buyer');
    $this->load->model('M_Product');
    $this->load->model('M_Article');
  }
  
  public function index() {
    $username = $this->session->userdata('username');
    $data['buyer'] = $this->M_Buyer->checkBuyer($username);
    $data['products'] = $this->M_Product->get_AllProduct();
    $data['articles'] = $this->M_Article->get_AllArticle();

    $this->load->view('V_HomeLogin', $data);
  }

  public function editProfile() {
    $username = $this->session->userdata('username');
    $data['buyer'] = $this->M_Buyer->checkBuyer($username);
    $oldUsername = $this->session->userdata('username');
    $oldEmail = $this->session->userdata('email');
    $newUsername = $this->input->post('username', true);
    $newEmail = $this->input->post('email', true);

    if ($oldEmail != $newEmail AND $oldUsername != $newUsername) {
      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[buyer.username]', [
        'is_unique' => 'Username already used, try another!'
      ]);
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[buyer.email]', ['is_unique' => 'Email already used, try another!']);
    } else if ($oldUsername != $newUsername) {
      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[buyer.username]', [
        'is_unique' => 'Username already used, try another!'
      ]);
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    } else if ($oldEmail != $newEmail) {
      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('username', 'Username', 'required|trim');
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[buyer.email]', ['is_unique' => 'Email already used, try another!']);
    } else {
      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('username', 'Username', 'required|trim');
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    }

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('V_EditProfile', $data);
    } else {
      $id = $this->session->userdata('id');
      
      $upload_image = $_FILES['image']['name'];

      if ($upload_image) {
        $config = [
          'allowed_types' => 'gif|jpg|png',
          'max-size'      => '2048',
          'upload_path'   => './assets/uploads/profile/',
        ];

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
          $old_image = $data['buyer']['image'];

          if ($old_image != 'default.jpg') {
            unlink(FCPATH . 'assets/uploads/profile/' . $old_image);
          }
          
          $new_image = $this->upload->data('file_name');

          $data = [
            'username'  => $this->input->post('username', true),
            'email'     => $this->input->post('email', true),
            'name'      => $this->input->post('name', true),
            'image'     => $new_image
          ];
        }
      } else {
        $data = [
          'username' => $this->input->post('username', true),
          'email'    => $this->input->post('email', true),
          'name'     => $this->input->post('name', true),
        ];
      }

      $this->M_Buyer->editBuyer($id, $data);
      $this->session->set_userdata($data);
      $this->session->set_flashdata('editSuccess', 'Your profile has been updated!');
      redirect('Buyer/editProfile');
    }
  }

  public function changePassword() {
    $this->form_validation->set_rules('oldPassword', 'Old Password', 'required|trim');
    $this->form_validation->set_rules('newPassword1', 'New Password', 'required|trim|min_length[8]|matches[newPassword2]');
    $this->form_validation->set_rules('newPassword2', 'Confirm New Password', 'required|trim|min_length[8]|matches[newPassword1]');

    if ($this->form_validation->run() == FALSE) {
      $this->session->set_flashdata('mustInputPassword', 'You must input the field correctly!');
      redirect('Buyer');
    } else {
      $id = $this->session->userdata('id');
      $oldPassword = $this->input->post('oldPassword');
      $newPassword = $this->input->post('newPassword1');

      if (!password_verify($oldPassword, $this->session->userdata('password'))) {
        $this->session->set_flashdata('changePasswordFailed', 'You have input the wrong password!');
        redirect('Buyer');
      } else {
        if ($oldPassword == $newPassword) {
          $this->session->set_flashdata('changePasswordSame', 'You have input the same password!');
          redirect('Buyer');
        } else {
          $passwordHash = password_hash($newPassword, PASSWORD_DEFAULT);
          
          $this->M_Buyer->changePassword($id, $passwordHash);
          $this->session->set_flashdata('changePasswordSuccess', 'Your password has been changed!');
          redirect('Buyer');
        }
      }
    }
  }
  
  public function deleteAccount($id_buyer) {
    $id_buyer = $this->session->userdata('id');

    $result = $this->M_Buyer->deleteAccount($id_buyer);

    if ($result) {
      $this->session->unset_userdata('username');
      $this->session->unset_userdata('name');
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('status');
      $this->session->unset_userdata('id');
      $this->session->unset_userdata('password');
      $this->session->set_flashdata('deleteAccountSuccess', 'Your account has been deleted!');
      redirect('Home');
    } else {
      $this->session->set_flashdata('deleteAccountFailed', 'Oops, something wrong!');
      redirect('Buyer/editProfile');
    }
  }

}

?>