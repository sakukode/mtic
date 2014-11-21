<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('menu_group'))
{
    function menu_group()
    {
        $CI =& get_instance();

        $query = $CI->db->get_where('menu_group',array('status'=>'active'));

        if($query->num_rows() > 0)
        {
            return $result = $query->result();
        }else
        {
            return NULL;
        }
    }
}