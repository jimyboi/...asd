<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<aside class="main-sidebar" style="background-color:#00334E;>"
	<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar" >
			<!-- Sidebar user panel -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="<?php echo themes_url('images/rgview.jpg'); ?>" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<p><?php echo isset($username) ? $username : 'Admin'; ?></p>
					<a href="javascript:void(0);"><i class="fa fa-circle text-success"></i> Online</a>
				</div>
			</div>
			<?php /*<!-- search form -->
			<form action="#" method="get" class="sidebar-form">
				<div class="input-group">
					<input type="text" name="q" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
						<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
					</span>
				</div>
			</form>
			<!-- /.search form -->*/ ?>
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu" >
				<li class="header" style="color:white;background-color:#00334E;">NAVIGATION</li>
				<li class=" treeview <?php echo (isset($menu) ? $menu == 'dashboard' : '') ? 'active menu-open' : ''; ?>">
					<a href="<?php echo base_url('admin/dashboard'); ?>">
						<i class="fas fa-clipboard fa-lg"></i><span> Dashboard</span>
						<?php /*<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>*/ ?>
					</a>
					<?php /*<ul class="treeview-menu">
						<li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
						<li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
					</ul>*/ ?>
				</li>
				<li class=" treeview <?php echo (isset($menu) ? $menu == 'members' : '') ? 'active menu-open' : ''; ?>">
					<a href="<?php echo base_url('admin/members'); ?>">
						<i class="fa fa-users fa-lg"></i><span> &nbsp;Members</span>
						
					</a>
				</li>
				<li class=" treeview <?php echo (isset($menu) ? $menu == 'calendar' : '') ? 'active menu-open' : ''; ?>">
					<a href="<?php echo base_url('admin/calendar'); ?>">
						<i class="fa fa-calendar fa-lg"></i><span> Calendar</span>
						
					</a>
				</li>
				<?php /*<li class=" treeview <?php echo (isset($menu) ? $menu == 'business' : '') ? 'active menu-open' : ''; ?>">
					<a href="javascript:void(0);">
						<i class="fa fa-users fa-lg"></i><span> Business</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li class="<?php echo (isset($page) ? $page == 'profile' : '') ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/business'); ?>"><i class="fa fa-circle-o fa-lg"></i> Profiles</a></li>
						<li class="<?php echo (isset($page) ? $page == 'add-profile' : '') ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/business?add=profile'); ?>"><i class="fa fa-plus-square-o fa-lg" aria-hidden="true"></i> Add Profile</a></li>
					</ul>
				</li>*/ ?>
			</ul>
	</section>
	<!-- /.sidebar -->
</aside>