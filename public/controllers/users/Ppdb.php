<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : Sup312 Systems.
 * @author   : M Yazidinniam <myazidinniam@gmail.com>
 * @since    : 2017
**/

class Ppdb extends CI_Controller
{
	
	public function __construct()
	{
		 parent::__construct();
        //load model
        $this->load->model('users');
	}

	public function index()
	{
		if ($this->users->users_id()) {
			$data = array('title' => 'Data Pendaftar',
			'ppdb' => True);

			$this->load->view('users/part/header', $data);
            $this->load->view('users/part/sidebar');
            $this->load->view('users/layout/ppdb/data');
            $this->load->view('users/part/footer');
		}
	}

}