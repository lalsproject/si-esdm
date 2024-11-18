<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

	function cek($table,$where)
	{
		return $this->db->get_where($table,$where);
	}

	function getNewBlog()
	{
		$this->db->select('*');
		$this->db->from('tbv_blog');
		$this->db->limit(3);
		$this->db->order_by('RegDate', 'desc');
		$data = $this->db->get();
		if ($data->num_rows() > 0)
		{
			return $data->result();
		}
		else
		{
			return null;
		}
	}
}

/* End of file M_data.php */
/* Location: ./application/models/M_data.php */