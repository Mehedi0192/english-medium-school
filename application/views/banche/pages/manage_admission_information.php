<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All admission_information Image</h2>
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
								  <th>Image</th>
								  <th>Details</th>
								  <th>Actions</th>
							  </tr>
							
						  </thead>   
						  <tbody>
                         
							<tr>
								<td><img src="<?php echo base_url().$admission_information_info->admission_information_image?>" width="100px" height="100px"></td>

								<td><?php echo $admission_information_info->admission_information_desc?></td>
								
								<td>
								<a class="btn btn-danger" title="Delete" href="<?php echo base_url("delete-admission-information/$admission_information_info->admission_information_id")?>">
								<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
					

						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			</div><!--/row-->