<ul class="nav nav-pills nav-stacked">
	<li class="<?php echo (isset($menu) ? $menu == 'home' : '') ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/'); ?>">Home</a></li>
 	<li class="<?php echo (isset($menu) ? $menu == 'directory' : '') ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/directory'); ?>">Directory</a></li>
	<li class="<?php echo (isset($menu) ? $menu == 'charity' : '') ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/charity'); ?>">Charity</a></li>
	<li class="<?php echo (isset($menu) ? $menu == 'calendar' : '') ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/calendar'); ?>">Calendar</a></li>
	<li class="<?php echo (isset($menu) ? $menu == 'activities' : '') ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/activities'); ?>">Activities</a></li>
</ul>