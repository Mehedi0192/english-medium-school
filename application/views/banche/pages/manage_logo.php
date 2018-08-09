<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Logo </h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
						  	
							  <tr>
								  <th>main logo</th>
								  <th>side logo</th>
								  <th>Actions</th>
							  </tr>
							
						  </thead>   
						  <tbody>
							<tr>
								<td><img src="<?php echo base_url().$manage_logo->main_logo?>" width="100px" height="100px"></td>
								<td><img src="<?php echo base_url().$manage_logo->side_logo?>" width="100px" height="100px"></td>
								<td>
								<a class="btn btn-danger" title="Delete" href="<?php echo base_url("delete-logo/$manage_logo->logo_id")?>">
								<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>

						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			</div><!--/row-->