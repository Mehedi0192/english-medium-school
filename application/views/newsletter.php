

<section class="about-top">
    <h2>About Us</h2>
</section>

<section class="about-nav">
	<div class="container">
        <div class="row">
            <?php echo $left_about;?>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <section class="glance-area">
                    <h1>Newsletter</h1>
                     <?php $all_newsletter=$this->newsletter_model->select_all_newsletter();?>
                     <?php foreach($all_newsletter as $newsletter){?>
                    <div class="news-link">
                        <a class="home-menu" target="_blank" href="<?php echo base_url().$newsletter->newsletter_pdf?>">
                            <i class="fa fa-bullhorn" aria-hidden="true"></i><?php echo $newsletter->newsletter_title;?>
                        </a>
                    </div>
                <?php } ?>
                </section>
            </div>
        </div>
    </div>
</section>

