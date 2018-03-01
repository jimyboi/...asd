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
							
						</section>
						<section class="col-lg-8">
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title">Modify Blog</h3>
									<span><?php echo isset($hit_response) ? $hit_response : ''; ?></span>
								</div>
								<div class="box-body">
									<span><?php echo $this->session->flashdata('success'); ?></span>
									<div class="form-group <?php echo isset($images_response) ? 'has-error' : ''; ?>">
										<label class="control-label">Image :</label>
										<input type="file" name="images">
										<span><?php echo isset($images_response) ? $images_response : ''; ?></span>
									</div>
									<div>
										<?php if(strlen($images)): ?>

											<img src="<?php echo themes_url('images/blog/thumb/'.$images); ?>" class="img-responsive center-block">
										<?php endif ?>
									</div>
									<div class="form-group <?php echo isset($blog_title_response) ? 'has-error' : ''; ?>">
										<label class="control-label" for="title">Title</label>
										<input type="text" class="form-control" id="blog_title" placeholder="" name="blog_title" value="<?php echo isset($blog_title) ? $blog_title : ''; ?>">
										<span><?php echo isset($blog_title_response) ? $blog_title_response : ''; ?></span>
									</div>
									<div class="form-group <?php echo isset($blog_author_response) ? 'has-error' : ''; ?>">
										<label class="control-label" for="author">Author</label>
										<input type="text" class="form-control" id="author" placeholder="" name="blog_author" value="<?php echo isset($blog_author) ? $blog_author : ''; ?>">
										<span><?php echo isset($blog_author_response) ? $blog_author_response : ''; ?></span>
									</div>
									<div class="form-group <?php echo isset($date_posted_response) ? 'has-error' : ''; ?>">
										<label for="date_posted">Date posted</label>
										<input type="text" class="form-control" id="date_posted" placeholder="" readonly name="date_posted" value="<?php echo isset($date_posted) ? date('M d,Y',strtotime($date_posted)): ''; ?>">										
										<span><?php echo isset($date_posted_response) ? $date_posted_response : ''; ?></span>
									</div>
									<div class="form-group <?php echo isset($blog_description_response) ? 'has-error' : ''; ?>">
										<label class="control-label" for="price">Description</label>
										<textarea name="blog_description" class="form-control" id="editor1" placeholder="" rows="7"><?php echo isset($blog_description) ? $blog_description : ''; ?></textarea>
										<span><?php echo isset($blog_description_response) ? $blog_description_response : ''; ?></span>
									</div>	
									<div class="form-group <?php echo isset($status_response) ? 'has-error' : ''; ?>">
										<label for="batch">Status</label>
										<select class="form-control" name="status">
											<option <?php echo (isset($status) ? $status == 'active' : '') ? 'selected' : ''; ?> value="active">Active</option>
											<option <?php echo (isset($status) ? $status == 'inactive' : '') ? 'selected' : ''; ?> value="inactive">Inactive</option>
										</select>
										<span><?php echo isset($status_response) ? $status_response : ''; ?></span>
									</div>									
								</div>
								<div class="box-footer">
									 <input type="submit" class="btn btn-primary" name="submit" value="Submit">
									
								</div>								
							</div>
						</section>
						<?php /*<section class="col-lg-4">
							<div class="box box-danger">
								<div class="box-header with-border">
									<h3 class="box-title">Upload Image</h3>
									<div class="overlay" style="display: none;">
							        	<i class="fa fa-refresh fa-spin"></i>
							        </div>
								</div>
							</div>
						</section>*/ ?>
					</form>
				</div>
			</section>
				<!-- /.content -->
		</div>
<?php get_footer($folder."footer"); ?>
<script type="text/javascript">
$('#date_posted').datepicker({
	todayBtn:"linked",
	setDate: new Date()
});
/*$('#blog_description').wysihtml5({
	"font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
	"emphasis": true, //Italics, bold, etc. Default true
	"lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
	"html": true, //Button which allows you to edit the generated HTML. Default false
	"link": true, //Button to insert a link. Default true
	"image": true, //Button to insert an image. Default true,
	"color": true, //Button to change color of font  
	"blockquote": true, //Blockquote  
	"resize" : false,
 	"size": 'md'//default: none, other options are xs, sm, lg
});*/
$(document).ready(function(){
 CKEDITOR.replace('editor1');
});
</script>

  