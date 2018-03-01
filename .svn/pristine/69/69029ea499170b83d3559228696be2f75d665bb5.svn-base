<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("admin/header"); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		 
				<div class="col-md-offset-4">
					<span><?php echo $this->session->flashdata('success'); ?></span>
					<div class="col-md-6">
					<h4>Edit Calendar</h4>
						<form role="form" method="POST">
							<div class="form-group <?php echo isset($e_title_response) ? 'has-error' : ''; ?>">
							   	<label class="control-label" for="title">Title :</label>
								<input type="text" name="e_title" value="<?php echo isset($e_title) ? $e_title : ''; ?>" class="form-control" id="e_title">
								<span><?php echo isset($e_title_response) ? $e_title_response : ''; ?></span>		
							</div>	
							<div class="form-group <?php echo isset($error_e_venue) ? 'has-error' : ''; ?>">
							   	<label class="control-label" for="venue">Venue :</label>
								<input name="e_venue" value="<?php echo isset($e_venue) ? $e_venue : ''; ?>" class="form-control" id="inputdefault" type="text" placeholder="Venue" >
								<span><?php echo isset($error_e_venue) ? $error_e_venue : ""; ?></span>	
							</div>
							<div class="form-group <?php echo isset($contact_person_response) ? 'has-error' : ''; ?>">
								<label class="control-label">Contact Person :</label>
								<select class="form-control" name="contact_person" onchange="remember();" id="selectBox">
									<option>- Please Select Contact Person -</option>
									<?php 

											$query = Qmodel::sf('directory');
											$cquery = Qmodel::c($query);
											if($cquery):
											foreach((Qmodel::g($query,TRUE)) as $get): 
												$drc_fullname = $get['drc_fullname'];
												$drc_email = $get['drc_email'];
												$drc_phone = $get['drc_phone']
									?>
											<option value="<?php echo $drc_fullname; ?>:<?php echo $drc_phone; ?>:<?php echo $drc_email; ?>" <?php echo (isset($contact_person) ? $contact_person == $drc_fullname : '') ? 'selected' : ''; ?>><?php echo $drc_fullname; ?></option>
											<?php endforeach; endif; ?>
								</select>
								<span><?php echo isset($contact_person_response) ? $contact_person_response : ''; ?></span>
							</div>
							<div class="form-group <?php echo isset($phone_response) ? 'has-error' : ''; ?>">
							   	<label class="control-label" for="venue">Phone Number :</label>
								<input name="phone" value="<?php echo isset($phone) ? $phone : ''; ?>" class="form-control" id="phone" type="text" placeholder="Phone Number" readonly >
								<span><?php echo isset($phone_response) ? $phone_response : ""; ?></span>	
							</div>
							<div class="form-group <?php echo isset($email_response) ? 'has-error' : ''; ?>">
							   	<label class="control-label" for="venue">Email Address :</label>
								<input name="email" value="<?php echo isset($email) ? $email : ''; ?>" class="form-control" id="email" type="text" placeholder="Email Address" readonly >
								<span><?php echo isset($email_response) ? $email_response : ""; ?></span>	
							</div>
							<div class="form-group <?php echo isset($error_e_dstart) ? 'has-error' : ''; ?>">
								<label class="control-label" for="d_start">Date Start :</label>				
								<div class='input-group date' id='d_start'>
									<input name="d_start" type="text" value="<?php echo isset($d_start) ? $d_start : ''; ?>" class="form-control" onkeydown="return false" placeholder="Date Start">
									<span class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</span>	
								</div>
								<span><?php echo isset($error_e_dstart) ? $error_e_dstart : ""; ?></span>
							</div>
							<div class="form-group <?php echo isset($error_e_dend) ? 'has-error' : ''; ?>">
								<label class="control-label" for="d_end">Date End :</label>
								<div class='input-group date' id='d_end'>
									<input name="d_end" type="text"  value="<?php echo isset($d_end) ? $d_end : ''; ?>" class="form-control" onkeydown="return false" placeholder="Date End">
									<span class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</span>	
								</div>
								<span><?php echo isset($error_e_dend) ? $error_e_dend : ""; ?></span>
							</div>
							<div class="form-group <?php echo isset($error_e_tstart) ? 'has-error' : ''; ?>">
								<label class="control-label" for="t_start">Time Start :</label>
								<div  class='input-group date' id='t_start'>
									<input type="text" name="t_start"  value="<?php echo isset($t_start) ? $t_start : ''; ?>" class="form-control" onkeydown="return false" placeholder="Time Start">
									<span class="input-group-addon">
										<i class="fa fa-clock-o"></i>								
									</span>	
								</div>
								<span><?php echo isset($error_e_tstart) ? $error_e_tstart : ""; ?></span>
							</div>
							<div class="form-group <?php echo isset($error_e_tend) ? 'has-error' : ''; ?>">
								<label class="control-label" for="t_end">Time End :</label>
								<div name="e_tend" class='input-group date' id='t_end'>
									<input type="text" name="t_end"  value="<?php echo isset($t_end) ? $t_end : ''; ?>" class="form-control" onkeydown="return false" placeholder="Time End">
									<span class="input-group-addon">
										<i class="fa fa-clock-o"></i>
									</span>	
								</div>
								<span><?php echo isset($error_e_tend) ? $error_e_tend : ""; ?></span>
							</div>
							<div class="form-group <?php echo isset($e_description_response) ? 'has-error' : ''; ?>">
								<label class="control-label" for="description">Description :</label>
								<textarea class="form-control" rows="6" name="e_description"><?php echo isset($e_description) ? $e_description : ""; ?></textarea>
								<span><?php echo isset($e_description_response) ? $e_description_response : ''; ?></span>
							</div>
							<button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>	
						</form>
					</div>
				</div>
		</div>
	</div>
</div>

<?php get_footer("footer",array('moment','bootstrap-datetimepicker.min')); ?>
<script type="text/javascript">
		$(function () {
			$('#t_start').datetimepicker({
			format: 'LT',
			});
			$('#t_end').datetimepicker({
			format: 'LT',
			});
			$('#d_start').datetimepicker({
			format: 'YYYY-MM-DD',
			});
			$('#d_end').datetimepicker({
			format: 'YYYY-MM-DD',
			});
			});

	function remember() 
	{	
		var selectBox = document.getElementById("selectBox");
   		var selectedValue = selectBox.options[selectBox.selectedIndex].value;
   		var vals = selectedValue.split(":"); 
		document.getElementById('phone').value = vals[1];
		document.getElementById('email').value = vals[2];
	}
		</script>