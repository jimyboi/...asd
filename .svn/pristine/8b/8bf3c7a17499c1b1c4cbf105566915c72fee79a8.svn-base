<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("admin/header"); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-offset-2">
				<div class="col-md-12" >
					<span><?php echo $this->session->flashdata('success'); ?></span>
					<div class="col-md-10">
					<h4>Add Category Details</h4>
						<form role="form" method="POST">
		  					<div class="form-group <?php echo isset($category_name_response) ? 'has-error' : ''; ?>">
							    <label class="control-label" for="fullname">Category Name:</label>
							    <input type="text" class="form-control" id="fullname" name="category_name" value="<?php echo isset($category_name) ? $category_name : ''; ?>">
							    <span><?php echo isset($category_name_response) ? $category_name_response : ''; ?></span>
	  						</div>
		 					<div class="text-center col-md-12">
		 						<button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>	
		 					</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	

<?php get_footer("admin/footer"); ?>
