<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_menu extends CI_Model {

	
	public function get_group($role,$group)
	{
		$query = $this->db->select('a.menu_id,b.*')
						  ->from('menu_role as a')
						  ->join('menu as b','b.menu_id=a.menu_id')
						  ->where('a.group_id',$group)
						  ->where('a.role_id',$role)
						  ->get();

		if($query->num_rows() > 0)
		{
			return $query->result();
		}else
		{
			return null;
		}
	}

}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */