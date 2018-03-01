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
								<h3 class="box-title">Coupons</h3>
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
										<a href="<?php echo base_url('admin/coupons?c=add-coupon'); ?>" class="btn btn-success btn-flat">Add Coupons</a> 
									</div>
								</div>
								<table id="rgtable" class="table table-bordered">
									<thead>
										<tr>
											<th>Coupon name</th>
											<th>Coupon code</th>
											<th>Start</th>
											<th>End</th>
											<th>Business</th>
											<th>Status</th>
											<th>Date Created</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php 

											$query = $this->QModel->sf("coupons");
											$cquery = $this->QModel->c($query);

											if( ! $cquery):
										?>
										<?php else: ?>
											<?php
												$i = 0;
												$da = '';
												foreach ($this->QModel->g($query, TRUE) as $g):
													$var = array('business_id','coupon_name','coupon_code','start','end','status','coupon_id','date_created');
													$vars = array();

													foreach ($var as $a) {
														$vars[$a.'s'] = $g[$a];
													}

													extract($vars);

													$bq = $this->QModel->sfwa('business','business_id',$business_ids);
													$bc = $this->QModel->c($bq);

													if ($bc) {
														$bg = $this->QModel->g($bq);
														$business = $bg['business_name'];
													} else {
														$business = 'Not found';
													}
											?>
											<tr>
												<td><?php echo $coupon_names; ?></td>
												<td><?php echo $coupon_codes; ?></td>
												<td><?php echo date('M d, Y',strtotime($starts)); ?></td>
												<td><?php echo date('M d, Y',strtotime($ends)); ?></td>
												<td><?php echo $business; ?></td>

												<?php if ($statuss == 0): ?>
													<td><span class="label label-danger">InActive</span></td>
												<?php else: ?>
													<td><span class="label label-primary">Active</span></td>
												<?php endif ?>
												<td><?php echo date('M d, Y',strtotime($date_createds)); ?></td>
												<td>
													<a href="<?php echo base_url('admin/coupons?c=edit&param='.$coupon_ids); ?>" class="btn-flat btn btn-primary">Edit</a>
													<a href="<?php echo base_url('admin/coupons?c=delete&param='.$coupon_ids); ?>" class="btn-flat  hvr-fade btn btn-danger" onclick="return confirm('Are you sure do you want to delete ?');">Delete</a>
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