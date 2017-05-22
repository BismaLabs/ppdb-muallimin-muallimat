<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : PPDB Web Application.
 * @author   : Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 * @since    : 2017
 * @license  : https://maulayya.com/portofolio/ppdb-muallimin-muallimat/
 */
class Export extends CI_Controller{

    private $table_name = "tbl_siswa";
    private $_model = "";

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
                'title' => 'Export',
                'export' => TRUE,
            );
            $this->load->view('apps/part/header', $data);
            $this->load->view('apps/part/sidebar');
            $this->load->view('apps/layout/export/data');
            $this->load->view('apps/part/footer');
        } else {
            show_404();
            return FALSE;
        }
    }

    public function xls_all()
    {
        if($this->apps->apps_id())
        {
            $this->load->library('excel');

            $fields = $this->db->list_fields($this->table_name);
            $header = array();
            $body   = array();
            $result = $this->apps->get_export_all();

            foreach ($fields as $field) {
                $header[] = strtoupper(str_replace("_", " ", $field));
            }
            if($result) {
                foreach ($result->result() as $row) {
                    $data = array();
                    foreach ($fields as $field) {
                        $data[] = $row->$field;
                    }

                    $body[] = $data;
                }
            }
            $openTo = 'browser';
            $filename = 'PPDB_SEMUA_PENDAFTAR-'.date('Y-m-d').'.xlsx';
            $type = 'XLSX';

            $this->excel->write($header, $body, $type, $openTo, $filename);
        }else{
            show_404();
            return FALSE;
        }
    }

    public function xls_validasi()
    {
        if($this->apps->apps_id())
        {
            $this->load->library('excel');

            $fields = $this->db->list_fields($this->table_name);
            $header = array();
            $body   = array();
            $result = $this->apps->get_export_validasi();

            foreach ($fields as $field) {
                $header[] = strtoupper(str_replace("_", " ", $field));
            }
            if($result) {
                foreach ($result->result() as $row) {
                    $data = array();
                    foreach ($fields as $field) {
                        $data[] = $row->$field;
                    }

                    $body[] = $data;
                }
            }
            $openTo = 'browser';
            $filename = 'PPDB_PENDAFTAR_TERVALIDASI-'.date('Y-m-d').'.xlsx';
            $type = 'XLSX';

            $this->excel->write($header, $body, $type, $openTo, $filename);
        }else{
            show_404();
            return FALSE;
        }
    }

}