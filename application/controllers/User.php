<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

   

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('User_modal');
        $this->load->library('session');
		$this->load->library('form_validation');
        
    }
    public function index()
    {
        //  $this->load->view('admin_login');

    }
    public function user_login_check()
	{
		$this->form_validation->set_rules('email', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
			);

			$query = $this->User_modal->createSession($data);

			if ($query) {

				$userdata = array(
					'email' => $query->email,
					'logged_in' => TRUE
				);
				//  print_r($admindata);
				//  die();
				$this->session->set_userdata($userdata);
				//   print_r($admindata);
				//   die();
				redirect('user_home');
			} else {
				$this->session->set_flashdata('message_error', 'username and password does not match.');
				redirect('login');
			}
		} else {
			$this->load->view('login1');
		}
	}
	function user_logout()
	{

		$this->session->sess_destroy();
		// redirect($_SERVER['REQUEST_URI'], 'refresh');
		redirect('login');
	}
    
    public function sign_up()
    {
        $this->load->view('user_signup');
    }
    public function login()
    {
        if ($this->session->userdata('logged_in')) {
			
			redirect('user_home');
		}
        $this->load->view('user_login');
    }
    public function user_entry()
    {
        $this->load->view('user_entry');
    }
    public function user_submission()
    {
        $this->load->view('user_submission');
    }
    public function user_home()
    {
        $this->load->view('user_home');
    }

    public function save_signup_data()
    {
     
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'phone' => $this->input->post('phone'),
                'employee_id' => $this->input->post('employee_id'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            $this->load->model('User_modal');
            // print_r($data);
            // die();
             $query = $this->User_modal->save_signup_data($data);
             redirect('login');
             
           
        
    }
    public function user_entry_save()
    {
     
            $data = array(
                'student_name' => $this->input->post('student_name'),
                'student_id' => $this->input->post('student_id'),
                'dept' => $this->input->post('dept'),
                'makaut_roll' => $this->input->post('makaut_roll'),
                'book_id' => $this->input->post('book_id'),
                'issue_date' => $this->input->post('issue_date'),
                'return_date' => $this->input->post('return_date'),
            );
            $this->load->model('User_modal');
            // print_r($data);
            // die();
             $query = $this->User_modal->user_entry_save($data);
             redirect('user_entry');
        
    }
    public function user_submission_save()
    {
     
            $data = array(
                'student_name' => $this->input->post('student_name'),
                'student_id' => $this->input->post('student_id'),
                'dept' => $this->input->post('dept'),
                'makaut_roll' => $this->input->post('makaut_roll'),
                'book_id' => $this->input->post('book_id'),
                'submit_date' => $this->input->post('submit_date'),
                'fine' => $this->input->post('fine'),
            );
            $this->load->model('User_modal');
            // print_r($data);
            // die();
             $query = $this->User_modal->user_submission_save($data);
             redirect('user_submission');
        
    }
   

    
   
   
}
