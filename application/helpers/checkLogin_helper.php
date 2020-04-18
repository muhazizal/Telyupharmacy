<?php

function checkLoginAdmin() {
  $data = get_instance();

  if (!$data->session->userdata('username')) {
    redirect('Home');
  } else {
    if ($data->session->userdata('status') != 1) {
      redirect('Home');
    }
  }
}

function checkLoginBuyer() {
  $data = get_instance();

  if (!$data->session->userdata('username')) {
    redirect('Home');
  } else {
    if ($data->session->userdata('status') != 2) {
      redirect('Home');
    }
  }
}

?>