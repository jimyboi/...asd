<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View_members extends CI_Controller
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

		if ($this->input->get('id')) {
			$q = $this->QModel->sfwa('members','members_id',$this->input->get('id'));
			if ( ! $this->QModel->c($q)) {
				show_404();
			} else {
				$g = $this->QModel->g($q);
				/* MEMBER INFO */
				$fa = array('member_category','business_name','contact_name','street_address','suite_no','city','state','zip_code','google_map','tel','cell','fax','email','website','description');
				foreach ($fa as $ma) {
					$data[$ma] = $g[$ma];
				}
				/* LOGIN INFO */
				$logid = $g['login_id'];
				$lq = $this->QModel->sfwa('login_members','login_id',$g['login_id']);
			 	if ($this->QModel->c($lq)) {
					$la = array('username','password');
					$gl = $this->QModel->g($lq);
					foreach ($la as $al) {
						$data[$al] = $gl[$al];
					}
				}
				//echo $this->QModel->c($lq);
				//print_r($data);
				//die();
				if ($_POST){
					$i = 0;
					$error = 0;
					$a = array('member_category','business_name','contact_name','street_address','suite_no','city','state','zip_code','google_map','tel','cell','fax','email','website','description','username','password');
					$b =array('Member Category','Business Name','Contact Name','Street Address','Suite #','City','State','Zip Code','Google Map','Tel','Cell','Fax','Email','Website','description','Username','Pass0word');
					$c = array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);
					$vars = array();
					foreach ($a as $x) {
						$data[$x] = $vars[$x] = $this->input->post($x);
						if ( ! strlen($this->input->post($x)) && $c[$i]) {
							$data[$x.'_response'] = '<div class="error"><i class="fa fa-info-circle"></i> Please enter '.$b[$i].'.</div>';
							$error++;
						}
						$i++;
					}

					if ($this->input->post('password') != $this->input->post('retype_password')) {
						# code...
					}
					if ( ! $error) {
						extract($vars);
						$update =array(
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
							'description' => $description,
							
						);

						$this->db->where('members_id',$this->input->get('id'));
						$this->db->update('members',$update);

						$loginupdate =array(
							'username' => $username,
							'password' => hash_password($password),							
						);

						$this->db->where('login_id',$logid);
						$this->db->update('login',$loginupdate);
					}
				}	
				$this->load->view("view_members",$data);
			}
			
		} else {
			show_404();
		}
		
		

	}
}


