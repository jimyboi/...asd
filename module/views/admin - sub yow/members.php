<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("admin/header"); ?>


<body>
		<div>
			<h3 style="padding-left: 50px;"> WHNG ADMIN
			<a href="" style="float:right;padding-right:20px;color:#00334E;font-size: 14px;">Logout</a></h3>
		</div>

		<hr style="border: 1px solid gray;">

	<div class="col-12">
			<div class="col-md-4" style="padding-left: 60px;">

				<div style="height:70px;"></div>

				<a href="<?php echo base_url("");?>" style="text-decoration: none;">
				<div class="menu">Home
				</div></a>

				<a href="<?php echo base_url("");?>" style="text-decoration: none;">
				<div class="menu">Members
				</div></a>

				<a href="<?php echo base_url("");?>" style="text-decoration: none;">
				<div class="menu">Calendar Events
				</div></a>

				<a href="<?php echo base_url("");?>" style="text-decoration: none;">
				<div class="menu">Notification
				</div></a>
			</div>

			<div class="col-md-8">
					<div>
						<h5 style="color:#00334E;""> Members
						<a href="<?php echo base_url("member_directory?id=2");?>" style="float: right;color:#00334E;">Add Member</a></h5>
						<h6 style="padding-left: 10px;">Total:</h6>
						<br>
					</div>

					<?php 
						$q = $this->QModel->sf('members');
						if( ! $this->QModel->c($q)): 
					?>
						<h4>No Records found !</h4>
					<?php else: ?>
						<?php
							foreach ($this->QModel->g($q, TRUE) as $g): 
								$ars = array('member_category','business_name','contact_name','members_id');
								$vars = array();
								foreach ($ars as $a) {
									$vars[$a] = $g[$a];
								}
								extract($vars);
						?>
						
						<div class="member_info">
								<div>
									<?php echo $member_category; ?>
								</div>

								<div class="tools">
										<a href="<?php echo base_url('view_members?id='.$members_id); ?>">View</a> 
										<span>|</span>
										<a href="">Delete</a> 
								</div>

								<div>
									<?php echo $business_name; ?>
								</div>

								<div>
									<?php echo $contact_name; ?>
								</div>
						</div>
						<br />
					<?php endforeach; endif; ?>
			</div>	
	</div>
</body>