<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : PPDB Web Application.
 * @author   : Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 * @since    : 2017
 * @license  : https://maulayya.com/portofolio/ppdb-muallimin-muallimat/
 */
class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model(array('users','web'));
    }

    public function index()
    {
        if ($this->users->users_id()) {
            $data = array(
                'title'                 => 'Dashboard ',
                'dashboard'             => TRUE,
                'pengumuman'            => $this->web->get_pages(1),
                'syarat_pendaftaran'    => $this->web->get_pages(2),
                'alur_pendaftaran'      => $this->web->get_pages(3)
            );

            $this->load->view('users/part/header', $data);
            $this->load->view('users/part/sidebar');
            $this->load->view('users/layout/dashboard/dashboard');
            $this->load->view('users/part/footer');
        } else {
            show_404();
            return FALSE;
        }
    }

    public function logout()
    {
        if($this->users->users_id())
        {
            $this->session->sess_destroy();
            redirect('users/login?source=logout&utf8=✓');
        }else{
            show_404();
            return FALSE;
        }
    }

}