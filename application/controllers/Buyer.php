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

    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('username', 'Username', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('V_EditProfile', $data);
    } else {
      $id = $this->session->userdata('id');
      $upload_image = $_FILES['image']['name'];

      if ($upload_image) {
        $config = [
          'allowed_types' => 'gif|jpg|png',
          'max-size' => '2048',
          'upload_path' => './assets/image/',
        ];

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
          $old_image = $data['buyer']['image'];

          if ($old_image != 'default.jpg') {
            unlink(FCPATH . 'assets/image/' . $old_image);
          }

          $new_image = $this->upload->data('file_name');
          $data = [
            'username' => $this->input->post('username', true),
            'email' => $this->input->post('email', true),
            'name' => $this->input->post('name', true),
            'image' => $new_image
          ];
        } 
      } else {
        $data = [
          'username' => $this->input->post('username', true),
          'email' => $this->input->post('email', true),
          'name' => $this->input->post('name', true),
        ];
      }

      $this->M_Buyer->editBuyer($id, $data);
      $this->session->set_userdata($data);
      $this->session->set_flashdata('editSuccess', 'Your profile has been updated!');
      redirect('Buyer/editProfile');
    }
  }
  
}

?>