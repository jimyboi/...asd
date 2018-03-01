<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml" class="no-js">
<head>
	<?php $last_update = time() - 60; ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php echo meta('viewport', 'width=device-width, initial-scale=1'); ?>
	<?php $this->output->set_header("HTTP/1.0 200 OK"); ?>
	<?php $this->output->set_header("HTTP/1.1 200 OK"); ?>
	<?php $this->output->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s', $last_update).' GMT'); ?>
	<?php $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate"); ?>
	<?php $this->output->set_header("Cache-Control: post-check=0, pre-check=0", false); ?>
	<?php $this->output->set_header("Pragma: no-cache"); ?>
	<?php echo header('Content-Type: text/html; charset=UTF-8'); ?>
	<?php echo meta('Content-type', 'text/html; charset=utf-8', 'equiv'); ?>
	<?php echo meta('description', 'Woodland Hills Networking Group'); ?>
	<?php echo meta('keywords', 'Woodland Hills Networking Group, Network Plus, Networking'); ?>
	<?php echo meta('robots', 'noodp,noydir'); ?>
	<?php echo link_tag('themes/default/images/favicon.ico', 'shortcut icon', 'image/x-icon'); ?>
	<?php echo link_tag('themes/default/images/favicon.ico', 'icon', 'image/x-icon'); ?>
	<?php echo link_tag('themes/default/css/bootstrap.css'); ?>
	<?php echo link_tag('themes/default/css/slick.css'); ?>
	<?php echo link_tag('themes/default/css/style.css'); ?>
	<?php echo link_tag('themes/default/css/slick-theme.css'); ?>
	<?php echo link_tag('themes/default/css/hover.css'); ?>
	<?php echo link_tag('themes/default/css/font-awesome.min.css'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo themes_url('css/layout.css'); ?>">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Questrial" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
	<?php
		if ( ! empty($css))
		{
			foreach($css as $stylesheet)
			{
				echo link_tag(themes_url('css/'.$stylesheet.".css"));
			}
		}
	?>
	
	<title>Woodland Hills Networking Group</title>


	<script type="text/javascript">
		document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, '');
	</script>
	
</head>

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Questrial" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
<?php if( ! isset($parameter)): ?>
<div style="color: #00334E" class="container-fluid ">
	<div class="row">
		<div class="col-md-12" style="margin-bottom:10px;">
			<div class="col-md-4">
				<?php /*<a href="<?php echo base_url(''); ?>"><img src="<?php echo themes_url('images/logo.jpg'); ?>" class="img-responsive" /></a>*/ ?>
				<a href="<?php echo base_url(''); ?>"><img src="<?php echo themes_url('images/logoa.png'); ?>" class="img-responsive" /></a>
			</div>
			 <div class="col-md-8" >
		 		<div style="color:#00334E;" class="text-right"> 
				<br>
		 			Tel: <a href="tel:888.257.8200" style="text-decoration: none;" > 888-257-8200</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 	<?php //if(isset($menu) == 'calendar'): ?>					 
					<?php if ($this->session->userdata('woodlandhillsmember')): ?>
						 <span>
						 <?php if($this->session->userdata('user_id') != '97'): ?>
						 <a target="__blank" href="<?php echo base_url('change_password'); ?>" style="color:#00334E;text-align:right;font-size:16px; letter-spacing:2px;cursor:pointer;text-decoration:none;">Change Password</a> | 
					 <?php endif; ?>
						 <a target="__blank" href="<?php echo base_url('main/logout'); ?>" style="color:#00334E;text-align:right;font-size:16px; letter-spacing:2px;cursor:pointer;text-decoration:none;">Logout</a><br></span>
					<?php else: ?>
						<a href="#" data-toggle="modal" data-target="#login-modal" style="color:#00334E; padding-right:13px;text-align:right; font-size:16px; letter-spacing:2px; cursor:pointer; text-decoration:none; ">Login</a><br>
					<?php endif ?>
					<?php //endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" style="padding-right:0px;padding-left:0px;" id="myNavbar">
							<ul class="nav navbar-nav navbar-right">
								<li class="<?php echo (isset($menu) ? $menu =='directory' : '') ? 'active' : ''; ?>">
									<a href="<?php echo base_url('main'); ?>" class="hvr-underline-reveal style dropdown-toggle" >HOME</a>
								</li>
								<li class="dropdown <?php echo (isset($menu) ? $menu =='about' : '') ? 'active' : ''; ?>"> 
									<a href="javascript:void(0);" class="hvr-underline-reveal style dropdown-toggle"  data-toggle="dropdown">ABOUT US <span class="caret"> </span></a>
									<ul class="dropdown-menu" >
										
										<li class="<?php echo (isset($menu) ? $menu =='whng' : '') ? 'active' : ''; ?>">
											<a href="<?php echo base_url('whng'); ?>" class="hvr-underline-reveal style">WHNG</a>
										</li>

										<li class="<?php echo (isset($menu) ? $menu =='meetings' : '') ? 'active' : ''; ?>">
											<a href="<?php echo base_url('meetings'); ?>" class="hvr-underline-reveal style">MEETINGS</a>
										</li>
									</ul>
								</li>
								<li class="<?php echo (isset($menu) ? $menu == 'membership' : '') ? 'active' : ''; ?>"><a href="<?php echo base_url('membership'); ?>" class="hvr-underline-reveal style">MEMBER DIRECTORY</a></li>
								<li class="<?php echo (isset($menu) ? $menu == 'calendar' : '') ? 'active' : ''; ?>"><a href="<?php echo base_url('calendar'); ?>" class="hvr-underline-reveal style" >CALENDAR OF EVENTS</a></li>
								<li class="<?php echo (isset($menu) ? $menu == 'join' : '') ? 'active' : ''; ?>"><a href="<?php echo base_url('join'); ?>" class="hvr-underline-reveal style" >JOIN</a></li>
								
								<li class="<?php echo (isset($menu) ? $menu =='contact' : '') ? 'active' : ''; ?>"> 
									<a href="<?php echo base_url('contact'); ?>" class="hvr-underline-reveal style dropdown-toggle" >CONTACT US</a>
								</li>
								<li class="<?php echo (isset($menu) ? $menu =='gallery' : '') ? 'active' : ''; ?>"> 
									<a href="<?php echo base_url('gallery'); ?>" class="hvr-underline-reveal style dropdown-toggle" >GALLERY</a> 
								</li>
							</ul>
						</div>
					</div>
				</nav>
	 		</div>
	 	</div>
	</div>
