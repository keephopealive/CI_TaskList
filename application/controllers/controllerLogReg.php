<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ControllerLogReg extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler(TRUE);

	}

	public function index()
	{
		$this->load->view('LogReg/viewLogReg');
	}

	public function get_user_info()
	{
		$user = new User();
		return $users = $user
		->where('email', $this->input->post('email'))
		->where('password', $this->input->post('password'))
		->get()->all_to_array();
	}

	public function login()
	{
		$user = new User();

		$users = $user
		->where('email', $this->input->post('email'))
		->where('password', $this->input->post('password'))
		->get()->all_to_array();

		// var_dump(count($users));
		if (count($users) > 0 )
		{
			// var_dump(count($users)> 0);
			// die('in login / if statement user found');
			$this->session->set_userdata('id', $user->id);
			$this->session->set_userdata('first_name', $user->first_name);
			$this->session->set_userdata('last_name', $user->last_name);
			$this->session->set_userdata('email', $user->email);
			$this->session->set_userdata('login_status', true);
			redirect('/tasks');
		}
		else
		{
			// var_dump($user->error->string);
			// die('in login / else statement user not found');	
			$this->session->set_flashdata('loginError', $user->error->string);
			$this->load->view('LogReg/viewLogReg');
		}
	}

	public function registration()
	{
		$user = new User();
		$user->first_name = $this->input->post('first_name');
		$user->last_name = $this->input->post('last_name');
		$user->email = $this->input->post('email');
		$user->password = $this->input->post('password');
		$user->confirm_password = $this->input->post('confirm_password'); // ATTN
		$user->birthdate = $this->input->post('birthdate');
		$user->save();
		$this->session->set_flashdata('registrationError', $user->error->string);
		$this->load->view('LogReg/viewLogReg');
		// var_dump($this->session->userdata());
		// die();
	}
}

/* End of file welcome.php */