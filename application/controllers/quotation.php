<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quotation extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->stencil->theme('charisma');
		$this->stencil->slice('head');
		$this->stencil->slice('navbar');
		$this->stencil->slice('sidebar');
		$this->stencil->slice('script');

		$this->stencil->layout('default');
		$this->stencil->title('Quotation');

		$this->load->helper(array('currency'));

		$this->load->model('m_quotation');
	}

	public function index()
	{
		$data['path_table'] = 'quotation/get_all';
		$this->stencil->data($data);
		$this->stencil->paint('quotation_list');
	}

	public function get_all()
	{
		$this->load->library('datatables');
		$this->datatables->select('TxnQuotHdrID,TxnQuotHdrNo,MstCustIDName,TxnQuotHdrDate,TxnQuotHdrTotal')
						 ->from('txnquothdr')
						 ->join('mstcust','mstcust.MstCustID=txnquothdr.MstCustID')
						 ->unset_column('TxnQuotHdrID')
						 ->edit_column('TxnQuotHdrTotal','Rp. $1','rupiah(TxnQuotHdrTotal)')
						 ->add_column('Action',
				        	'<a href="'.site_url('quotation/view/$1').'" class="btn btn-xs btn-info">
				        	Detail</a>
				        	<a href="'.site_url('quotation/edit/$1').'" class="btn btn-xs btn-success">
				        	Edit</a>  
				        	<button class="btn btn-xs btn-danger btn-del" id=$1">
				        	Delete','TxnQuotHdrID');

		echo $this->datatables->generate();


	}

	public function create()
	{
		$data['no'] = $this->m_quotation->get_maxid();
		$data['terms'] = "1. Payment  : 14 Days after confirmation PO
2. Delivery : Total lead time for 2 months after confirmation / Purchase Order
3. Validity : One month after this quotation,the price can be change anytime without prior notice";

		$this->stencil->data($data);
		

		$this->stencil->paint('quotation_form');	
	}

	public function get_groupsales()
	{
		$q = $_POST['data']['q'];

		$groups = $this->m_quotation->get_groupsales($q);

		$results = array();
		if($groups != null){
			foreach($groups as $row){
				$results[] = array('id' => $row->MstGRPSalesID, 'text' => $row->MstGRPSalesDesc);
			}
		}

		echo json_encode(array('q' => $q, 'results' => $results));
		
	}

	public function get_typeorder()
	{
		$q = $_POST['data']['q'];

		$groups = $this->m_quotation->get_typeorder($q);

		$results = array();
		if($groups != null){
			foreach($groups as $row){
				$results[] = array('id' => $row->MstTypeOrderID, 'text' => $row->MstTypeOrderName);
			}
		}

		echo json_encode(array('q' => $q, 'results' => $results));
		
	}

	public function get_customer()
	{
		$q = $_POST['data']['q'];

		$groups = $this->m_quotation->get_customer($q);

		$results = array();
		if($groups != null){
			foreach($groups as $row){
				$results[] = array('id' => $row->MstCustID, 'text' => $row->MstCustIDName);
			}
		}

		echo json_encode(array('q' => $q, 'results' => $results));
		
	}

	public function get_sales()
	{
		$q = $_POST['data']['q'];

		$groups = $this->m_quotation->get_sales($q);

		$results = array();
		if($groups != null){
			foreach($groups as $row){
				$results[] = array('id' => $row->MstSalesPICID, 'text' => $row->MstSalesPICName);
			}
		}

		echo json_encode(array('q' => $q, 'results' => $results));
		
	}

	public function get_typechasis()
	{
		$q = $_POST['data']['q'];

		$groups = $this->m_quotation->get_typechasis($q);

		$results = array();
		if($groups != null){
			foreach($groups as $row){
				$text = $row->MStChasMaker.' '.$row->MStChasModel.' '.$row->MstChasType;
				$results[] = array('id' => $row->MstChasID, 'text' => $text);
			}
		}

		echo json_encode(array('q' => $q, 'results' => $results));	
		
	}

	public function get_drawing()
	{
		$q = $_POST['data']['q'];

		$groups = $this->m_quotation->get_drawing($q);

		$results = array();
		if($groups != null){
			foreach($groups as $row){
				$results[] = array('id' => $row->TxnDrawID, 'text' => $row->TxnDrawNo);
			}
		}

		echo json_encode(array('q' => $q, 'results' => $results));	
		
	}

	public function get_detailcustomer()
	{
		$id = $_GET['id'];

		$row = $this->m_quotation->get_detailcustomer($id);

		if($row != null)
		{
			$data = array(
				'attention' => $row->MstCustIDPIC1,
				'address1' => $row->MstCustIDAddress1,
				'address2' => $row->MstCustIDAddress2,
				'address3' => $row->MstCustIDAddress3,
				'phone' => $row->MstCustIDNoTlp,
				'fax' => $row->MstCustIDNofax,
				'cc' => $row->MstCustIDPIC2,
				'email1' => $row->MstCustIDPICEmail1,
				'email2' => $row->MstCustIDPICEmail2,
				'email3' => $row->MstCustIDPICEmail3
			);

			echo json_encode($data);
		}

	}

	public function get_product()
	{
		$type = $_GET['type'];

		$result = $this->m_quotation->get_product($type);

		echo json_encode($result);
	}

	public function get_detailproduct()
	{
		$id = $_GET['id'];

		$row = $this->m_quotation->get_detailproduct($id);

		if($row != null)
		{
			$data = array(
				'priceid'	=> $row->priceid,
				'unitprice'	=> $row->unitprice
			);

			echo json_encode($data);
		}
	}

	public function save_master()
	{
		$result = $this->m_quotation->save_master();

		$data = array(
			'lastid' => $result,
		);

		echo json_encode($data);
	}

	public function save_detail()
	{
		$id = $this->m_quotation->save_detail();

		if($id != '')
		{
			$this->session->set_flashdata('msgsuccess', 'Succesfully created Quotation');

		}else {
			$this->session->set_flashdata('msgerror', 'Failed saved');
		}
	}

	public function view($id)
	{
		$result = $this->m_quotation->get_quotation($id);

		if($result != null)
		{
			$data['quotationhdr'] = $result['quotationhdr'];
			$data['quotationdtl'] = $result['quotationdtl'];
		}

		$this->stencil->data($data);

		$this->stencil->paint('quotation_detail');
	}


}

/* End of file quotation.php */
/* Location: ./application/controllers/quotation.php */