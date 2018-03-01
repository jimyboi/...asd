<?php if (!defined('BASEPATH')) exit('No calect script access allowed'); ?>
<?php get_header("admin/header"); ?>
<div class="container">
	<div class="  col-md-12 ">
	<span><?php echo $this->session->flashdata('success'); ?></span>
		<div class="col-md-12" >
		  	<div class="table-responsive">   
		  		<a href="<?php echo base_url('admin/calendar?add=1'); ?>"><i class="fa fa-plus-square"></i> Add Schedule</a>       
			  	<table class="table">
				    <thead>    
				      	<tr> 
					        <th>#</th>
					        <th>Title</th>	        
					        <th>Venue</th>
					        <th>Date Start</th>
					        <th>Date End</th>
					        <th>Time Start</th>
					        <th>Time End</th>
					        <th></th>
					        <th></th>
				     	</tr>
				    </thead>
				    <tbody>
				    	<?php 
							
							/*$cal_conquery =  QModel::sf('calendar'); */
							$cal_conquery = $this->QModel->sf('calendar');

							$cal_concc = $this->QModel->c($cal_conquery);
								
							if( ! $cal_concc):
						?>
							<td colspan="7" style="text-align:center;">No Record Found</td>
							<?php 
							else:
							$i = 1;
							foreach ($this->QModel->g($cal_conquery, TRUE) as $get) :
								$c_title = $get['c_title'];
								$c_venue = $get['c_venue'];
								$c_dstart = $get['c_dstart'];
								$c_dend = $get['c_dend'];
								$c_tstart = $get['c_tstart'];
								$c_tend = $get['c_tend'];
								$calendar_id = $get['calendar_id'];
						?>
				      	<tr>
					        <td><?php echo $i++; ?></td>
					        <td><?php echo $c_title; ?></td>
					        <td><?php echo $c_venue; ?></td>
					       	<td><?php echo $c_dstart; ?></td>
					       	<td><?php echo $c_dend; ?></td>
					       	<td><?php echo $c_tstart; ?></td>
					       	<td><?php echo $c_tend; ?></td>
					       	<td></td>
					       	<td style="font-size:18px;">
									<a href="<?php echo base_url('admin/calendar?edit='.$calendar_id); ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square" ></i></a> 
									| 
									<a href="<?php echo base_url('admin/del_calendar/'.$calendar_id); ?>" onclick="return  confirm('Delete Record?')"  data-toggle="tooltip" data-placement="top" title="Delete"> <i class="fa fa-eraser" ></i></a>
								</td>
				      	</tr>
				      	<?php 
							endforeach; 
							endif;
						?>
				    </tbody>
			  	</table>
		 	</div>
		</div>
	</div>
</div>
<?php get_footer("admin/footer",array('moment','bootstrap-datetimepicker.min')); ?>

		