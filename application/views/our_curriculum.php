<section class="about-top academics">
    <h2>Academics</h2>
</section>

<section class="academics-nav">
	<div class="container">
        <div class="row">
            <?php echo $left_academics;?>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <section class="admit-area">
                    <?php $curriculum_info=$this->academics_model->curriculam_info();?>
                    <h1>Our Curriculum</h1>
                    <p><?php echo $curriculum_info->curriculam_desc?></p>
                </section>
            </div>
        </div>
    </div>
</section>