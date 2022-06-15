<?php

class Pilih_usm extends CI_Controller{

  public function index(){
    $data = array(
      'page' => 'pilih_usm',
      'link' => 'pilih_usm'
    );
    $this->load->view('template/wrapper', $data);
  }
}
 ?>
