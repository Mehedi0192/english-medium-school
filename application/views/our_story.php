

<section class="about-top">
    <h2>About Us</h2>
</section>

<section class="about-nav">
	<div class="container">
        <div class="row">
             <?php echo $left_about;?>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <section class="glance-area">
                    <h1>The Story</h1>
                   <?php $history_info=$this->admin_model->history_info();?>
                    <p><?php echo $history_info->history_desc;?></p>
                </section>
            </div>
        </div>
    </div>
</section>