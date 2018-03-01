<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header($folder."header",array($folder.'/dataTables.bootstrap')); ?>
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
								<h3 class="box-title">Calendar list</h3>
								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
								</div>
							</div>	
							<div class="box-body">
								<section class="col-lg-12">
									<div class="row">
										<?php echo $this->session->flashdata('success'); ?>
									</div>
								</section>
								<div class="col-md-12" style="margin-bottom:20px;">
									<div class="row">
										<a href="<?php echo base_url('admin/calendar?c=add'); ?>" class="btn btn-success btn-flat" >Add Event</a> 
									</div>
								</div>
								<table id="rgtable" class="table table-bordered">
									<thead>
										<tr>
											<th>Title</th>
											<th>Venue</th>
											<th>Date Start</th>
											<th>Date End</th>
											<th>Time Start</th>
											<th>Time End</th>
											<th>Date Created</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php 

											$query = $this->QModel->sf("calendar");
											$cquery = $this->QModel->c($query);

											if( ! $cquery):
										?>
										<?php else: ?>
											<?php
												$i = 0;
												$vars = array();
												foreach ($this->QModel->g($query, TRUE) as $g):
													$var = array('calendar_id','calendar_title','venue', 'date_start', 'date_end', 'time_start', 'time_end', 'calendar_description','date_created');
													foreach ($var as $a) {
														$vars[$a] = $g[$a];
													}

													extract($vars);

											?>
											<tr>
												<td style="overflow: hidden;text-overflow: ellipsis;display: block;white-space: nowrap;"><?php echo $calendar_title; ?></td>
												<td><?php echo $venue; ?></td>
												<td><?php echo date('M d, Y',strtotime($date_start)); ?></td>
												<td><?php echo date('M d, Y',strtotime($date_end)); ?></td>
												<td><?php echo date('h:i A',strtotime($time_start)); ?></td>
												<td><?php echo date('h:i A',strtotime($time_end)); ?></td>
												<td><?php echo date('M d, Y',strtotime($date_created)); ?></td>
												<td>
													<a href="<?php echo base_url('admin/calendar?c=edit&param='.$calendar_id); ?>" ><i class="fas fa-edit fa-lg"></i></a>
													<a href="<?php echo base_url('admin/calendar?c=delete&param='.$calendar_id); ?>" ><i class="fas fa-trash fa-lg"></i></a>
												</td>
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
<?php get_footer($folder."footer",array($folder.'/jquery.dataTables.min',$folder.'/dataTables.bootstrap')); ?>
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