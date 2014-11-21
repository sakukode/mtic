<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	protected $secured_controller;
	protected $secured_actions;

	function __construct($secured_controller = FALSE, $secured_actions = array())
   	{
   	  parent::__construct();
      $this->secured_controller = $secured_controller;
      $this->secured_actions = $secured_actions;
      if($this->secured_controller)
      {
         $this->_check_security();
      }

      $this->load->library('ion_auth');
   	}

   	protected function _check_security()
	{
		if(!$this->_access_granted($this->ion_auth->get_user_id(), $this->router->method))
		{
			//$this->config->load('security');
			$redirectURL = 'auth/direct'; //$this->config->item('unauthorized_redirect');
			if(isset($redirectURL))
			{
				redirect($redirectURL);
			}
			else
			{
				show_error('Unauthorized access');
			}
		}
	}

	protected function _access_granted($user_id, $action_name)
	{
		if(!$this->secured_controller)
		{
			return TRUE;
		}
		else
		{
			if(!array_key_exists($action_name, $this->secured_actions))
			{
				return TRUE;
			}
			else
			{
				if($user_id === FALSE || !isset($user_id))
				{
					return FALSE;
				}
				else
				{
					if(!is_array($this->secured_actions[$action_name]))
					{
						$allowed_roles = trim($this->secured_actions[$action_name]);
						if($allowed_roles == '*')
						{
							return TRUE;
						}
						else
						{
							$user_role = $this->ion_auth->get_user_group($user_id,'name');
							//$user_role = $this->session->userdata('user_role');
							return stripos($allowed_roles, $user_role) !== FALSE;
						}
					}
					else
					{
						//$user_role = $this->session->userdata('user_role');
						$user_role = $this->ion_auth->get_user_group($user_id,'name');
						return in_array($user_role, $this->secured_actions[$action_name]);
					}
				}					
			}
		}
	}
}