<div class="box-content">
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add New Collaboration</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div><br>
						
						<?php echo form_open_multipart('admin/add_collaboration', 'class=form-horizontal'); ?>
						  <fieldset>
							<div class="control-group">

							  <label class="control-label" for="fileInput">Collaboration image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="collaboration_image" type="file">
								<P style="color:red;"> image size 221*57 px</P>
							  </div>
							</div>

								<label class="control-label" for="fileInput">URL</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="collaboration_url" type="text">
							  </div>&nbsp

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" onclick="myfunction()">Save Image</button>
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
					alert('Collaboration Saved Successfully');
				}
			</script>