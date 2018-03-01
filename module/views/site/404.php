<?php if (!defined('BASEPATH')) exit('No direct script access allowed');?>
<?php get_header('header'); ?>
	<div style="margin-left:100px;">
		<b>404 Page Not Found</b>
		<br /><br />
		The page that you were looking for is not found!
		<br /><br />
		Please check that the web site address is spelled correctly. Or go to our <a href="<?php echo base_url(); ?>">home page</a>.
		<br /><br />
		<?php echo image('404.png'); ?>
	</div>
<?php get_footer('footer'); ?>