<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("header"); ?>

<div class="container">
	<div class="col-md-6">
			<span><?php echo $this->session->flashdata('success'); ?></span>
			<p><h4><b>Or send us a message</b></h4></p>
			<form method="POST">
				<div class="form-group <?php echo isset($fname_response) ? 'has-error' : ''; ?>">
			    	<label for="name">Name:</label>
			   		<input type="text" class="form-control" id="Name" name="fname" value="<?php echo isset($fname) ? $fname : ''; ?>">
			   		<span><?php echo isset($fname_response) ? $fname_response : ''; ?></span>
				</div>	
				<div class="form-group<?php echo isset($femail_response) ? 'has-error' : ''; ?>">
			    	<label for="email">Email:</label>
			    	<input type="email" name="email" class="form-control" id="email" value="<?php echo isset($femail) ? $email : ''; ?>">
			    	<span><?php echo isset($email_response) ? $email_response : ''; ?></span>
				</div>
			  	<div class="form-group<?php echo isset($fmessage_response) ? 'has-error' : ''; ?>">
			  		<textarea class="form-control" rows="5" cols="10" placeholder="Message" style="resize:none;" name="message"><?php echo isset($message) ? $message : ''; ?></textarea>
			  		<span><?php echo isset($message_response) ? $message_response : ''; ?></span>
				</div>
			
				<button type="submit" class="btn btn-selection hvr-fade" name="submit" value="submit">Submit</button>
				<div style="height: 20px;"></div>
	</div>

	<div class="col-md-6" align="right">
			<img class="one" src="<?php echo themes_url('images/contact.jpg'); ?>">
			<div style="height: 20px;"></div>

			<div style="padding-left:30px; text-align: left;">
				<h4>For More Information, Contact Us:</h4>			
				<h5><b>Tel:</h5></b>
				<a href="tel:888.257.8200" style="text-decoration: none;"> <p>888-257-8200</p></a>
				<h5><b>Email</b>:</h5>
				<a href="mailto:cphelps@searchlightinsurance.com" style="text-decoration: none;"> <p>cphelps@searchlightinsurance.com</p></a>
				<h5><b>Meeting Venue:</b></h5>
				<p>Woodland Hills Country Club<br>
				21150 Dumetz Rd, Woodland Hills, CA 91364<br> 
				Tel: 818-347-1511<br> 
				<a style="color:#848484; text-decoration: underline;" href="#">www.woodlandshillscc.org</a><br>
				<a style="color:#848484" target="_blank" href="https://www.google.com.ph/maps">Google Map</a>
				<div style="height: 20px;"></div>
			</div>
	</div>
</div>
<?php get_footer("footer"); ?>
