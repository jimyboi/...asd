<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data["title"] = "Welcome to Networking Plus 2015";
		$data["pagename"] = "Welcome to Networking Plus 2015";
		$data['tabsf'] = 'meetings';
		$data['menu'] = 'contact';


		if ($_POST) {
			$error = 0;
			$i = 0;
			$arr = array('fname','email','message');
			$arr_var = array('Name','Email Address','Message');
			$arr_req = array(1,1,1);

			$vars = array();

			foreach ($arr as $a) {
				$data[$a] = $vars[$a] = $this->input->post($a);
				if ( ! strlen($this->input->post($a)) && $arr_req[$i]) {
					$data[$a.'_response'] = '<div class="error"><i class="fa fa-info-circle"></i> Please enter '.$arr_var[$i].'.</div>';
					$error++;
				}
				$i++;
			}

			if ( ! $error) {
				extract($vars);
				$message = '
				<html>
				<body>
					Name : '.$fname.' <br />
					Email Address : '.$email.' <br />
					Message : '.$message.'
				';
				//$to = 'susanspetboardinganddaycare@gmail.com';
				$to = 'alex@workercoach.com';
				$result = $this->email_config($message,'Contact Us',$to);

				if ($result) {
					$this->session->set_flashdata('success','<p class="success"><i class="fa fa-info-circle"></i> Successfully sent.</p>');
					redirect('contact');
				}
			}
		}
		$this->load->view("contact",$data);
	}

	private function email_config($message,$subject,$to) {
		$config = Array(
		   'protocol' => 'smtp',
		   'smtp_host' => 'ssl://rsj24.rhostjh.com',
		   'smtp_port' => 465,
		   'smtp_user' => 'info@softwebamerica.com',
		   'smtp_pass' => '!@#$%Info',
		   'mailtype'  => 'html', 
		   'charset'   => 'iso-8859-1'
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
				// Set to, from, message, etc.

		$this->email->from('info@softwebamerica.com',$subject);
		//$this->email->bcc("rhen@softwebholdings.com,alex@workercoach.com,brenald@workercoach.com");
		//$this->email->bcc('lowell@workercoach.com');
		//$this->email->bcc('rhen@softwebholdings.com');
		//$this->email->bcc('tuppertrends@gmail.com');
		
		$this->email->to($to);
		$this->email->subject($subject);
   		$this->email->message($message);
   		
		$result = $this->email->send();
		if($result) 
		{
			return $result;
		}
		else
		{
			//show_error($this->email->print_debugger());
		}
		//$result = 1;
		
	}
}
