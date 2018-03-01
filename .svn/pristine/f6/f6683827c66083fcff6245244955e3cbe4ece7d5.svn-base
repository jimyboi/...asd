<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("admin/header"); ?>
<div class="container">
	<!--div class="row"-->
		<div class="col-md-12">
			<div class="col-md-12" >
				<a href="<?php echo base_url('admin/contact?add=1'); ?>"><i class="fa fa-plus-square"></i> Add Contact Content</a>
				<span><?php echo $this->session->flashdata('success'); ?></span> 
				<div class="table-responsive">     
					<table class="table">
					    <thead>
					      <tr>
					        <th>#</th>
					        <th>Content</th>
					        <th ></th>
					      </tr>
					    </thead>
					    <tbody>
					   		<?php 
								$act_conquery =  $this->QModel->sf('contact');
								$act_concc = $this->QModel->c($act_conquery);
									
								if( ! $act_concc):
							?>
								<td colspan="7" style="text-align:center;">No Record Found</td>
								<?php 
								else:
								$i = 1;
								foreach ($this->QModel->g($act_conquery, TRUE) as $get) :
									$contact_description = $get['contact_description'];
									$contact_id = $get['contact_id'];
									
								
							 ?>
						    <tr>
						    	<td><?php echo $i++; ?></td>
						    	<td><?php echo $contact_description; ?></td>
							  	<td style="font-size:18px;">
									<a href="<?php echo base_url('admin/contact?edit='.$contact_id); ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square" ></i></a> 
									| 
									<a href="<?php echo base_url('admin/delete_contact/'.$contact_id); ?>" onclick="return  confirm('Delete Record?')"  data-toggle="tooltip" data-placement="top" title="Delete"> <i class="fa fa-eraser" ></i></a>
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