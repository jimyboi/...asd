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
					<form method="POST"  enctype="multipart/form-data">
						<section class="col-lg-12">
							<?php echo $this->session->flashdata('success'); ?>
						</section>
						<section class="col-lg-8">
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title"><?php echo isset($tab) ? $tab : 'Add'; ?> Coupon</h3>
									<span><?php echo isset($hit_response) ? $hit_response : ''; ?></span>
								</div>
								
								<div class="box-body">
									<?php 
										$var = array('business_id','coupon_name','coupon_code','coupon_description','start','end','status');
										$var_name = array('Business','Coupon name','Coupon Code','Description','Valid Start','Valid End','Status');
										$value = array(
											isset($business_id) ? $business_id : "",
											isset($coupon_name) ? $coupon_name : "",
											isset($coupon_code) ? $coupon_code : "",
											isset($coupon_description) ? $coupon_description : "",
											isset($start) ? $start : "",
											isset($end) ? $end : "",
											isset($status) ? $status : "",
										);

										$response = array(
											isset($business_id_response) ? $business_id_response : "",
											isset($coupon_name_response) ? $coupon_name_response : "",
											isset($coupon_code_response) ? $coupon_code_response : "",
											isset($coupon_description_response) ? $coupon_description_response : "",
											isset($start_response) ? $start_response : "",
											isset($end_response) ? $end_response : "",
											isset($status_response) ? $status_response : "",
										);

										$i = 0;
										foreach ($var as $a):
									?>
									<?php if($a == 'coupon_description'): ?>
										<div class="form-group <?php if($response[$i]) echo "has-error"; ?>">
											<label class="control-label" for="price"><?php echo $var_name[$i]; ?></label>
											<textarea name="<?php echo $a; ?>" class="form-control" id="<?php echo $a; ?>" placeholder="" rows="7"><?php echo $value[$i]; ?></textarea>
											<span><?php echo $response[$i]; ?></span>
										</div>	
									<?php elseif($a == 'business_id'): ?>
										<div class="form-group <?php if($response[$i]) echo "has-error"; ?>">
											<label class="control-label" for="category"><?php echo $var_name[$i]; ?></label>
											<select class="form-control" name="<?php echo $a; ?>">
												<?php 
													$cq = $this->QModel->sf('business');
													if( ! $this->QModel->c($cq)):
												?>
													<option value="">No records found !</option>
												<?php else: ?>
													<?php 
														foreach ($this->QModel->g($cq,TRUE) as $g): 
															$business_ids = $g['business_id'];
															$business_names = $g['business_name'];
													?>
															<option value="<?php echo $business_ids; ?>" <?php echo (isset($business_id) ? $business_id == $business_ids : '') ? 'selected' : ''; ?>><?php echo $business_names; ?></option>
														<?php endforeach; endif; ?>
											</select>
											<span><?php echo $response[$i]; ?></span>
										</div>
									<?php elseif($a == 'status'): ?>
										<div class="form-group <?php if($response[$i]) echo "has-error"; ?>">
											<label class="control-label" for="category"><?php echo $var_name[$i]; ?></label>
											<select class="form-control" name="<?php echo $a; ?>">
												<option value="1" <?php echo (isset($status) ? $status == '1' : '') ? 'selected' : ''; ?>>Active</option>
												<option value="0" <?php echo (isset($status) ? $status == '0' : '') ? 'selected' : ''; ?>>InActive</option>
											</select> 
											<span><?php echo $response[$i]; ?></span>
										</div>
									<?php else : ?>
										<div class="form-group <?php if($response[$i]) echo "has-error"; ?>">
											<label class="control-label" for="title"><?php echo $var_name[$i]; ?></label>
											<input type="text" class="form-control" id="<?php echo $a; ?>" <?php if($a == 'start' || $a == 'end'){echo 'readonly';} ?> placeholder="" name="<?php echo $a; ?>" value="<?php echo $value[$i]; ?>">
											<span><?php echo $response[$i]; ?></span>
										</div>
									<?php endif; $i++;  endforeach; ?>
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
$('#start').datepicker({
	defaultViewDate:'year',
	format:'yyyy-mm-dd',
	todayBtn:"linked"
});
$('#end').datepicker({
	defaultViewDate:'year',
	format:'yyyy-mm-dd',
	todayBtn:"linked"
});

$('#coupon_description').wysihtml5({
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
});
</script>

  