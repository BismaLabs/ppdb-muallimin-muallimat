<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : PPDB Web Application.
 * @author   : Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 * @since    : 2017
 * @license  : https://maulayya.com/portofolio/ppdb-muallimin-muallimat/
 */
class Daftar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library(array('form_validation', 'recaptcha'));

    }

    public function index()
    {
        $data = array(
            'daftar' => TRUE,
        );
        //set form validation

        /** FORM A */

        //set asal sekolah
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required');
        //set pendaftaran kelas
        $this->form_validation->set_rules('pendaftaran_kelas', 'Pendaftaran Kelas', 'required');
        //set anama lengkap
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        //set jenis kelamin
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        //set NISN
        $this->form_validation->set_rules('NISN', 'NISN (No Induk Siswa Nasional)', 'required');
        //set NIK
        $this->form_validation->set_rules('NIK', 'NIK (No Induk Kependudukan)', 'required');
        //set tempat lahir
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        //set tanggal lahir
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        //set bulan lahir
        $this->form_validation->set_rules('bulan_lahir', 'Bulan Lahir', 'required');
        //set tahun lahir
        $this->form_validation->set_rules('tahun_lahir', 'Tahun Lahir', 'required');
        //set anak ke
        $this->form_validation->set_rules('anak_ke', 'Anak Ke', 'required');
        //set jumlah anak ke
        $this->form_validation->set_rules('jumlah_anak_ke', 'Jumlah Anak Ke', 'required');
        //set
        $this->form_validation->set_rules('jumlah_saudara_kandung', 'Jumlah Saudara Kandung', 'required');
        //set
        $this->form_validation->set_rules('jumlah_adik', 'Jumlah Adik', 'required');
        //set
        $this->form_validation->set_rules('jumlah_kakak', 'Jumlah Kakak', 'required');
        //set
        $this->form_validation->set_rules('kk', 'Nomor Kartu Keluarga', 'required');
        //set
        $this->form_validation->set_rules('madrasah_asal', 'Madrasah Asal', 'required');
        //set
        $this->form_validation->set_rules('kota_madrasah', 'Kota Madrasah Asal', 'required');
        //set
        $this->form_validation->set_rules('NPSN', 'Nomor Pokok Statistik nasional', 'required');
        //set
        $this->form_validation->set_rules('no_un', 'Nomor Peserta Ujian Nasional', 'required');


        /** FORM B */

        /** FORM C */

        //set
        $this->form_validation->set_rules('nama_ayah_kandung', 'Nama Lengkap Ayah Kandung', 'required');
        //set
        $this->form_validation->set_rules('nama_ibu_kandung', 'Nama Lengkap Ibu Kandung', 'required');
        //set
        $this->form_validation->set_rules('no_ktp_ayah', 'Nomor KTP/NIK Ayah', 'required');
        //set
        $this->form_validation->set_rules('no_ktp_ibu', 'Nomor KTP/NIK Ibu', 'required');
        //set
        $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required');
        //set
        $this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan Ibu', 'required');
        //set
        $this->form_validation->set_rules('pendidikan_ayah', 'Pekerjaan Ayah', 'required');
        //set
        $this->form_validation->set_rules('pendidikan_ibu', 'Pekerjaan Ibu', 'required');
        //set
        $this->form_validation->set_rules('alamat_jalan', 'Alamat Jalan', 'required');
        //set
        $this->form_validation->set_rules('alamat_rt', 'RT', 'required');
        //set
        $this->form_validation->set_rules('alamat_rw', 'RW', 'required');
        //set
        $this->form_validation->set_rules('alamat_desa', 'Alamat Desa', 'required');
        //set
        $this->form_validation->set_rules('alamat_kecamatan', 'Kecamatan', 'required');
        //set
        $this->form_validation->set_rules('alamat_kabupaten', 'Kabupaten', 'required');
        //set
        $this->form_validation->set_rules('alamat_pos', 'Kode POS', 'required');
        //set
        $this->form_validation->set_rules('alamat_provinsi', 'Provinsi', 'required');
        //set
        $this->form_validation->set_rules('keterangan_ayah', 'Keterangan Ayah', 'required');
        //set
        $this->form_validation->set_rules('keterangan_ibu', 'Keterangan Ibu', 'required');
        //set
        $this->form_validation->set_rules('hp_ayah', 'Nomor HP Ayah', 'required');
        //set
        $this->form_validation->set_rules('hp_ibu', 'Nomor HP Ibu', 'required');
        /** FORM D */


        /** GOOGLE RECAPTCHA */
        //set google recaptcha
        $this->form_validation->set_rules('g-recaptcha-response', '<b>Captcha</b>', 'callback_getResponseCaptcha');

        //set message form validation
        $this->form_validation->set_message('required', '<div class="alert alert-danger" style="font-family:Roboto;margin-top: 5px">
                                                        <i class="fa fa-exclamation-circle"></i> {field} harus diisi.
                                                     </div>');

        $this->form_validation->set_message('callback_getResponseCaptcha',
            '<div class="alert alert-danger" style="font-family:Roboto">
                                                          i class="fa fa-exclamation-circle"></i> {field} {g-recaptcha-response} harus diisi.
                                                      div>');
        //checking form validation
        if($this->form_validation->run() == TRUE)
        {

        }else{
            $this->load->view('home/part/header', $data);
            $this->load->view('home/layout/daftar/form');
            $this->load->view('home/part/footer');
        }

    }

    public function getResponseCaptcha($str)
    {
        $this->load->library('recaptcha');
        $response = $this->recaptcha->verifyResponse($str);
        if ($response['success'])
        {
            return true;
        }
        else
        {
            $this->form_validation->set_message('getResponseCaptcha', ' <div class="alert alert-danger" style="font-family:Roboto;margin-top: 5px">
                                                                          <i class="fa fa-exclamation-circle"></i> %s harus dipilih.
                                                                        </div>' );
            return false;
        }
    }
}
