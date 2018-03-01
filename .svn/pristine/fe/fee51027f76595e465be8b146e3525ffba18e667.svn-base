<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("admin/header"); ?>
<div class="container-fluid">
	<!--div class="row"-->
		<div class="col-md-12">
			 
				<div class="col-md-offset-4">
					<span><?php echo $this->session->flashdata('success'); ?></span>
					<div class="col-md-6">
					<h4>Edit Directory</h4>
					<div class="col-md-12">
						<div class="col-md-6">
							<img src="<?php echo themes_url('images/directory/thumb/'.$drc_image); ?>" class="center-block img-responsive">
						</div>
					</div>
						<form role="form" method="POST" enctype="multipart/form-data">
							<div class="form-group <?php echo isset($pic_dir_response) ? 'has-error' : ''; ?>">
								<label class="control-label" for="pic_dir">Image :</label>
								<input type="file" class="btn btn-primary filestyle" data-buttonName="btn-primary" name="pic_dir">
								 <span><?php echo isset($pic_dir_response) ? $pic_dir_response : ''; ?></span>
							</div>
							<div class="form-group <?php echo isset($fullname_response) ? 'has-error' : ''; ?>">
							    <label class="control-label" for="fullname">Full Name:</label>
							    <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo isset($fullname) ? $fullname : ''; ?>">
							    <span><?php echo isset($fullname_response) ? $fullname_response : ''; ?></span>
	  						</div>
	  						<div class="form-group <?php echo isset($businessname_response) ? 'has-error' : ''; ?>">
	    						<label class="control-label" for="businessname">Business Name:</label>
	    						<input type="text" class="form-control" id="businessname" name="businessname" value="<?php echo isset($businessname) ? $businessname : ''; ?>">
							    <span><?php echo isset($businessname_response) ? $businessname_response : ''; ?></span>
	 						</div> 
	  						<div class="form-group <?php echo isset($businesscategory_response) ? 'has-error' : ''; ?>">
	    						<label class="control-label" for="businesscategory">Business Category:</label>
	    						<input type="text" class="form-control" id="businesscategory" name="businesscategory" value="<?php echo isset($businesscategory) ? $businesscategory : ''; ?>">
							    <span><?php echo isset($businesscategory_response) ? $businesscategory_response : ''; ?></span>
	 						</div>
	 						<div class="form-group <?php echo isset($drc_suite_response) ? 'has-error' : ''; ?>">
	    						<label class="control-label" for="businesscategory">Suite :</label>
	    						<input type="text" class="form-control" id="businesscategory" name="drc_suite" value="<?php echo isset($drc_suite) ? $drc_suite : ''; ?>">
							    <span><?php echo isset($drc_suite_response) ? $drc_suite_response : ''; ?></span>
	 						</div>
	 						<div class="form-group <?php echo isset($staddress_response) ? 'has-error' : ''; ?>">
	    						<label class="control-label" for="businesscategory">Street Address:</label>
	    						<input type="text" class="form-control" id="businesscategory" name="staddress" value="<?php echo isset($staddress) ? $staddress : ''; ?>">
							    <span><?php echo isset($staddress_response) ? $staddress_response : ''; ?></span>
	 						</div>
	 						<div class="form-group <?php echo isset($zip_code_response) ? 'has-error' : ''; ?>">
	    						<label class="control-label" for="businesscategory">Zip Code:</label>
	    						<input type="text" class="form-control" id="zip_code" name="zip_code"  onkeyup="zipCode(this.value)"  oninput="zipCode(this.value)" onpaste="zipCode(this.value)" value="<?php echo isset($zip_code) ? $zip_code : ''; ?>">
							    <span><?php echo isset($zip_code_response) ? $zip_code_response : ''; ?></span>
	 						</div>
	 						<div class="form-group <?php echo isset($city_response) ? 'has-error' : ''; ?>">
	    						<label class="control-label" for="businesscategory">City:</label>
	    						<input type="text" class="form-control" id="city" name="city" value="<?php echo isset($city) ? $city : ''; ?>" disabled>
							    <span><?php echo isset($city_response) ? $city_response : ''; ?></span>
	 						</div>
	 						<div class="form-group <?php echo isset($state_response) ? 'has-error' : ''; ?>">
	    						<label class="control-label" for="businesscategory">State:</label>
	    						<input type="text" class="form-control" id="state" name="state" value="<?php echo isset($state) ? $state : ''; ?>" disabled>
							    <span><?php echo isset($state_response) ? $state_response : ''; ?></span>
	 						</div>
	 						<div class="form-group <?php echo isset($office_no_response) ? 'has-error' : ''; ?>">
	    						<label class="control-label" for="businesscategory">Office No. :</label>
	    						<input type="text" class="form-control" id="businesscategory" name="office_no" value="<?php echo isset($office_no) ? $office_no : ''; ?>">
							    <span><?php echo isset($office_no_response) ? $office_no_response : ''; ?></span>
	 						</div>
	 						<div class="form-group <?php echo isset($phonenumber_response) ? 'has-error' : ''; ?>">
	    						<label class="control-label" for="phonenumber">Cell Number:</label>
	    						<input type="text" class="form-control" id="phonenumber" name="phonenumber" value="<?php echo isset($phonenumber) ? $phonenumber : ''; ?>">
							    <span><?php echo isset($phonenumber_response) ? $phonenumber_response : ''; ?></span>
	    					</div>
	 						<div class="form-group <?php echo isset($fax_no_response) ? 'has-error' : ''; ?>">
	    						<label class="control-label" for="businesscategory">Fax No. :</label>
	    						<input type="text" class="form-control" id="businesscategory" name="fax_no" value="<?php echo isset($fax_no) ? $fax_no : ''; ?>">
							    <span><?php echo isset($fax_no_response) ? $fax_no_response : ''; ?></span>
	 						</div>
	  						
	  						<div class="form-group <?php echo isset($email_response) ? 'has-error' : ''; ?>">				
	    						<label class="control-label" for="email">Email address:</label>
	    						<input type="email" class="form-control" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>">
							    <span><?php echo isset($email_response) ? $email_response : ''; ?></span>
	    					</div>
	    					<div class="form-group <?php echo isset($web_link_response) ? 'has-error' : ''; ?>">				
	    						<label class="control-label" for="email">Website link:</label>
	    						<input type="text" class="form-control" id="email" name="web_link" value="<?php echo isset($web_link) ? $web_link : ''; ?>">
							    <span><?php echo isset($web_link_response) ? $web_link_response : ''; ?></span>
	    					</div>
	  						<div class="form-group <?php echo isset($servicesoffered_response) ? 'has-error' : ''; ?>">
	  							<label class="control-label" for="servicesoffered">Services Offered:</label>
	  							<textarea class="form-control" rows="5" id="servicesoffered" name="servicesoffered"><?php echo isset($servicesoffered) ? $servicesoffered : ''; ?></textarea>		
	 							 <span><?php echo isset($servicesoffered_response) ? $servicesoffered_response : ''; ?></span>
	 						</div>	
	 							<button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>	
						</form>
					</div>
				</div>
		</div>
	</div>
</div>	
<?php get_footer("admin/footer"); ?>
<script type="text/javascript">
	$(":file").filestyle({buttonName: "btn-primary"});
	var s;
	zipCode('<?php echo $zip_code; ?>');
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
		xmlhttp.open("GET","<?php echo base_url('admin/getState'); ?>/"+value,true);	
		xmlhttp.send();	

		xmlhttp2.onreadystatechange = function()	
		{	
			if(xmlhttp2.readyState==4 && xmlhttp2.status==200)	
			{	
				
				document.getElementById("city").value = xmlhttp2.responseText;	
			}	
		};	
		xmlhttp2.open("GET","<?php echo base_url('admin/getCity'); ?>/"+value,true);	
		xmlhttp2.send();
		},500);	
	}
</script>