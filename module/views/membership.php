<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("header"); ?>
<style type="text/css">
	.member_directory_text {
		color: #00334e;
		display: block;
	}
	.business_name_text {
		color: gray;
		
		display: block;
	}

	.member_directory_text:hover,.member_directory_text:focus,.member_directory_text:active{text-decoration: none;}

</style>
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h3 style="font-weight: bolder; letter-spacing: 15px; text-transform: uppercase;">Member Directory</b></h3>
			<p>Click on the member business below to see more information.</p>
		</div>
		<div class="col-md-12">
			<?php 
				$q = $this->QModel->sfwa('user',array('status','user_type'),array('active','2'));
				if( ! $this->QModel->c($q)):
			?>
				<div class="col-md-12">
					<h1 class="text-center">NO RECORDS FOUND</h1>
				</div>
			<?php else: ?>
				<?php 

					$counter = 0;
					foreach ($this->QModel->g($q, TRUE) as $g):
						$qi = $this->QModel->sfwa('information','user_id',$g['user_id']);
						#if ($this->QModel->c($qi)) {
							
						#}

						$gi = $this->QModel->g($qi);

						$business_name = $gi['business_name'];
						$member_category = $gi['member_category'];
						$contact_name = $gi['contact_name'];
						$information_id = $gi['information_id'];



				?>
			<?php if(($counter + 1) % 2 == 0 && ($counter + 1) % 3 == 0): ?>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3><a href="<?php echo base_url('membership?v='.$information_id); ?>" class="member_directory_text"><?php echo ucfirst($member_category); ?></a></h3>
							<p class="business_name_text"><?php echo ucfirst($business_name); ?> <br /> <?php echo ucfirst($contact_name); ?></p>
						</div>
					</div>
				</div>
				<div class="clearfix visible-md-block visible-lg-block"></div>
				<div class="clearfix visible-sm-block"></div>
			<?php elseif(($counter + 1) % 2 == 0): ?>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3><a href="<?php echo base_url('membership?v='.$information_id); ?>" class="member_directory_text"><?php echo ucfirst($member_category); ?></a></h3>
							<p class="business_name_text"><?php echo ucfirst($business_name); ?> <br /> <?php echo ucfirst($contact_name); ?></p>
						</div>
					</div>
				</div>
				<div class="clearfix visible-sm-block"></div>
			<?php elseif(($counter + 1) % 3 == 0): ?>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3><a href="<?php echo base_url('membership?v='.$information_id); ?>" class="member_directory_text"><?php echo ucfirst($member_category); ?></a></h3>
							<p class="business_name_text"><?php echo ucfirst($business_name); ?> <br /> <?php echo ucfirst($contact_name); ?></p>
						</div>
					</div>
				</div>
				<div class="clearfix visible-md-block visible-lg-block"></div>
			<?php else: ?>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3><a href="<?php echo base_url('membership?v='.$information_id); ?>" class="member_directory_text"><?php echo ucfirst($member_category); ?></a></h3>
							<p class="business_name_text"><?php echo ucfirst($business_name); ?> <br /> <?php echo ucfirst($contact_name); ?></p>
						</div>
					</div>
				</div>

			<?php endif; ?>
			<?php $counter++; ?>
			<?php endforeach;?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer("footer"); ?>