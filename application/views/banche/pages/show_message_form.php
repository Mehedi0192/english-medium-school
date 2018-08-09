
<div class="box-content">
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Principal's message</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
						
						<?php echo form_open_multipart('admin/save_message', 'class="form-horizontal" name="edit_message" '); ?>
						  <fieldset>&nbsp

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Principal's message</label>
							  <div class="controls">
								<textarea class="cleditor" name="message_desc" id="textarea2" rows="3"><?php echo $message_info->message_desc ?></textarea>
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add message</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
					   <?php echo form_close()?> 

					</div>
				</div>
			</div>
