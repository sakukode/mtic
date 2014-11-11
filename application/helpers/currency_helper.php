<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('rupiah'))
{

	function rupiah($nilai, $pecahan = 0) {
    	return number_format($nilai, $pecahan, ',', '.');
	}
}