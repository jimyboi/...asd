<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("admin/header"); ?>
<div class="container">
	<!--div class="row"-->
		<div class="col-md-12">
			<div class="col-md-12" >
				<a href="<?php echo base_url('admin/activities?add=1'); ?>"><i class="fa fa-plus-square"></i> Add Activities</a>
				<span><?php echo $this->session->flashdata('success'); ?></span> 
				<div class="table-responsive">     
					<table class="table">
					    <thead>
					      <tr>
					        <th>#</th>
					        <th style="width: 25%;">Image</th>
					        <th style="width: 45%;">Test</th>
					        <th style="width: 15%;">Type</th>
					        <th ></th>
					        <th></th>
					      </tr>
					    </thead>
					    <tbody>
					   		<?php 
								$act_conquery =  $this->QModel->sf('activities');
								$act_concc = $this->QModel->c($act_conquery);
									
								if( ! $act_concc):
							?>
								<td colspan="7" style="text-align:center;">No Record Found</td>
								<?php 
								else:
								$i = 1;
								foreach ($this->QModel->g($act_conquery, TRUE) as $get) :
									$act_title = $get['act_title'];
									$act_images = $get['act_images'];
									$act_description = $get['act_description'];
									$act_type = $get['act_type'];
									$activities_id = $get['activities_id'];
								
							 ?>
						    <tr>
						    	<td><?php echo $i++; ?></td>
						    	<td><img class="img-responsive" src="<?php echo themes_url('images/activities/thumb/'.$act_images); ?>" style="width:150px; height:150px;" ></td>
							    <td><?php echo $act_title; ?></td>
							    <td><?php echo $act_type; ?></td>
							  	<td style="font-size:18px;">
									<a href="<?php echo base_url('admin/activities?edit='.$activities_id); ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square" ></i></a> 
									| 
									<a href="<?php echo base_url('admin/delete_act/'.$activities_id); ?>" onclick="return  confirm('Delete Record?')"  data-toggle="tooltip" data-placement="top" title="Delete"> <i class="fa fa-eraser" ></i></a>
								</td>
							  	<?php 
							  	endforeach; 
							  	?>
						    </tr>
							<?php endif; ?>
					    </tbody>
				  	</table>
				</div>
			</div>	
		</div>
	</div>
</div>	
<?php get_footer("admin/footer"); ?>
<script type="text/javascript">

	$(":file").filestyle({buttonName: "btn-primary"});
</script>