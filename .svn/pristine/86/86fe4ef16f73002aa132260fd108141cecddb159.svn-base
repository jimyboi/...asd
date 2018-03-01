<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php if($this->session->userdata('is_login')): ?>
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 1.1.0 - Developed By Softweb
			</div>
				<strong>Copyright &copy; <?php echo date('Y'); ?> <a href="javascript:void(0);">Chatsworth</a>.</strong> All rights reserved.
		</footer>
	</div>
</body>
<?php endif; ?>
<?php echo js_tag('js/jquery.js');?>
<?php echo js_tag('js/bootstrap.min.js');?>
<?php echo js_tag('js/admin/jquery-ui.min.js');?>
<?php echo js_tag('js/admin/bootstrap3-wysihtml5.all.min.js');?>
<?php echo js_tag('js/admin/jquery.slimscroll.min.js');?>
<?php echo js_tag('js/admin/dashboard.js');?>
<?php echo js_tag('js/admin/debbie.js');?>
<?php echo js_tag('js/admin/ckeditor.js');?>
<?php echo js_tag('js/admin/deym.js');?>
<?php echo js_tag('js/admin/bootstrap-datepicker.js');?>
<?php echo js_tag('js/admin/select2.full.min.js');?>
<?php echo js_tag('js/admin/fastclick.min.js');?>
<?php echo js_tag('js/admin/moment.min.js');?>
<?php echo js_tag('js/admin/daterangepicker.js');?>
<?php echo js_tag('js/admin/jquery.knob.js');?>
<?php
	if ( ! empty($js))
	{
		foreach($js as $javascript)
		{
			echo '<script type="text/javascript" src='.themes_url("js/".$javascript.".js").'></script>';
		}
	}
?>
<script type="text/javascript">
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip(); 
});
  $.widget.bridge('uibutton', $.ui.button);
</script>