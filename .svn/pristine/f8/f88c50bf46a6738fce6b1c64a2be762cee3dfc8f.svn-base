<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("header"); ?>
<div class="container-fluid bg">
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="col-md-offset-4">
					<div class="col-md-6">
						<form method="POST">
							<div class="panel panel-primary">
								<div class="panel-heading">
									Login
								</div>
								<div class="panel-body">
									<div class="form-group">
										<label class="control-label">Username :</label>
										<input type="text" name="username" class="form-control" value="<?php echo isset($username) ? $username : ''; ?>">
										<span><?php echo isset($password_response) ? $password_response : ''; ?></span>
									</div>
									<div class="form-group">
										<label class="control-label">Password :</label>
										<input type="password" name="password" class="form-control" value="<?php echo isset($username) ? $username : ''; ?>">
										<span><?php echo isset($password_response) ? $password_response : ''; ?></span>
									</div>
									<button type="submit" class="btn btn-primary hvr-fade">Login</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer("footer"); ?>
<style>
.bg {
    background-image: url("<?php echo themes_url("images/back.jpg"); ?>");
    background-size: cover;
    background-position: center;
   	padding-top:10em;
   	padding-bottom:9.5em;

}

</style>
