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
        //load model
        $this->load->model(array('apps','users','web'));
        //load library
        $this->load->library(array('form_validation'));

    }

    function create_cpatcha()
    {
        $config = array(
            'img_path'	 => './resources/images/captcha/',
            'img_url'	 => base_url().'resources/images/captcha/',
            'img_width'	 => '162',
            'img_height' => 40,
            'border' => 0,
            'expiration' => 7200
        );

        $cap    = create_captcha($config);
        $image  = $cap['image'];

        $this->session->set_userdata('captchaword', $cap['word']);

        return $image;
    }

    function check_captcha()
    {
        if(strtolower($this->input->post('captcha')) == strtolower($this->session->userdata('captchaword')))
        {

            return true;

        }else{

            $this->form_validation->set_message('check_captcha', '<div class="alert alert-danger" style="font-family:Roboto;margin-top: 5px">
                                                        <i class="fa fa-exclamation-circle"></i> Kode captcha salah!
                                                     </div>');

            return false;

        }
    }


    public function index()
    {

        $data = array(
            'daftar'    => TRUE,
            'kelas_sd'   =>$this->users->kelas_sd(),
            'kelas_smp'   =>$this->users->kelas_smp(),
            'data_asrama'   =>$this->users->asrama()
        );

        //set form validation

        //set asal sekolah
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required');
        //set pendaftaran kelas
        //$this->form_validation->set_rules('pendaftaran_kelas', 'Pendaftaran Kelas', 'required');
        //set anama lengkap
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        //set jenis kelamin
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        //set NISN
        $this->form_validation->set_rules('nisn', 'NISN (No Induk Siswa Nasional)', 'required');
        //set NIK
        $this->form_validation->set_rules('nik', 'NIK (No Induk Kependudukan)', 'required');
        //set tempat lahir
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        //set tanggal lahir
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        //set bulan lahir
        $this->form_validation->set_rules('bulan_lahir', 'Bulan Lahir', 'required');
        //set tahun lahir
        $this->form_validation->set_rules('tahun_lahir', 'Tahun Lahir', 'required');
        //set anak ke
        //$this->form_validation->set_rules('anak_ke', 'Anak Ke', 'required');
        //set jumlah anak ke
        //$this->form_validation->set_rules('jumlah_anak_ke', 'Jumlah Anak Ke', 'required');
        //set
        //$this->form_validation->set_rules('jumlah_saudara_kandung', 'Jumlah Saudara Kandung', 'required');
        //set
        //$this->form_validation->set_rules('jumlah_adik', 'Jumlah Adik', 'required');
        //set
        //$this->form_validation->set_rules('jumlah_kakak', 'Jumlah Kakak', 'required');
        //set
        $this->form_validation->set_rules('kk', 'Nomor Kartu Keluarga', 'required');
        //set
        $this->form_validation->set_rules('madrasah_asal', 'Madrasah Asal', 'required');
        //set
        $this->form_validation->set_rules('kota_madrasah', 'Kota Madrasah Asal', 'required');
        //set
        //$this->form_validation->set_rules('npsn', 'Nomor Pokok Statistik nasional', 'required');
        //set
        //$this->form_validation->set_rules('no_un', 'Nomor Peserta Ujian Nasional', 'required');

        //set
        $this->form_validation->set_rules('nama_ayah', 'Nama Lengkap Ayah Kandung', 'required');
        //set
        $this->form_validation->set_rules('nama_ibu', 'Nama Lengkap Ibu Kandung', 'required');
         //set
        $this->form_validation->set_rules('no_ktp_ayah', 'Nomor KTP/NIK Ayah', 'required');
        //set
        $this->form_validation->set_rules('no_ktp_ibu', 'Nomor KTP/NIK Ibu', 'required');
        //set
        //$this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required');
        //set
        //$this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan Ibu', 'required');
        //set
        //$this->form_validation->set_rules('pendidikan_ayah', 'Pekerjaan Ayah', 'required');
        //set
        //$this->form_validation->set_rules('pendidikan_ibu', 'Pekerjaan Ibu', 'required');
        //set
        $this->form_validation->set_rules('jln_dsn', 'Alamat Jalan', 'required');
        //set
        $this->form_validation->set_rules('rt', 'RT', 'required');
        //set
        $this->form_validation->set_rules('rw', 'RW', 'required');
        //set
        $this->form_validation->set_rules('desa', 'Alamat Desa', 'required');
        //set
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
        //set
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required');
        //set
        $this->form_validation->set_rules('kode_pos', 'Kode POS', 'required');
        //set
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
        //set
        //$this->form_validation->set_rules('penghasilan_ayah', 'Penghasilan Ayah', 'required');
        //set
        //$this->form_validation->set_rules('penghasilan_ibu', 'Penghasilan Ibu', 'required');
        //set
        //$this->form_validation->set_rules('keterangan_ayah', 'Keterangan Ayah', 'required');
        //set
        //$this->form_validation->set_rules('keterangan_ibu', 'Keterangan Ibu', 'required');
        //set
        $this->form_validation->set_rules('no_hp_ayah', 'Nomor HP Ayah', 'required');
        //set
        $this->form_validation->set_rules('no_hp_ibu', 'Nomor HP Ibu', 'required');


        $this->form_validation->set_rules('captcha', '<b>Captcha</b>', 'required');
        //set message form validation
        $this->form_validation->set_message('required', '<div class="alert alert-danger" style="font-family:Roboto;margin-top: 5px">
                                                        <i class="fa fa-exclamation-circle"></i> {field} harus diisi.
                                                     </div>');

        //captcha//
        $userCaptcha    = set_value('captcha');
        $word           = strtolower($this->session->userdata('captchaWord'));
        $captcha        = strtolower($this->input->post('captcha'));

        if($this->form_validation->run() == TRUE && $captcha == $word)
        {

            //get kode test peserta
            //$generate_no_test = $this->getnotes($this->input->post("pendaftaran_kelas"));

            //get random kode pendaftaran
            $this->load->helper('string');
            $random = strtoupper(random_string('alnum', 6));

            $insert = array(

                'kode_pendaftaran'          => $random,
                'asal_sekolah'              => $this->input->post("asal_sekolah"),
                //'no_test'                   => $generate_no_test,
                'pendaftaran_kelas'         => $this->input->post("pendaftaran_kelas"),
                'nama_lengkap'              => $this->input->post("nama"),
                'jenis_kelamin'             => $this->input->post("jenis_kelamin"),
                'nisn'                      => $this->input->post("nisn"),
                'nik'                       => $this->input->post("nik"),
                'tempat_lahir'              => $this->input->post("tempat_lahir"),
                'tanggal_lahir'             => $this->input->post("tanggal_lahir"),
                'bulan_lahir'               => $this->input->post("bulan_lahir"),
                'tahun_lahir'               => $this->input->post("tahun_lahir"),
                'anak_ke'                   => $this->input->post("anak_ke"),
                'jumlah_anak_ke'            => $this->input->post("jumlah_anak_ke"),
                'jumlah_saudara_kandung'    => $this->input->post("jumlah_saudara_kandung"),
                'jumlah_adik'               => $this->input->post("jumlah_adik"),
                'jumlah_kakak'              => $this->input->post("jumlah_kakak"),
                'asrama'                    => $this->input->post("asrama"),
                'kk'                        => $this->input->post("kk"),
                'kip_pkh'                   => $this->input->post("kip_pkh"),
                'no_telp'                   => $this->input->post("no_hp"),
                'nama_madrasah'             => $this->input->post("madrasah_asal"),
                'kota_madrasah'             => $this->input->post("kota_madrasah"),
                'npsn'                      => $this->input->post("npsn"),
                'no_seri_ijazah'            => $this->input->post("no_ijazah"),
                'no_seri_skhun'             => $this->input->post("no_skhun"),
                'no_un'                     => $this->input->post("no_un"),

                'hobi'                      => $this->input->post("hobi"),
                'bidang_studi'              => $this->input->post("bidang_studi_digemari"),
                'bakat_dimiliki'            => $this->input->post("bakat_dimiliki"),
                'olahraga_digemari'         => $this->input->post("olahraga_digemari"),
                'cita_cita'                 => $this->input->post("cita_cita"),

                'nama_ayah'                 => $this->input->post("nama_ayah"),
                'nama_ibu'                  => $this->input->post("nama_ibu"),
                'no_ktp_ayah'               => $this->input->post("no_ktp_ayah"),
                'no_ktp_ibu'                => $this->input->post("no_ktp_ibu"),
                'pekerjaan_ayah'            => $this->input->post("pekerjaan_ayah"),
                'pekerjaan_ibu'             => $this->input->post("pekerjaan_ibu"),
                'pendidikan_ayah'           => $this->input->post("pendidikan_ayah"),
                'pendidikan_ibu'            => $this->input->post("pendidikan_ibu"),
                'jln_desa'                  => $this->input->post("jln_dsn"),
                'rt'                        => $this->input->post("rt"),
                'rw'                        => $this->input->post("rw"),
                'desa'                      => $this->input->post("desa"),
                'kecamatan'                 => $this->input->post("kecamatan"),
                'kabupaten'                 => $this->input->post("kabupaten"),
                'kode_pos'                  => $this->input->post("kode_pos"),
                'provinsi'                  => $this->input->post("provinsi"),
                'penghasilan_rata_ayah'     => $this->input->post("penghasilan_ayah"),
                'penghasilan_rata_ibu'      => $this->input->post("penghasilan_ibu"),
                'keterangan_ayah'           => $this->input->post("keterangan_ayah"),
                'keterangan_ibu'            => $this->input->post("keterangan_ibu"),
                'no_tlp_ayah'               => $this->input->post("no_hp_ayah"),
                'no_tlp_ibu'                => $this->input->post("no_hp_ibu"),
                'nama_Wali'                 => $this->input->post("nama_wali"),
                'jenis_kelamin_wali'        => $this->input->post("jenis_kelamin_wali"),
                'no_kk_wali'                => $this->input->post("no_kk_wali"),
                'no_ktp_wali'               => $this->input->post("no_ktp_wali"),
                'pekerjaan_wali'            => $this->input->post("pekerjaan_wali"),
                'pendidikan_wali'           => $this->input->post("pendidikan_wali"),
                'jln_desa_wali'             => $this->input->post("jl_dsn_wali"),
                'rt_wali'                   => $this->input->post("rt_wali"),
                'rw_wali'                   => $this->input->post("rw_wali"),
                'desa_wali'                 => $this->input->post("desa_wali"),
                'kecamatan_wali'            => $this->input->post("kecamatan_wali"),
                'kabupaten_wali'            => $this->input->post("kabupaten_wali"),
                'kode_pos_wali'             => $this->input->post("kode_pos_wali"),
                'provinsi_wali'             => $this->input->post("provinsi_wali"),
                'penghasilan_rata_wali'     => $this->input->post("penghasilan_wali"),
                'status'                    => "0",
            );

            $this->db->insert("tbl_siswa", $insert);

            $data = array(
                       'kode_pendaftaran' => $random
            );

            $this->load->view('home/layout/daftar/success',$data);

        }else{

            /*
            $config = array(
                'img_path'	 => './resources/images/captcha/',
                'img_url'	 => base_url().'resources/images/captcha/',
                'img_width'	 => '162',
                'img_height' => 40,
                'border' => 0,
                'expiration' => 7200
            );

            */

            $config = array(
                'img_path' => './resources/images/captcha/',
                'img_url' => base_url().'resources/images/captcha/',
                'img_width' => '162',
                'img_height' => 40,
                'expiration' => 7200
            );

            $cap    = create_captcha($config);
            $image  = $cap['image'];

            $this->session->set_userdata('captchaWord', $cap['word']);

            $data = array(
                    'img'        => $image,
                    'daftar'     => TRUE,
                    'kelas_sd'   =>$this->users->kelas_sd(),
                    'kelas_smp'  =>$this->users->kelas_smp(),
                    'data_asrama'   =>$this->users->asrama()
            );

            $this->load->view('home/part/header', $data);
            $this->load->view('home/layout/daftar/form');
            $this->load->view('home/part/footer');
        }

    }

    public function getnotes($kelas='') {
        if (empty(trim($kelas))) {
            return '';
            exit();
        }
        $ketemu=false;
        $urut=1;
        while ($ketemu==false) {
            $no_test = $kelas.'-'.sprintf("%03d", $urut);
            $sql="SELECT no_test FROM tbl_siswa where no_test='$no_test'";
            $jml  = $this->db->query($sql)->num_rows();
            if ($jml==0) { //Jika nomor tes belum dipakai
                $ketemu=true;
                return $no_test;
            }
            else { //Jika nomor tes sudah dipakai
                $urut++;
            }
        }
    }
}
