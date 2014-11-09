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

	public function get_typeproduct($key)
	{
		$query = $this->db->select('*')
						  ->like('MstTypeProductName',$key)
						  ->get('msttypeproduct');

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
		$query = $this->db->select('MstChasID,MstChasNo,MStChasMaker,MStChasModel')
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
			return $query->row();
		}else
		{
			return null;
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

	public function get_product($id_type)
	{
		$query = $this->db->select('MstProductID as productid,MstProductType as producttype,MstProductVariant as productvariant,MstProductGroupingSize as productsize')
						  ->from('mstproduct')
						  ->where('MstTypeProductID',$id_type)
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
}

/* End of file m_quotation.php */
/* Location: ./application/models/m_quotation.php */