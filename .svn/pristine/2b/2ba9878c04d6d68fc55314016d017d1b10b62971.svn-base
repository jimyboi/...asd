<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header($folder."header"); ?>
		<!-- Left side column. contains the logo and sidebar -->
		<?php $this->load->view($folder.'/sidebar'); ?>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<?php $this->load->view($folder.'/content_header'); ?>
			<!-- Main content -->
			<section class="content">
				
				<!-- Main row -->
				<div class="row">
					<!-- Left col -->
					<form method="POST"  enctype="multipart/form-data">
						<section class="col-lg-12">
							<?php echo $this->session->flashdata('success'); ?>
						</section>
						<section class="col-lg-6">
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title">Information Details</h3>
									<span><?php echo isset($hit_response) ? $hit_response : ''; ?></span>
								</div>
								
								<div class="box-body">
									<?php 
										$var = array('contact_name','business_name', 'member_category', 'st_address', 'suite_no', 'city', 'state', 'zip_code', 'telephone', 'cellphone', 'fax_number', 'email_address', 'website', 'company_description'); // VARIABLE
										$var_name = array('Contact Name','Business Name', 'Member Category', 'Street Address', 'Suite No.', 'City', 'State', 'Zip Code', 'Telephone', 'Cellphone', 'Fax', 'Email Address', 'Website', 'Company Desciption');// LABEL
										//VARIABLE
										$value = array(
											isset($contact_name) ? $contact_name : "", 
											isset($business_name) ? $business_name : "",
											isset($member_category) ? $member_category : "",
											isset($st_address) ? $st_address : "",
											isset($suite_no) ? $suite_no : "",
											isset($city) ? $city : "",
											isset($state) ? $state : "",
											isset($zip_code) ? $zip_code : "",
											isset($telephone) ? $telephone : "",
											isset($cellphone) ? $cellphone : "",
											isset($fax_number) ? $fax_number : "",
											isset($email_address) ? $email_address : "",
											isset($website) ? $website : "",
											isset($company_description) ? $company_description : ""
										);
										//VARIABLE WITH RESPONSE
										$response = array(
											isset($contact_name_response) ? $contact_name_response : "",
											isset($business_name_response) ? $business_name_response : "",
											isset($member_category_response) ? $member_category_response : "",
											isset($st_address_response) ? $st_address_response : "",
											isset($suite_no_response) ? $suite_no_response : "",
											isset($city_response) ? $city_response : "",
											isset($state_response) ? $state_response : "",
											isset($zip_code_response) ? $zip_code_response : "",
											isset($telephone_response) ? $telephone_response : "",
											isset($cellphone_response) ? $cellphone_response : "",
											isset($fax_number_response) ? $fax_number_response : "",
											isset($email_address_response) ? $email_address_response : "",
											isset($website_response) ? $website_response : "",
											isset($company_description_response) ? $company_description_response : ""
										);

										$i = 0;
										foreach ($var as $a):
									?>
									<?php if($a == 'company_description'): ?>
										<div class="form-group <?php if($response[$i]) echo "has-error"; ?>">
											<label class="control-label" for="<?php echo $var_name[$i]; ?>"><?php echo $var_name[$i]; ?></label>
											<textarea class="form-control" name="<?php echo $a; ?>" rows="5" style="resize:none;"><?php echo $value[$i]; ?></textarea>
											<span><?php echo $response[$i]; ?></span>
										</div>
									<?php else: ?>
										<div class="form-group <?php if($response[$i]) echo "has-error"; ?>">
											<label class="control-label" for="<?php echo $var_name[$i]; ?>"><?php echo $var_name[$i]; ?></label>
											<input type="text" class="form-control" id="<?php echo $a; ?>" <?php if($a == 'city' || $a == 'state'){echo 'readonly';} ?> <?php if($a == 'zip_code'){echo 'onkeyup="zipCode(this.value)"  oninput="zipCode(this.value)" onpaste="zipCode(this.value)"';} ?> placeholder="" name="<?php echo $a; ?>" value="<?php echo $value[$i]; ?>">
											<span><?php echo $response[$i]; ?></span>
										</div>
									
									<?php endif; $i++;  endforeach; ?>
								</div>
							</div>
						</section>

						<?php /* SOCIAL AND IMAGES */ ?>
						<section class="col-lg-6">
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title">Login Details</h3>
								</div>
								<div class="box-body">
									<?php 
										$var = array('username','password');
										$var_name = array('Username','Password');
										$value = array(
											isset($username) ? $username : "",
											isset($password) ? $password : ""
										);

										$response = array(
											isset($username_response) ? $username_response : "",
											isset($password_response) ? $password_response : ""
										);

										$i = 0;
										foreach ($var as $a):
									?>
										<div class="form-group <?php if($response[$i]) echo "has-error"; ?>">
											<label class="control-label" for="<?php echo $var_name[$i]; ?>"><?php echo $var_name[$i]; ?></label>
											<input type="<?php if($a == 'password'){echo 'password';}else{'text';}?>" class="form-control" id="<?php echo $a; ?>" placeholder="" name="<?php echo $a; ?>" value="<?php echo $value[$i]; ?>">
											<span><?php echo $response[$i]; ?></span>
										</div>
									
									<?php $i++;  endforeach; ?>
								</div>
							</div>
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title">Social Media Details</h3>
								</div>
								<div class="box-body">
									<?php 
										$var = array('twitter','facebook','google_plus','pinterest');
										$var_name = array('Twitter','Facebook','Google Plus','Pinterest');
										$value = array(
											isset($twitter) ? $twitter : "",
											isset($facebook) ? $facebook : "",
											isset($google_plus) ? $google_plus : "",
											isset($pinterest) ? $pinterest : "",
										);

										$response = array(
											isset($twitter_response) ? $twitter_response : "",
											isset($facebook_response) ? $facebook_response : "",
											isset($google_plus_response) ? $google_plus_response : "",
											isset($pinterest_response) ? $pinterest_response : "",
										);

										$i = 0;
										foreach ($var as $a):
									?>
										<div class="form-group <?php if($response[$i]) echo "has-error"; ?>">
											<label class="control-label" for="<?php echo $var_name[$i]; ?>"><?php echo $var_name[$i]; ?></label>
											<input type="text" class="form-control" id="<?php echo $a; ?>" placeholder="" name="<?php echo $a; ?>" value="<?php echo $value[$i]; ?>">
											<span><?php echo $response[$i]; ?></span>
										</div>
									
									<?php $i++;  endforeach; ?>
								</div>
							</div>
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title">Images</h3>
								</div>
								<div class="box-body">
									<div>
										<?php if (isset($image_file) && strlen($image_file) > 0): ?>
											<img src="<?php echo themes_url('images/member/thumb/'.$image_file); ?>" class="img-responsive center-block">
										<?php endif ?>
									</div>
									<div class="form-group <?php echo isset($images_response) ? 'has-error' : ''; ?>">
										<label class="control-label" for="pic_dir">Image :</label>
										<input type="file" class="btn btn-primary filestyle" data-buttonName="btn-primary" name="images">
										<span><?php echo isset($images_response) ? $images_response : ''; ?></span>
									</div>
									
								</div>
								<div class="box-footer">
									 
								</div>	
							</div>
							<div class="panel panel-default">
								<div class="panel-body text-center">
									<input type="submit" class="btn btn-primary" name="submit" value="Submit" style="width:50%;">
								</div>
							</div>
						</section>

					</form>
				</div>
			</section>
				<!-- /.content -->
		</div>
