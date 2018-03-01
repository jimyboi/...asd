<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
	private $folder = 'admin/';
	public function __construct()
	{
		parent::__construct();
		// $this->load->library('session');
	}

	public function index()
	{

		if( ! $this->session->userdata('is_login')) 
			redirect('admin/login');
		else
			redirect('admin/dashboard');
	}

	public function login() {
		if($this->session->userdata('is_login')) 
			redirect('admin/dashboard');
		
		$data["title"] = "Welcome to WHNG - Login ";
		$data['description'] = 'Welcome to WHNG !';
		$data['author'] = "Softweb";
		$data['folder'] = $this->folder.'';
		if($_POST) {
			$i = 0;
			$error = 0;
			$array = array('Username','Password');
			$array_var = array('username','password');
			$array_req = array(1,1);

			foreach ($array_var as $a) {
				$data[$a] = $this->input->post($a);
				if( ! strlen($this->input->post($a)) && $array_req[$i]) {
					$data[$a.'_response'] = '<div class="form-error"><i class="fa fa-info-circle"></i> Please enter '.$array[$i].'.</div>';
					$error++;
				}
				$i++;
			}
			if( ! $error) {
				if ($this->input->post('username') == 'admin' && $this->input->post('password') == 'qweqwe') {
					$rgnetwork = array(
						'is_login' => hash_password('yes'),
						'date_login' => strtotime(date("Y-m-d H:i:s"))
					);
					$this->session->set_userdata($rgnetwork);

					redirect('admin/dashboard');
				} else {
					$data['general_response'] = '<div class="fa fa-exclamation-circle"><i class="fa fa-info-circle"></i> Login details not found.</div>';
				}

			}
		}

		$this->load->view($this->folder.'login',$data);
	}
	public function logout()
	{
		$onlinenetwork = array(
			
			'is_login' => '',
			'date_login' => ''
			
		);			

		$this->session->unset_userdata($onlinenetwork);
		$this->session->sess_destroy();
		redirect('');
	}
	public function dashboard() {
		if( ! $this->session->userdata('is_login')) 
			redirect('admin/login');

		$data['title'] = "WHNG - Admin";
		$data['folder'] = $this->folder;
		$data['description'] = 'WHNG';
		$data['author'] = 'Softweb';

		$data['menu'] = 'dashboard';
		
		$this->load->view($this->folder.'body',$data);
	}

	public function members() {
		$data['title'] = "WHNG - Admin";
		$data['folder'] = $this->folder;
		$data['description'] = 'WHNG';
		$data['author'] = 'Softweb';
		if ($this->input->get('c') == 'add') {
			$data['menu'] = 'Add members';

			if ($_POST) {
				$error = 0;
				$i = 0;
				$a = array('contact_name','business_name', 'member_category', 'st_address', 'suite_no', 'city', 'state', 'zip_code', 'telephone', 'cellphone', 'fax_number', 'email_address', 'website', 'company_description','username','password','twitter','facebook','google_plus','pinterest'); // VARIABLE
				$b = array('Contact Name','Business Name', 'Member Category', 'Street Address', 'Suite No.', 'City', 'State', 'Zip Code', 'Telephone', 'Cellphone', 'Fax', 'Email Address', 'Website', 'Company Desciption','Username','Password','Twitter','Facebook','Google Plus','Pinterest');// LABEL
				$c = array(1,1,1,0,0,0,0,0,0,0,0,1,0,0,1,1,0,0,0,0);

				$vars = array();

				foreach ($a as $x) {
					$data[$x] = $vars[$x] = $this->input->post($x);
					if ( ! strlen($this->input->post($x)) && $c[$i]) {
						$data[$x.'_response'] = '<div class="form-error"><i class="fa fa-info-circle"></i> Please enter '.$b[$i].'.</div>';
						$error++;
					}
					$i++;
				}

			
				$file = $_FILES['images']['name'];
				$type = $_FILES['images']['type'];
				$size = $_FILES['images']['size'];
				$temp = $_FILES['images']['tmp_name'];
				$errors = $_FILES['images']['error'];

				if ($file) {
					// Upload max mb
					$mb = 10000000;
					// Check if there's an error while uploading a file.
					$upload_error = 0;
					$upload_error1_size = 0;
					$upload_error1_file = 0;
					
					if($type == "image/png" && $size < $mb OR $type == "image/pjpeg" && $size < $mb OR $type == "image/jpeg" && $size < $mb) {
						list($width, $height) = getimagesize($temp);
						if($width < 200 && $height < 185) {
							$upload_error++;
						}
					}else if($size >= $mb) {
						$upload_error1_size++;
					} else {
						$upload_error1_file++;
					}
					if($upload_error != 0) {
						$error++;
						$data['images_response'] = '<div class="form-error"><i class="fa fa-info-circle"></i> Image resolution must be greater than or equal 240x185px!</div>';
					} else if($upload_error1_size != 0) {
						$error++;
						$data['images_response'] = '<div class="form-error"><i class="fa fa-info-circle"></i> Image file size is too big! (10mb below only)</div>';
					} else if($upload_error1_file != 0) {
						$error++;
						$data['images_response'] = '<div class="form-error"><i class="fa fa-info-circle"></i> Image invalid file! You can upload png or jpeg only.</div>';
					} else {

					}	
				}

				if ( ! $error) {
					extract($vars);

					$this->db->trans_start();

					$isoscial = array(
						'twitter' => $twitter,
						'facebook' => $facebook,
						'google_plus' => $google_plus,
						'pinterest' => $pinterest,
						'date_created' => date("Y-m-d H:i:s")
					);
					$this->db->insert('social',$isoscial);
					$social_id = $this->db->insert_id();

					$iuser = array(
						'username' => $username,
						'password' => hash_password($password),
						'date_created' => date("Y-m-d H:i:s")
					);

					$this->db->insert('user',$iuser);
					$user_id = $this->db->insert_id();

				
					if ($file) {
						$image_file = $this->upload($file,$type,$size,$temp);

						$imageinsert = array(
							'image_file' => $image_file,
							'date_created' => date("Y-m-d H:i:s")
						);

						$this->db->insert('images',$imageinsert);
						$images_id = $this->db->insert_id();
					} else {
						$images_id = 0;
					}

					$iinfo = array(
						'social_id' => $social_id,
						'user_id' => $user_id,
						'images_id' => $images_id,
						'contact_name' => $contact_name,
						'business_name	' => $business_name	,
						'member_category' => $member_category,
						'st_address' => $st_address,
						'suite_no' => $suite_no,
						'city' => $city,
						'state	' => $state	,
						'zip_code	' => $zip_code,
						'telephone' => $telephone,
						'cellphone' => $cellphone,
						'fax_number' => $fax_number,
						'email_address' => $email_address,
						'website' => $website,
						'company_description' => $company_description,
						'date_created' => date("Y-m-d H:i:s")
					);
					$this->db->insert('information',$iinfo);
					$this->db->trans_complete();

					$this->session->set_flashdata('success','<p class="success"><i class="fa fa-info-circle"></i> Member Successfully Save.</p>');
					redirect('admin/members');

				} 
			}
			$this->load->view($this->folder.'add_member',$data);
		} elseif($this->input->get('c') == 'edit' && $this->input->get('param')){
			$data['menu'] = 'Members';
			$i_id = $this->input->get('param');

			$q = $this->QModel->sfwa('information','information_id',$i_id);
			if ( ! $this->QModel->c($q)) {
				show_404();
			} else {
				$g = $this->QModel->g($q);
				$vinfo = array();
				$info = array('contact_name','business_name', 'member_category', 'st_address', 'suite_no', 'city', 'state', 'zip_code', 'telephone', 'cellphone', 'fax_number', 'email_address', 'website', 'company_description','social_id','user_id','images_id');
				foreach ($info as $ia) {
					$data[$ia] = $vinfo[$ia] = $g[$ia];
				}
				extract($vinfo);
				
				$information_id = $g['information_id'];
				$uq = $this->QModel->sfwa('user','user_id',$user_id);
				if ( ! $this->QModel->c($uq)) {
					show_404();
				} else {
					$ug = $this->QModel->g($uq);
					$vuser = array();
					$uinfo = array('username','password');
					foreach ($uinfo as $ua) {
						$data[$ua] = $vuser[$ua.'s'] = $ug[$ua];
					}
				}

				extract($vuser);

				$sq = $this->QModel->sfwa('social','social_id',$social_id);
				if ( ! $this->QModel->c($sq)) {
					
				} else {
					$sg = $this->QModel->g($sq);
					$vsocial = array();
					$sinfo = array('twitter','facebook','google_plus','pinterest');
					foreach ($sinfo as $sa) {
						$data[$sa] = $vsocial[$sa] = $sg[$sa];
					}
				}

				$imgq = $this->QModel->sfwa('images','images_id',$images_id);
				$noimagefound = 0;
				if ( ! $this->QModel->c($imgq)) {
					$noimagefound++;					
				} else {
					$imgg = $this->QModel->g($imgq);
					$vimg = array();
					$imginfo = array('image_file');
					foreach ($imginfo as $imga) {
						$data[$imga] = $vimg[$imga] = $imgg[$imga];
					}
				}

				if ($_POST) {
					$error = 0;
					$i = 0;
					$a = array('contact_name','business_name', 'member_category', 'st_address', 'suite_no', 'city', 'state', 'zip_code', 'telephone', 'cellphone', 'fax_number', 'email_address', 'website', 'company_description','username','password','twitter','facebook','google_plus','pinterest'); // VARIABLE
					$b = array('Contact Name','Business Name', 'Member Category', 'Street Address', 'Suite No.', 'City', 'State', 'Zip Code', 'Telephone', 'Cellphone', 'Fax', 'Email Address', 'Website', 'Company Desciption','Username','Password','Twitter','Facebook','Google Plus','Pinterest');// LABEL
					$c = array(1,1,1,0,0,0,0,0,0,0,0,1,0,0,1,1,0,0,0,0);

					$vars = array();

					foreach ($a as $x) {
						$data[$x] = $vars[$x] = $this->input->post($x);
						if ( ! strlen($this->input->post($x)) && $c[$i]) {
							$data[$x.'_response'] = '<div class="form-error"><i class="fa fa-info-circle"></i> Please enter '.$b[$i].'.</div>';
							$error++;
						}
						$i++;
					}

					$file = $_FILES['images']['name'];
					$type = $_FILES['images']['type'];
					$size = $_FILES['images']['size'];
					$temp = $_FILES['images']['tmp_name'];
					$errors = $_FILES['images']['error'];

					if ($file) {
						// Upload max mb
						$mb = 10000000;
						// Check if there's an error while uploading a file.
						$upload_error = 0;
						$upload_error1_size = 0;
						$upload_error1_file = 0;
						
						if($type == "image/png" && $size < $mb OR $type == "image/pjpeg" && $size < $mb OR $type == "image/jpeg" && $size < $mb) {
							list($width, $height) = getimagesize($temp);
							if($width < 200 && $height < 185) {
								$upload_error++;
							}
						}else if($size >= $mb) {
							$upload_error1_size++;
						} else {
							$upload_error1_file++;
						}
						if($upload_error != 0) {
							$error++;
							$data['images_response'] = '<div class="form-error"><i class="fa fa-info-circle"></i> Image resolution must be greater than or equal 240x185px!</div>';
						} else if($upload_error1_size != 0) {
							$error++;
							$data['images_response'] = '<div class="form-error"><i class="fa fa-info-circle"></i> Image file size is too big! (10mb below only)</div>';
						} else if($upload_error1_file != 0) {
							$error++;
							$data['images_response'] = '<div class="form-error"><i class="fa fa-info-circle"></i> Image invalid file! You can upload png or jpeg only.</div>';
						} else {

						}	
					}

					if ( ! $error) {
						extract($vars);

						$this->db->trans_start();

						$isoscial = array(
							'twitter' => $twitter,
							'facebook' => $facebook,
							'google_plus' => $google_plus,
							'pinterest' => $pinterest,
						);
						$this->db->update('social',$isoscial);

						$iuser = array(
							'username' => $username
						);

						if ($password !=  $passwords) {
							$iuser['password'] = hash_password($password);
						}
						//echo $password.'<br />'.$passwords;

						//die();

						$this->db->where('user_id',$user_id);
						$this->db->update('user',$iuser);

						if ($file) {
							$image_file = $this->upload($file,$type,$size,$temp);

							$imageinsert = array(
								'image_file' => $image_file,
							);

							if ($noimagefound) {
								$this->db->insert('images',$imageinsert);
								$images_id = $this->db->insert_id();
							} else {
								$this->db->where('images_id',$images_id);
								$this->db->update('images',$imageinsert);
								
							}
						}



						$iinfo = array(
							'contact_name' => $contact_name,
							'business_name	' => $business_name	,
							'member_category' => $member_category,
							'st_address' => $st_address,
							'suite_no' => $suite_no,
							'city' => $city,
							'state	' => $state	,
							'zip_code	' => $zip_code,
							'telephone' => $telephone,
							'cellphone' => $cellphone,
							'fax_number' => $fax_number,
							'email_address' => $email_address,
							'website' => $website,
							'company_description' => $company_description,
						);

						if ($noimagefound) {
							$iinfo['images_id'] = $images_id;
						}
						$this->db->where('information_id',$information_id);
						$this->db->update('information',$iinfo);
						

						$this->db->trans_complete();

						$this->session->set_flashdata('success','<p class="success"><i class="fa fa-info-circle"></i> Member Successfully Save.</p>');
						redirect('admin/members');

					}
				}				

				$this->load->view($this->folder.'add_member',$data);
				
			}
		} elseif ($this->input->get('c') == 'delete' && $this->input->get('param')) {
			$q = $this->QModel->sfwa('information','information_id',$this->input->get('param'));	

			if ( ! $this->QModel->c($q)) {
				show_404();
			} else {
				$g = $this->QModel->g($q);
				$uq = $this->QModel->sfwa('user','user_id',$g['user_id']);
				if ($this->QModel->c($uq)) {
					$this->db->where('user_id',$g['user_id']);
					$this->db->update('user',array('status' => 'inactive'));
					$this->session->set_flashdata('success','<p class="success"><i class="fa fa-info-circle"></i> Member Successfully Deleted.	</p>');
						redirect('admin/members');
				} else {
					show_404();
				}
			}
		} else {
			$data['menu'] = 'members';
			$this->load->view($this->folder.'members',$data);	
		}

		
	}

	public function calendar() {
		$data['title'] = "WHNG - Admin";
		$data['folder'] = $this->folder;
		$data['description'] = 'WHNG';
		$data['author'] = 'Softweb';
		$data['menu'] = 'calendar';

		if ($this->input->get('c') == 'add') {

			if ($_POST) {
				$error = 0;
				$i = 0;
				$a = array('calendar_title','venue', 'date_start', 'date_end', 'time_start', 'time_end', 'calendar_description'); // VARIABLE
				$b = array('Title','Venue', 'Date Start', 'Date End', 'Time Start', 'Time End', 'Description');
				$c = array(1,1,1,1,1,1,1);
				$vars = array();

				foreach ($a as $x) {
					$data[$x] = $vars[$x] = $this->input->post($x);
					if ( ! strlen($this->input->post($x)) && $c[$i]) {
						$data[$x.'_response'] = '<div class="form-error"><i class="fa fa-info-circle"></i> Please enter '.$b[$i].'.</div>';
						$error++;
					}
					$i++;
				}

				if ( ! $error) {
					extract($vars);

					$insert = array(
						'calendar_title' => $calendar_title,
						'venue' => $venue,
						'date_start' => $date_start,
						'date_end' => $date_end,
						'time_start' => $time_start,
						'time_end' => $time_end,
						'calendar_description' => $calendar_description,
						'date_created' => date("Y-m-d H:i:s")
					);


					$this->db->insert('calendar',$insert);

					$this->session->set_flashdata('success','<p class="success"><i class="fa fa-info-circle"></i> Calendar Successfully Save.</p>');
					redirect('admin/calendar?c=add');
				}
			}

			$this->load->view($this->folder.'add_calendar',$data);
		}  elseif($this->input->get('c') == 'edit' && $this->input->get('param')){
			$data['menu'] = 'Calendar';
			$i_id = $this->input->get('param');
			
			$q = $this->QModel->sfwa('calendar','calendar_id',$i_id);
			if ( ! $this->QModel->c($q)) {
				show_404();
			} else {
				$g = $this->QModel->g($q);
				$vinfo = array();
				$info = array('calendar_title','venue', 'date_start', 'date_end', 'time_start', 'time_end', 'calendar_description');
				foreach ($info as $ia) {
					$data[$ia] = $vinfo[$ia] = $g[$ia];
				}
				extract($vinfo);
				
				$calendar_id = $g['calendar_id'];
				if ($_POST) {
				$error = 0;
				$i = 0;
				$a = array('calendar_title','venue', 'date_start', 'date_end', 'time_start', 'time_end', 'calendar_description'); // VARIABLE
				$b = array('Title','Venue', 'Date Start', 'Date End', 'Time Start', 'Time End', 'Calendar Description');// LABEL
				$c = array(1,1,1,1,1,1,1);

				$vars = array();
				
				foreach ($a as $x) {
					$data[$x] = $vars[$x] = $this->input->post($x);
					if ( ! strlen($this->input->post($x)) && $c[$i]) {
						$data[$x.'_response'] = '<div class="form-error"><i class="fa fa-info-circle"></i> Please enter '.$b[$i].'.</div>';
						$error++;
					}
					$i++;
				}
				//print_r($data);
				//die();
				if ( ! $error) {
					extract($vars);

					$this->db->trans_start();
					
					$iinfo = array(
						'calendar_title' => $calendar_title,
						'venue' => $venue,
						'date_start' => $date_start,
						'date_end' => $date_end,
						'time_start' => $time_end,
						'calendar_description' => $calendar_description,
					);
					$this->db->where('calendar_id',$calendar_id);
					$this->db->update('calendar',$iinfo);
					

					$this->db->trans_complete();

					$this->session->set_flashdata('success','<p class="success"><i class="fa fa-info-circle"></i> Event Successfully Save.</p>');
					redirect('admin/calendar');

				}
			}				

			$this->load->view($this->folder.'add_calendar',$data);
				
			}
		} else {
			$data['menu'] = 'calendar';
			$this->load->view($this->folder.'calendar',$data);	
		}

		
	}
	public function zip_city() {
		$value = $this->input->get('v');
		$param = $this->input->get('param');

		$stq = $this->QModel->sfwa('settings_zip_code','settings_zip_code_id',$value);

		$stc = $this->QModel->c($stq);

		if($stc) {
			$get = $this->QModel->g($stq);

			if ($param == 'city') {
				echo $get['city'];
			} else {
				echo $get['state'];
			}
		}
		else
		{
			echo '';
		}
	}


	private function upload($names = NULL,$type = NULL,$size = NULL,$temp = NULL) {
		$ext = pathinfo($names, PATHINFO_EXTENSION);
		if (strpos($names,' ') || strpos($names, '_') || strpos($names, '.')) {
			$pros = array(' ','_','.');
			$prod_newname = str_replace($pros,'-',$names).strtotime(date('Y-m-d H:i:s')).".".$ext;
		} else {
			$prod_newname = $names.strtotime(date('Y-m-d H:i:s')).".".$ext;
		}
		//$prod_newname = hash_password(date('Y-m-d H:i:s').$names).".".$ext;
		move_uploaded_file($temp,"themes/default/images/member/view/".$prod_newname);					
		$path = "themes/default/images/member/view/".$prod_newname;
		$new_path = "themes/default/images/member/thumb/".$prod_newname;
		$exif = @exif_read_data($path);
		$rotate = false;
		// If the orientation is incorrect, this code will corrected the orientation. [Enalds]
		if(isset($exif['Orientation'])) {
				switch($exif['Orientation']) {
				//only really interested in the rotation
				case 1: // nothing
				break;
				case 2:// horizontal flip
				break;	  
				case 3: // 180 rotate left
				$rotate = 180;
				break;	
				case 4: // vertical flip
				break;
				case 5: // vertical flip + 90 rotate right
				break;
				case 6: // 90 rotate right
				$rotate = 270;
				break;
				case 7: // horizontal flip + 90 rotate right
				break; 
				case 8: // 90 rotate left
				$rotate = 90;
				break;
			}
		}					
		$config=array();
		$config['image_library'] = 'gd2';
		$config['source_image'] = $path;
		$config['rotation_angle'] = $rotate;
		$config['overwrite'] = TRUE;
		$this->load->library('image_lib',$config);
		if( ! $this->image_lib->rotate()){
		//echo $this->image_lib->display_errors();
		}							
		$this->load->library('image_lib');
		$config['image_library'] = 'gd2';
		$config['source_image']	= $path;
		$config['new_image'] = $new_path;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 480;
		$config['height'] = 480;
		$this->image_lib->initialize($config);
		$this->image_lib->resize();
		$this->image_lib->clear();	

		return $prod_newname;
	}

}