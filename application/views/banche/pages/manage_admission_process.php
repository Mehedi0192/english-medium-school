<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Manage Admission Process</h2>
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
								  <th>admission process Details</th>
								  <th>admission process Pdf </th>
								  <th>Actions</th>
							  </tr>
						  </thead> 

						  <tbody>
		
						<tr>
							     <td><?php echo $all_admission_process->admission_process_desc?></td>
							   <td><?php echo base_url().$all_admission_process->admission_process_pdf?></td>
								<td class="center">
									<a class="btn btn-danger" href="<?php echo base_url("delete-admission-process/$all_admission_process->admission_process_id")?>" title="delete">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>

							</tr>
						

						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			</div><!--/row-->