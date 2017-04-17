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
        return new mPDF('', 'Legal', '', '',
            15, // margin_left
            15, // margin right
            2, // margin top
            2, // margin bottom
            2, // margin header
            2);
    }

    function cetak_kartu($param = NULL)
    {
        include_once APPPATH.'/third_party/mpdf/mpdf.php';

        if ($params == NULL)
        {
            $param = '"en-GB-x","A4","","",2,2,2,2,2,2';
        }

        //return new mPDF($param);
        return new mPDF('L', // L - landscape, P - portrait
            '', '', '', 
            2, // margin_left
            2, // margin right
            2, // margin top
            2, // margin bottom
            2, // margin header
            2);
    }
}
