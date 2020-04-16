<?php

function check_login() {
  $data = get_instance();

  if (!$data->session->userdata('username')) {
    redirect('Home');
  } else {
    if ($data->session->userdata('role_id') != 1) {
      redirect('Home');
    }
  }
}

?>