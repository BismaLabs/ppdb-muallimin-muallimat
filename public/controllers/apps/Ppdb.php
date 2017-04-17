<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : Medical Top Team.
 * @author   : Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 * @since    : 2017
 * @license  : https://maulayya.com/portofolio/medical-top-team/
 */
class Ppdb extends CI_Controller
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
            //config pagination
            $config['base_url'] = base_url() . 'apps/ppdb/index/';
            $config['total_rows'] = $this->apps->count_ppdb()->num_rows();
            $config['per_page'] = 10;
            //instalasi paging
            $this->pagination->initialize($config);
            //deklare halaman
            $halaman = $this->uri->segment(4);
            $halaman = $halaman == '' ? 0 : $halaman;
            //create data array
            $data = array(
                'title' => 'Data Pendaftar',
                'ppdb' => TRUE,
                'data_ppdb' => $this->apps->index_ppdb($halaman, $config['per_page']),
                'paging' => $this->pagination->create_links()
            );
            if ($data['data_ppdb'] != NULL) {

                $data['ppdb'] = $data['data_ppdb'];

            } else {

                $data['ppdb'] = NULL;

            }
            //load view with data
            $this->load->view('apps/part/header', $data);
            $this->load->view('apps/part/sidebar');
            $this->load->view('apps/layout/ppdb/data');
            $this->load->view('apps/part/footer');
        } else {
            show_404();
            return FALSE;
        }
    }

    public function search()
    {
        if ($this->apps->apps_id()) {
            $limit = 10;
            $this->load->helper('security');
            $keyword = $this->security->xss_clean($_GET['q']);
            $data['keyword'] = strip_tags($keyword);
            $check = strlen(preg_replace('/[^a-zA-Z]/', '', $keyword));
            if (!empty($keyword) && $check > 2) {
                $offset = (isset($_GET['page'])) ? $this->security->xss_clean($_GET['page']) : 0;
                $total = $this->apps->total_search_ppdb($keyword);
                //config pagination
                $config['base_url'] = base_url() . 'apps/ppdb/search?q=' . $keyword;
                $config['total_rows'] = $total;
                $config['per_page'] = $limit;
                $config['page_query_string'] = TRUE;
                $config['use_page_numbers'] = TRUE;
                $config['display_pages'] = TRUE;
                $config['query_string_segment'] = 'page';
                $config['uri_segment'] = 4;
                //instalasi paging
                $this->pagination->initialize($config);

                $data = array(
                    'title' => 'Data Pendaftar',
                    'ppdb' => TRUE,
                    'data_ppdb' => $this->apps->search_index_ppdb(strip_tags($keyword), $limit, $offset),
                    'paging' => $this->pagination->create_links()
                );

                if ($data['data_ppdb'] != NULL) {

                    $data['ppdb'] = $data['data_ppdb'];

                } else {

                    $data['ppdb'] = NULL;

                }
                //load view with data
                $this->load->view('apps/part/header', $data);
                $this->load->view('apps/part/sidebar');
                $this->load->view('apps/layout/ppdb/data');
                $this->load->view('apps/part/footer');
            } else {
                redirect('apps/ppdb/');
            }
        } else {
            show_404();
            return FALSE;
        }
    }

    public function confirm($id, $value)
    {
        if ($this->apps->apps_id()) {
            $kode_pendaftaran = $this->encryption->decode($id);
            $value = $this->encryption->decode($this->uri->segment(5));
            //where id
            $key['kode_pendaftaran'] = $kode_pendaftaran;
            //update
            $update = array(
                'status' => $value
            );
            //update query
            $this->db->update("tbl_siswa", $update, $key);
            //deklarasi session flashdata
            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible" style="font-family:Roboto">
			                                                    <i class="fa fa-check"></i> Data Berhasil Diupdate.
			                                                </div>');
            //redirect halaman
            redirect('apps/ppdb?source=confirm&utf8=✓');
        } else {
            show_404();
            return FALSE;
        }
    }


    public function cetak_formulir($kode_pendaftaran)
    {
        if($this->apps->apps_id())
        {
            //kode pendaftaran
            $kode_pendaftaran = $this->encryption->decode($kode_pendaftaran);

            $data = array(
                        'kode_pendaftaran'      => $kode_pendaftaran,
                        'detail_pendaftaran'    => $this->apps->detail_cetak_formulir($kode_pendaftaran)->row_array()
            );
            //load the view and saved it into $html variable
            $html=$this->load->view('apps/layout/ppdb/cetak_formulir', $data, true);

            //this the the PDF filename that user will get to download
            $pdfFilePath = "formulir_pendaftaran.pdf";

            //load mPDF library
            $this->load->library('pdf');

            $pdf = $this->pdf->cetak_formulir();

            //generate the PDF from the given html
            $pdf->WriteHTML($html);

            //download it.
            $pdf->Output($pdfFilePath, "D");
        }else{
            show_404();
            return FALSE;
        }
    }

    public function cetak_kartu_ujian($kode_pendaftaran)
    {
        if($this->apps->apps_id())
        {
            //kode pendaftaran
            $kode_pendaftaran = $this->encryption->decode($kode_pendaftaran);

            $data = ['kode_pendaftaran'      => $kode_pendaftaran,
                        'detail_pendaftaran'    => $this->apps->detail_cetak_formulir($kode_pendaftaran)->row_array()];
            //load the view and saved it into $html variable
            $html=$this->load->view('apps/layout/ppdb/cetak_kartu', $data, true);

            //this the the PDF filename that user will get to download
            $pdfFilePath = "kartu_peserta.pdf";

            //load mPDF library
            $this->load->library('pdf');

            $pdf = $this->pdf->cetak_kartu();

            //generate the PDF from the given html
            $pdf->WriteHTML($html);

            //download it.
            $pdf->Output($pdfFilePath, "D");
        }else{
            show_404();
            return FALSE;
        }
    }

    public function template_formulir()
    {
        $this->load->view("apps/layout/ppdb/template_formulir");
    }

}
