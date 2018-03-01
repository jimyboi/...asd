<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("admin/header"); ?>

<body>
	<div>
		<h3 style="padding-left: 50px;"> WHNG ADMIN
		<a href="" style="float:right;color:#00334E;font-size: 14px;">Logout</a></h3>
	</div>
<hr style="border: 1px solid gray">
<div class="col-12">
	<div class="col-md-4" style="padding-left: 60px;">

		<div style="height:70px;"></div>

		<a href="<?php echo base_url("home");?>" style="text-decoration: none;">
		<div class="menu">Home
		</div></a>

		<a href="<?php echo base_url("member_directory?id=1");?>" style="text-decoration: none;">
		<div class="menu">Members
		</div></a>

		<a href="" style="text-decoration: none;">
		<div class="menu">Calendar Events
		</div></a>

		<a href="" style="text-decoration: none;">
		<div class="menu">Notification
		</div></a>
	</div>

<div class="col-md-8">
		<div>
			<h5 style="color:#00334E;""> Member</h5>
		</div>

		<br>

		<form method="POST">
			<div class="form-group" style="padding-left: 100px; color: #00334E;">
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="username" value="<?php echo isset($username) ? $username : ''; ?>">
					</div>

					<div  style="padding-left: 190px;">
					</div>
					
					<div class="form-group">
						<label>New Password</label>
						<input type="password" class="form-control" name="password">
					</div>

					<div class="form-group">
						<label>Re-type New Password</label>
						<input type="text" class="form-control" name="retype_password">
					</div>

					
					<div class="form-group">
						<label>Member Category</label>
						<input type="text" class="form-control" name="member_category" value="<?php echo isset($member_category) ? $member_category : ''; ?>">
					</div>	
				
					<div class="form-group">
					  <label>Business Name</label>
					  <input type="text" class="form-control" name="business_name" value="<?php echo isset($business_name) ? $business_name : ''; ?>">
					</div>

					<div class="form-group">
					  <label>Contact Name</label> 
					  <input type="text" class="form-control" name="contact_name" value="<?php echo isset($contact_name) ? $contact_name : ''; ?>">
					</div>
					
					<div class="form-group">
					  <label>Street Address</label>
					  <input type="text" class="form-control" name="street_address" value="<?php echo isset($street_address) ? $street_address : ''; ?>">
					</div>
					
					<div class="form-group">
					  <label>Suite #</label>
					  <input type="text" class="form-control" name="suite_no" value="<?php echo isset($suite_no) ? $suite_no : ''; ?>">
					</div>
				
					<div class="form-group">
					  <label>City</label>
					  <input type="text" class="form-control" name="city" value="<?php echo isset($city) ? $city : ''; ?>">
					</div>

					<div class="form-group">
					  <label>State</label>
					  <input type="text" class="form-control" name="state" value="<?php echo isset($state) ? $state : ''; ?>">
					</div>

					<div class="form-group">
					  <label>Zip Code</label>
					  <input type="text" class="form-control" name="zip_code" value="<?php echo isset($zip_code) ? $zip_code : ''; ?>">
					</div>

					<div class="form-group">
					  <label>Google Map</label>
					  <input type="text" class="form-control" name="google_map" value="<?php echo isset($google_map) ? $google_map : ''; ?>">
					</div>

					<div class="form-group">
					  <label>Tel</label>
					  <input type="text" class="form-control" name="tel" value="<?php echo isset($tel) ? $tel : ''; ?>">
					</div>

					<div class="form-group">
					  <label>Cell</label>
					  <input type="text" class="form-control" name="cell" value="<?php echo isset($cell) ? $cell : ''; ?>">
					</div>

					<div class="form-group">
					  <label>Tax</label>
					  <input type="text" class="form-control" name="fax" value="<?php echo isset($fax) ? $fax : ''; ?>">
					</div>
					
					
					<div class="form-group">
					  <label>Email</label>
					  <input type="text" class="form-control" name="email" value="<?php echo isset($email) ? $email : ''; ?>">
					</div>
					
					
					<div class="form-group">
					  <label>Website</label>
					  <input type="text" class="form-control" name="website" value="<?php echo isset($website) ? $website : ''; ?>">
					</div>

					<div class="form-group">
					  <label>Company Description</label>
					  <textarea rows="5" cols="50" name="description" class="form-control"><?php echo isset($description) ? $description : ''; ?></textarea>
					</div>	<div style="height:80px;"></div>

					<div class="form-group">
					  <label>Facebook</label>
					  <input type="text" class="form-control" name="website" value="<?php echo isset($facebook) ? $facebook : ''; ?>">
					</div>

					<div class="form-group">
					  <label>Twitter</label>
					  <input type="text" class="form-control" name="website" value="<?php echo isset($twitter) ? $twitter : ''; ?>">
					</div>

					<div class="form-group">
					  <label>Pinterest</label>
					  <input type="text" class="form-control" name="website" value="<?php echo isset($pinterest) ? $pinterest : ''; ?>">
					</div>

					<div class="form-group">
					  <label>Google Plus</label>
					  <input type="text" class="form-control" name="website" value="<?php echo isset($google_plus) ? $google_plus : ''; ?>">
					</div>

					<div  style="padding-left: 272px;"><br>
					<button type="submit" name="submit" value="save" class="btn btn-primary" style="float:right; margin-right:78%;">Submit</button>
					</div>

					<div style="height:60px;"></div>

					<input type="file" name="image_1" id="upload_image_1">
					<div style="height:50px;"></div>

					<input type="file" name="image_2" id="upload_image_2">
					<div style="height:50px;"></div>

					<input type="file" name="image_3" id="upload_image_3">
					<div style="height:50px;"></div>
					
			</div>
		</form>
	</div>
</body>


<style>
body{
	width:100%;
	margin: auto;
	background-color:;
	border: 0px solid black;
}
.form-control {
    width: 330px;
}
.form-group{
	height: 60px;
}
.menu{
	font-style: tahoma;
	height: 50px;
	line-height: 50px;
	color: #00334E;
	padding-left: 15px;
}
.menu:hover{
	background-color: #EBEBEB
}
</style>




