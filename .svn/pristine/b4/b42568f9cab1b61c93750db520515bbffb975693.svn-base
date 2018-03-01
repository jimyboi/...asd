<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header($folder."header",array('admin/bootstrap-timepicker.min')); ?>
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
						<section class="col-lg-6">
							<?php /* LOGIN 
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title">Login Details</h3>
								</div>
								<div class="box-body">
									<?php 
										$var = array('username','password');
										$var_name = array('Username','Password');
										$value = array(
											isset($username) ? $username : "",
											isset($password) ? $password : ""
										);

										$response = array(
											isset($username_response) ? $username_response : "",
											isset($password_response) ? $password_response : ""
										);

										$i = 0;
										foreach ($var as $a):
									?>
										<div class="form-group <?php if($response[$i]) echo "has-error"; ?>">
											<label class="control-label" for="<?php echo $var_name[$i]; ?>"><?php echo $var_name[$i]; ?></label>
											<input type="text" class="form-control" id="<?php echo $a; ?>" placeholder="" name="<?php echo $a; ?>" value="<?php echo $value[$i]; ?>">
											<span><?php echo $response[$i]; ?></span>
										</div>
									
									<?php $i++;  endforeach; ?>
								</div>
							</div>*/ ?>

							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title">Add Events</h3>
									<span><?php echo isset($hit_response) ? $hit_response : ''; ?></span>
								</div>
								
								<div class="box-body">
									<?php 
										$var = array('calendar_title','venue', 'date_start', 'date_end', 'time_start', 'time_end', 'calendar_description'); // VARIABLE
										$var_name = array('Title','Venue', 'Date Start', 'Date End', 'Time Start', 'Time End', 'Calendar description');// LABEL
										//VARIABLE
										$value = array(
											isset($calendar_title) ? $calendar_title : "", 
											isset($venue) ? $venue : "",
											isset($date_start) ? $date_start : "",
											isset($date_end) ? $date_end : "",
											isset($time_start) ? $time_start : "",
											isset($time_end) ? $time_end : "",
											isset($calendar_description) ? $calendar_description : ""
										);
										//VARIABLE WITH RESPONSE
										$response = array(
											isset($calendar_title_response) ? $calendar_title_response : "",
											isset($venue_response) ? $venue : "",
											isset($date_start_response) ? $date_start_response : "",
											isset($date_end_response) ? $date_end_response : "",
											isset($time_start_response) ? $time_start_response : "",
											isset($time_end_response) ? $time_end_response : "",
											isset($calendar_description_response) ? $calendar_description_response : ""
										);

										$i = 0;
										foreach ($var as $a):
									?>
										<?php if($a == 'calendar_description'): ?>
											<div class="form-group <?php if($response[$i]) echo "has-error"; ?>">
												<label class="control-label" for="<?php echo $var_name[$i]; ?>"><?php echo $var_name[$i]; ?></label>
												<textarea class="form-control" name="<?php echo $a; ?>" rows="5" style="resize:none;"><?php echo $value[$i]; ?></textarea>
												<span><?php echo $response[$i]; ?></span>
											</div>
										<?php elseif($a == 'time_start' || $a == 'time_end'): ?>
        									<div class="form-group <?php if($response[$i]) echo "has-error"; ?>">
												<label class="control-label" for="<?php echo $var_name[$i]; ?>"><?php echo $var_name[$i]; ?></label>
												<div class="input-group  bootstrap-timepicker timepicker">
													<input type="text" class="form-control input-small " readonly id="<?php echo $a; ?>" <?php if($a == 'date_start' || $a == 'date_end'){echo 'readonly';} ?> placeholder="" name="<?php echo $a; ?>" value="<?php echo $value[$i]; ?>">
													<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
												</div>
												<span><?php echo $response[$i]; ?></span>
											</div>
											
										<?php else: ?>
											<div class="form-group <?php if($response[$i]) echo "has-error"; ?>">
												<label class="control-label" for="<?php echo $var_name[$i]; ?>"><?php echo $var_name[$i]; ?></label>
												<input type="text" class="form-control" id="<?php echo $a; ?>" <?php if($a == 'date_start' || $a == 'date_end'){echo 'readonly';} ?> placeholder="" name="<?php echo $a; ?>" value="<?php echo $value[$i]; ?>">
												<span><?php echo $response[$i]; ?></span>
											</div>
										<?php endif; $i++;  endforeach; ?>
								</div>
								<div class="box-footer">
									 <input type="submit" class="btn btn-primary" name="submit" value="Submit">
								</div>								
							</div>
						</section>

						<?php /* SOCIAL AND IMAGES 
						<section class="col-lg-6">
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title">Social Media Details</h3>
								</div>
								<div class="box-body">
									<?php 
										$var = array('twitter','facebook','google_plus','pinterest');
										$var_name = array('Twitter','Facebook','Google_plus','Pinterest');
										$value = array(
											isset($twitter) ? $twitter : "",
											isset($facebook) ? $facebook : "",
											isset($google_plus) ? $google_plus : "",
											isset($pinterest) ? $pinterest : "",
										);

										$response = array(
											isset($twitter_response) ? $twitter_response : "",
											isset($facebook_response) ? $facebook_response : "",
											isset($google_plus_response) ? $google_plus_response : "",
											isset($pinterest_response) ? $pinterest_response : "",
										);

										$i = 0;
										foreach ($var as $a):
									?>
										<div class="form-group <?php if($response[$i]) echo "has-error"; ?>">
											<label class="control-label" for="<?php echo $var_name[$i]; ?>"><?php echo $var_name[$i]; ?></label>
											<input type="text" class="form-control" id="<?php echo $a; ?>" placeholder="" name="<?php echo $a; ?>" value="<?php echo $value[$i]; ?>">
											<span><?php echo $response[$i]; ?></span>
										</div>
									
									<?php $i++;  endforeach; ?>
								</div>
							</div>
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title">Images</h3>
								</div>
								<div class="box-body">
									
								</div>
							</div>
						</section>*/ ?>
					</form>
				</div>
			</section>
				<!-- /.content -->
		</div>
<?php get_footer($folder."footer",array('admin/bootstrap-timepicker.min')); ?>
<script type="text/javascript">
$('#date_start').datepicker({
	defaultViewDate:'year',
	format:'yyyy-mm-dd',
	todayBtn:"linked"
});
$('#date_end').datepicker({
	defaultViewDate:'year',
	format:'yyyy-mm-dd',
	todayBtn:"linked"
});
$('#time_start, #time_end').timepicker();

$('#coupon_calendar_description').wysihtml5({
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

  