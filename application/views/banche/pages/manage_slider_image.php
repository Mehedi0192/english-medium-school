<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Slider Image</h2>
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
                            <?php foreach($slider_info as $slider) { ?>
							<tr>
								<td><?php echo $slider->slider_title?></td>
								<td><?php echo $slider->slider_short_desc?></td>
								<td><img src="<?php echo base_url().$slider->slider_image?>" width="100px" height="100px"></td>
								<td>
								<a class="btn btn-danger" title="Delete" href="<?php echo base_url("delete-slider-image/$slider->slider_id")?>">
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