
<section class="addmission-top">
    <h2>Admission</h2>
</section>

<section class="addmission-nav">
	<div class="container">
        <div class="row">
            <?php echo $left_admission;?>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <section class="admit-area">
                    <h1>Admission Process</h1>
            <?php $admission_process=$this->admission_model->select_all_admission_process();?>
                    <p>
                        <?php echo $admission_process->admission_process_desc ?>
                    </p>
                    <a class="btn btn-process" target="_blank" download="" href="<?php echo base_url().$admission_process->admission_process_pdf?>">Download Admission Form</a>
                </section>
            </div>
        </div>
    </div>
</section>
