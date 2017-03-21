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
        $this->load->model('apps');
    }

    public function index()
    {
        if ($this->apps->apps_id()) {
            $data = array(
                'title' => 'Dashboard ',
                'dashboard' => TRUE,
                'js_ready' => "GetToday('" . date("Y-m-d") . "')"
            );

            $this->load->view('apps/part/header', $data);
            $this->load->view('apps/part/sidebar');
            $this->load->view('apps/layout/dashboard/dashboard');
            $this->load->view('apps/part/footer');
        } else {
            show_404();
            return FALSE;
        }
    }

    public function logout()
    {
        if($this->apps->apps_id())
        {
            $this->session->sess_destroy();
            redirect('apps/login?source=logout&utf8=✓');
        }else{
            show_404();
            return FALSE;
        }
    }
}