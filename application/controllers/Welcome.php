<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	function __construct() {
        parent::__construct();
        $this->load->helper('url');
		// $this->load->model('admin');
		// $this->load->model('seller_modal');
    }
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function Test()
	{
		// $this->load->view('welcome_message');
		// $this->load->view('user_entry');
		// $this->load->view('user_home');
		// $this->load->view('user_signup');
		// $this->load->view('user_submission');
		$this->load->view('user_login');
		// $this->load->view('admin_login');
		//$this->load->view('admin_entry_table');
		// $this->load->view('admin_submission_table');
		// $this->load->view('admin_dashboard');
	}
}
