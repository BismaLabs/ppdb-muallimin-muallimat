<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : PPDB Web Application.
 * @author   : Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 * @since    : 2017
 * @license  : https://maulayya.com/portofolio/ppdb-muallimin-muallimat/
 */
class Mails extends CI_Controller{

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
                'title' => 'Setting Mail Server ',
                'mails' => TRUE
            );
            $this->load->view('apps/part/header', $data);
            $this->load->view('apps/part/sidebar');
            $this->load->view('apps/layout/mails/data');
            $this->load->view('apps/part/footer');

        } else {
            show_404();
            return FALSE;
        }
    }

    public function save()
    {
        if($this->apps->apps_id())
        {
            $id['id'] = $this->encryption->decode($this->input->post('id'));
            //create var update array
            $update = array(
                'protocol'      => $this->input->post('protocol'),
                'smtp_host'     => $this->input->post('smtp_host'),
                'smtp_user'     => $this->input->post('smtp_user'),
                'smtp_password' => $this->input->post('smtp_password'),
                'smtp_port'     => $this->input->post('smtp_port')
            );
            $this->db->update('tbl_email_server', $update, $id);
            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible" style="font-family:Roboto">
			                                                    <i class="fa fa-check"></i> Sistem Berhasil Diupdate.
			                                                </div>');
            redirect('apps/mails?source=update&utf8=✓');
        }else{
            show_404();
            return FALSE;
        }
    }

}