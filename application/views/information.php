

<section class="addmission-top">
    <h2>Admission</h2>
</section>

<section class="addmission-nav">
	<div class="container">
        <div class="row">
            <?php echo $left_admission;?>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <section class="admit-area">
                    <h1>Admission Information</h1>
                <?php $admission_info=$this->admission_model->admission_information_info();?>
                    <p>
                    <img class="col-md-6" src="<?php echo base_url().$admission_info->admission_information_image?>"><?php echo $admission_info->admission_information_desc?></p>
                </section>
            </div>
        </div>
    </div>
</section>


