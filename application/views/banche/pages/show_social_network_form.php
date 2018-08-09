
<div class="box-content">
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Social Network</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
						
						<?php echo form_open_multipart('contact/save_social_network', 'class="form-horizontal" name="edit_curriculam" '); ?>
						  <fieldset>&nbsp

							<div class="control-group hidden-phone">
							  <label class="control-label">Facebook</label>
							  <div class="controls">
							  	<input type="text" name="fb_page" value="<?php echo $social_network_info->fb_page ?>">
							  </div>
							</div>
							<div class="control-group hidden-phone">
							  <label class="control-label">Wikipedia</label>
							  <div class="controls">
							  	<input type="text" name="wiki_page" value="<?php echo $social_network_info->wiki_page ?>">
							  </div>
							</div>
							<div class="control-group hidden-phone">
							  <label class="control-label">Twitter</label>
							  <div class="controls">
							  	<input type="text" name="twitter_page" value="<?php echo $social_network_info->twitter_page ?>">
							  </div>
							</div>
							<div class="control-group hidden-phone">
							  <label class="control-label">Instagram</label>
							  <div class="controls">
							  	<input type="text" name="insta_page" value="<?php echo $social_network_info->insta_page ?>">
							  </div>
							</div>
							<div class="control-group hidden-phone">
							  <label class="control-label">Youtube</label>
							  <div class="controls">
							  	<input type="text" name="utube_page" value="<?php echo $social_network_info->utube_page ?>">
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Social Network</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
					   <?php echo form_close()?> 

					</div>
				</div>
			</div>
