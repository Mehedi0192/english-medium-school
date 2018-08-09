<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Result</h2>
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
							  	  <th>ID</th>
								  <th>Exam Name</th>
								  <th>Class</th>
								  <th>Pdf Result Sheet</th>
								  <th>Actions</th>
							  </tr>
						  </thead> 

						  <tbody>
						  	<?php foreach($all_result as $result) {?>
						<tr>
							   <td><?php echo $result->result_id?></td>
							   <td class="center"><?php echo $result->exam_name?></td>
							   <td><?php echo $result->class_name?></td>
							   <td><?php echo base_url().$result->result_pdf?></td>
								<td class="center">
									<a class="btn btn-danger" href="<?php echo base_url("delete-result/$result->result_id")?>" title="delete">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>

							</tr>
								<?php } ?>

						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			</div><!--/row-->