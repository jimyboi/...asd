<?php if (!defined('BASEPATH')) exit('No calect script access allowed'); ?>
<?php get_header("admin/header"); ?>
<body>
<div class="container"> 
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-3">
			<form role="form" method="POST" enctype="multipart/form-data">
				<div>
					<label>Select video type:</label>
				</div>
				<div class="radio text-center" style="border-style: solid; border-width: 1px; border-radius: 5px; border-color: #dfdfdf;padding:20px;">
					<label class="radio-inline"><input type="radio" name="operands" onclick="ShowHideDiv()" value="youtube" id="youtube" <?php  if (isset($operands) && $operands=="youtube") echo "checked";?>>Youtube URL</label>
					<label class="radio-inline"><input type="radio" name="operands" onclick="ShowHideDiv()" value="file"  id="vimeo"  <?php if (isset($operands) && $operands=="file") echo "checked";?>>File Upload</label>	
					<label class="radio-inline"><input type="radio" name="operands" onclick="ShowHideDiv()" value="images"  id="images"  <?php if (isset($operands) && $operands=="images") echo "checked";?>>Image Upload</label>					
				</div>	
			</div>
			
			<div class="col-md-7">
					<div id="uniquename1" style="display:none;" >
							<div class="form-group <?php echo isset($v_youtubeID_response) ? 'has-error' : ''; ?>">
								<label class="control-label">Youtube Video : </label>
								<input name="v_youtubeID" class="form-control" id="youtube" id="inputdefault" type="text" placeholder="Enter youtube video id here">
								<span id="error1" style="color:#a94442;"><?php echo isset($v_youtubeID_response) ? $v_youtubeID_response : ""; ?></span>	 		
							</div>
							<div class="form-group <?php echo isset($v_ytitle_response) ? 'has-error' : ''; ?>">
								<label class="control-label" for="pwd">Video Title :</label>
								<input name="v_ytitle" class="form-control" id="file" id="inputdefault" type="text" placeholder="Video Title" value="<?php echo isset($v_ytitle) ? $v_ytitle : ''; ?>">
								<span id="error2" style="color:#a94442;"><?php echo isset($v_ytitle_response) ? $v_ytitle_response : ""; ?></span>	 		
							</div>
							<div class="form-group <?php echo isset($v_ydescription_response) ? 'has-error' : ''; ?>">
								<label class="control-label" for="pwd">Description :</label>
								<textarea placeholder = "Description" maxlength="350" class="form-control" name="v_ydescription" value="<?php echo isset($v_ydescription) ? $v_ydescription : ''; ?>" rows="10" id="describe" name="describe"  value ="<?php echo isset($commentarea)? $commentarea:"";?>"></textarea>
								<span id="error4" style="color:#a94442;"><?php echo isset($v_ydescription_response) ? $v_ydescription_response : ""; ?></span>
							</div>
							<button style="float: right;" type="submit" class="btn btn-success" name="submit" value="submit"> Upload Video </button>
					</div>
					<div id="uniquename2" style="display:none;" >
							<div class="form-group <?php echo isset($fu_video_response) ? 'has-error' : ''; ?>">
								<label class="control-label" for="pic_dir">File Video :</label>
								<input type="file" class="btn btn-primary filestyle" data-buttonName="btn-primary" name="fu_video">
								<span><?php echo isset($fu_video_response) ? $fu_video_response : ''; ?></span>
							</div>
							<div class="form-group <?php echo isset($fu_title_response) ? 'has-error' : ''; ?>">
								<label class="control-label" for="pwd">Video Title :</label>
								<input name="fu_title" class="form-control" id="inputdefault" type="text" placeholder="Video Title" value="<?php echo isset($fu_title) ? $fu_title : ''; ?>">
								<span id="error2" style="color:#a94442;"><?php echo isset($fu_title_response) ? $fu_title_response : ""; ?></span>	 		
							</div>
							<div class="form-group <?php echo isset($fu_title_response) ? 'has-error' : ''; ?>">
								<label class="control-label" for="pwd">Description :</label>
								<textarea  placeholder = "Description" maxlength="350" style="height:180px;" class="form-control" name="fu_description" rows="10" id="describe"><?php echo isset($fu_description) ? $fu_description : ''; ?></textarea>
								<span id="error4" style="color:#a94442;"><?php echo isset($fu_description_response) ? $fu_description_response : ""; ?></span>
							</div>
							<button style="float: right;" type="submit" name="submit" value="submit" class="btn btn-success"> Upload Video  </button><br><br>
					</div>
					<div id="uniquename3" style="display:none">
						
						<div class="form-group <?php echo isset($img_file_response) ? 'has-error' : ''; ?>">
								<label class="control-label" for="pic_dir">Image File :</label>
								<input type="file" class="btn btn-primary filestyle" data-buttonName="btn-primary" name="img_file">
								<span><?php echo isset($img_file_response) ? $img_file_response : ''; ?></span>
							</div>
							<div class="form-group <?php echo isset($img_title_response) ? 'has-error' : ''; ?>">
								<label class="control-label" for="pwd">Image Title :</label>
								<input name="img_title" class="form-control" id="inputdefault" type="text" placeholder="Image Title" value="<?php echo isset($img_title) ? $img_title : ''; ?>">
								<span id="error2" style="color:#a94442;"><?php echo isset($img_title_response) ? $img_title_response : ""; ?></span>	 		
							</div>
							<div class="form-group <?php echo isset($img_description_response) ? 'has-error' : ''; ?>">
								<label class="control-label" for="pwd">Description :</label>
								<textarea  placeholder = "Description" maxlength="350" style="height:180px;" class="form-control" name="img_description" rows="10" id="describe"><?php echo isset($img_description) ? $img_description : ''; ?></textarea>
								<span id="error4" style="color:#a94442;"><?php echo isset($img_description_response) ? $img_description_response : ""; ?></span>
							</div>
							<button style="float: right;" type="submit" name="submit" value="submit" class="btn btn-success"> Upload Image  </button><br><br>
					</div>
			</div>
			</form>			
		</div>	
	</div>
</div>
</body>
<?php get_footer("admin/footer"); ?>
		
		<script type="text/javascript">
			$(":file").filestyle({buttonName: "btn-primary"});
		</script>

		<script type="text/javascript">
			ShowHideDiv();
			function ShowHideDiv() 
			
			{
				var youtube = document.getElementById("youtube");
				var uniquename1 = document.getElementById("uniquename1");
				uniquename1.style.display = youtube.checked ? "block" : "none";

				var vimeo = document.getElementById("vimeo");
				var uniquename2 = document.getElementById("uniquename2");
				uniquename2.style.display = vimeo.checked ? "block" : "none";

				var vimeo = document.getElementById("images");
				var uniquename3 = document.getElementById("uniquename3");
				uniquename3.style.display = images.checked ? "block" : "none";
			}

		</script>