<?php


class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('credentials');
	}

	function index()
	{
		$this->load->view('login/login');
	}

	function login()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$data['user']=$this->credentials->validate($username,$password);
		if (!$data['user'])
		{
			echo "Invalid Username/Password";
		}
		else{
			session_start();
			foreach ($data['user'] as $row){
				$_SESSION['id']=$row->id;
			}
			redirect(site_url('home'));
		}
	}

	function logout(){
		session_start();
		unset($_SESSION);
		session_destroy();
		redirect(site_url('login'));
	}

}
