<div class="box-content">
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add apply Form</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div><br>
						
						<?php echo form_open_multipart('career/save_apply_info', 'class=form-horizontal'); ?>
						  <fieldset>
							
							<div class="control-group">
							<label class="control-label" for="fileInput"> Description</label>
							  <div class="controls">
							<textarea name="apply_desc" class="cleditor" id="textarea2" rows="3"></textarea>						
							  </div>
							</div>&nbsp

							<div class="control-group">
							  <label class="control-label" for="fileInput"> apply Pdf</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="apply_pdf" type="file">
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" onclick="myfunction()">Save Apply</button>
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
					alert('PDF Saved Successfully');
				}
			</script>