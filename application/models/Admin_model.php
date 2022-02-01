<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Admin_model extends CI_Model
{
	public function __construct()

	{

		parent::__construct();
	}
	function createSession($data)
	{
		// print_r($data);
		$this->db->where('username', $data['username']);
		$this->db->where('password', $data['password']);
		$query = $this->db->get('admin_login');
		if ($query->num_rows() == 1) {
			return $query->row();
		} else {
			return false;
		}
	}

    function admin_entry_table()
	{
		$query = $this->db->get('entry');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

    function admin_submission_table()
	{
		$query = $this->db->get('submission');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

}
