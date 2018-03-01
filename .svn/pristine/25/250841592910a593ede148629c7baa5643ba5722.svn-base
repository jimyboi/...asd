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
								<h3 class="box-title">Comments</h3>
								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
								</div>
							</div>	
							<form method="POST">
								<div class="box-body">
									<table id="rgtable" class="table table-bordered">
										<div class="col-md-12">
												<div class="col-md-6">
													<label><input type="checkbox" id="checkAll"> Check All</label>
													<span><?php echo isset($errors) ? $errors : ''; ?></span>
													<span><?php echo $this->session->userdata('success'); ?></span>
												</div>
												<div class="col-md-6" style="margin-bottom:1em;">
													<div class="text-right" >
														
														<button type="submit" name="active" value="active" class="btn btn-success" style="">Active</button>
														<button type="submit" name="inactive" value="active" class="btn btn-warning" style="">InActive</button>
														<button type="submit" name="delete" value="delete" class="btn btn-danger" style="" onclick="return confirm('Are you sure do you want to delete ?');">Delete</button>
													</div>
												</div>
											</div>
										<thead>
											<tr>
												<th></th>
												<th>Blog Title</th>
												<th>Name</th>
												<th>Email Address</th>
												<th>Comment</th>
												<th>Status</th>
												<th>Date Created</th>
												<?php /*<th>Action</th>*/ ?>
											</tr>
										</thead>
										<tbody>
											<?php 

												$query = $this->QModel->sf("comments",'date_created DESC');
												$cquery = $this->QModel->c($query);

												if( ! $cquery):
											?>
											<?php else: ?>
												<?php
													$i = 0;
													$vars = array();
													foreach ($this->QModel->g($query, TRUE) as $g):
														$arr =  array('blog_id','email_address','comment','yname','date_created','status','comments_id');
														foreach ($arr as $a) {
															$vars[$a] = $g[$a];
														}
														extract($vars);
														$q = $this->QModel->sfwa('blogs','blog_id',$blog_id);
														if ($this->QModel->c($q)) {
															$get = $this->QModel->g($q);
															$titles = $get['blog_title'];
														} else {
															$titles = 'Not found';
														}
												?>
												<tr>
													<td><input type="checkbox" name="comments_ids[]" value="<?php echo $comments_id; ?>" <?php if(isset($comments_ids)) {foreach($comments_ids as $aa) { if($aa == $comments_id) { echo "checked"; break; } } } ?>></td>
													<td><a href="<?php echo base_url(''); ?>"><?php echo $titles; ?></a></td>
													<td><a href="<?php echo base_url(''); ?>"><?php echo $yname; ?></a></td>
													<td><a href="<?php echo base_url(''); ?>"><?php echo $email_address; ?></a></td>
													<td><a href="<?php echo base_url(''); ?>"><?php echo $comment; ?></a></td>
													<td class="<?php echo (isset($status) ? $status == 'active' : '') ? 'bg-green-active color-palette' : 'bg-red-active color-palette'; ?>"><?php echo $status; ?></td>
													<td><a href="<?php echo base_url(''); ?>"><?php echo date('M d, Y',strtotime($date_created)); ?></a></td>
													<?php /*<?php if($action == NULL): ?>
														<?php echo $action; ?>
														<td>
															<a href="javascript:void(0);" class="btn btn-info hvr-fade">Hire</a> <br /><br />
															<a href="javascript:void(0);" class="btn btn-danger hvr-fade">Not Hire</a>
														</td>
													<?php else: ?>	
														<td>
															<p ></p>
														</td>
													<?php endif ?>*/ ?>
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