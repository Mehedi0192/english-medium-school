<div class="box-content">
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Asmission Process form</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div><br>
						
						<?php echo form_open_multipart('admission/save_admission_process_info', 'class=form-horizontal'); ?>
						  <fieldset>
							<div class="control-group">
								 <label class="control-label" for="fileInput">Admission process Details</label>
							  <div class="controls">
								<textarea name="admission_process_desc" class="cleditor" id="textarea2" rows="4"></textarea>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput"> Admission process Pdf</label>
							  <div class="controls">
								<input class="input-file uniform_on"  id="fileInput" name="admission_process_pdf" type="file">
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" onclick="myfunction()">Save PDF</button>
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