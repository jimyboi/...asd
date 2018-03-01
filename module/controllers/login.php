<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data["title"] = "Woodland Hills Spiritual Center";
		$data["meta_description"] = "";
		$data["meta_keywords"] = "";
		$data["menu"] = 1;

		$data['parameter'] = 'login';
		
		if($_POST)
		{
			$data['username'] = $uname = $this->input->post('username');
			$data['password'] = $psw = $this->input->post('password');
			
			$query = $this->QModel->query("SELECT * FROM login WHERE username='$uname' AND password='$psw'");

			if( ! $this->QModel->c($query))
			{
				
				$data['error_response'] =  '<div style="height:20px; padding:2px; color:white; background-color:#FF8E8E; font-size:14px; border:2pxsolid #FF4A4A;">Wrong username or password!</div>';
			}
			else
			{
				echo 'Success';
				
				$dashboard = array(
					'username'  => 'adminusername',
					'password'     => 'adminpassword',
					'logged_in' => TRUE
				);
				$this->session->set_userdata($login);
			
				redirect('member_directory?id=1');
			}
		}
		
		$this->load->view("login",$data);
	}
}
