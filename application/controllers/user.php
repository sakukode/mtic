<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->stencil->theme('charisma');
		$this->stencil->slice('head');
		$this->stencil->slice('navbar');
		$this->stencil->slice('sidebar');
		$this->stencil->slice('script');

		$this->stencil->layout('default');
		$this->stencil->title('User');

		$this->load->model('m_user');

	}
	public function index()
	{	
		$data['group'] = $this->m_user->get_group();

		$this->stencil->data($data);
		$this->stencil->paint('user_form');
	}

	public function save()
	{
		
		$config = array(
			array(
				'field' => 'firstname',
				'label' => 'Firstname',
				'rules' => 'required|xss_clean'
			),
			array(
				'field' => 'lastname',
				'label' => 'Lastname',
				'rules' => 'required|xss_clean'
			),
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|valid_email|is_unique[users.email]'
			),
			array(
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required|is_unique[users.username]'
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|min_length[6]|max_length[20]'
			),
			array(
				'field' => 'group',
				'label' => 'Group/Level',
				'rules' => 'required'
			)
		);

		$this->form_validation->set_rules($config);

		if($this->form_validation->run() == true)
		{
			//validation ok
			$username = $this->input->post('username');
			$email    = strtolower($this->input->post('email'));
			$password = $this->input->post('password');
			$group    = $this->input->post('group');

			$group_ids = array($group);

			$additional_data = array(
				'first_name' => $this->input->post('firstname'),
				'last_name'  => $this->input->post('lastname'),
				'job'    => $this->input->post('job'),
				'phone'      => $this->input->post('phone'),
			);	

			$check = $this->ion_auth->register($username, $password, $email, $additional_data, $group_ids);

			if($check)
			{
				$this->session->set_flashdata('msgsuccess', $this->ion_auth->messages());
				$data = array(
					'status'	=> TRUE
				);
			}
			else
			{
				//return error message
				$data = array(
					'status'	=> FALSE,
					'msg'		=> $this->ion_auth->errors()
				);
			}

			echo json_encode($data);
		}
		else
		{
			//validation error
			$data = array(
				'status' => FALSE,
				'msg' => validation_errors()
			);

			echo json_encode($data);
		}
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */