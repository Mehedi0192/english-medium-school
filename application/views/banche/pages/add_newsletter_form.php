<div class="box-content">
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Newsletter Form</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div><br>
						
						<?php echo form_open_multipart('newsletter/save_newsletter_info', 'class=form-horizontal'); ?>
						  <fieldset>

						  	<div class="control-group">
								 <label class="control-label" for="fileInput">newsletter Title</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="newsletter_title" type="text">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput"> newsletter Pdf</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="newsletter_pdf" type="file">
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