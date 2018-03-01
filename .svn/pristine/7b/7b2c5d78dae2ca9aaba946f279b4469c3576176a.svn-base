<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("admin/header",array('summernote')); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-offset-2">
				<div class="col-md-12" >
					<span><?php echo $this->session->flashdata('success'); ?></span>
					<div class="col-md-10">
					<h4>Edit Contact Details</h4>
						<form role="form" method="POST" enctype="multipart/form-data" onsubmit="return sendingForm()">
		  					<div class="form-group <?php echo isset($content_response) ? 'has-error' : ''; ?>">
		  						<label class="control-label" for="description">Content :</label>
		  						<textarea class="form-control" rows="5" id="summernote" name="content"><?php echo isset($content) ? $content : ''; ?></textarea>		
		 						 <span><?php echo isset($content_response) ? $content_response : ''; ?></span>
		 					</div>
		 					<div class="text-center col-md-12">
		 						<button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>	
		 					</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<?php get_footer("admin/footer",array('summernote.min')); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$("form").keypress(function(e){ 
		    if(e.keyCode==13){
		        $('#submit').trigger('click');
		    }
		 }); 
	});
	$('#summernote').summernote({
		height: "300px",
		disableResizeEditor: true,
		toolbar: [
		    ['style', ['style']],
		    ['font', ['bold', 'italic', 'underline', 'clear']],
		    ['fontname', ['fontname']],
		    ['color', ['color']],
		    ['para', ['ul', 'ol', 'paragraph']],
		    ['height', ['height']],
		    ['table', ['table']],
		    
		    ['view', ['fullscreen']],
		    ['help', ['help']]
		  ],

	});

	function sendingForm()
	{
		document.getElementById('main-button').style.display = "none";
		document.getElementById('uploading-text').style.display = "inline";
		var content = $('textarea[name="content"]').html($('#summernote').code());
	}
</script>
