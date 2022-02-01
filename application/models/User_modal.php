<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_modal extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

    function createSession($data)
	{
		// print_r($data);
		$this->db->where('email', $data['email']);
		$this->db->where('password', $data['password']);
		$query = $this->db->get('user_details');
		if ($query->num_rows() == 1) {
			return $query->row();
		} else {
			return false;
		}
	}
	function save_signup_data($data)
	{
		
		
		$query = $this->db->insert('user_details', $data);
		if ($query) {

			return true;
		} else {
			return false;
		}
	}
    function user_entry_save($data)
	{
		
		
		$query = $this->db->insert('entry', $data);
		if ($query) {

			return true;
		} else {
			return false;
		}
	}
    function user_submission_save($data)
	{
		
		
		$query = $this->db->insert('submission', $data);
		if ($query) {

			return true;
		} else {
			return false;
		}
	}
}
