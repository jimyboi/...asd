<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("admin/header"); ?>

	
<div class="container-fluid">
	<!--div class="row"-->
		<div class="col-md-12">			
			<div class="col-md-12">
					<a href="<?php echo base_url('admin/directory?add=1'); ?>"><i class="fa fa-plus-square"></i> Add Directory</a>
					<span><?php echo $this->session->flashdata('success'); ?></span> 
				<div class="table-responsive text-center">     
					<table class="table">
					    <thead align="center">
					      <tr>
					     
					        <th>#</th>
					        <th style="width: 15%; text-align: center;" >Image</th>
					        <th></th>
					        <th style="width: 15%; text-align: center;">Full Name</th>
					        <th style="width: 15%; text-align: center;">Business Name</th>
					        <th style="width: 5%; text-align: center;">Business Category</th>
					        <th style="width: 5%; text-align: center;">Phone Number</th>
					        <th style="width: 15%; text-align: center;">Email Address</th>
					        <th style="width: 15%; text-align: center;">Website</th>
					    	<th></th>

					      </tr>
					    </thead>
					    <tbody>
					   		<?php 
								/*$dir_conquery =  QModel::sf('directory'); */
								$dir_conquery = $this->QModel->sf('directory');
								/*$dir_concc = QModel::c($dir_conquery); */
								$dir_concc = $this->QModel->c($dir_conquery);
									
								if( ! $dir_concc):
							?>
								<td colspan="7" style="text-align:center;">No Record Found</td>
								<?php 
								else:
								$i = 1;
								/*foreach (QModel::g($dir_conquery, TRUE) as $get) :*/
									foreach ($this->QModel->g($dir_conquery, TRUE) as $get) :
									$drc_fullname = $get['drc_fullname'];
									$drc_image = $get['drc_image'];
									$drc_busname = $get['drc_busname'];
									$drc_buscat = $get['drc_buscat'];
									$drc_phone = $get['drc_phone'];
									$drc_email = $get['drc_email'];
									$drc_web = $get['drc_web'];
									$drc_serviceoff = $get['drc_serviceoff'];
									$directory_id = $get['directory_id'];
								
							 ?>
						    <tr>
						    	<td><?php echo $i++; ?></td>
						    	<td><img class="img-responsive" src="<?php echo themes_url('images/directory/thumb/'.$drc_image); ?>" style="width:150px; height:150px;" ></td>
							   <td></td>
							    <td><?php echo $drc_fullname; ?></td>
							    <td><?php echo $drc_busname; ?></td>
							    <td><?php echo $drc_buscat; ?></td>
							    <td><?php echo $drc_phone; ?></td>
							  	<td><?php echo $drc_email; ?></td>
							  	<td><?php echo $drc_web; ?></td>
							  	<td style="font-size:18px;">
									<a href="<?php echo base_url('admin/directory?edit='.$directory_id); ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square" ></i></a> 
									| 
									<a href="<?php echo base_url('admin/delete_dir/'.$directory_id); ?>" onclick="return  confirm('Delete Record?')"  data-toggle="tooltip" data-placement="top" title="Delete"> <i class="fa fa-eraser" ></i></a>
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