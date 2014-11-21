<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model {

	
	public function get_group()
	{
		$query = $this->db->get('groups');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}else
		{
			return array();
		}
	}

}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */