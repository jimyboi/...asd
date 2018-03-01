<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("header"); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="">
				<div class="col-md-12">
					<div class="col-md-12">
						<div class="row">
							<div class="text-center">
								<h3 style="font-weight: bolder; letter-spacing: 15px; text-transform: uppercase;">Member Directory</b></h3>
								<p>Click on the member business below to see more information.</p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="col-md-6">
										<h3><?php echo isset($member_category) ? ucfirst($member_category) : ''; ?></h3>
										<h4><?php echo isset($business_name) ? ucfirst($business_name) : ''; ?></h4>
										<h5><?php echo isset($contact_name) ? ucfirst($contact_name) : ''; ?></h5>
										<h5>
											<?php echo isset($st_address) ? $st_address.' ' : ''; ?><?php echo isset($suite_no) ? $suite_no : ''; ?><br />
											<?php echo isset($city) ? $city : ''; ?>, <?php echo isset($state) ? $state : ''; ?> <?php echo isset($zip_code) ? $zip_code : ''; ?>
										</h5>
										<h5>
											<a href="https://www.google.com/maps/place?q=<?php echo str_replace(' ', '+', $st_address.$suite_no.$city.$state.$zip_code); ?>">Google Map</a>
										</h5>
										<h5>
											<?php echo isset($telephone) ? 'Tel : '.'<a href="tel:'.$telephone.'">'.$telephone.'</a>' : ''; ?> <br />
											<?php echo isset($cellphone) ? 'Cel : '.'<a href="tel:'.$cellphone.'">'.$cellphone.'</a>' : ''; ?> <br />
											<?php echo isset($fax_number) ? 'Fax : '.$fax_number : ''; ?> <br />
										</h5>
										<h5>
											<?php echo isset($email_address) ? 'Email : '.'<a href="mailto:'.$email_address.'">'.$email_address.'</a>' : ''; ?><br />
											Website : <a href="http://<?php echo str_replace(array('http://','https://'), '', $website); ?>">http://<?php echo str_replace(array('http://','https://'), '', $website); ?></a>
										</h5>
										<h5>
											Testimonials : 
											<?php echo isset($testimonials) ? ucfirst($testimonials) : ''; ?>
										</h5>
									</div>
									<div class="col-md-6">
										<?php if(isset($image_file)): ?>
											<img src="<?php echo themes_url('images/member/thumb/'.$image_file); ?>" class="img-responsive center-block">
										<?php endif ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer("footer"); ?>