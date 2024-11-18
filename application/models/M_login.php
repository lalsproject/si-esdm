<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	function cek($table,$where){		
		return $this->db->get_where($table,$where);
	}

	function get_all_privilages($username)
	{
		$this->db->select('*');
		$this->db->from('tbl_login');
		$this->db->where('username', $username);
		$data = $this->db->get();
        if ($data->num_rows() > 0) {
            return $data->result();
        }else{
            return null;
        }
	}

	function get_status($username)
	{
		$this->db->select('StatusLogin');
		$this->db->from('tbl_login');
		$this->db->where('username', $username);
		$data = $this->db->get();
        if ($data->num_rows() > 0) {
            return $data->result();
        }else{
            return null;
        }
	}
	function cek_username($username)
	{
		$this->db->select('*');
		$this->db->from('tbl_login');
		$this->db->where('username', $username);
		$data = $this->db->get();
        if ($data->num_rows() > 0) {
            return true;
        }else{
            return false;
        }
	}	

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */