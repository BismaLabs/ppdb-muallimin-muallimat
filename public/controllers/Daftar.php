<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : PPDB Web Application.
 * @author   : Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 * @since    : 2017
 * @license  : https://maulayya.com/portofolio/ppdb-muallimin-muallimat/
 */
class Daftar extends CI_Controller {

    public function index()
    {
        $data = array(
            'daftar' => TRUE,
        );
        $this->load->view('home/part/header', $data);
        $this->load->view('home/layout/daftar/form');
        $this->load->view('home/part/footer');
    }
}