<?php get_footer($folder."footer",array('bootstrap-filestyle')); ?>
<script type="text/javascript">
$('#start').datepicker({
	defaultViewDate:'year',
	format:'yyyy-mm-dd',
	todayBtn:"linked"
});
$('#end').datepicker({
	defaultViewDate:'year',
	format:'yyyy-mm-dd',
	todayBtn:"linked"
});
$(":file").filestyle({buttonName: "btn-primary"});
$('#coupon_description').wysihtml5({
	"font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
	"emphasis": true, //Italics, bold, etc. Default true
	"lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
	"html": false, //Button which allows you to edit the generated HTML. Default false
	"link": true, //Button to insert a link. Default true
	"image": true, //Button to insert an image. Default true,
	"color": false, //Button to change color of font  
	"blockquote": true, //Blockquote  
	"resize" : false,
 	"size": 'md'//default: none, other options are xs, sm, lg
});
	var s;
	function zipCode(value)	
	{	
		clearTimeout(s);
		s = setTimeout(function(){
		if( ! value)	
		{	
			value = 0;	
		}	
		document.getElementById("state").value = 'Loading...';	
		document.getElementById("city").value = 'Loading...';	
		var xmlhttp;	
		var xmlhttp2;	
		if(window.XMLHttpRequest)	
		{	
			xmlhttp = new XMLHttpRequest();	
			xmlhttp2 = new XMLHttpRequest();	
		}	
		else	
		{	
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");	
			xmlhttp2 = new ActiveXObject("Microsoft.XMLHTTP");	
		}	
		xmlhttp.onreadystatechange = function()	
		{	
			if(xmlhttp.readyState==4 && xmlhttp.status==200)	
			{	
				
				document.getElementById("state").value = xmlhttp.responseText;	
			}	
		};	
		xmlhttp.open("GET","<?php echo base_url('admin/zip_city?v='); ?>"+value+'&param=state',true);
		xmlhttp.send();	

		xmlhttp2.onreadystatechange = function()	
		{	
			if(xmlhttp2.readyState==4 && xmlhttp2.status==200)	
			{	
				
				document.getElementById("city").value = xmlhttp2.responseText;	
			}	
		};	
		xmlhttp2.open("GET","<?php echo base_url('admin/zip_city?v='); ?>"+value+'&param=city',true);	
		xmlhttp2.send();
		},500);	
	}

</script>

  