<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : PPDB Web Application.
 * @author   : Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 * @since    : 2017
 * @license  : https://maulayya.com/portofolio/ppdb-muallimin-muallimat/
 */
class Pengumuman extends CI_Controller {

	public function index()
	{
	    $data = array(
	                'pengumuman' => TRUE,
        );
		$this->load->view('home/part/header', $data);
        $this->load->view('home/layout/pengumuman/menu');
        $this->load->view('home/part/footer');
	}
}
