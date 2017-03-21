<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : PPDB Web Application.
 * @author   : Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 * @since    : 2017
 * @license  : https://maulayya.com/portofolio/ppdb-muallimin-muallimat/
 */
class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model('web');
    }

	public function index()
	{
	    $data = array(
	                'home'          => TRUE,
                    'pengumuman'    => $this->web->get_pages(1)
        );
		$this->load->view('home/part/header', $data);
        $this->load->view('home/layout/home/home');
        $this->load->view('home/part/footer');
	}
}
