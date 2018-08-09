<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All vacancies</h2>
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
								  <th>vacancies title</th>
								  <th>vacancies experiance </th>
								  <th>vacancies Salary </th>
								  <th>Last Date </th>
								  <th>Actions</th>
							  </tr>
						  </thead> 

						  <tbody>
						  	<?php foreach($all_vacancies as $vacancies) {?>
						<tr>
							   <td><?php echo $vacancies->vacancies_id?></td>
							   <td class="center"><?php echo $vacancies->vacancies_title?></td>
							   <td><?php echo $vacancies->vacancies_experiance?></td>
							    <td><?php echo $vacancies->vacancies_salary?></td>
							     <td><?php echo $vacancies->vacancies_date?></td>
								<td class="center">
									<a class="btn btn-danger" href="<?php echo base_url("delete-vacancies/$vacancies->vacancies_id")?>" title="delete">
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