<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("admin/header"); ?>
<div class="container" style="margin-top:10em;">
	<div class="col-md-offset-4">
	<?php if ($this->session->userdata('thenetworkplusadmin')): ?>
				
	<?php else: ?>
		<div class="col-md-6">
			<span><?php echo isset($usert_response) ? $usert_response : ''; ?></span>
			<form role="form" method="POST">
				<div class="form-group <?php echo isset($username_response) ? 'has-error' : ''; ?>">
					<label class="control-label" for="email">Email address:</label>
					<input type="email" class="form-control" id="email" name="username" value="<?php echo isset($username) ? $username : ''; ?>">
					<span><?php echo isset($username_response) ? $username_response : ''; ?></span>
				</div>
				<div class="form-group <?php echo isset($password_response) ? 'has-error' : ''; ?>">
					<label class="control-label" for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd" name="password" value="<?php echo isset($password) ? $password : ''; ?>">
					<span><?php echo isset($password_response) ? $password_response : ''; ?></span>
				</div>
				<div class="col-md-12 text-center">
					<button type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>
				</div>
			</form>
		</div>
	<?php endif; ?>
	</div>
</div>
<?php get_footer("admin/footer2"); ?>

