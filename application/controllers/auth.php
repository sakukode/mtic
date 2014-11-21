<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->stencil->theme('charisma');
		$this->stencil->slice('head');
		$this->stencil->slice('script');

		$this->stencil->layout('login');
		$this->stencil->title('Login');

		$this->load->library('ion_auth');

		$this->lang->load('auth');
		$this->load->helper('language');
	}

	public function login()
	{
		if($this->ion_auth->logged_in()) redirect('dashboard');
		$config = array(
			array(
                     'field'   => 'username', 
                     'label'   => 'Username', 
                     'rules'   => 'required|xss_clean'
            ),
            array(
                     'field'   => 'password', 
                     'label'   => 'Password', 
                     'rules'   => 'required|xss_clean'
            )
		);

		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

		if($this->form_validation->run() == true)
		{
			$remember = (bool) $this->input->post('remember');

				if ($this->ion_auth->login($this->input->post('username'), $this->input->post('password'), $remember))
				{
				//if the login is successful
				//redirect them back to the home page
					$this->session->set_flashdata('msgsuccess', $this->ion_auth->messages());
					redirect('dashboard', 'refresh');
				}
				else
				{
				//if the login was un-successful
				//redirect them back to the login page
					$this->session->set_flashdata('message', '<p class="text-danger">'.$this->ion_auth->errors().'</p>');
				redirect('auth/login', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
				}

		}else
		{
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->stencil->data($this->data);
			$this->stencil->paint('login_form');
		}
	}

	//log the user out
	public function logout()
	{
		//log the user out
		$logout = $this->ion_auth->logout();

		//redirect them to the login page
		$this->session->set_flashdata('message', $this->ion_auth->messages());
		redirect('login', 'refresh');
	}

	public function direct()
	{
		$this->stencil->theme('charisma');
		$this->stencil->slice('head');
		$this->stencil->slice('navbar');
		$this->stencil->slice('sidebar');
		$this->stencil->slice('script');

		$this->stencil->layout('default');
		
		if(!$this->ion_auth->logged_in()) redirect('login');
		$this->stencil->paint('direct_page');
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */