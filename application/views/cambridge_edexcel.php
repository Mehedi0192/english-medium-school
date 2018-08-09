<section class="about-top academics">
    <h2>Academics</h2>
</section>

<section class="academics-nav">
	<div class="container">
        <div class="row">
            <?php echo $left_academics;?>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <section class="admit-area">
                    <h1>Cambridge & Edexcel</h1>
                        <?php $cambridge_info=$this->academics_model->cambridge_info();?>
                    <p>
                    <?php echo $cambridge_info->cambridge_desc?>
                    </p>
                </section>
            </div>
        </div>
    </div>
</section>
