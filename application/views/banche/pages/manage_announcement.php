<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All announcement Image</h2>
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
								  <th>Details</th>
								  <th>Actions</th>
							  </tr>
							
						  </thead>   
						  <tbody>
                            <?php foreach($announcement_info as $announcement) { ?>
							<tr>
								<td><?php echo $announcement->announcement_title?></td>
								<td><?php echo $announcement->announcement_short_desc?></td>
								<td><img src="<?php echo base_url().$announcement->announcement_image?>" width="100px" height="100px"></td>
								<td>
								<a class="btn btn-danger" title="Delete" href="<?php echo base_url("delete-announcement/$announcement->announcement_id")?>">
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