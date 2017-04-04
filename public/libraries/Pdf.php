<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : PPDB Web Application.
 * @author   : Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 * @since    : 2017
 * @license  : https://maulayya.com/portofolio/ppdb-muallimin-muallimat/
 */

class Pdf {

    function Pdf()
    {
        $CI = & get_instance();
        log_message('Debug', 'mPDF class is loaded.');
    }

    function cetak_formulir($param = NULL)
    {
        include_once APPPATH.'/third_party/mpdf/mpdf.php';

        if ($params == NULL)
        {
            $param = '"en-GB-x","A4","","",10,10,10,10,6,3';
        }

        //return new mPDF($param);
        return new mPDF('', 'Legal');
    }

    function cetak_kartu($param = NULL)
    {
        include_once APPPATH.'/third_party/mpdf/mpdf.php';

        if ($params == NULL)
        {
            $param = '"en-GB-x","A4","","",10,10,10,10,6,3';
        }

        //return new mPDF($param);
        return new mPDF('L', // L - landscape, P - portrait
            '', '', '', '',
            30, // margin_left
            30, // margin right
            30, // margin top
            30, // margin bottom
            18, // margin header
            12);
    }
}
