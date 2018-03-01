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
								<section class="col-lg-12">
									<div class="row">
										<?php echo $this->session->flashdata('success'); ?>
									</div>
								</section>
								<div class="col-md-12" style="margin-bottom:20px;">
									<div class="row">
										<a href="javascript:void(0);" class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal">Add Category</a> 
									</div>
								</div>
								<table id="rgtable" class="table table-bordered">
									<thead>
										<tr>
											<th>Category name</th>
											<th>Date created</th>
											<th style="width:30%;"></th>
										</tr>
									</thead>
									<tbody>
										<?php 

											$query = $this->QModel->sf("category");
											$cquery = $this->QModel->c($query);

											if( ! $cquery):
										?>
										<?php else: ?>
											<?php
												$i = 0;
												$da = '';
												foreach ($this->QModel->g($query, TRUE) as $g):
													$var = array('category_id','category_name','date_created','cat_status');
													$vars = array();

													foreach ($var as $a) {
														$vars[$a.'s'] = $g[$a];
													}

													extract($vars);
											?>
											<tr>
												<td><?php echo $category_names; ?></td>
												<td><?php echo date('M d, Y',strtotime($date_createds)); ?></td>
												<td>
													<a href="javascript:void(0);" onclick="modify('<?php echo $category_names; ?>','<?php echo $category_ids; ?>');" class="btn-flat hvr-fade btn btn-primary modifys">Edit</a>
													<a href="<?php echo base_url('admin/category?c=delete&param='.$category_ids); ?>" class="btn-flat  hvr-fade btn btn-danger" onclick="return confirm('Are you sure do you want to delete ?');">Delete</a>
													<?php if ($cat_statuss == 'active'): ?>
														<a href="<?php echo base_url('admin/category?c=inactive&param='.$category_ids); ?>"  class="btn-flat hvr-fade btn btn-warning modifys">Inactive</a>
													<?php else: ?>
														<a href="<?php echo base_url('admin/category?c=active&param='.$category_ids); ?>"  class="btn-flat hvr-fade btn btn-success modifys">Active</a>
													<?php endif ?>
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
		<div id="myModal" class="modal modal-success fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Add Category</h4>
					</div>
					<div class="modal-body">
						<form class="">
							<div class="form-group">
								<label class="control-label">Category Name</label>
								<input type="text" name="category_name" class="form-control">
								<span id="category_response"></span>
							</div>

						</form>
					</div>
					<div class="modal-footer">
						<input type="hidden" name="category_id" value="">
						<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
						<button type="submit" name="submit" class="btn btn-outline" value="submit">Save</button>
					</div>
				</div>
			</div>
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

    $(document).ready(function(){
    	$('button[type="submit"]').on('click',function(){
    		var category_name = $('input[name="category_name"]').val();
    		var category_id = $('input[name="category_id"]').val();
    		if( ! category_name){
    			$('#category_response').html('<div class="rg-error"><i class="fa fa-info-circle"></i> Please enter category name.</div>')

    		}
    		var postForm = {
    			'category_name' : category_name,
    			'category_id' : category_id
    		};

    		$.ajax({
    			type : 'POST',
				url : '<?php echo base_url('admin/category'); ?>',
				data : postForm,
				dataType : 'json',
				success : function(data){
					if( ! data.success) {
						if(data.errors) {
							$('#category_response').html(data.response);
						}
					}else {
						$('#category_response').html(data.response);
						var reload = 3;
						$('#reload').html(reload);
						setInterval(function(){
							reload--;
							if (reload == 0) {
								location.reload();
							}
						},1000);
					}
				}
    		})
    	});
    });
   $('#myModal').on('hidden.bs.modal', function () {
	    $(this).find('form').trigger('reset');
	    $('.modal-title').text('Add Category');
	})

    function modify(category_name,category_id) {
    	$('input[name="category_name"]').val(category_name);
    	$('input[name="category_id"]').val(category_id);
    	$('.modal-title').text('Edit Category');
    	$('#myModal').modal();
    }
</script>