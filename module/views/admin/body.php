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
				<?php $this->load->view($folder.'/statistics'); ?>
				<!-- Main row -->
				<div class="row">
					<!-- Left col -->
					<section class="col-lg-6 connectedSortable">
						<!-- Chat box -->
						<div class="box box-danger">
							<div class="box-header">
								<i class="fa fa-bullhorn"></i>
								<h3 class="box-title">Announcement</h3>
							</div>
							<div class="box-body ">
								<div class="callout callout-danger">
					                <h4>On Development</h4>

					                <p>
										Books Sidebar is not yet working
									</p>
								</div>
							</div>
						</div>

						<!-- /.box (chat box) -->
						<!-- quick email widget -->
					</section>
					
					
				</div>
			</section>
				<!-- /.content -->
		</div>
<?php get_footer($folder."footer"); ?>


  