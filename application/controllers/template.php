<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->stencil->theme('charisma');
		$this->stencil->slice('head');
		$this->stencil->slice('navbar');
		$this->stencil->slice('sidebar');
		$this->stencil->slice('script');

		$this->stencil->layout('default');
	}

	public function index()
	{
		$this->stencil->title('Dashboard');
		$this->stencil->paint('dashboard');
	}

	public function blank()
	{
		$this->stencil->title('Blank');
		$this->stencil->paint('blank');
	}

	public function table()
	{
		$this->stencil->title('Table');
		$this->stencil->paint('table');
	}

	public function form()
	{
		$this->stencil->title('Form');
		$this->stencil->paint('form');
	}

	public function galery()
	{
		$this->stencil->title('Galery');
		$this->stencil->paint('galery');
	}

	public function chart()
	{		
		$this->stencil->js(array(
			'charisma/bower_components/flot/excanvas.min',
			'charisma/bower_components/flot/jquery.flot',
			'charisma/bower_components/flot/jquery.flot.pie',
			'charisma/bower_components/flot/jquery.flot.stack',
			'charisma/bower_components/flot/jquery.flot.resize'
		));

		$this->stencil->js('charisma/js/init-chart');

		$this->stencil->title('Chart');
		$this->stencil->paint('chart');
	}

}

/* End of file template.php */
/* Location: ./application/controllers/template.php */