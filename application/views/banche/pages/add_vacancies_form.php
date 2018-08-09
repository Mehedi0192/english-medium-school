<div class="box-content">
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add vacancies Form</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div><br>
						
						<?php echo form_open_multipart('career/save_vacancies_info', 'class=form-horizontal'); ?>
						  <fieldset>
							<div class="control-group">
								 <label class="control-label" for="fileInput">Job title</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="vacancies_title" type="text">
							  </div>
							</div>

								<div class="control-group">
								 <label class="control-label" for="fileInput">Experiance</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="vacancies_experiance" type="text">
							  </div>
							</div>

								<div class="control-group">
								 <label class="control-label" for="fileInput">Salary Range</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="vacancies_salary" type="text">
							  </div>
							</div>

								<div class="control-group">
								 <label class="control-label" for="fileInput">Last Date</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="vacancies_date" type="date">
							  </div>
							</div>
							



							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" onclick="myfunction()">Save Vacancies</button>
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
					alert('Vacancies Saved Successfully');
				}
			</script>