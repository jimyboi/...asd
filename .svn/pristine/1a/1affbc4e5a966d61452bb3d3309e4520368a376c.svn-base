<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("header"); ?>
<div class="container">
	<div class="col-md-12">
		<hr style="border-top:1px solid #000;" >
	</div>
 	<div class="col-md-12">
 		<div class="col-md-offset-4">
 			<div class="col-md-6" id="box">
				<?php if ($this->session->flashdata('fogot')): ?>
					<h2 style="text-align:center;">Forgot Password</h2>
						<div class="panel panel-success">
					      	<div class="panel-heading"><?php echo $this->session->flashdata('fogot'); ?></div>
					    </div>
				<?php elseif ($this->session->flashdata('fogots')): ?>
					<h2 style="text-align:center;">Change Password</h2>
						<div class="panel panel-success">
					      	<div class="panel-heading"><?php echo $this->session->flashdata('fogots'); ?></div>
					    </div>
				<?php elseif(isset($pass)): ?>
					<h2 style="text-align:center;">New Password</h2>
				    <form class="form-horizontal" role="form" method="POST">
						<div class="form-group <?php echo isset($password_response) ? 'has-error' : ''; ?>">
						  	<div class="col-sm-12">
						       	<input type="password" class="form-control" id="pwd" name="password" placeholder="Password" value="<?php echo isset($password) ? $password : ''; ?>">
						   		<span><?php echo isset($password_response) ? $password_response : ''; ?></span>
						    </div>
						</div>
						<div class="form-group <?php echo isset($confirm_pass_response) ? 'has-error' : ''; ?>">
						  	<div class="col-sm-12">
						       	<input type="password" class="form-control" id="pwd" name="confirm_pass" placeholder="Confirm Password" value="<?php echo isset($confirm_pass) ? $confirm_pass : ''; ?>">
						       	  <span><?php echo isset($confirm_pass_response) ? $confirm_pass_response : ''; ?></span>
						    </div>
						</div>
						<div class="form-group">        
							<div class="col-sm-10">
							   	<button type="submit" class="btn btn-selections" name="submit" value="Submit">Submit</button>
							</div>
						</div>
					</form>
				<?php else: ?>
					<h2 style="text-align:center;">Forgot Password</h2>
					<form class="form-horizontal" role="form" method="POST">
						<div class="form-group <?php echo isset($email_address_response) ? 'has-error' : ''; ?>">
						  	<div class="col-sm-12">
						       	<input type="email" class="form-control" id="pwd" name="email_address" placeholder="Email Address" value="<?php echo isset($email_address) ? $email_address : ''; ?>">
						   		<span><?php echo isset($email_address_response) ? $email_address_response : ''; ?></span>
						    </div>
						</div>
						<div class="form-group">        
							<div class="col-sm-10">
							   	<button type="submit" class="btn btn-selections" name="submit" value="Submit">Submit</button>
							</div>
						</div>
					</form>
				<?php endif ?>
		 	</div>
 		</div>
 	</div>
 	<div class="col-md-12">
 		<hr style="border-bottom:1px solid #000;">
 	</div>
</div>
<?php get_footer("footer"); ?>
