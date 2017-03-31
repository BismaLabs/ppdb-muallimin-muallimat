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
		if ($this->users->edit_users()) {
			$data = array('title' => 'Data Pendaftar',
			'ppdb' 			=> True,
			'type'    		=> 'edit',
			'kode_pendaftaran' => $this->users->edit_users(),
			'kelas_sd'   =>$this->users->kelas_sd(),
            'kelas_smp'   =>$this->users->kelas_smp()
			);
            //load view with data
            $this->load->view('users/part/header', $data);
            $this->load->view('users/part/sidebar');
            $this->load->view('users/layout/ppdb/data');
            $this->load->view('users/part/footer');
        }else{
            show_404();
            return FALSE;
		}
	}

}