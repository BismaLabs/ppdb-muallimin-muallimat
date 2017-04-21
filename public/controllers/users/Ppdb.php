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
                'ppdb' => True,
                'siswa' => $this->users->edit_users(),
                'kelas_sd' => $this->users->kelas_sd(),
                'kelas_smp' => $this->users->kelas_smp()
            );

            //load view with data
            $this->load->view('users/part/header', $data);
            $this->load->view('users/part/sidebar');
            $this->load->view('users/layout/ppdb/data');
            $this->load->view('users/part/footer');
        } else {
            show_404();
            return FALSE;
        }
    }

    public function edit($kode_pendaftaran)
    {
        if ($this->users->users_id()) {
            $id['kode_pendaftaran'] = $this->encryption->decode($this->session->userdata("kode_pendaftaran"));
            $data = array('title' => 'Data Pendaftar',
                'ppdb' => True,
                'type' => 'edit data',
                'edit_user' => $this->users->edit_siswa($id)->row_array(),
                'kelas_sd' => $this->users->kelas_sd(),
                'kelas_smp' => $this->users->kelas_smp()
            );
            //load view with data
            $this->load->view('users/part/header', $data);
            $this->load->view('users/part/sidebar');
            $this->load->view('users/layout/ppdb/edit');
            $this->load->view('users/part/footer');
        } else {
            show_404();
            return FALSE;
        }
    }

    public function edit_kelas($kode_pendaftaran)
    {
        if ($this->users->users_id()) {
            $id['kode_pendaftaran'] = $this->encryption->decode($this->session->userdata("kode_pendaftaran"));
            $data = array('title' => 'Data Pendaftar',
                'ppdb' => True,
                'type' => 'edit kelas',
                'edit_user' => $this->users->edit_siswa($id)->row_array(),
                'kelas_sd' => $this->users->kelas_sd(),
                'kelas_smp' => $this->users->kelas_smp()
            );
            //load view with data
            $this->load->view('users/part/header', $data);
            $this->load->view('users/part/sidebar');
            $this->load->view('users/layout/ppdb/edit_kelas');
            $this->load->view('users/part/footer');
        } else {
            show_404();
            return FALSE;
        }
    }

    public function save()
    {
        if ($this->users->users_id()) {
            $type = $this->input->post("type");
            $id['kode_pendaftaran'] = $this->input->post("kode_pendaftaran");
            //check var type
            if ($type == "edit data") {
                //edit data diri siswa
                $update = array(
                    'nama_lengkap' => $this->input->post("nama"),
                    'jenis_kelamin' => $this->input->post("jenis_kelamin"),
                    'nisn' => $this->input->post("nisn"),
                    'nik' => $this->input->post("nik"),
                    'tempat_lahir' => $this->input->post("tempat_lahir"),
                    'tanggal_lahir' => $this->input->post("tanggal_lahir"),
                    'bulan_lahir' => $this->input->post("bulan_lahir"),
                    'tahun_lahir' => $this->input->post("tahun_lahir"),
                    'anak_ke' => $this->input->post("anak_ke"),
                    'jumlah_anak_ke' => $this->input->post("jumlah_anak_ke"),
                    'jumlah_saudara_kandung' => $this->input->post("jumlah_saudara_kandung"),
                    'jumlah_adik' => $this->input->post("jumlah_adik"),
                    'jumlah_kakak' => $this->input->post("jumlah_kakak"),
                    'asrama' => $this->input->post("asrama"),
                    'kk' => $this->input->post("kk"),
                    'kip_pkh' => $this->input->post("kip_pkh"),
                    'no_telp' => $this->input->post("no_hp"),
                    'nama_madrasah' => $this->input->post("madrasah_asal"),
                    'kota_madrasah' => $this->input->post("kota_madrasah"),
                    'npsn' => $this->input->post("npsn"),
                    'no_seri_ijazah' => $this->input->post("no_ijazah"),
                    'no_seri_skhun' => $this->input->post("no_skhun"),
                    'no_un' => $this->input->post("no_un"),

                    'hobi' => $this->input->post("hobi"),
                    'bidang_studi' => $this->input->post("bidang_studi_digemari"),
                    'bakat_dimiliki' => $this->input->post("bakat_dimiliki"),
                    'olahraga_digemari' => $this->input->post("olahraga_digemari"),
                    'cita_cita' => $this->input->post("cita_cita"),

                    'nama_ayah' => $this->input->post("nama_ayah"),
                    'nama_ibu' => $this->input->post("nama_ibu"),
                    'no_ktp_ayah' => $this->input->post("no_ktp_ayah"),
                    'no_ktp_ibu' => $this->input->post("no_ktp_ibu"),
                    'pekerjaan_ayah' => $this->input->post("pekerjaan_ayah"),
                    'pekerjaan_ibu' => $this->input->post("pekerjaan_ibu"),
                    'pendidikan_ayah' => $this->input->post("pendidikan_ayah"),
                    'pendidikan_ibu' => $this->input->post("pendidikan_ibu"),
                    'jln_desa' => $this->input->post("jln_dsn"),
                    'rt' => $this->input->post("rt"),
                    'rw' => $this->input->post("rw"),
                    'desa' => $this->input->post("desa"),
                    'kecamatan' => $this->input->post("kecamatan"),
                    'kabupaten' => $this->input->post("kabupaten"),
                    'kode_pos' => $this->input->post("kode_pos"),
                    'provinsi' => $this->input->post("provinsi"),
                    'penghasilan_rata_ayah' => $this->input->post("penghasilan_ayah"),
                    'penghasilan_rata_ibu' => $this->input->post("penghasilan_ibu"),
                    'keterangan_ayah' => $this->input->post("keterangan_ayah"),
                    'keterangan_ibu' => $this->input->post("keterangan_ibu"),
                    'no_tlp_ayah' => $this->input->post("no_hp_ayah"),
                    'no_tlp_ibu' => $this->input->post("no_hp_ibu"),
                    'nama_Wali' => $this->input->post("nama_wali"),
                    'jenis_kelamin_wali' => $this->input->post("jenis_kelamin_wali"),
                    'no_kk_wali' => $this->input->post("no_kk_wali"),
                    'no_ktp_wali' => $this->input->post("no_ktp_wali"),
                    'pekerjaan_wali' => $this->input->post("pekerjaan_wali"),
                    'pendidikan_wali' => $this->input->post("pendidikan_wali"),
                    'jln_desa_wali' => $this->input->post("jl_dsn_wali"),
                    'rt_wali' => $this->input->post("rt_wali"),
                    'rw_wali' => $this->input->post("rw_wali"),
                    'desa_wali' => $this->input->post("desa_wali"),
                    'kecamatan_wali' => $this->input->post("kecamatan_wali"),
                    'kabupaten_wali' => $this->input->post("kabupaten_wali"),
                    'kode_pos_wali' => $this->input->post("kode_pos_wali"),
                    'provinsi_wali' => $this->input->post("provinsi_wali"),
                    'penghasilan_rata_wali' => $this->input->post("penghasilan_wali"),
                    'status' => "0",
                );
                $this->db->update("tbl_siswa", $update, $id);
                //deklarasi session flashdata
                $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible" style="font-family:Roboto">
                                                                <i class="fa fa-check"></i> Data Berhasil Diupdate.
                                                            </div>');
                //redirect halaman
                redirect('users/ppdb/?source=add&utf8=✓');

                //cek var type
            } else if ($type == "edit kelas") {

                //get kode test peserta
                $generate_no_test = $this->getnotes($this->input->post("pendaftaran_kelas"));

                $update_kelas = array(
                    'asal_sekolah'      => $this->input->post("asal_sekolah"),
                    'pendaftaran_kelas' => $this->input->post("pendaftaran_kelas"),
                    'no_test'           => $generate_no_test
                );

                $this->db->update("tbl_siswa", $update_kelas, $id);
                //deklarasi session flashdata
                $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible" style="font-family:Roboto">
                                <i class="fa fa-check"></i> Data Berhasil Diupdate.</div>');
                //redirect halaman
                redirect('users/ppdb/?source=add&utf8=✓');
            }
        }
    }

    public function getnotes($kelas = '')
    {
        if (empty(trim($kelas))) {
            return '';
            exit();
        }
        $ketemu = false;
        $urut = 1;
        while ($ketemu == false) {
            $no_test = $kelas . '-' . sprintf("%03d", $urut);
            $sql = "SELECT no_test FROM tbl_siswa where no_test='$no_test'";
            $jml = $this->db->query($sql)->num_rows();
            if ($jml == 0) { //Jika nomor tes belum dipakai
                $ketemu = true;
                return $no_test;
            } else { //Jika nomor tes sudah dipakai
                $urut++;
            }
        }
    }

}


