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
								<h3 class="box-title">Business Profiles</h3>
								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
								</div>
							</div>	
							<div class="box-body">
								<table id="rgtable" class="table table-bordered">
									<thead>
										<tr>
											<th>Business Name</th>
											<th>Category</th>
											<th>Contact Number</th>
											<th>Website</th>
											<th>Date Created</th>
										</tr>
									</thead>
									<tbody>
										<?php 

											$query = $this->QModel->sf("business");
											$cquery = $this->QModel->c($query);

											if( ! $cquery):
										?>
										<?php else: ?>
											<?php
												$i = 0;
												$da = '';
												foreach ($this->QModel->g($query, TRUE) as $g):
													/*$var = array('category_id ','business_name ','contact_number ','website ','date_created');
													$vars = array();

													foreach ($var as $a) {
														$vars[$a.'s'] = $g[$a];
													}*/

													//extract($vars);

													$category_id = $g['category_id'];
													$business_name = $g['business_name'];
													$contact_number = $g['contact_number'];
													$website = $g['website'];
													$date_created = $g['date_created'];
													$business_id = $g['business_id'];

													$qc = $this->QModel->sfwa('category','category_id',$category_id);
													$cc = $this->QModel->c($qc);

													if ($cc) {
														$gc = $this->QModel->g($qc);
														$category = $gc['category_name'];
													} else {
														$category = 'Not available';
													}

											?>
											<tr>
												<td><?php echo $business_name; ?></td>
												<td><?php echo $category; ?></td>
												<td><?php echo $contact_number; ?></td>
												<td><?php echo $website; ?></td>
												
												<td><?php echo date('M d, Y',strtotime($date_created)); ?></td>
												<td>
													<a href="<?php echo base_url('admin/business?c=edit&param='.$business_id); ?>" class="btn-flat btn btn-primary">Edit</a>
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