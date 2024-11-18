<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	function cek($table,$where)
	{
		return $this->db->get_where($table,$where);
	}

	function getAllDaerah()
	{
		$this->db->order_by('IdDaerah', 'desc');
		$data = $this->db->get('tbl_mas_daerah');
		if ($data->num_rows() > 0)
		{
			return $data->result();
		}
		else
		{
			return null;
		}
	}

	function getAllPerusahaan()
	{
		$this->db->order_by('IdPerusahaan', 'desc');
		$data = $this->db->get('tbl_mas_perusahaan');
		if ($data->num_rows() > 0)
		{
			return $data->result();
		}
		else
		{
			return null;
		}
	}

	function getAllBlog()
	{
		$this->db->select('*');
		$this->db->from('tbv_blog');
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

	function getAllKategori()
	{
		$data = $this->db->get('tbl_kat_blog');
		if ($data->num_rows() > 0)
		{
			return $data->result();
		}
		else
		{
			return null;
		}
	}

	function getAllPeti()
	{
		$data = $this->db->get_where('tbv_peti','Verify = "Y"');
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

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */