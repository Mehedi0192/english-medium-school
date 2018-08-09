
<div class="box-content">
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add at a faculty</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
						
						<?php echo form_open_multipart('academics/save_faculty', 'class="form-horizontal" name="edit_faculty" '); ?>
						  <fieldset>&nbsp

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">faculty Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="faculty_desc" id="textarea2" rows="3"><?php echo $faculty_info->faculty_desc ?></textarea>
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add faculty</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
					   <?php echo form_close()?> 

					</div>
				</div>
			</div>
