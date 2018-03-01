<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header($folder."header",array('admin/dataTables.bootstrap')); ?>
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
								<h3 class="box-title">Blogs</h3>
								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
								</div>
							</div>	
							<form method="POST">
								<div class="box-body">
									<table id="rgtable" class="table table-bordered">
										<div class="col-md-12">
												<span><?php echo $this->session->userdata('success'); ?></span>
												<div class="col-md-6">
													<label><input type="checkbox" id="checkAll"> Check All</label>
													<span><?php echo isset($errors) ? $errors : ''; ?></span>
												</div>
												<div class="col-md-6" style="margin-bottom:1em;">
													<div class="text-right" >
														
														<button type="submit" name="active" value="active" class="btn btn-success" style="">Active</button>
														<button type="submit" name="inactive" value="active" class="btn btn-warning" style="">InActive</button>
														<button type="submit" name="delete" value="delete" class="btn btn-danger" style="" onclick="return confirm('Are you sure do you want to delete ?');">Delete Job</button>
													</div>
												</div>
											</div>
										<thead>
											<tr>
												<th></th>
												<th>Title</th>
												<th>Author</th>
												<th>Date Posted</th>
												<th>Status</th>
												<th>Date Created</th>
												<th></th>
												<?php /*<th>Action</th>*/ ?>
											</tr>
										</thead>
										<tbody>
											<?php 

												$query = $this->QModel->sf("blogs");
												$cquery = $this->QModel->c($query);

												if( ! $cquery):
											?>
											<?php else: ?>
												<?php
													$i = 0;
													$vars = array();
													foreach ($this->QModel->g($query, TRUE) as $g):
														$arr = array('blog_title','blog_author','date_posted','blog_description','status','date_created','blog_id');
														foreach ($arr as $a) {
															$vars[$a] = $g[$a];
														}
														extract($vars);
												?>
												<tr>
													<td><input type="checkbox" name="blog_ids[]" value="<?php echo $blog_id; ?>" <?php if(isset($blog_ids)) {foreach($blog_ids as $aa) { if($aa == $blog_id) { echo "checked"; break; } } } ?>></td>
													<td><?php echo $blog_title; ?></td>
													<td><?php echo $blog_author; ?></td>
													<td><?php echo date('M d, Y',strtotime($date_posted)); ?></td>
													<td class="<?php echo (isset($status) ? $status == 'active' : '') ? 'bg-green-active color-palette' : 'bg-red-active color-palette'; ?>"><?php echo $status; ?></td>
													<td><?php echo date('M d, Y',strtotime($date_created)); ?></td>
													<td><a href="<?php echo base_url('admin/blog?a=modify&v='.$blog_id); ?>" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a></td>
												</tr>
											<?php $i++; endforeach; ?>
											<?php endif; ?>
										</tbody>
									</table>
								</div>
							</form>
						</div>
					</section>
				</div>
			</section>
				<!-- /.content -->
		</div>
<?php get_footer($folder."footer",array('admin/jquery.dataTables.min','admin/dataTables.bootstrap')); ?>
<script type="text/javascript">
	$('#rgtable').DataTable({
      "paging": true,
      /*"lengthChange": false,
      "searching": false,*/
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
    $('#checkAll').click(function(){
    	$('input[name="blog_ids[]"]').prop('checked',this.checked);
    });
</script>