<section class="gallery-top">
    <h2><?php echo $view_gallery->gallery_title?></h2>
</section>

<section class="gallery-area"><!--container-fluid-->
	<div class="container"><!--container-->
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 linkpage">
            <?php $all_gallery_image=explode(',',$view_gallery->gallery_image);
            foreach($all_gallery_image as $image){?>
            <div class="col-lg-3 col-sm-12 col-md-3 col-xs-12">
                <div class="blog-post">
                    <div class="ImageWrapper">
                        <img class="img-responsive" src="<?php echo base_url().'/uploads/'.$image;?>" alt="">
                        <div class="ImageOverlayH"></div>
                        <div class="Button StyleS" align="">
                            <span class="WhiteRounded" style="margin-left:-15px"><a class="fancybox" href="<?php echo base_url().'/uploads/'.$image;?>" title=""><i class="fa fa-search"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div style="height:40px;"></div>
            </div>
        <?php } ?>
		</div>
	</div>
</section> 