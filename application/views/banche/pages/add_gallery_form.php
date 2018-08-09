<div class="box-content">
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Logo Form</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div> 
					</div><br>
						
						<?php echo form_open_multipart('gallery/save_gallery', 'class=form-horizontal'); ?>
						  <fieldset>
						  	<div class="control-group">
								 <label class="control-label" for="fileInput">Gallery Title</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="userfile" name="gallery_title" type="text">
							  </div>
							</div>

								<div class="control-group">
								 <label class="control-label" for="fileInput">Gallery Details</label>
							  <div class="controls">
								<textarea name="gallery_desc" rows="4" class="cleditor"></textarea>
							  </div>
							</div>

							<div class="control-group">
								 <label class="control-label" for="fileInput">ALL Images</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="userfile" name="userfile[]" type="file" multiple="">
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" onclick="myfunction()">Save Gallery</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
					   <?php echo form_close()?> 

					</div>
				</div>
			</div>
			<script>
				function myfunction()
				{
					alert('Gallery Images Saved Successfully');
				}
			</script>