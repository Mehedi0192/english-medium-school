

<section class="career-top">
    <h2>Career</h2>
</section>

<section class="career-nav">
	<div class="container">
        <div class="row">
            <?php echo $left_carrer;?>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <section class="glance-area">
                    <h1>How to Apply?</h1>
                    <?php $apply=$this->career_model->select_all_apply();?>
                    <p>
                <?php echo $apply->apply_desc?>
                    </p>
                    <a class="btn btn-process" download="" href="<?php echo base_url().$apply->apply_pdf?>">Download Admission Form</a>
                </section>
            </div>
        </div>
    </div>
</section>
