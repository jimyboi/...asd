<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Set_password extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function _remap($param) {
        $this->index($param);
    }
	public function index($hash_id=NULL)
	{
		#echo hash_password('alex');
		if( ! $hash_id)
		{
			redirect('404');
		}
		else
		{
			$query =  QModel::sfwa('users','hash_id',$hash_id);

			$count = QModel::c($query);

			if( ! $count)
			{
				redirect('404');
			}
			else
			{

				$data["title"] = "Welcome to Networking Set Password";
				$data["pagename"] = "Welcome to Networking Set Password";

				$get = QModel::g($query);

				$data['pass'] = $pass =$get['password'];

				$userid = $get['user_id'];

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

							$this->db->where('user_id', $userid);
							$this->db->update('users', $datas); 

							#echo '<script>alert("Succesfully Save !")</script>';
							$this->session->set_flashdata('success_password',"<script language=\"javascript\">alert('Succesfully Save !');</script>");

							redirect('');
						}
					}
				}

				$this->load->view("changepassword",$data);
			}
			
		}
		
	}
}
