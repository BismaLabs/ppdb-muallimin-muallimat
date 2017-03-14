<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : PPDB Web Application.
 * @author   : Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 * @since    : 2017
 * @license  : https://maulayya.com/portofolio/ppdb-muallimin-muallimat/
 */
class Statistik extends CI_Controller {

    public function index()
    {
        $this->load->view('home/part/header');
        $this->load->view('home/layout/statistik/statistik');
        $this->load->view('home/part/footer');
    }
}
