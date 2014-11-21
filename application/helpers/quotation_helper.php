<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('check_approve'))
{

	function check_approve($id)
    {
    	
    	if($id == 0)
    	{
    		return "<span class='label-warning label label-default'>On going</span>";
    	}
    	else
    	{
    		return "<span class='label-success label label-default'>Finish</span>";
    	}
	}
}
if (!function_exists('check_status'))
{
    function check_status($deleted)
    {
        switch ($deleted) {
            case 1:
                return "<span class='label-warning label label-danger'>Inactive</span>";
                break;
            case 0:
                return "<span class='label-success label label-default'>Active</span>";  
            default:
                return "<span class='label-success label label-default'>Active</span>"; 
                break;
        }
    }
}

