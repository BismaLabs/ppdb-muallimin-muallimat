<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Cetak extends CI_Controller
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
                'title' => 'Cetak',
                'cetak' => TRUE,
            );
            $this->load->view('apps/part/header', $data);
            $this->load->view('apps/part/sidebar');
            $this->load->view('apps/layout/cetak/data');
            $this->load->view('apps/part/footer');
        } else {
            show_404();
            return FALSE;
        }
    }

    public function data_valid()
    {
        if ($this->apps->apps_id()) {

            $data = array(

                        'semua_data' => $this->apps->get_export_validasi()
            );
            //load the view and saved it into $html variable
            $html=$this->load->view('apps/layout/cetak/data_valid', $data, true);

            //this the the PDF filename that user will get to download
            $pdfFilePath = "semua_data_pendaftaran_tervalidasi.pdf";

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

    public function data_invalid()
    {
        if ($this->apps->apps_id()) {
            $data = array(

                'semua_data' => $this->apps->get_export_all()
            );
            //load the view and saved it into $html variable
            $html=$this->load->view('apps/layout/cetak/data_invalid', $data, true);

            //this the the PDF filename that user will get to download
            $pdfFilePath = "semua_data_pendaftaran.pdf";

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
