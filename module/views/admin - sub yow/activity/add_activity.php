<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("admin/header"); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			 
				<div class="col-md-12" >
					<span><?php echo $this->session->flashdata('success'); ?></span>
					<div class="col-md-6">
					<h4>Add Activities</h4>
						<form role="form" method="POST" enctype="multipart/form-data">
							<div class="form-group <?php echo isset($act_img_response) ? 'has-error' : ''; ?>">
								<label class="control-label" for="act_img">Image :</label>
								<input type="file" class="btn btn-primary filestyle" data-buttonName="btn-primary" name="act_img">
								 <span><?php echo isset($act_img_response) ? $act_img_response : ''; ?></span>
							</div>
							<div class="form-group <?php echo isset($act_title_response) ? 'has-error' : ''; ?>">
							    <label class="control-label" for="fullname">Title :</label>
							    <input type="text" class="form-control" id="fullname" name="act_title" value="<?php echo isset($act_title) ? $act_title : ''; ?>">
							    <span><?php echo isset($act_title_response) ? $act_title_response : ''; ?></span>
	  						</div>
	  						<div class="form-group <?php echo isset($description_response) ? 'has-error' : ''; ?>">
	  							<label class="control-label" for="description">Description :</label>
	  							<textarea class="form-control" rows="5" id="description" name="description"><?php echo isset($description) ? $description : ''; ?></textarea>		
	 							 <span><?php echo isset($description_response) ? $description_response : ''; ?></span>
	 						</div>
	 						<div class="form-group <?php echo isset($act_type_response) ? 'has-error' : ''; ?>">
	 						<label class="control-label" for="description">Type :</label>
								<select class="form-control" name="act_type">
									<option value="">-- Please Select Type --</option>
									<option <?php echo (isset($act_type) ? $act_type == "Public" : '') ? 'selected' : ''; ?> value="Public">Public</option>
									<option <?php echo (isset($act_type) ? $act_type == "Private" : '') ? 'selected' : ''; ?> value="Private">Private</option>
								</select>
								<span><?php echo isset($act_type_response) ? $act_type_response : ''; ?></span>
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
