

<section class="about-top academics">
    <h2>Academics</h2>
</section>

<section class="academics-nav">
	<div class="container">
        <div class="row">
            <?php echo $left_academics;?>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <section class="admit-area">
                    <h1>Our Facilities</h1>
                    <?php $facilities_info=$this->academics_model->facilities_info();?>
                    <p>
                        <?php echo $facilities_info->facilities_desc?>
                    </p>
                </section>
            </div>
        </div>
    </div>
</section>
