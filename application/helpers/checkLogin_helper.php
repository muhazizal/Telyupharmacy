<?php

function checkLoginAdmin() {
  $data = get_instance();

  if (!$data->session->userdata('username')) {
    $data->session->set_flashdata('signInFirst', 'Please sign in first!');
    redirect('Home');
  } else {
    if ($data->session->userdata('status') == 2) {
      $data->session->set_flashdata('notAdmin', 'You are not admin!');
      redirect('Buyer');
    }
    if (!$data->session->userdata('status') == 1) {
      $data->session->set_flashdata('signInFirst', 'Please sign in first!');
      redirect('Home');
    }
  }
}

function checkLoginBuyer() {
  $data = get_instance();

  if (!$data->session->userdata('username')) {
    $data->session->set_flashdata('signInFirst', 'Please sign in first!');
    redirect('Home');
  } else {
    if ($data->session->userdata('status') == 1) {
      $data->session->set_flashdata('notBuyer', 'You are not buyer!');
      redirect('Admin');
    }
    if (!$data->session->userdata('status') == 2) {
      $data->session->set_flashdata('signInFirst', 'Please sign in first!');
      redirect('Home');
    }
  }
}

?>