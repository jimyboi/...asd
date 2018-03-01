<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("header"); ?>
<body>	
<?php 
	
?>
<div class="container">
	<div class="row">
		<div class="col-md-12" style="border-bottom:1px solid black;border-top:1px  black;border-top:1px solid black;padding-top:2em;padding-bottom:2em;">
			<div class="col-md-12">
				<div class="row">
				 	<?php 
						if( ! $this->session->userdata('thenetworkplus'))
						{
							$act_conquery =  QModel::sfwa('activities','act_type','Public','date_created DESC');
						}
						else
						{
							$act_conquery =  QModel::sf('activities','date_created DESC');
						}

						$act_concc = QModel::c($act_conquery);
								
						if( ! $act_concc):
					?>
						<div class="col-md-12 text-center"><h4>Coming Soon...</h4></div>
					<?php else: ?>
					<?php
						$counter = 0;
						foreach (QModel::g($act_conquery, TRUE) as $get) :
						$act_title = $get['act_title']; 
						$act_description = $get['act_description'];
						$act_images = $get['act_images'];
						$act_type = $get['act_type'];
						$activities_id = $get['activities_id'];

					?>
					 	<?php if(($counter + 1) % 2 == 0 && ($counter + 1) % 3 == 0): ?>
									<div class="col-sm-6 col-md-4 col-lg-4 animated bounceIn">
										<div class="">
										<a class="info" href="javascript:void(0);" data-toggle="modal" data-target="#<?php echo $activities_id; ?>">
										<img class="img-responsive center-block" src="<?php echo themes_url('images/activities/view/'.$act_images);?>" >
								 			<div class="overlay">
								 				<h5><?php echo ucwords($act_title); ?></h5>
								         		
								 			</div>
								 		</a>
										</div>
									</div>	
									<div id="<?php echo $activities_id; ?>" class="modal fade" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title"><h3><?php echo ucwords($act_title); ?></h3></h4>
												</div>
												<div class="modal-body">
													 <img class="img-responsive center-block" src="<?php echo themes_url('images/activities/view/'.$act_images);?>">
													 <br />
													 <div>
													 	<h4><?php echo $act_description; ?></h4>
													 </div>
												</div>
											</div>
										</div>
									</div>
									<div class="clearfix visible-md-block visible-lg-block"></div>
									<div class="clearfix visible-sm-block"></div>
								<?php elseif(($counter + 1) % 2 == 0): ?>
									<div class="col-sm-6 col-md-4 col-lg-4 animated bounceIn">
										<div class="">
										<a class="info" href="javascript:void(0);" data-toggle="modal" data-target="#<?php echo $activities_id; ?>">
										<img class="img-responsive center-block" src="<?php echo themes_url('images/activities/view/'.$act_images);?>" >
								 			<div class="overlay">
								 				<h5><?php echo ucwords($act_title); ?></h5>
								         		
								 			</div>
								 		</a>
										</div>
									</div>	
									<div id="<?php echo $activities_id; ?>" class="modal fade" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title"><h3><?php echo ucwords($act_title); ?></h3></h4>
												</div>
												<div class="modal-body">
													 <img class="img-responsive center-block" src="<?php echo themes_url('images/activities/view/'.$act_images);?>">
													 <br />
													 <div>
													 	<h4><?php echo $act_description; ?></h4>
													 </div>
												</div>
											</div>
										</div>
									</div>
									<div class="clearfix visible-sm-block"></div>
								<?php elseif(($counter + 1) % 3 == 0): ?>
									<div class="col-sm-6 col-md-4 col-lg-4 animated bounceIn">
										<div class="">
										<a class="info" href="javascript:void(0);" data-toggle="modal" data-target="#<?php echo $activities_id; ?>">
										<img class="img-responsive center-block" src="<?php echo themes_url('images/activities/view/'.$act_images);?>" >
								 			<div class="overlay">
								 				<h5><?php echo ucwords($act_title); ?></h5>
								 			</div>
								 		</a>
										</div>
									</div>	
									<div id="<?php echo $activities_id; ?>" class="modal fade" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title"><h3><?php echo ucwords($act_title); ?></h3></h4>
												</div>
												<div class="modal-body">
													 <img class="img-responsive center-block" src="<?php echo themes_url('images/activities/view/'.$act_images);?>">
													 <br />
													 <div>
													 	<h4><?php echo $act_description; ?></h4>
													 </div>
												</div>
											</div>
										</div>
									</div>
									<div class="clearfix visible-md-block visible-lg-block"></div>
								<?php else: ?>
									<div class="col-sm-6 col-md-4 col-lg-4 animated bounceIn">
										<div class="">
										<a class="info" href="javascript:void(0);" data-toggle="modal" data-target="#<?php echo $activities_id; ?>">
										<img class="img-responsive center-block" src="<?php echo themes_url('images/activities/view/'.$act_images);?>" >
								 			<div class="overlay">
								 				<h5><?php echo ucwords($act_title); ?></h5>
								         		
								 			</div>
								 		</a>
										</div>
									</div>	
									<div id="<?php echo $activities_id; ?>" class="modal fade" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title"><h3><?php echo ucwords($act_title); ?></h3></h4>
												</div>
												<div class="modal-body">
													 <img class="img-responsive center-block" src="<?php echo themes_url('images/activities/view/'.$act_images);?>">
													 <br />
													 <div>
													 	<h4><?php echo $act_description; ?></h4>
													 </div>
												</div>
											</div>
										</div>
									</div>
								<?php endif; ?>
								<?php $counter++; ?>
							<?php endforeach; ?>
						<?php endif; ?>	
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<?php get_footer("footer"); ?>