<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : PPDB Web Application.
 * @author   : Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 * @since    : 2017
 * @license  : https://maulayya.com/portofolio/ppdb-muallimin-muallimat/
 */

include_once APPPATH.'/third_party/mpdf/mpdf.php';

class Pdf {

    public $param;
    public $pdf;
    public $kartu_ujian;

    public function __construct()
    {
        $this->pdf = new mPDF('', 'Legal');
    }

    public function kartu_ujian($param = '"en-GB-x","A4","","",10,10,10,10,6,3"')
    {
        $this->param =$param;
        $this->kartu_ujian = new mPDF($this->param);
    }
}
