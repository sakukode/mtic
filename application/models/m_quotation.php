<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_quotation extends CI_Model {

	
	public function get_groupsales($key)
	{
		$query = $this->db->select('*')
						  ->like('MstGRPSalesDesc',$key)
						  ->get('mstgrpsales');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}else
		{
			return NULL;
		}
	}

	public function get_typeorder($key)
	{
		$query = $this->db->select('*')
						  ->like('MstTypeOrderName',$key)
						  ->get('msttypeorder');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}else
		{
			return NULL;
		}
	}

	public function get_customer($key)
	{
		$query = $this->db->select('MstCustID,MstCustIDName')
						  ->like('MstCustIDName',$key)
						  ->get('mstcust');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}else
		{
			return NULL;
		}
	}

	public function get_sales($key)
	{
		$query = $this->db->select('MstSalesPICID,MstSalesPICName')
						  ->like('MstSalesPICName',$key)
						  ->get('mstsalespic');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}else
		{
			return NULL;
		}
	}

	public function get_typechasis($key)
	{
		$query = $this->db->select('MstChasID,MStChasMaker,MStChasModel,MstChasType')
						  ->like('MStChasMaker',$key)
						  ->get('mstchas');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}else
		{
			return NULL;
		}
	}

	public function get_drawing($key)
	{
		$query = $this->db->select('TxnDrawID,TxnDrawNo')
						  ->like('TxnDrawNo',$key)
						  ->get('txndraw');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}else
		{
			return NULL;
		}
	}

	public function get_maxid()
	{
		$query = $this->db->select('TxnQuotHdrID')->get('txnquothdr');

		if($query->num_rows > 0)
		{
			$id = $query->row()->TxnQuotHdrID;
			$id++;
			return $id;
		}else
		{
			return $id=1;
		}
	}

	public function get_detailcustomer($id)
	{
		$query = $this->db->get_where('mstcust',array('MstCustID'=>$id));

		if($query->num_rows() > 0)
		{
			return $query->row();
		}else
		{
			return null;
		}
	}

	public function get_product($type)
	{
		$query = $this->db->select('MstProductID as productid,MstProductType as producttype,MstProductVariant as productvariant,MstProductGroupingSize as productsize')
						  ->from('mstproduct')
						  ->where('MstProductTypeProduct',$type)
						  ->get();

		 if ($query->num_rows() > 0) { 
            foreach ($query->result() as $data) { 
                $hasil[] = $data; 
            } 
            return $hasil; 
        } 
	}

	public function get_detailproduct($id)
	{
		$query = $this->db->select('MstSellingPriceID as priceid,MstSellingPriceUnitPrice as unitprice')
						  ->from('mstsellingprice')
						  ->where('MstProductID',$id)
						  ->get();

		if($query->num_rows() > 0)
		{
			return $query->row();
		}else
		{
			return null;
		}
	}

	public function save_master()
	{
		$groupsales_id 	= $this->input->post('group-sales',TRUE);
		$typeorder_id 	= $this->input->post('type-order',TRUE);
		$date       	= $this->input->post('date-quotation',TRUE);
		$customer_id	= $this->input->post('customer',TRUE);
		$remarks		= $this->input->post('remarks',TRUE);
		$sales_id		= $this->input->post('sales',TRUE);
		$terms			= $this->input->post('terms',TRUE);
		$no_array	 	= $this->input->post('no-quotation',TRUE);
		$no 			= $no_array[0].'/'.$no_array[1].'/'.$no_array[2].'/'.$no_array[3].'/'.$no_array[4];

		$subtotal		= $this->input->post('sub-total',TRUE);
		$discount		= $this->input->post('discount-hdr',TRUE);
		$ppn 			= $this->input->post('ppn',TRUE);
		$total 			= $this->input->post('total',TRUE);

		$data = array(
			'TxnQuotHdrID' 		=> null,
			'TxnQuotHdrNo' 		=> strip_tags($no,ENT_QUOTES),
			'TxnQuotHdrDate'	=> strip_tags($date,ENT_QUOTES),
			'TxnQuotHdrTermsTxt'=> htmlspecialchars($terms,ENT_QUOTES,"UTF-8"),
			'TxnQuotHdrDiscount'=> strip_tags($discount,ENT_QUOTES),
			'TxnQuotHdrPpn'  	=> strip_tags($ppn,ENT_QUOTES),
			'TxnQuotHdrRemarks' => strip_tags($remarks,ENT_QUOTES),
			'TxnQuotHdrSubTotal'=> strip_tags($subtotal,ENT_QUOTES),
			'TxnQuotHdrTotal'	=> strip_tags($total,ENT_QUOTES),
			'MstCustID' 		=> strip_tags($customer_id,ENT_QUOTES),
			'MstSalesPICID' 	=> strip_tags($sales_id,ENT_QUOTES),
			'MstGRPSalesID' 	=> strip_tags($groupsales_id,ENT_QUOTES),
			'MstTypeOrderID'	=> strip_tags($typeorder_id,ENT_QUOTES)
		);

		$query = $this->db->insert('txnquothdr',$data);

		$last_id = $this->db->insert_id($query);

		if($last_id != null)
		{
			return $last_id;
		}
		else
		{
			return null;
		}	
	}

	public function save_detail()
	{
		$post 			= $this->input->post('data');
		$quotation_id 	= $this->input->post('quotationid');

		$data = array();

		foreach($post as $key => $value){
			
			if($value[4] == 'amount') {
				$percent = 0;
				$amount  = $value[5];
			}elseif($value[4] == 'percent') {
				$percent = $value[5];
				$amount = 0;
			}else {
				$percent = 0;
				$amount  = 0;
			}

			$data[] = array(
				'TxnQuotDtlID'  		=> null,
				'TxnQuotDtlQty' 		=> $value[3],
				'TxnQuotDtlUnitPrice'	=> $value[2],
				'TxnQuotDtlDiscPrs'     => $percent,		
				'TxnQuotDtlDiscAm'      => $amount,
				'TxnQuotDtlTotAm'		=> $value[6],
				'TxnQuotDtlRemarks'		=> $value[7],
				'MstChasID'				=> $value[0],
				'MstProductID'			=> $value[1],
				'TxnQuotHdrID'			=> $quotation_id,
				'TxnDrawID'				=> $value[8]
			);
		}

		$this->db->insert_batch('txnquotdtl', $data);

		$id = $this->db->insert_id();

		return $id;
	}

	public function get_quotation($id)
	{
		$query1 = $this->db->get_where('txnquothdr',array('TxnQuotHdrID'=>$id));

		$data = array();
		if($query1->num_rows == 1)
		{
			$data['quotationhdr'] = $query1->row();
			$query2 = $this->db->get_where('txnquotdtl',array('TxnQuotHdrID'=>$id));

			if($query2->num_rows() > 0)
			{
				$data['quotationdtl'] = $query2->result();
			}

			return $data;
		}else {

			return null;
		}
	}


}

/* End of file m_quotation.php */
/* Location: ./application/models/m_quotation.php */