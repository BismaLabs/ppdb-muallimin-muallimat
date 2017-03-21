<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : Medical Top Team.
 * @author   : Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 * @since    : 2017
 * @license  : https://maulayya.com/portofolio/medical-top-team/
 */
if(!function_exists('systems'))
{
    function systems($key)
    {
        $CI =& get_instance();

        $query = $CI->db->select($key)->where('id_system',1)->get('tbl_systems');

        if($query->num_rows() != 1){

            return NULL;
        }else{
            $result = $query->row();

            return $result->$key;
        }
    }
}