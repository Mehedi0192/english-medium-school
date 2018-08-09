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
							  	  <th>Date</th>
							  	  <th>Time</th>
							  	  <th>Title</th>
							  	  <th>Details</th>
								  <th>Image</th>
								  <th>Actions</th>
							  </tr>
							
						  </thead>   
						  <tbody>
                            <?php foreach($timeline_slider_info as $slider) { ?>
							<tr>
								<td><?php echo $slider->timeline_slider_date?></td>
								<td><?php echo $slider->timeline_slider_time?></td>
								<td><?php echo $slider->timeline_slider_title?></td>
								<td><textarea name="" cols="4" rows="6"><?php echo $slider->timeline_slider_short_desc?></textarea></td>
							<td><img src="<?php echo base_url().$slider->timeline_slider_image?>" width="100px" height="100px"></td>
								<td>
								<a class="btn btn-danger" title="Delete" href="<?php echo base_url("delete-timeline-slider-image/$slider->timeline_slider_id")?>">
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