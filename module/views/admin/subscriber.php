<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header($folder."header",array($folder.'dataTables.bootstrap')); ?>
		<!-- Left side column. contains the logo and sidebar -->
		<?php $this->load->view($folder.'/sidebar'); ?>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<?php $this->load->view($folder.'/content_header'); ?>
			<!-- Main content -->
			<section class="content">
				<?php #$this->load->view($folder.'/statistics'); ?>
				<!-- Main row -->
				<div class="row">
					<!-- Left col -->
					<section class="col-lg-12 ">
						<div class="box box-primary box-solid">
							<div class="box-header  with-border">
								<h3 class="box-title">Careers</h3>
								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
								</div>
							</div>	
							<div class="box-body">
								<table id="rgtable" class="table table-bordered">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>Email Address</th>
											<th>Date / Time Subscribe</th>
										</tr>
									</thead>
									<tbody>
										<?php 

											$query = $this->QModel->sf("subscriber");
											$cquery = $this->QModel->c($query);

											if( ! $cquery):
										?>
										<?php else: ?>
											<?php
												$i = 1;
												$da = '';
												foreach ($this->QModel->g($query, TRUE) as $g):
													$sname = $g['sname'];
													$email = $g['email'];
													$date_create = $g['date_create'];
											

											?>
											<tr>
												<td><?php echo $i++; ?></td>
												<td><?php echo $sname; ?></td>
												<td><?php echo $email; ?></td>
												<td><?php echo date("M d, Y H:i A",strtotime($date_create)); ?></td>
											</tr>
										<?php $i++; endforeach; ?>
										<?php endif; ?>
									</tbody>
								</table>
							</div>
						</div>
					</section>
				</div>
			</section>
				<!-- /.content -->
		</div>
<?php get_footer($folder."footer",array($folder.'jquery.dataTables.min',$folder.'dataTables.bootstrap')); ?>
<script type="text/javascript">
	$('#rgtable').DataTable({
      "paging": true,
      /*"lengthChange": false,
      "searching": false,*/
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
</script>