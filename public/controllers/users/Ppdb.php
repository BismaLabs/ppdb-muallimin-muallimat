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
			'ppdb' 			=> True,
			'type'    		=> 'edit',
			'siswa' => $this->users->edit_users(),
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

	public function edit($kode_pendaftaran)
	{
		if ($this->users->users_id()) {
			//kode pendaftaran
            $kode_pendaftaran = $this->encryption->decode($kode_pendaftaran);

			$data = array('title' => 'Data Pendaftar',
			'ppdb' 			=> True,
			'type'    		=> 'edit',
			'kode_pendaftaran'      => $kode_pendaftaran,
			'edit_user' => $this->users->edit_siswa($kode_pendaftaran)->row_array(),
			'kelas_sd'   =>$this->users->kelas_sd(),
            'kelas_smp'   =>$this->users->kelas_smp()
			);

            //load view with data
            $this->load->view('users/part/header', $data);
            $this->load->view('users/part/sidebar');
            $this->load->view('users/layout/ppdb/edit');
            $this->load->view('users/part/footer');
        }else{
            show_404();
            return FALSE;
		}
	}

}