<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forgot_password extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data["title"] = "Forgot Password | Networking Plus 2015";
		$data["pagename"] = "Forgot Password | Networking Plus 2015";

		if($_POST)
		{
			$submit = $this->input->post('submit');

			if( ! $submit) 
			{
				redirect('404');
			}
			else
			{
				$data['email_address'] = $email_address = $this->input->post('email_address');

				if( ! $email_address)
				{
					$data['email_address_response'] = '<div class="form-error"><i class="fa fa-info-circle"></i> Please enter your email address.</div>';
				}
				else if( ! filter_var($email_address, FILTER_VALIDATE_EMAIL))
				{
					$data['email_address_response'] = '<div class="form-error"><i class="fa fa-info-circle"></i> Please enter valid email address.</div>';
				}
				else
				{
					$query = Qmodel::sfwa('users','email_address',$email_address);

					$cq = Qmodel::c($query);

					$gq = Qmodel::g($query);

					if( ! $cq)
					{
						$data['email_address_response'] = '<div class="form-error"><i class="fa fa-info-circle"></i> Email address not found !.</div>';
					}
					else
					{
						$hast5 = hash_password(date('Y-m-d H:i:s').$email_address);
						$qwe = array(
							'hash_id' => $hast5
							);

						$this->db->where('email_address',$email_address);
						$this->db->update('users',$qwe);

						$mess = "<html>
									<body>
										<h3>Hi ".$gq['full_name']."!</h3>
										<h4><a href=".base_url('forgot_password/set_password/'.$hast5).">Please click here to set your password !</a></h4>
									</body>
								</html>	";
							$config = Array(
							    'protocol' => 'smtp',
							    'smtp_host' => 'ssl://rsj24.rhostjh.com',
							    'smtp_port' => 465,
							    'smtp_user' => 'network@softwebamerica.com',
							    'smtp_pass' => '!@#$%Network',
							    'mailtype'  => 'html', 
							    'charset'   => 'iso-8859-1'
							);
							$this->load->library('email', $config);
							$this->email->set_newline("\r\n");
							// Set to, from, message, etc.
							$this->email->from('admin@networkplus.com', 'Fotgot Password | Networking Plus');
							$this->email->bcc('alex@workercoach.com');
							$this->email->to($email_address);
							$this->email->subject('Forgot Password');
   							$this->email->message($mess);
							$result = $this->email->send();
							
							if($result)
							{
								$this->session->set_flashdata('fogot','<p><i class="fa fa-info-circle"></i>&nbsp; Please check your email to complete your reset password.</p>');
								redirect('forgot_password');
							}
							else
							{
								show_error($this->email->print_debugger());
							}
					}
				}
			}
		}

		$this->load->view("forgotpass",$data);
	}

	public function set_password($hash_id=NULL)
	{
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

				$data["title"] = "Forgot Password | Networking Plus 2015";
				$data["pagename"] = "Forgot Password | Networking Plus 2015";

				$datass = array(
					 'password' => ''
				);

				$get = QModel::g($query);

				$data['pass'] = '123';

				$userid = $get['user_id'];

				$this->db->where('user_id', $userid);
				$this->db->update('users', $datass); 

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
							$this->session->set_flashdata('fogot','<p><i class="fa fa-info-circle"></i>&nbsp; Password Reset Successfully Complete.</p>');
							redirect('forgot_password');
						}
					}
				}

				$this->load->view("forgotpass",$data);
			}	
		}
	}
}