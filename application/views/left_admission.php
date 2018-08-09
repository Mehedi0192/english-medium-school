
<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12"><!--left-->
	<ul class="nav ad-nav nav-tabs tabs-left">
		<li style="background:#3D49A7;" >
			<a href="<?php echo base_url()?>pages/information">
                <h3>Admission Information</h3>
                <h4>Personalized to your needs</h4>
            </a>
		</li>
		<li  style="background:#3D49A7;" >
			<a href="<?php echo base_url()?>pages/process">
                <h3>Admission Process</h3>
                <h4>Admission Process System</h4>
            </a>
		</li>
		<li  style="background:#3D49A7;" >
			<a href="<?php echo base_url()?>pages/form">
                <h3>Admission Form</h3>
                <h4>Understanding visually</h4>
            </a>
		</li>
		<?php $school_brochure=$this->admission_model->select_all_school_brochure();?>
		<li style="background:#3D49A7;" >
			<a target="blank" href="<?php echo base_url().$school_brochure->school_brochure_pdf?>">
                <h3>School Brochure</h3>
                <h4>Download School Brochure</h4>
            </a>
		</li>
	</ul>
</div>