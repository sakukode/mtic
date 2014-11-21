<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master extends MY_Controller {

   	function __construct()
    {
      	parent::__construct(
            TRUE, // Controller secured
            array(
               'index' => '*'
            ));

      	$this->load->model('m_menu');

      	$this->stencil->theme('charisma');
		$this->stencil->slice('head');
		$this->stencil->slice('navbar');
		$this->stencil->slice('sidebar');
		$this->stencil->slice('script');

		$this->stencil->layout('default');
		$this->stencil->title('Master');
    }
	public function index()
	{
		$id      = $this->ion_auth->get_user_id();
		$role = $this->ion_auth->get_user_group($id,'id');

		$result = $this->m_menu->get_group($role,$group=1);

		if($result != null)
		{
			$data['menu'] = $result;
		}
		else
		{
			$data['menu'] = null;
		}

		$this->stencil->data($data);
		$this->stencil->paint('menu_view');
	}

	

}

/* End of file master.php */
/* Location: ./application/controllers/master.php */