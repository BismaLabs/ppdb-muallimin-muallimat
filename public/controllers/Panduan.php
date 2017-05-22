<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : PPDB Web Application.
 * @author   : Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 * @since    : 2017
 * @license  : https://maulayya.com/portofolio/ppdb-muallimin-muallimat/
 */
class Panduan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model('web');
    }

    public function index()
    {
        $data = array(
            'panduan'          => TRUE,
        );
        $this->load->view('home/part/header', $data);
        $this->load->view('home/layout/panduan/menu');
        $this->load->view('home/part/footer');
    }

    public function syarat_pendaftaran()
    {
        $data = array(
            'pages'    => $this->web->get_pages(2)
        );
        $this->load->view('home/part/header', $data);
        $this->load->view('home/layout/panduan/page');
        $this->load->view('home/part/footer');
    }

    public function alur_pendaftaran()
    {
        $data = array(
            'pages'    => $this->web->get_pages(3)
        );
        $this->load->view('home/part/header', $data);
        $this->load->view('home/layout/panduan/page');
        $this->load->view('home/part/footer');
    }

}
