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
						
						<?php echo form_open_multipart('admin/save_logo', 'class=form-horizontal'); ?>
						  <fieldset>
							<div class="control-group">
								 <label class="control-label" for="fileInput">Main logo</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="main_logo" type="file">
								<P style="color:red;"> image size 215*50 px</P>
							  </div>

							  <label class="control-label" for="fileInput">side logo</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="side_logo" type="file">
								<P style="color:red;"> image size 160*50 px</P>
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" onclick="myfunction()">Save Image</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
					   <?php echo form_close()?> 

					</div>
				</div>
			</div>
			<<script>
				function myfunction()
				{
					alert('Image Saved Successfully');
				}
			</script>