<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	
	public function index()
	{
		$data["title"] = "Welcome to Networking Plus 2015";
		$data["pagename"] = "Welcome to Networking Plus 2015";
		$data['tabsf'] = 'mama mo';
		$data['menu'] = 'directory';
		$this->load->view("body",$data);
	}

	public function login() {
		$data["title"] = "Welcome to Networking Plus 2015";
		$data["pagename"] = "Welcome to Networking Plus 2015";
		$data['tabsf'] = 'mama mo';
		$data['menu'] = 'directory';
		if ($_POST) {
			$i = 0;
			$error = 0;

			$a = array('username','password');
			$b = array('Username','Password');
			$c = array(1,1);

			$vars = array();

			foreach ($a as $x) {
				$data[$x] = $vars[$x] = $this->input->post($x);

				if ( ! strlen($this->input->post($x)) && $c[$i]) {
					$data[$x.'_response'] ='<div class="form-error">Please insert '.$b[$i].'</div>';
					$error++;
					$data['er_res'] = 'login-modal';
				}
				$i++;
			}

			if ( ! $error) {
				extract($vars);
				$q = $this->QModel->sfwa('login_members',array('username','password'),array($username,hash_password($password)));
				if ($this->QModel->c($q)) {
					$g = $this->QModel->g($q);
					$draincouser = array('woodlandhillsmember' => hash_password($username),
						'param' => $g['login_id']
					);

					$this->session->set_userdata($draincouser);

					redirect('');

				} else {
					$data['username_response'] ='<div class="form-error">Invalid username !</div>';
					$data['password_response'] ='<div class="form-error">Invalid password!</div>';
					$data['er_res'] = 'login-modal';
				}
			}
		}
		$this->load->view('body',$data);
	}

	public function logout()
	{
		//unset($_SESSION['woodlandhillsmember']);
		//unset($_SESSION['param']);

		$draincouser = array('woodlandhillsmember' => '',
			'param' => ''
		);

		$this->session->unset_userdata($draincouser);
		$this->session->sess_destroy();
		redirect('');
	}

	public function activity() {
		$data["title"] = "Welcome to Networking Plus 2015";
		$data["pagename"] = "Welcome to Networking Plus 2015";
		$data['menu'] = 'activity';
		$this->load->view("activity",$data);
	}

	public function calendar() {
		$data["title"] = "Welcome to Networking Plus 2015";
		$data["pagename"] = "Welcome to Networking Plus 2015";

		//echo $this->input->get('v');
		//die();
		$data['menu'] = 'calendar';

		if($this->input->get('v')) {
			$q = $this->QModel->sfwa('calendar','calendar_id',$this->input->get('v'));
			if ($this->QModel->c($q)) {
				$g = $this->QModel->g($q);
				$a = array('calendar_title','venue', 'date_start', 'date_end', 'time_start', 'time_end', 'calendar_description');
				$vars = array();

				foreach ($a as $x) {
					$data[$x] = $vars[$x] =  $g[$x];
				}


				$this->load->view('output',$data);
			} else{
				echo 'Not found !';
			} 
				
		} else {
			$this->load->view("calendar",$data);
		}
	}
	public function getInfo() {
		$query = $this->QModel->sf('calendar');

		$cquery = $this->QModel->c($query);

		if( ! $cquery) {
			
		}
		else {
			foreach($this->QModel->g($query, TRUE) as $get) {
				$a = array('calendar_title','venue', 'date_start', 'date_end', 'time_start', 'time_end', 'calendar_description','calendar_id');
				$vars = array();

				foreach ($a as $x) {
					$data[$x] = $vars[$x] = $get[$x];
				}
				extract($vars);

				$start = strtotime($date_start." ".$time_start) * 1000;
				$end = strtotime($date_end." ".$time_end) * 1000;

				$event_type = "event-success";

				 $out[] = array(
					'id' => $calendar_id,
					'title' => $calendar_title,
					'url' => base_url('calendar?v='.$calendar_id),
					'class' => $event_type,
					'start' => $start,
					'end' => $end
				);
			   
			}
			echo json_encode(array('success' => 1, 'result' => $out));
		}
	}

	public function contact() {
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

	public function gallery() {
		$data["title"] = "Welcome to Networking Plus 2015";
		$data["pagename"] = "Welcome to Networking Plus 2015";
		$data['tabsf'] = 'whng';
		$data['menu'] = 'gallery';
		$this->load->view("gallery",$data);
	}

	public function meetings(){
		$data["title"] = "Welcome to Networking Plus 2015";
		$data["pagename"] = "Welcome to Networking Plus 2015";
		$data['tabsf'] = 'meetings';
		$data['menu'] = 'about';
		$this->load->view("meetings",$data);
	}
	public function members()
	{
		$data["title"] = "Welcome to Networking Plus 2015";
		$data["pagename"] = "Welcome to Networking Plus 2015";
		$data['tabsf'] = 'members';
		$this->load->view("members",$data);
	}

	public function membership()
	{
		$data["title"] = "Welcome to Networking Plus 2015";
		$data["pagename"] = "Welcome to Networking Plus 2015";
		$data['tabsf'] = 'member_directory';
		$data['menu'] = 'membership';

		if ($this->input->get('v')) {
			$q = $this->QModel->sfwa('information','information_id',$this->input->get('v'));
			if ($this->QModel->c($q)) {
				$g = $this->QModel->g($q);
				$vars = array();
				$a = array('contact_name','business_name', 'member_category', 'st_address', 'suite_no', 'city', 'state', 'zip_code', 'telephone', 'cellphone', 'fax_number', 'email_address', 'website', 'company_description'); // VARIABLE
				$uq = $this->QModel->sfwa('user',array('user_id','status','user_type'),array($g['user_id'],'active','2'));
				if ( ! $this->QModel->c($uq)) {
					show_404();
				} else {
					foreach ($a as $x) {
						$data[$x] = $g[$x];
					}
				}
				$iq = $this->QModel->sfwa('images',array('images_id'),array($g['images_id']));
				if ( ! $this->QModel->c($iq)) {
					
				} else {
					$ig = $this->QModel->g($iq);
					$data['image_file'] = $ig['image_file'];
				}
				

			} else {
				show_404();
			}
			$this->load->view("members_info",$data);
		} else {
			$this->load->view("membership",$data);	
		}
		
	}


	public function whng()
	{
		$data["title"] = "Welcome to Networking Plus 2015";
		$data["pagename"] = "Welcome to Networking Plus 2015";
		$data['tabsf'] = 'whng';
		$data['menu'] = 'about';
		$this->load->view("whng",$data);
	}

	public function join() {
		$data["title"] = "Welcome to Networking Plus 2015";
		$data["pagename"] = "Welcome to Networking Plus 2015";
		$data['tabsf'] = 'meetings';
		$data['menu'] = 'join';
		$this->load->view("join",$data);
	}

	public function members_info()
	{
		$data["title"] = "Welcome to Networking Plus 2015";
		$data["pagename"] = "Welcome to Networking Plus 2015";
		$data['tabsf'] = 'member_directory';
		$data['menu'] = 'member_directory';

		$this->load->view("members_info",$data);
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
