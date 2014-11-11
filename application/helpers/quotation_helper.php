<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('check_approve'))
{

	function check_approve($id) {
    	
    	if($id == 0)
    	{
    		return "<span class='label-warning label label-default'>Pending</span>";
    	}
    	else
    	{
    		return "<span class='label-success label label-default'>Approved</span>";
    	}
	}
}