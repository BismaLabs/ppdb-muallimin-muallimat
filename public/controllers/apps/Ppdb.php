<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Ppdb extends CI_Controller
{
      public function __construct()
      {
          parent::__construct();
          //load model
          $this->load->model('apps');
      }

  public function index(){
    if ($this->apps->apps_id()){
        $data = array(
            'title' => 'Data Pendaftar',
            'dashboard' => TRUE,
        );
    $this->load->view('apps/part/header',$data);
    $this->load->view('apps/part/sidebar');
    $this->load->view('apps/layout/ppdb/data');
    $this->load->view('apps/part/footer');
  }else {
     show_404();
     return FALSE;
 }
}
}
