<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("admin/header"); ?>
<div class="container-fluid">
	<!--div class="row"-->
		<div class="col-md-12">
				<div class="col-md-offset-4">
					<span><?php echo $this->session->flashdata('success'); ?></span>
					<div class="col-md-6">
					<h4>Add Directory VIA Excel</h4>
						<form role="form" method="POST" enctype="multipart/form-data">
							<div class="form-group <?php echo isset($pic_dir_response) ? 'has-error' : ''; ?>">
								<label class="control-label" for="pic_dir">Excel File :</label>
								<input type="file" class="btn btn-primary filestyle" data-buttonName="btn-primary" name="pic_dir">
								 <span><?php echo isset($pic_dir_response) ? $pic_dir_response : ''; ?></span>
							</div>
	 							<button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>	
						</form>
					</div>
				</div>
		</div>
	</div>
</div>	
<?php get_footer("admin/footer"); ?>
<script type="text/javascript">
	$(":file").filestyle({buttonName: "btn-primary"});
	
</script>