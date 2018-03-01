<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<body>
	<div>
		<h3 style="padding-left: 50px;"> WHNG ADMIN
		<a href="" style="float:right;padding-right:20px;color:#00334E;font-size: 14px;">Logout</a></h3>
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
			<h5 style="color:#00334E;""> Add Events | Step 2</h5>
		</div>
		<br>
		<form method="POST">
		<div class="form-group" style="padding-left: 100px;">
			<div class="form-group">
				<label>Member Category</label>
				<input type="text" class="form-control" name="member_category" value="<?php echo isset($member_category) ? $member_category : ''; ?>">
			</div>	
		</form>
	</div>
</div>
</body>





