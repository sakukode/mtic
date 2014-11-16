<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_quotation extends CI_Model {


	/**
		mengambil data group sales untuk combo box
	**/
	
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
		$query = $this->db->select_max('noquotation')->get('log_quotation');

		if($query->num_rows > 0)
		{
			$id = $query->row()->noquotation;
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
		$remarks		= $this->input->post('re',TRUE);
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

		$log = array(
			'id'		 => null,
			'noquotation'=> $no_array[0]
		);

		$this->db->insert('log_quotation',$log);		

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

			$data[] = array(
				'TxnQuotDtlID'  		=> null,
				'TxnQuotDtlQty' 		=> $value[3],
				'TxnQuotDtlUnitPrice'	=> $value[2],
				'TxnQuotDtlDiscAm'    	=> $value[4],		
				'TxnQuotDtlDiscPrs'     => $value[5],
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
		$query1 = $this->db->select('a.*,b.MstCustIDName cust_name,b.MstCustIDPIC1 attention,b.MstCustIDAddress1 addr1,b.MstCustIDAddress2 addr2,b.MstCustIDAddress3 addr3,b.MstCustIDNoTlp notelp,b.MstCustIDNofax fax,b.MstCustIDPIC2 cc,b.MstCustIDPICEmail1 email1,b.MstCustIDPICEmail2 email2,b.MstCustIDPICEmail3 email3,c.MstGRPSalesDesc groupsales,d.MstTypeOrderName typeorder,e.MstSalesPICName sales')
						   ->from('txnquothdr as a')
						   ->join('mstcust as b','b.MstCustID=a.MstCustID')
						   ->join('mstgrpsales as c','c.MstGRPSalesID=a.MstGRPSalesID')
						   ->join('msttypeorder as d','d.MstTypeOrderID=a.MstTypeOrderID')
						   ->join('mstsalespic as e','e.MstSalesPICID=a.MstSalesPICID')
						   ->where('a.TxnQuotHdrID',$id)
						   ->get();

		$data = array();
		if($query1->num_rows == 1)
		{
			$data['quotationhdr'] = $query1->row();
			$query2 = $this->db->select('b.MstProductType item_type,b.MstProductVariant item_variant,b.MstProductGroupingSize item_size,a.TxnQuotDtlQty qty,a.TxnQuotDtlUnitPrice price,a.TxnQuotDtlTotAm amount,a.TxnQuotDtlRemarks remarks')
							   ->from('txnquotdtl as a')
							   ->join('mstproduct as b','b.MstProductID=a.MstProductID')
							   ->where('a.TxnQuotHdrID',$id)
							   ->where('a.deleted',0)
							   ->get();

			if($query2->num_rows() > 0)
			{
				$data['quotationdtl'] = $query2->result();
			}else{
				$data['quotationdtl'] = null;
			}

			return $data;
		}else {

			return $data =array('quotationhdr'=>null,'quotationdtl'=>null);
		}
	}

	public function edit_quotation($id)
	{
		$query1 = $this->db->select('a.*,b.MstCustIDName cust_name,b.MstCustIDPIC1 attention,b.MstCustIDAddress1 addr1,b.MstCustIDAddress2 addr2,b.MstCustIDAddress3 addr3,b.MstCustIDNoTlp notelp,b.MstCustIDNofax fax,b.MstCustIDPIC2 cc,b.MstCustIDPICEmail1 email1,b.MstCustIDPICEmail2 email2,b.MstCustIDPICEmail3 email3,c.MstGRPSalesDesc groupsales,d.MstTypeOrderName typeorder,e.MstSalesPICName sales')
						   ->from('txnquothdr as a')
						   ->join('mstcust as b','b.MstCustID=a.MstCustID','LEFT')
						   ->join('mstgrpsales as c','c.MstGRPSalesID=a.MstGRPSalesID')
						   ->join('msttypeorder as d','d.MstTypeOrderID=a.MstTypeOrderID')
						   ->join('mstsalespic as e','e.MstSalesPICID=a.MstSalesPICID')
						   ->where('a.TxnQuotHdrID',$id)
						   ->get();

		$data = array();
		if($query1->num_rows == 1)
		{
			$data['quotationhdr'] = $query1->row();
			$query2 = $this->db->select('a.*,b.MstProductTypeProduct,b.MstProductType,b.MstProductVariant,MstProductGroupingSize,c.MStChasMaker,c.MStChasModel,c.MStChasType,d.TxnDrawNo')
							   ->from('txnquotdtl as a')
							   ->join('mstproduct as b','b.MstProductID=a.MstProductID','LEFT')
							   ->join('mstchas as c','c.MstChasID=a.MstChasID','LEFT')
							   ->join('txndraw as d','d.TxnDrawID=a.TxnDrawID','LEFT')
							   ->where('a.TxnQuotHdrID',$id)
							   ->where('a.deleted',0)
							   ->get();

			if($query2->num_rows() > 0)
			{
				$data['quotationdtl'] = $query2->result();
			}else{
				$data['quotationdtl'] = null;
			}

			return $data;
		}else {

			return $data =array('quotationhdr'=>null,'quotationdtl'=>null);
		}
	}

	public function delete($id)
	{
		$data = array(
			'deleted' =>1
		);

		$this->db->where('TxnQuotHdrID', $id);
		$this->db->update('txnquothdr',$data);

		$this->db->where('TxnQuotDtlID',$id);
		$this->db->update('txnquotdtl',$data);	

		if($this->db->affected_rows() > 0)
		  return TRUE ;
		else
		  return FALSE; 

	}

	public function delete_many($data)
	{
		$deleted = array(
			'deleted' => 1
		);

		foreach($data as $key => $value)
		{
			$this->db->where('TxnQuotHdrID', $value)
					 ->update('txnquothdr',$deleted);
			$this->db->where('TxnQuotHdrID',$value)
					 ->update('txnquotdtl',$deleted);
		}

		if($this->db->affected_rows() > 0)
		  return TRUE ;
		else
		  return FALSE; 

	}

	public function update_master($id)
	{

		$groupsales_id 	= $this->input->post('group-sales',TRUE);
		$typeorder_id 	= $this->input->post('type-order',TRUE);
		$date       	= $this->input->post('date-quotation',TRUE);
		$customer_id	= $this->input->post('customer',TRUE);
		$remarks		= $this->input->post('re',TRUE);
		$sales_id		= $this->input->post('sales',TRUE);
		$terms			= $this->input->post('terms',TRUE);
		$no_array	 	= $this->input->post('no-quotation',TRUE);
		$no 			= $no_array[0].'/'.$no_array[1].'/'.$no_array[2].'/'.$no_array[3].'/'.$no_array[4].'/'.$no_array[5];

		$subtotal		= $this->input->post('sub-total',TRUE);
		$discount		= $this->input->post('discount-hdr',TRUE);
		$ppn 			= $this->input->post('ppn',TRUE);
		$total 			= $this->input->post('total',TRUE);

		$data = array(
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

		$this->db->where('TxnQuotHdrID', $id);
		$this->db->update('txnquothdr',$data); 

	}

	public function update_detail()
	{
		$post 			= $this->input->post('data');
		$quotation_id 	= $this->input->post('quotationid');

		//$new = array();
		//$old = array();

		foreach($post as $key => $value){
			
			
		

			if($value[0] == null)
			{
				$new = array(
					'TxnQuotDtlID'  		=> null,
					'TxnQuotDtlQty' 		=> $value[4],
					'TxnQuotDtlUnitPrice'	=> $value[3],
					'TxnQuotDtlDiscPrs'     => $value[6],		
					'TxnQuotDtlDiscAm'      => $value[5],
					'TxnQuotDtlTotAm'		=> $value[7],
					'TxnQuotDtlRemarks'		=> $value[8],
					'MstChasID'				=> $value[1],
					'MstProductID'			=> $value[2],
					'TxnQuotHdrID'			=> $quotation_id,
					'TxnDrawID'				=> $value[9]
				);

				$this->db->insert('txnquotdtl',$new);
			}
			else
			{
				$old = array(
					'TxnQuotDtlQty' 		=> $value[4],
					'TxnQuotDtlUnitPrice'	=> $value[3],
					'TxnQuotDtlDiscPrs'     => $value[6],		
					'TxnQuotDtlDiscAm'      => $value[5],
					'TxnQuotDtlTotAm'		=> $value[7],
					'TxnQuotDtlRemarks'		=> $value[8],
					'MstChasID'				=> $value[1],
					'MstProductID'			=> $value[2],
					'TxnQuotHdrID'			=> $quotation_id,
					'TxnDrawID'				=> $value[9]
				);

				$this->db->where('TxnQuotDtlID',$value[0]);
				$this->db->update('txnquotdtl',$old);
			}
			
		}

		//$this->db->insert_batch('txnquotdtl', $new);
		//$this->db->update_batch('txnquotdtl', $old, 'TxnQuotDtlID'); 
		
		if($this->db->affected_rows() > 0)
		  return TRUE ;
		else
		  return FALSE; 
	}

	public function create_revisi()
	{
		$groupsales_id 	= $this->input->post('group-sales',TRUE);
		$typeorder_id 	= $this->input->post('type-order',TRUE);
		$date       	= $this->input->post('date-quotation',TRUE);
		$customer_id	= $this->input->post('customer',TRUE);
		$remarks		= $this->input->post('re',TRUE);
		$sales_id		= $this->input->post('sales',TRUE);
		$terms			= $this->input->post('terms',TRUE);
		$no_array	 	= $this->input->post('no-revisi',TRUE);
		$no 			= $no_array[0].'/'.$no_array[1].'/'.$no_array[2].'/'.$no_array[3].'/'.$no_array[4].'/'.$no_array[5];

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

	public function check_revisi($id)
	{
		$query = $this->db->select('TxnQuotHdrNo')->where('TxnQuotHdrID',$id)->get('txnquothdr');

		$str   = $query->row()->TxnQuotHdrNo;

		$no_array = explode("/", $str);

		$no = $no_array[0];

		$query2 = $this->db->like('TxnQuotHdrNo',$no,'after')->from('txnquothdr');

		$total = $query2->count_all_results();

 		return $total;
	}

}

/* End of file m_quotation.php */
/* Location: ./application/models/m_quotation.php */