<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Gallery </h2>
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
								  <th>Id</th>
								  <th>gallery name</th>
								  <th>gallery Image</th>
								  <th></th>
							  </tr>
							
						  </thead>   
						  <tbody>
                            <?php foreach($all_gallery as $gallery) { ?>
							<tr>

								<td><?php echo $gallery->id?></td>
								<td><?php echo $gallery->gallery_title?></td>
								
								<?php $images=explode(',', $gallery->gallery_image);
								foreach($images as $image) { ?>
								<td><img src="<?php echo base_url().'/uploads/'.$image;?>" width="100px" height="100px"></td>
								<td>
							<?php } ?>
							<a class="btn btn-danger" title="Delete" href="<?php echo base_url("delete-gallery/$gallery->id")?>">
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