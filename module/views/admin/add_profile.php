<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header($folder."header"); ?>
		<!-- Left side column. contains the logo and sidebar -->
		<?php $this->load->view($folder.'/sidebar'); ?>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<?php $this->load->view($folder.'/content_header'); ?>
			<!-- Main content -->
			<section class="content">
				
				<!-- Main row -->
				<div class="row">
					<!-- Left col -->
					<form  method="POST" enctype="multipart/form-data">
						<section class="col-lg-12">
							<?php echo $this->session->flashdata('success'); ?>
						</section>
						<section class="col-lg-8">
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title"><?php echo isset($tab) ? $tab : 'Add'; ?> Profile</h3>
									<span><?php echo isset($hit_response) ? $hit_response : ''; ?></span>
								</div>
								<div class="box-body">
									<div class="form-group <?php echo isset($images_response) ? 'has-error' : ''; ?>">
										<label class="control-label" for="category">Image</label>
										<input type="file" name="images">
										<span><?php echo isset($images_response) ? $images_response : ''; ?></span>
									</div>
									<div class="form-group <?php echo isset($business_name_response) ? 'has-error' : ''; ?>">
										<label class="control-label" for="title">Business Name</label>
										<input type="text" class="form-control" id="business_name" placeholder="" name="business_name" value="<?php echo isset($business_name) ? $business_name : ''; ?>">
										<span><?php echo isset($business_name_response) ? $business_name_response : ''; ?></span>
									</div>
									<div class="form-group <?php echo isset($category_id_response) ? 'has-error' : ''; ?>">
										<label class="control-label" for="category">Category</label>
										<select class="form-control" name="category_id">
											<?php 
												$cq = $this->QModel->sfwa('category','cat_status','active','category_name ASC');
												if( ! $this->QModel->c($cq)):
											?>
												<option value="">No records found !</option>
											<?php else: ?>
												<?php 
													foreach ($this->QModel->g($cq,TRUE) as $g): 
														$category_ids = $g['category_id'];
														$category_names = $g['category_name'];
												?>
														<option value="<?php echo $category_ids; ?>" <?php echo (isset($category_id) ? $category_id == $category_ids : '') ? 'selected' : ''; ?>><?php echo $category_names; ?></option>
													<?php endforeach; endif; ?>
										</select>
										<span><?php echo isset($category_id_response) ? $category_id_response : ''; ?></span>
									</div>
									<div class="form-group <?php echo isset($business_address_response) ? 'has-error' : ''; ?>">
										<label class="control-label" for="business_address">Address</label>
										<input type="text" class="form-control" id="business_address" placeholder="" name="business_address" value="<?php echo isset($business_address) ? $business_address : ''; ?>">
										<span><?php echo isset($business_address_response) ? $business_address_response : ''; ?></span>
									</div>
									<div class="form-group <?php echo isset($contact_number_response) ? 'has-error' : ''; ?>">
										<label class="control-label" for="contact_number">Contact number</label>
										<input type="text" class="form-control" id="contact_number" placeholder="" name="contact_number" value="<?php echo isset($contact_number) ? $contact_number : ''; ?>">
										<span><?php echo isset($contact_number_response) ? $contact_number_response : ''; ?></span>
									</div>
									<div class="form-group <?php echo isset($website_response) ? 'has-error' : ''; ?>">
										<label class="control-label" for="website">Website</label>
										<input type="text" class="form-control" id="website" placeholder="" name="website" value="<?php echo isset($website) ? $website : ''; ?>">
										<span><?php echo isset($website_response) ? $website_response : ''; ?></span>
									</div>
								</div>
								<div class="box-footer">
									 <input type="submit" class="btn btn-primary" name="submit" value="Submit">
								</div>								
							</div>
						</section>
					</form>
				</div>
			</section>
				<!-- /.content -->
		</div>
<?php get_footer($folder."footer"); ?>
<script type="text/javascript">
<?php /*$('#birthday').datepicker({
	defaultViewDate:'year',
	format:'M dd, yyyy',
	todayBtn:"linked"
});

$('#book_description').wysihtml5({
	"font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
	"emphasis": true, //Italics, bold, etc. Default true
	"lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
	"html": false, //Button which allows you to edit the generated HTML. Default false
	"link": true, //Button to insert a link. Default true
	"image": true, //Button to insert an image. Default true,
	"color": false, //Button to change color of font  
	"blockquote": true, //Blockquote  
	"resize" : false,
 	"size": 'md'//default: none, other options are xs, sm, lg
});*/ ?>
</script>

  