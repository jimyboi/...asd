<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_directory extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data["title"] = "Welcome to Networking Plus 2015";
		$data["pagename"] = "Welcome to Networking Plus 2015";
		$data['tabsf'] = 'member_directory';
		$data['menu'] = 'member_directory';

		if ($this->input->get('id') == 1) {
			$this->load->view("admin/members",$data);	
		} elseif($this->input->get('id') == 2){
			if ($_POST){
				$i = 0;
				$error = 0;
				$a = array('email_address','password');
				$b =array('Email Address','Password');
				$c = array(1,1);
				$vars = array();
				foreach ($a as $x) {
					$data[$x] = $vars[$x] = $this->input->post($x);
					if ( ! strlen($this->input->post($x)) && $c[$i]) {
						$data[$x.'_response'] = '<div class="error"><i class="fa fa-info-circle"></i> Please enter '.$b[$i].'.</div>';
						$error++;
					}
					$i++;
				}

				if ( ! $error) {
					extract($vars);

					$insert =array(
						'username' => $email_address,
						'password' => hash_password($password),
						'status' => 'active',
						'date_created' => date('Y-m-d H:i:s')
					);

					$this->db->insert('login_members',$insert);

					$login_id = $this->db->insert_id();

					redirect('member_directory?id=3&login='.$login_id);
				}
			}
			$this->load->view("admin/add_members",$data);
		}elseif($this->input->get('id') == 3 && $this->input->get('login')){
			$q = $this->QModel->sfwa('login_members','login_id',$this->input->get('login'));
			if ( ! $this->QModel->c($q) ||  ! strlen($this->input->get('login'))) {
				show_404();
			} else {
				if ($_POST){
					$i = 0;
					$error = 0;
					$a = array('member_category','business_name','contact_name','street_address','suite_no','city','state','zip_code','google_map','tel','cell','fax','email','website','description');
					$b =array('Member Category','Business Name','Contact Name','Street Address','Suite #','City','State','Zip Code','Google Map','Tel','Cell','Fax','Email','Website','Description');
					$c = array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);
					$vars = array();
					foreach ($a as $x) {
						$data[$x] = $vars[$x] = $this->input->post($x);
						if ( ! strlen($this->input->post($x)) && $c[$i]) {
							$data[$x.'_response'] = '<div class="error"><i class="fa fa-info-circle"></i> Please enter '.$b[$i].'.</div>';
							$error++;
						}
						$i++;
					}
					//print_r($data);
					//echo $error;
					//die();

					if ( ! $error) {
						extract($vars);

						$insert =array(
							'member_category' => $member_category,
							'business_name' => $business_name,
							'contact_name' => $contact_name,
							'street_address' => $street_address,
							'suite_no' => $suite_no,
							'city' => $city,
							'state' => $state,
							'zip_code' => $zip_code,
							'google_map' => $google_map,
							'tel' => $tel,
							'cell' => $cell,
							'fax' => $fax,
							'email' => $email,
							'website' => $website,
							'description'=>$description,
							'date_created' => date('Y-m-d H:i:s'),
							'login_id' => $this->input->get('login')

							
						);

						//print_r($insert);
						//die();

						$this->db->insert('members',$insert);

						redirect('member_directory?id=1');
					}
				}
				$this->load->view("member_directory",$data);
			}
			if ($this->input->get('id') == 4 && $this->input->get('login')) {
			$this->load->view("members_apps",$data);
			}	
		}
	}
}
