<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ini contoh controller yang terproteksi gha
 * di controller ini ada 3 method : index, edit, profile
 * rule untuk masing2 method :
 * 1. index   : bisa diakses oleh semua level user
 * 2. edit : hanya bisa diakses oleh admin
 * 3. profile : hanya bisa diakses oleh user dengan level accounting dan marketing
 */

class Dashboard extends MY_Controller {

   	function __construct()
    {
    	//script ini harus ada d setiap controller yang terproteksi gha
      	parent::__construct(
            TRUE, // dikasih nilai TRUE, berarti dia terproteksi,klo FALSE tidak terproteksi
            //ini untuk rule tiap2 method, misal admin bisa melihat list,add,edit product
            //tapi bagian accounting hanya bisa melihat list product atau melihat detail produk
            array(
               'index' => '*', // tanda * digunakan untuk memberi hak akses ke all(semua level grup user)
               'edit' => 'admin', //kalau hanya satu level user yg boleh akses tdk perlu menggunakan array.cukup langsung tulis level usernya
               'profile' => array('accounting','marketing') //kalau lebih dari satu pake array(), didalam array jabarin level2 apa saja yg boleh akses
            ));

      	//end script

      	$this->stencil->theme('charisma');
		$this->stencil->slice('head');
		$this->stencil->slice('navbar');
		$this->stencil->slice('sidebar');
		$this->stencil->slice('script');

		$this->stencil->layout('default');
		$this->stencil->title('Dashboard');
    }

	public function index()
	{
		$data['text'] = "Ini halaman yang hanya bisa diakses semua user";
		$this->stencil->data($data);
		$this->stencil->paint('blank');
	}

	public function edit()
	{
		$data['text'] = "Ini halaman yang hanya bisa diakses oleh admin";
		$this->stencil->data($data);
		$this->stencil->paint('blank');
	}



	public function profile()
	{
		//contoh page
		$data['text'] = "Ini halaman yang bisa diakses oleh accounting dan marketing";
		$this->stencil->data($data);
		$this->stencil->paint('blank');
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */