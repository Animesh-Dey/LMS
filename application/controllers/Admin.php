<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Admin_model');
		// $this->load->model('seller_modal');
		$this->load->library('session');
		$this->load->library('form_validation');
		if ($this->session->userdata('logged_in')) {
			// redirect('dashboard');
			 //redirect('admin/user_list');
			 //redirect('already_login');
		}
	}
	public function index()
	{
		//  $this->load->view('admin_login');

	}
	public function login()
	{
		// Testing
		if ($this->session->userdata('logged_in')) {
			
			// redirect('user_list');
		}
		// Testing
		$this->load->view('admin_login');
	}
	public function admin_login_check()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);

			$query = $this->Admin_model->createSession($data);

			if ($query) {

				$admindata = array(
					'username' => $query->username,
					'logged_in' => TRUE
				);
				//  print_r($admindata);
				//  die();
				$this->session->set_userdata($admindata);
				//   print_r($admindata);
				//   die();
				redirect('admin_dashboard');
			} else {
				$this->session->set_flashdata('message_error', 'username and password does not match.');
				redirect('admin/login');
			}
		} else {
			$this->load->view('login1');
		}
	}
	function admin_logout()
	{

		$this->session->sess_destroy();
		// redirect($_SERVER['REQUEST_URI'], 'refresh');
		redirect('Admin/login');
	}
     public function admin_dashboard()
	{

		$this->load->view('admin_dashboard');
	}
	public function admin_entry_table()
	{
		if ($this->session->userdata('logged_in')) {
			
			$result['data'] = $this->Admin_model->admin_entry_table();
			$this->load->view('admin_entry_table', $result);
		} else {
			redirect('admin_login');
		}
	}
    public function admin_submission_table()
	{
		if ($this->session->userdata('logged_in')) {
			
			$result['data'] = $this->Admin_model->admin_submission_table();
			$this->load->view('admin_submission_table', $result);
		} else {
			redirect('admin_login');
		}
	}
	
	public function deo_save()
	{
		$this->load->helper(array('form', 'url'));
		if ($this->session->userdata('logged_in')) {
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('email', 'user Name', 'required|is_unique[deo_user.email]');
			$this->form_validation->set_rules('used_email', 'Email', 'trim|required|valid_email|is_unique[deo_user.used_email]');
			$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|exact_length[10]');
			$this->form_validation->set_rules('panchayat_code', 'Panchayat Code', 'trim|required');
			// $this->form_validation->set_error_delimiters('<div class="error">','<div>');
			if ($this->form_validation->run() == TRUE) {
				if ($this->input->post()) {
					$data = array(
						'name' => $this->input->post('name'),
						'password' => $this->input->post('password'),
						'email' => $this->input->post('email'),
						'used_email' => $this->input->post('used_email'),
						'phone' => $this->input->post('phone'),
						'panchayat_code' => $this->input->post('panchayat_code'),

					);
					$query = $this->Admin_model->deo_save($data);

					redirect('admin/deo_list');
				}
			} else {

				$result['panchyat_list'] = $this->Admin_model->panchyat_list();
				$this->load->view('deo_add', $result);
			}
		} else {
			redirect('/');
		}
	}

	

    
}