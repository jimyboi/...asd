 <?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("header"); ?>
<body>	
<?php 
	
?>
<div class="container-fluid">
	<div class="row" style="background-color:#83bf83;">
		<div class="col-md-12" style="border-bottom:1px solid black;border-top:1px  black;border-top:1px solid black;padding-top:2em;padding-bottom:2em;">
			<div class="col-md-12">
				<div class="row">
				 	<?php 
					
					$chq = Qmodel::sf('charity_file');
					
					$chc = Qmodel::c($chq);

					if( ! $chc):
								
					?>
						<div class="col-md-12 text-center"><h4>No Record Found</h4></div>
					<?php else: ?>
					<?php
						$counter = 0;
						foreach (Qmodel::g($chq, TRUE) as $get) :
						$charity_id = $get['charity_id'];
						$charity_type = $get['charity_type'];
						$charity_title = $get['charity_title'];
						$charity_file = $get['charity_file'];
						$charity_description = $get['charity_description'];	

					?>
					 	<?php if(($counter + 1) % 1 == 0 && ($counter + 1) % 2 == 0): ?>
									<div class="col-sm-6 col-md-6 col-lg-6 animated bounceIn">
										<div class="col-md-12 text-center">
										<a class="info" href="javascript:void(0);" data-toggle="modal" data-target="#<?php echo $charity_id; ?>">
										<?php if($charity_type == 'youtube'): ?>
											<div class="embed-responsive embed-responsive-16by9" style="background-color:#83bf83;">
											  <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/<?php echo $charity_file; ?>"></iframe>
											</div>
										<?php elseif($charity_type == 'file'): ?>
											<div align="center" class="embed-responsive embed-responsive-16by9" style="background-color:#83bf83;">
											    <video class="embed-responsive-item">
											        <source src="<?php echo themes_url('videos/'.$charity_file); ?>" type="video/mp4">
											    </video>
											</div>
										<?php elseif($charity_type == 'image'): ?>
											<div style='height: 350px;width: 600px; background-color:#83bf83;' class="center-block" >
												<img  style='height: 100%; width: 100%; object-fit: contain' src="<?php echo themes_url('images/charity/view/'.$charity_file); ?>" class="img-responsive">
											</div>
										<?php endif; ?> <br />
										</a>
										<p class="text-center"><?php echo $charity_title; ?></p>
										</div>
										
									</div>	
									<div id="<?php echo $charity_id; ?>" class="modal fade" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title"><h3><?php echo ucwords($charity_title); ?></h3></h4>
												</div>
												<div class="modal-body">
													 <?php if($charity_type == 'youtube'): ?>
														<div class="embed-responsive embed-responsive-16by9" style="background-color:#83bf83;">
														  <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/<?php echo $charity_file; ?>"></iframe>
														</div>
													<?php elseif($charity_type == 'file'): ?>
														<div align="center" class="embed-responsive embed-responsive-16by9" style="background-color:#83bf83;">
														    <video class="embed-responsive-item">
														        <source src="<?php echo themes_url('videos/'.$charity_file); ?>" type="video/mp4">
														    </video>
														</div>
													<?php elseif($charity_type == 'image'): ?>
														<div style='height: 350px;width: 600px; background-color:#fff;' class="center-block">
															<img  style='height: 100%; width: 100%; object-fit: contain' src="<?php echo themes_url('images/charity/view/'.$charity_file); ?>" class="img-responsive">
														</div>
													<?php endif; ?>
													 <br />
													 <div>
													 	<h3><?php echo ucwords($charity_description); ?></h3>
													 </div>
												</div>
											</div>
										</div>
									</div>
									<div class="clearfix visible-md-block visible-lg-block"></div>
									<div class="clearfix visible-sm-block"></div>
								<?php elseif(($counter + 1) % 1 == 0): ?>
									<div class="col-sm-6 col-md-6 col-lg-6 animated bounceIn">
										<div class="col-md-12 text-center">
										<a class="info" href="javascript:void(0);" data-toggle="modal" data-target="#<?php echo $charity_id; ?>">
										<?php if($charity_type == 'youtube'): ?>
											<div class="embed-responsive embed-responsive-16by9" style="background-color:#83bf83;">
											  <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/<?php echo $charity_file; ?>"></iframe>
											</div>
										<?php elseif($charity_type == 'file'): ?>
											<div align="center" class="embed-responsive embed-responsive-16by9" style="background-color:#83bf83;">
											    <video class="embed-responsive-item">
											        <source src="<?php echo themes_url('videos/'.$charity_file); ?>" type="video/mp4">
											    </video>
											</div>
										<?php elseif($charity_type == 'image'): ?>
											<div style='height: 350px;width: 600px; background-color:#83bf83;' class="center-block" >
												<img  style='height: 100%; width: 100%; object-fit: contain' src="<?php echo themes_url('images/charity/view/'.$charity_file); ?>" class="img-responsive">
											</div>
										<?php endif; ?> <br />
										</a>
										<p class="text-center"><?php echo $charity_title; ?></p>
										</div>
										
									</div>	
									<div id="<?php echo $charity_id; ?>" class="modal fade" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title"><h3><?php echo ucwords($charity_title); ?></h3></h4>
												</div>
												<div class="modal-body">
													 <?php if($charity_type == 'youtube'): ?>
														<div class="embed-responsive embed-responsive-16by9" style="background-color:#83bf83;">
														  <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/<?php echo $charity_file; ?>"></iframe>
														</div>
													<?php elseif($charity_type == 'file'): ?>
														<div align="center" class="embed-responsive embed-responsive-16by9" style="background-color:#83bf83;">
														    <video class="embed-responsive-item">
														        <source src="<?php echo themes_url('videos/'.$charity_file); ?>" type="video/mp4">
														    </video>
														</div>
													<?php elseif($charity_type == 'image'): ?>
														<div style='height: 350px;width: 600px; background-color:#fff;' class="center-block">
															<img  style='height: 100%; width: 100%; object-fit: contain' src="<?php echo themes_url('images/charity/view/'.$charity_file); ?>" class="img-responsive">
														</div>
													<?php endif; ?>
													 <br />
													 <div>
													 	<h3><?php echo ucwords($charity_description); ?></h3>
													 </div>
												</div>
											</div>
										</div>
									</div>
									<div class="clearfix visible-sm-block"></div>
								<?php elseif(($counter + 1) % 2 == 0): ?>
									<div class="col-sm-6 col-md-6 col-lg-6 animated bounceIn">
										<div class="col-md-12 text-center">
										<a class="info" href="javascript:void(0);" data-toggle="modal" data-target="#<?php echo $charity_id; ?>">
										<?php if($charity_type == 'youtube'): ?>
											<div class="embed-responsive embed-responsive-16by9" style="background-color:#83bf83;">
											  <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/<?php echo $charity_file; ?>"></iframe>
											</div>
										<?php elseif($charity_type == 'file'): ?>
											<div align="center" class="embed-responsive embed-responsive-16by9" style="background-color:#83bf83;">
											    <video class="embed-responsive-item">
											        <source src="<?php echo themes_url('videos/'.$charity_file); ?>" type="video/mp4">
											    </video>
											</div>
										<?php elseif($charity_type == 'image'): ?>
											<div style='height: 350px;width: 600px; background-color:#83bf83;' class="center-block" >
												<img  style='height: 100%; width: 100%; object-fit: contain' src="<?php echo themes_url('images/charity/view/'.$charity_file); ?>" class="img-responsive">
											</div>
										<?php endif; ?> <br />
										</a>
										<p class="text-center"><?php echo $charity_title; ?></p>
										</div>
										
									</div>		
									<div id="<?php echo $charity_id; ?>" class="modal fade" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title"><h3><?php echo ucwords($charity_title); ?></h3></h4>
												</div>
												<div class="modal-body">
													 <?php if($charity_type == 'youtube'): ?>
														<div class="embed-responsive embed-responsive-16by9" style="background-color:#83bf83;">
														  <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/<?php echo $charity_file; ?>"></iframe>
														</div>
													<?php elseif($charity_type == 'file'): ?>
														<div align="center" class="embed-responsive embed-responsive-16by9" style="background-color:#83bf83;">
														    <video class="embed-responsive-item">
														        <source src="<?php echo themes_url('videos/'.$charity_file); ?>" type="video/mp4">
														    </video>
														</div>
													<?php elseif($charity_type == 'image'): ?>
														<div style='height: 350px;width: 600px; background-color:#fff;' class="center-block">
															<img  style='height: 100%; width: 100%; object-fit: contain' src="<?php echo themes_url('images/charity/view/'.$charity_file); ?>" class="img-responsive">
														</div>
													<?php endif; ?>
													 <br />
													 <div>
													 	<h3><?php echo ucwords($charity_description); ?></h3>
													 </div>
												</div>
											</div>
										</div>
									</div>
									<div class="clearfix visible-md-block visible-lg-block"></div>
								<?php else: ?>
									<div class="col-sm-6 col-md-6 col-lg-6 animated bounceIn">
										<div class="col-md-12 text-center">
										<a class="info" href="javascript:void(0);" data-toggle="modal" data-target="#<?php echo $charity_id; ?>">
										<?php if($charity_type == 'youtube'): ?>
											<div class="embed-responsive embed-responsive-16by9" style="background-color:#83bf83;">
											  <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/<?php echo $charity_file; ?>"></iframe>
											</div>
										<?php elseif($charity_type == 'file'): ?>
											<div align="center" class="embed-responsive embed-responsive-16by9" style="background-color:#83bf83;">
											    <video class="embed-responsive-item">
											        <source src="<?php echo themes_url('videos/'.$charity_file); ?>" type="video/mp4">
											    </video>
											</div>
										<?php elseif($charity_type == 'image'): ?>
											<div style='height: 350px;width: 600px; background-color:#83bf83;' class="center-block" >
												<img  style='height: 100%; width: 100%; object-fit: contain' src="<?php echo themes_url('images/charity/view/'.$charity_file); ?>" class="img-responsive">
											</div>
										<?php endif; ?> <br />
										</a>
										<p class="text-center"><?php echo $charity_title; ?></p>
										</div>
										
									</div>	
									<div id="<?php echo $charity_id; ?>" class="modal fade" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title"><h3><?php echo ucwords($charity_title); ?></h3></h4>
												</div>
												<div class="modal-body">
													 <?php if($charity_type == 'youtube'): ?>
														<div class="embed-responsive embed-responsive-16by9" style="background-color:#83bf83;">
														  <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/<?php echo $charity_file; ?>"></iframe>
														</div>
													<?php elseif($charity_type == 'file'): ?>
														<div align="center" class="embed-responsive embed-responsive-16by9" style="background-color:#83bf83;">
														    <video class="embed-responsive-item">
														        <source src="<?php echo themes_url('videos/'.$charity_file); ?>" type="video/mp4">
														    </video>
														</div>
													<?php elseif($charity_type == 'image'): ?>
														<div style='height: 350px;width: 600px; background-color:#fff;' class="center-block">
															<img  style='height: 100%; width: 100%; object-fit: contain' src="<?php echo themes_url('images/charity/view/'.$charity_file); ?>" class="img-responsive">
														</div>
													<?php endif; ?>
													 <br />
													 <div>
													 	<h3><?php echo ucwords($charity_description); ?></h3>
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