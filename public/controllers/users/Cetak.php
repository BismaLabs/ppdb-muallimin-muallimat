<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : PPDB Web Application.
 * @author   : Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 * @since    : 2017
 * @license  : https://maulayya.com/portofolio/ppdb-muallimin-muallimat/
 */
class Cetak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model(array('users', 'web', 'apps'));
    }

    public function index()
    {
        if ($this->users->users_id()) {
            //kode pendaftaran
            $kode_pendaftaran = $this->session->userdata('users_id');

            $data = array(
                'kode_pendaftaran'      => $kode_pendaftaran,
                'detail_pendaftaran'    => $this->apps->detail_cetak_formulir($kode_pendaftaran)->row_array()
            );
            //load the view and saved it into $html variable
            $html=$this->load->view('users/layout/ppdb/cetak_formulir', $data, true);

            //this the the PDF filename that user will get to download
            $pdfFilePath = "formulir_pendaftaran.pdf";

            //load mPDF library
            $this->load->library('pdf');

            //generate the PDF from the given html
            $this->pdf->pdf->WriteHTML($html);

            //download it.
            $this->pdf->pdf->Output($pdfFilePath, "D");
        } else {
            show_404();
            return FALSE;
        }
    }
}