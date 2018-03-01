<?php if (!defined('BASEPATH')) exit('No calect script access allowed'); ?>
<?php get_header("admin/header"); ?>
<body>
<div class="container"> 
	<div class="row">
		<div class="col-md-12">
			<a href="<?php echo base_url('admin/charity?add=1'); ?>"><i class="fa fa-plus-square"></i> Add Charity</a>
				<span><?php echo $this->session->flashdata('success'); ?></span> 
				<div class="table-responsive">     
					<table class="table">
					    <thead>
						    <tr>
						    	<th>#</th>
						    	<th>Title</th>
						      	<th>Video/Image</th>
						      	<th>Type</th>
						      	<th></th>
						    </tr>
					    </thead>
					    <tbody>
					   		<?php 
								/*$char_conq =  QModel::sf('directory'); */
								$char_conq = $this->QModel->sf('charity_file');
								/*$char_concc = QModel::c($char_conq); */
								$char_concc = $this->QModel->c($char_conq);
									
								if( ! $char_concc):
							?>
								<td colspan="7" style="text-align:center;">No Record Found</td>
								<?php 
								else:
								$i = 1;
								/*foreach (QModel::g($char_conq, TRUE) as $get) :*/
									foreach ($this->QModel->g($char_conq, TRUE) as $get) :
									
									$charity_type = $get['charity_type'];
									$charity_title = $get['charity_title'];
									$charity_file = $get['charity_file'];
									$charity_id = $get['charity_id'];
							 ?>
					   		<tr>
					   			<td><?php echo $i++; ?></td>
							    <td><?php echo $charity_title; ?></td>
							    <?php if($charity_type == 'youtube'): ?>
							    	<td>
							    		<iframe width="320" height="240" src="http://www.youtube.com/embed/<?php echo $charity_file; ?>"></iframe>
							    	</td>
							    	<td><?php echo $charity_type; ?></td>
							    <?php elseif($charity_type == 'image'): ?>
							    	<td>
							    		<img src="<?php echo themes_url('images/charity/thumb/'.$charity_file); ?>" class="img-responsive">
							    	</td>
							    	<td><?php echo $charity_type; ?></td>
							    <?php elseif($charity_type == 'file'): ?>
							    	<td>
							    		<video width="320" height="240" controls>
										<source src="<?php echo themes_url('videos/'.$charity_file); ?>" type="video/mp4">
											Your browser does not support the video tag.
										</video>
									</td>
									<td><?php echo "Video"." ".$charity_type; ?></td>
							    <?php endif; ?>
							    <td style="font-size:18px;">
									<a href="<?php echo base_url('admin/charity?edit='.$charity_id); ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square" ></i></a> 
									| 
									<a href="<?php echo base_url('admin/del_charity/'.$charity_id); ?>" onclick="return  confirm('Delete Record?')"  data-toggle="tooltip" data-placement="top" title="Delete"> <i class="fa fa-eraser" ></i></a>
								</td>
					   		</tr>
					   	<?php endforeach; endif; ?>
					    </tbody>
				  	</table>
				</div> 
		</div>
	</div>
</div>
</body>

<?php get_footer("admin/footer"); ?>
