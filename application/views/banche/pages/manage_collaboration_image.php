<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Collaboration Image</h2>
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
							  	  <th>Title</th>
								  <th>Image</th>
								  <th>Actions</th>
							  </tr>
							
						  </thead>   
						  <tbody>
                            <?php foreach($collaboration_info as $collaboration) { ?>
							<tr>
								<td><?php echo $collaboration->collaboration_id?></td>
								<td><?php echo $collaboration->collaboration_url?></td>
								<td><img src="<?php echo base_url().$collaboration->collaboration_image?>" width="100px" height="100px"></td>
								<td>
								<a class="btn btn-danger" title="Delete" href="<?php echo base_url("delete-collaboration-image/$collaboration->collaboration_id")?>">
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