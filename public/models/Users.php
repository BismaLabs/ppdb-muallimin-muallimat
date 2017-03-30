<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : PPDB Web Application.
 * @author   : Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 * @since    : 2017
 * @license  : https://maulayya.com/portofolio/ppdb-muallimin-muallimat/
 */
class Users extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    //fungsi restrict halaman
    function users_id()
    {
        return $this->session->userdata('users_id');
    }
    //fungsi tampilkan siswa
    function edit_users()
    {
        return $this->db->get_where('tbl_siswa');
    }
    //fungsi pilih kelas berdasarkan status
    function kelas_sd()
    {
        $this->db->where('status','1');
        return $this->db->get('tbl_kelas');
    }
    //fungsi pilih kelas berdasarkan status
    function kelas_smp()
    {
        $this->db->where('status','2');
        return $this->db->get('tbl_kelas');
    }

    //fungsi check username
    function check_one($table, $where)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
}