<?php
	$tabes = isset($tabsf) ? $tabsf : '';
	if($tabes != 'mama mo') : ?>
		<div class="col-md-12">
			<div class="col-md-9" style="text-align: center; font-size: 15px;  color: #280071;">
				Woodland Hills Networking Group is a "one person per business category" networking group that focuses on business referrals, social events,
				and fundraising for local charities. We concentrate on promoting business for our members, exchanging leads,
				and goodwill and mutual respect towards all of our members.
				<br />
				<br />
			</div>
			<div class="col-md-3" style="margin-bottom:30px;">
				<form method="POST" action="<?php echo base_url('direct'); ?>">
					<div class="input-group col-md-11">
						<input type="text" class="form-control" name="search_keyword" value="<?php echo isset($search_keyword) ? $search_keyword : ''; ?>" placeholder="Search">
						<span class="input-group-btn">
							<button class="btn btn-selection " type="submit" name="submit" value="submit">Search</button>
						</span>
					</div>
				</form>
			</div>
		</div>
<?php endif; ?>
</div>
<div class="modal fade modal-font" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center">
			<div class="modal-content">
			<div class="modal-header">
				<a target="__blank" href="javascript:void(0);" data-dismiss="modal" class="close"><i class="fa fa-times-circle"></i></a>
				<h4 class="modal-title text-left" id="myModalLabel"><i style="color:#202f80">Login</i></h4>
			</div>
			<div class="modal-body">
				<div class="row">
				<div class="col-md-10">
					<div class="col-md-offset-1">
					<form method="POST" action="<?php echo base_url('main/login'); ?>" role="form">
						<div class="form-group<?php echo isset($username_response) ? 'has-error' : ''; ?> ">
						<div class="col-md-offset-2">
							<input type="text" class="form-control" name="username" placeholder="User ID" value="<?php echo isset($username) ? $username : ''; ?>"required>
							<span><?php echo isset($username_response) ? $username_response : ''; ?></span>
						</div>
						</div>
						<div class="form-group<?php echo isset($password_response) ? 'has-error' : ''; ?>">
						<div class="col-md-offset-2">
							<input type="password" class="form-control"name="password" placeholder="Password" value="<?php echo isset($password) ? $password : ''; ?>"required>
							<span><?php echo isset($password_response) ? $password_response : ''; ?></span>
						</div>
						</div>
						<div class="col-md-12">
						&nbsp;
						</div>
						<div class="col-md-4">
						<div class="col-md-offset-4" style="padding-left:1.5em;">
							<input type="submit" class="btn btn-selections" name="submit" value="Submit">
						</div>
						</div>
						<div class="col-md-8">
						<div class="col-md-offset-2">
							<div class="checkbox">
							<label><input type="checkbox" value="">Remember Me</label>
							</div>
						</div>
						</div> 
						<div class="col-md-12">
						<div class="col-md-offset-1" style="padding-left:1.2em;">
							<a target="__blank" href="<?php echo base_url('forgot_password'); ?>" class="btn btn-link" style="color:#202f80">Forgot Password?</a>
						</div>
						</div>
					</form>
					</div>
				</div>
				</div>
			</div> 
			</div>
		</div>
	</div>
</div>
<?php endif; ?>