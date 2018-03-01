<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("header"); ?>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="border-top:1px solid #202f80;border-bottom:1px solid #202f80;padding-top:2em;padding-bottom:2em;">
				<h1 class="text-center"><b><?php echo isset($c_title) ? strtoupper($c_title) : ''; ?></b></h1>
				<div class="col-md-6">
					<h2 class="text-left"><b>When</b></h2> 
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-2">
								<h4 class="text-left text-capitalize"><b>From</b></h4>
							</div>
							<div class="col-md-1">
								<h4>:</h4>
							</div>
							<div class="col-md-8">
								<h4 class="text-left text-capitalize"><b><?php echo isset($c_dstart) ? date("M d Y ", strtotime($c_dstart)) : ''; ?></b></h4>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-2">
								<h4 class="text-left text-capitalize"><b>To</b></h4>
							</div>
							<div class="col-md-1">
								<h4>:</h4>
							</div>
							<div class="col-md-8">
								<h4 class="text-left text-capitalize"><b><?php echo isset($c_dend) ? date("M d Y", strtotime($c_dend)) : ''; ?></b></h4>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<h4 class="text-left text-capitalize">Time : <?php echo isset($c_tstart) ? date("h:i A.", strtotime($c_tstart)) : ''; ?> - <?php echo isset($c_tend) ? date("h:i A.", strtotime($c_tend)) : ''; ?></b></h4>
					</div>
				</div>
				<div class="col-md-6">
					<h2 class="text-left"><b>Where</b></h2> 
					<h4 class="text-capitalize"><b><?php echo isset($c_venue) ? $c_venue : ''; ?></b></b></h4>
				</div>
				<div class="col-md-12">
					<h2 class="text-left"><b><?php echo strtoupper('event details'); ?></b></h2>
					<h3 class="text-center text-uppercase"><b><?php #echo isset($c_title) ? $c_title : ''; ?></b></h3>
					<div class="col-md-12">
						<h4 class="text-justify"><?php echo isset($c_description) ? ucwords($c_description) : ''; ?></b></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php get_footer("footer"); ?>
