<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("admin/header",'layout'); ?>
<body>	
<style type="text/css">
	#return-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: #00843d !important;
    background: #00843d !important;
    width: 50px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    z-index:1;
}
#return-to-top i {
    color: #fff;
    margin: 0;
    position: relative;
    left: 16px;
    top: 13px;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top:hover {
    background: rgba(0, 0, 0, 0.9);
}
#return-to-top:hover i {
    color: #fff;
    top: 5px;
}

</style>
<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
<div class="container" >
	<div class="row">
		<div class="col-md-12" >
			<div class="col-md-12">
				<a href="<?php echo base_url('admin/directory?add=1'); ?>"><i class="fa fa-plus-square"></i> Add Directory</a>&nbsp;&nbsp;
				<a href="<?php echo base_url('admin/directory?add=excel'); ?>"><i class="fa fa-plus-square"></i> Add Directory Via Excel</a>
				<span><?php echo $this->session->flashdata('success'); ?></span> 
			</div>
			<!--div class="col-md-12" style="padding-bottom:3em;">
				<div class="col-md-4">
					<div class="row">
						<h4 style="color:#202f80;font-weight:bold;">Members</h4>
					</div>
				</div>
				<div class="col-md-8">
					
				</div>
			</div-->
				<?php 
							$dir_conquery = $this->QModel->sf('directory','drc_buscat ASC');
						
							$dir_concc = QModel::c($dir_conquery);
								
							if( ! $dir_concc):
						?>
							<div class="col-md-12 text-center"><h4>No Record Found</h4></div>
							<?php 
							else: ?>
				<?php
							$counter = 0;
							foreach (QModel::g($dir_conquery, TRUE) as $get) :
								$drc_fullname = $get['drc_fullname'];
								$drc_image = $get['drc_image'];
								$drc_busname = $get['drc_busname'];
								$drc_buscat = $get['drc_buscat'];
								$drc_phone = $get['drc_phone'];
								$drc_email = $get['drc_email'];
								$drc_web = $get['drc_web'];
								$drc_serviceoff = $get['drc_serviceoff'];
								$directory_id = $get['directory_id'];
								$drc_staddress = $get['drc_staddress'];
								$drc_city = $get['drc_city'];
								$drc_state = $get['drc_state'];
								$drc_zip = $get['drc_zip'];
								$drc_officeno = $get['drc_officeno'];
								$drc_faxnum = $get['drc_faxnum'];
								$drc_suite = $get['drc_suite'];
							
				?>
				<?php if(($counter + 1) % 3 == 0 && ($counter + 1) % 4 == 0): ?>
									<div class="col-md-3" >
										<a target="___blank" href="javascript:void(0);">
										
										<div class="col-md-offset-2">
											<div style='height: 200px; width: 200px; background-color:#fff;' class="center-block">
												<img style='height: 100%; width: 100%; object-fit: contain' src="<?php echo themes_url('images/directory/thumb/'.$drc_image); ?>" class="img-responsive center-block"></a>
											</div>
											<h4 class="d-name" style="font-family: Tahoma, Verdana, Segoe, sans-serif;">
											
											<div class="col-md-12 text-center"   style="border-top:3px solid;border-bottom:3px solid;margin-bottom:10px;padding-top:5px;padding-bottom:5px;">
												<div class="row">
													<span class="text-uppercase"><b><?php echo $drc_buscat; ?></b></span> 
												</div>
											</div>
											<b><?php echo $drc_fullname; ?></b> <br/ >
											<div style="margin-bottom:5px;">
												<span style="font-size:17px;"><?php echo $drc_busname; ?> <br /></span>
											</div>
											<div style="font-size:15px;">
												<?php echo ($drc_staddress) ? $drc_staddress : ''; ?><?php echo ($drc_suite) ? $drc_suite.'<br />' : ''; ?>
											</div>
											<div style="margin-bottom:5px; font-size:15px;">
												<?php echo ($drc_city) ? $drc_city.', ' : ''; ?><?php echo ($drc_state) ? $drc_state.' ' : ''; ?><?php echo ($drc_zip) ? $drc_zip : ''; ?>
											</div>
											<div style="">
												<?php if($drc_officeno): ?>
													<span>Ofc : <?php echo $drc_officeno; ?> </span><br />
												<?php endif; ?>
											</div>
											<div style="">
												<?php if($drc_phone): ?>
													<span>Cell : <?php echo $drc_phone; ?> </span><br />
												<?php endif; ?>
											</div>
											<div style="margin-bottom:5px;">
												<?php if($drc_faxnum): ?>
													<span>Fax : <?php echo $drc_faxnum; ?> </span><br />
												<?php endif; ?>
											</div>
											<?php if($this->session->userdata('thenetworkplus')): ?>
												<?php echo $drc_email; ?>
											<?php else: ?>
												<?php echo mb_strimwidth($drc_email, 0, 15, "..."); ?> 
											<?php endif; ?> 
											<a target="___blank" href="http://<?php echo isset($drc_web) ? $drc_web : ''; ?>"><?php echo isset($drc_web) ? $drc_web : ''; ?></a><br />
											<br />
											<span style="font-family: 'Lucida', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;" class="text-center"><?php echo isset($drc_serviceoff) ? $drc_serviceoff : ''; ?></span>
											<br /><br />
											<div class="col-md-12">
												<div class="row">
													<a href="<?php echo base_url('admin/directory?edit='.$directory_id); ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square fa-lg" ></i></a> 
													| 
													<a href="<?php echo base_url('admin/delete_dir/'.$directory_id); ?>" onclick="return  confirm('Delete Record?')"  data-toggle="tooltip" data-placement="top" title="Delete"> <i class="fa fa-eraser fa-lg" ></i></a>
												</div>
											</div>
											<br />
											</h4>
										</div>
										<hr>
									</div>
									
									<div class="clearfix visible-md-block visible-lg-block"></div>
									<div class="clearfix visible-sm-block"></div>
								<?php elseif(($counter + 1) % 3 == 0): ?>
									<div class="col-md-3" >
										<a target="___blank" href="javascript:void(0);">
										<div class="col-md-offset-2">
											<div style='height: 200px; width: 200px; background-color:#fff;' class="center-block">
												<img style='height: 100%; width: 100%; object-fit: contain' src="<?php echo themes_url('images/directory/thumb/'.$drc_image); ?>" class="img-responsive center-block"></a>
											</div>
											<h4 class="d-name" style="font-family: Tahoma, Verdana, Segoe, sans-serif;">
											
											<div class="col-md-12 text-center"   style="border-top:3px solid;border-bottom:3px solid;margin-bottom:10px;padding-top:5px;padding-bottom:5px;">
												<div class="row">
													<span class="text-uppercase"><b><?php echo $drc_buscat; ?></b></span> 
												</div>
											</div>
											<b><?php echo $drc_fullname; ?></b> <br/ >
											<div style="margin-bottom:5px;">
												<span style="font-size:17px;"><?php echo $drc_busname; ?> <br /></span>
											</div>
											<div style="font-size:15px;">
												<?php echo ($drc_staddress) ? $drc_staddress : ''; ?><?php echo ($drc_suite) ? $drc_suite.'<br />' : ''; ?>
												
											</div>
											<div style="margin-bottom:5px; font-size:15px;">
												<?php echo ($drc_city) ? $drc_city.', ' : ''; ?><?php echo ($drc_state) ? $drc_state.' ' : ''; ?><?php echo ($drc_zip) ? $drc_zip : ''; ?>
											</div>
											<div style="">
												<?php if($drc_officeno): ?>
													<span>Ofc : <?php echo $drc_officeno; ?> </span><br />
												<?php endif; ?>

											</div>
											<div style="">
												<?php if($drc_phone): ?>
													<span>Cell : <?php echo $drc_phone; ?> </span><br />
												<?php endif; ?>
											</div>
											<div style="margin-bottom:5px;">
												<?php if($drc_faxnum): ?>
													<span>Fax : <?php echo $drc_faxnum; ?> </span><br />
												<?php endif; ?>
											</div>
											<?php if($this->session->userdata('thenetworkplus')): ?>
												<?php echo $drc_email; ?>
											<?php else: ?>
												<?php echo mb_strimwidth($drc_email, 0, 15, "..."); ?> 
											<?php endif; ?> 
											<a target="___blank" href="http://<?php echo isset($drc_web) ? $drc_web : ''; ?>"><?php echo isset($drc_web) ? $drc_web : ''; ?></a><br />
											<br />
											<span style="font-family: 'Lucida', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;" class="text-center"><?php echo isset($drc_serviceoff) ? $drc_serviceoff : ''; ?></span>
											<br /><br />
											<div class="col-md-12">
												<div class="row">
													<a href="<?php echo base_url('admin/directory?edit='.$directory_id); ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square fa-lg" ></i></a> 
													| 
													<a href="<?php echo base_url('admin/delete_dir/'.$directory_id); ?>" onclick="return  confirm('Delete Record?')"  data-toggle="tooltip" data-placement="top" title="Delete"> <i class="fa fa-eraser fa-lg" ></i></a>
												</div>
											</div>
											<br />
											</h4>
										</div>
										<hr>
									</div>
									<div class="clearfix visible-sm-block"></div>
								<?php elseif(($counter + 1) % 4 == 0): ?>
									<div class="col-md-3">
										<a target="___blank" href="javascript:void(0);">
										<div class="col-md-offset-2">
											<div style='height: 200px; width: 200px; background-color:#fff;' class="center-block">
												<img style='height: 100%; width: 100%; object-fit: contain' src="<?php echo themes_url('images/directory/thumb/'.$drc_image); ?>" class="img-responsive center-block"></a>
											</div>
											<h4 class="d-name" style="font-family: Tahoma, Verdana, Segoe, sans-serif;">
											
											<div class="col-md-12 text-center"   style="border-top:3px solid;border-bottom:3px solid;margin-bottom:10px;padding-top:5px;padding-bottom:5px;">
												<div class="row">
													<span class="text-uppercase"><b><?php echo $drc_buscat; ?></b></span> 
												</div>
											</div>
											<b><?php echo $drc_fullname; ?></b> <br/ >
											<div style="margin-bottom:5px;">
												<span style="font-size:17px;"><?php echo $drc_busname; ?> <br /></span>
											</div>
											<div style="font-size:15px;">
												<?php echo ($drc_staddress) ? $drc_staddress : ''; ?><?php echo ($drc_suite) ? $drc_suite.'<br />' : ''; ?>
											</div>
											<div style="margin-bottom:5px; font-size:15px;">
												<?php echo ($drc_city) ? $drc_city.', ' : ''; ?><?php echo ($drc_state) ? $drc_state.' ' : ''; ?><?php echo ($drc_zip) ? $drc_zip : ''; ?>
											</div>
											<div style="">
												<?php if($drc_officeno): ?>
													<span>Ofc : <?php echo $drc_officeno; ?> </span><br />
												<?php endif; ?>
											</div>
											<div style="">
												<?php if($drc_phone): ?>
													<span>Cell : <?php echo $drc_phone; ?> </span><br />
												<?php endif; ?>
											</div>
											<div style="margin-bottom:5px;">
												<?php if($drc_faxnum): ?>
													<span>Fax : <?php echo $drc_faxnum; ?> </span><br />
												<?php endif; ?>
											</div>
											<?php if($this->session->userdata('thenetworkplus')): ?>
												<?php echo $drc_email; ?>
											<?php else: ?>
												<?php echo mb_strimwidth($drc_email, 0, 15, "..."); ?> 
											<?php endif; ?> 
											<a target="___blank" href="http://<?php echo isset($drc_web) ? $drc_web : ''; ?>"><?php echo isset($drc_web) ? $drc_web : ''; ?></a><br />
											<br />
											<span style="font-family: 'Lucida', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;" class="text-center"><?php echo isset($drc_serviceoff) ? $drc_serviceoff : ''; ?></span>
											<br /><br />
											<div class="col-md-12">
												<div class="row">
													<a href="<?php echo base_url('admin/directory?edit='.$directory_id); ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square fa-lg" ></i></a> 
													| 
													<a href="<?php echo base_url('admin/delete_dir/'.$directory_id); ?>" onclick="return  confirm('Delete Record?')"  data-toggle="tooltip" data-placement="top" title="Delete"> <i class="fa fa-eraser fa-lg" ></i></a>
												</div>
											</div>
											<br />
											</h4>
										</div>
										<hr>
									</div>
									<div class="clearfix visible-md-block visible-lg-block"></div>
								<?php else: ?>
									<div class="col-md-3">
										<a target="___blank" href="javascript:void(0);">
										<div class="col-md-offset-2">
											<div style='height: 200px; width: 200px; background-color:#fff;' class="center-block">
												<img style='height: 100%; width: 100%; object-fit: contain' src="<?php echo themes_url('images/directory/thumb/'.$drc_image); ?>" class="img-responsive center-block"></a>
											</div>
											<h4 class="d-name" style="font-family: Tahoma, Verdana, Segoe, sans-serif;">
											
											<div class="col-md-12 text-center"   style="border-top:3px solid;border-bottom:3px solid;margin-bottom:10px;padding-top:5px;padding-bottom:5px;">
												<div class="row">
													<span class="text-uppercase"><b><?php echo $drc_buscat; ?></b></span> 
												</div>
											</div>
											<b><?php echo $drc_fullname; ?></b> <br/ >
											<div style="margin-bottom:5px;">
												<span style="font-size:17px;"><?php echo $drc_busname; ?> <br /></span>
											</div>
											<div style="font-size:15px;">
												<?php echo ($drc_staddress) ? $drc_staddress : ''; ?><?php echo ($drc_suite) ? $drc_suite.'<br />' : ''; ?>
											</div>
											<div style="margin-bottom:5px; font-size:15px;">
												<?php echo ($drc_city) ? $drc_city.', ' : ''; ?><?php echo ($drc_state) ? $drc_state.' ' : ''; ?><?php echo ($drc_zip) ? $drc_zip : ''; ?>
											</div>
											<div style="">
												<?php if($drc_officeno): ?>
													<span>Ofc : <?php echo $drc_officeno; ?> </span><br />
												<?php endif; ?>
											</div>
											<div style="">
												<?php if($drc_phone): ?>
													<span>Cell : <?php echo $drc_phone; ?> </span><br />
												<?php endif; ?>
											</div>
											<div style="margin-bottom:5px;">
												<?php if($drc_faxnum): ?>
													<span>Fax : <?php echo $drc_faxnum; ?> </span><br />
												<?php endif; ?>
											</div>
											<?php if($this->session->userdata('thenetworkplus')): ?>
												<?php echo $drc_email; ?>
											<?php else: ?>
												<?php echo mb_strimwidth($drc_email, 0, 15, "..."); ?> 
											<?php endif; ?>
											<a target="___blank" href="http://<?php echo isset($drc_web) ? $drc_web : ''; ?>"><?php echo isset($drc_web) ? $drc_web : ''; ?></a><br />
											<br />
											<span style="font-family: 'Lucida', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;" class="text-center"><?php echo isset($drc_serviceoff) ? $drc_serviceoff : ''; ?></span>
											<br /><br />
											<div class="col-md-12">
												<div class="row">
													<a href="<?php echo base_url('admin/directory?edit='.$directory_id); ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square fa-lg" ></i></a> 
													| 
													<a href="<?php echo base_url('admin/delete_dir/'.$directory_id); ?>" onclick="return  confirm('Delete Record?')"  data-toggle="tooltip" data-placement="top" title="Delete"> <i class="fa fa-eraser fa-lg" ></i></a>
												</div>
											</div>
											<br />
											</h4>
										</div>
										<hr>
									</div>	
								<?php endif; ?>
								<?php $counter++; ?>
							<?php endforeach; ?>
						<?php endif; ?>	
		</div>
	</div>	
</div>	

</body>
<?php get_footer("admin/footer"); ?>
<script type="text/javascript">
	// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>