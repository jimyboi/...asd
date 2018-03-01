<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en-US">
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
	<?php echo meta('description', $description); ?>
	<?php echo meta('keywords', $description); ?>
	<?php echo meta('author', $author); ?>
	<?php echo meta('robots', 'noodp,noydir'); ?>
	<?php echo link_tag('themes/default/images/favicon.ico', 'shortcut icon', 'image/x-icon'); ?>
	<?php echo link_tag('themes/default/images/favicon.ico', 'icon', 'image/x-icon'); ?>
	<?php echo link_tag('themes/default/css/bootstrap.min.css'); ?>
	<?php #echo link_tag('themes/default/css/admin/bootstrap-datepicker.css'); ?>
	<?php echo link_tag('themes/default/css/admin/daterangepicker.css'); ?>
	<?php echo link_tag('themes/default/css/admin/admin.css'); ?>
	<?php echo link_tag('themes/default/css/admin/bootstrap3-wysihtml5.min.css'); ?>
	<?php echo link_tag('themes/default/css/admin/_all-skins.min.css'); ?>
	<?php echo link_tag('themes/default/css/admin/ionicons.min.css'); ?>
	<?php echo link_tag('themes/default/css/hover.css'); ?>
	<?php echo link_tag('themes/default/css/admin/select2.min.css'); ?>
	<?php echo link_tag('themes/default/css/font-awesome.min.css'); ?>
	<?php echo link_tag('themes/default/css/admin/admin-debbie.css'); ?>
	<?php echo link_tag('themes/default/css/admin/datepicker.css'); ?>
	<?php echo link_tag('themes/default/css/fontawesome-all.min.css'); ?>
	
	<?php
		if ( ! empty($css))
		{
			foreach($css as $stylesheet)
			{
				echo link_tag(themes_url('css/'.$stylesheet.".css"));
			}
		}
	?>
	<title><?php echo $title; ?></title>
	<script type="text/javascript">
		document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, '');
	</script>
</head>
<?php if($this->session->userdata('is_login')): ?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="<?php echo base_url('admin/dashboard'); ?>" class="logo" style="background-color: white;">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini" style="background-color: #00334E;"><b>Chatsworth</b></span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b><img src="<?php echo themes_url('images/kulas.png'); ?>" class="img-responsive center-block" style="width:90%; padding-top:4px"></span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top" style="background-color:white;">
				<!-- Sidebar toggle button-->
				<a href="javascript:void(0);" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="color: #00334E;">
					<span class="sr-only">Toggle navigation </span>
 				</a>
 				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
 						<!-- Messages: style can be found in dropdown.less-->
 						<?php  
 								/********UNREAD Message Count**********/
 								
						/*
 						<li class="dropdown messages-menu">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-envelope-o"></i>
								<span class="label label-success"></span>
							</a>
							<ul class="dropdown-menu">

								
								<li>
 									<!-- inner menu: contains the actual data -->
	 								<ul class="menu">
										<li>
											<a href="javascript:void(0);">
												<p>No Message </p>
											</a>
										</li>
									
									</ul>
								</li>
								<li class="footer"><a href="javascript:void(0);">See All Messages</a></li>
							</ul>
 						</li>
 						<!-- Notifications: style can be found in dropdown.less -->
						<li class="dropdown notifications-menu">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell-o"></i>
								<span class="label label-warning">10</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have 10 notifications</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										<li>
											<a href="javascript:void(0);">
												<i class="fa fa-users text-aqua"></i> 5 new members joined today
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
 												<i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
 												page and may cause design problems
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
												<i class="fa fa-users text-red"></i> 5 new members joined
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
												<i class="fa fa-shopping-cart text-green"></i> 25 sales made
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
												<i class="fa fa-user text-red"></i> You changed your username
											</a>
										</li>
									</ul>
								</li>
								<li class="footer"><a href="javascript:void(0);">View all</a></li>
							</ul>
						</li>*/
						?>
						
						<li class="dropdown user user-menu" >
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" >
								<img src="<?php echo themes_url('images/rgview.jpg'); ?>" class="user-image" alt="User Image" style="background-color:#00334E">
								<span class="hidden-xs" style="color: #00334E;"><?php echo isset($username) ? $username : 'Admin'; ?></span>
							</a>
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header">
									<img src="<?php echo themes_url('images/rgview.jpg'); ?>" class="img-circle" alt="User Image">
									<p>
										<?php echo isset($username) ? $username : 'Admin'; ?>
										<small>Chatsworth Neighborhood - Administrator</small>
									</p>
								</li>
								
								<li class="user-footer">
									<div class="pull-left">`
										<a href="javascript:void(0);" class="btn btn-default btn-flat">Profile</a>
									</div>
									<div class="pull-right">
										<a href="<?php echo base_url('admin/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
<?php endif; ?>
