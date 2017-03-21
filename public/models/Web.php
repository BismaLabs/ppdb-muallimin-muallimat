<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : PPDB Web Application.
 * @author   : Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 * @since    : 2017
 * @license  : https://maulayya.com/portofolio/ppdb-muallimin-muallimat/
 */
class Web extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    //get pages by id
    function get_pages($id_pages)
    {
        $query = $this->db->query("SELECT * FROM tbl_pages WHERE id_page = '$id_pages'");
        return $query;
    }
}