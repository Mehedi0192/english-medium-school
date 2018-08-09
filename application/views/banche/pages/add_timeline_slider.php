<div class="box-content">
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Timeline Slider Image</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div><br>
						
						<?php echo form_open_multipart('admin/add_timeline_slider', 'class=form-horizontal'); ?>
						  <fieldset>
							<div class="control-group">

								<label class="control-label" for="fileInput">Slider title</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="timeline_slider_title" type="text">
							  </div>&nbsp

							  <label class="control-label" for="fileInput">Short Description</label>
							  <div class="controls">
							<textarea name="timeline_slider_short_desc" class="cleditor" id="textarea2" rows="3"></textarea>						
							  </div>&nbsp

							  <label class="control-label" for="fileInput">Slider Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="timeline_slider_image" type="file">
									<P style="color:red;"> image size 1366*419 px</P>
							  </div>&nbsp

							   <label class="control-label" for="fileInput">Date</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="timeline_slider_date" type="date">
							  </div>&nbsp

							  <label class="control-label" for="fileInput">Time</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="" name="timeline_slider_time" type="time">
							  </div>
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
					alert('Image Saved Successfully');
				}
			</script>