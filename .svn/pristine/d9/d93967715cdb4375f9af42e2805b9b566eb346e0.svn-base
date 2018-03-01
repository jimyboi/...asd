<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Change_password extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data["title"] = "Change Password | Networking Plus 2015";
		$data["pagename"] = "Change Password | Networking Plus 2015";
		$data['pass'] = '123';
		
		#echo $this->session->userdata('user_id')."mamamo";

		if( ! $this->session->userdata('thenetworkplus')) 
		{
			redirect('404');
		}
		else
		{
			if($_POST)
		{
			$submit = $this->input->post('submit');

			if( ! $submit) 
			{
				redirect('404');
			}
			else
			{
				$validatepass1 = 0;
				$data['password'] = $password = $this->input->post('password');
				if( ! $password)
				{
					$data['password_response'] = '<div class="form-error"><i class="fa fa-info-circle"></i> Please enter your password.</div>';
				}
				else
				{
					$validatepass1 = 1;
				}
				$validateconfirm_pass = 0;
				$data['confirm_pass'] = $confirm_pass = $this->input->post('confirm_pass');
				if( ! $confirm_pass) 
				{
					$data['confirm_pass_response'] = '<div class="form-error"><i class="fa fa-info-circle"></i> Please confirm your password.</div>';
				}
				else if($password != $confirm_pass) 
				{
					$data['confirm_pass_response'] = '<div class="form-error"><i class="fa fa-info-circle"></i> Please confirm your password correctly.</div>';
				}
				else
				{
					$validateconfirm_pass = 1;
				}
				if($validatepass1 == 1 && $validateconfirm_pass == 1)
				{
					$datas = array(
			            'hash_id' => hash_password(date('Y-m-d H:i:s').$password),
			            'password' => hash_password($password)
			        );

					$this->db->where('user_id', $this->session->userdata('user_id'));
					$this->db->update('users', $datas); 

					#echo '<script>alert("Succesfully Save !")</script>';
					$this->session->set_flashdata('fogots','<p><i class="fa fa-info-circle"></i>&nbsp; Change Password Successfully Complete.</p>');
					redirect('change_password');
				}
			}
		}
		$this->load->view("forgotpass",$data);
		}
		
	}

	
}